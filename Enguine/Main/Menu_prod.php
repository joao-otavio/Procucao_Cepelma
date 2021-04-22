<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Producao</title>
<link rel="stylesheet" type="text/css" href="../Style/StyleMenu.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="ChamaOperador_Cadastro.js"></script>


</head>
<body>

<!-- CSS do plugin -->
<link rel="stylesheet" href="reveal.css">
<!-- Biblioteca jQuery -->
<!-- JS do plugin -->
<script type="text/javascript" src="jquery.reveal.js"></script>


<script type="text/javascript" src="Return_Resume.js"></script>


<script type="text/javascript" src="table/jQuery-3.3.1/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="table/datatables.min.css"/>

<script type="text/javascript" src="table/datatables.min.js"></script>

<div id= "Title">
<h2>Menu Produção</h2>
<hr>
<div id="Mini_Config">
<a href="#" class="big-link" data-reveal-id="myModal" id="Link_Modal">CD. Operador.</a>
<a href="#" class="big-link" data-reveal-id="Cnf_Corte" id="Link_Modal">CNF. Corte Reb.</a>
<a href="#" class="big-link" data-reveal-id="Cnf_Papel" id="Link_Modal">TP. Papel.</a>
<a href="#" class="big-link" data-reveal-id="Cnf_medida_ctd" id="Link_Modal">CNF Corte Ctd.</a>
<a href="#" class="big-link" data-reveal-id="Cnf_Equipamentos" id="Link_Modal">Man. Equipamentos.</a>
</div>
</div>
<hr>
<div id="">
<button id="MP" class="Buts" onclick="SendMP();">MP</button>
<button class="Buts" onclick="SendRB();">Rebobinadeira</button>
<button class="Buts" onclick="SendCt();">Cortadeira</button> 
<button class="Buts" onclick=" SendConf_BL()">Balança</button>
<button class="Buts" onclick="ExportCsv();">Csv MP</button>
<button class="Buts" onclick="RelatorMP();">Rating MP</button>
 
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">SkyBry - Modal</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body" id="modal-body">   
    </div>
  </div>
  <div id="overlay"></div>
</div>
<div id="Conteudo">
<hr>
<span> <strong>Lançamentos MP</strong></span>
<hr>
<div id="Table">
<?php
print "<table id=\"example\" class=\"display\" style=\"width:100%\">";
print"<thead>";
print"<tr>";
// print"<th>Relatorio</th>";
print"<th>Jumbo</th>";
print"<th>Data</th>";
print"<th>T. Fabricação</th>";
print"<th>Gramatura</th>";
print"<th>Peso</th>";
print"<th>Q. Paradas</th>";
print"<th>Rebobinadeira</th>";
print"<th>Cortadeira</th>";
print"<th>Refugo</th>";

print"</tr>";
print "</thead>";
print "<tbody>";

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Jumb, Data, Temp_Fabr, Peso, Quant_Para, Gram_Str FROM producao_mp order by Jumb DESC;";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {

  while($row = mysqli_fetch_array($result)) {

    $Jumb = $row[0];
    $Data = $row[1];
    $Temp_Fabr = $row[2];
    $Peso = $row[3];
    $Quant_Para = $row[4];
    $Gram_Str = $row[5];
    
    if ($result->num_rows > 0) {
        // print "$Jumb - $Data - $Temp_Fabr - $Peso - $Quant_Para";
        // print "<br>";

        print "<tr>";
        // Print "<td><label><input type=\"Button\"></label></td>";
        print "<td><a href=\"#\" onclick=\"getDados('$Jumb')\">$Jumb</a></td> ";
        print "<td>$Data</td> ";
        print "<td>$Temp_Fabr</td> ";
        print "<td>$Gram_Str</td> ";
        print "<td>$Peso</td> ";
        print "<td>$Quant_Para</td> ";
        Print "<td><label><input type=\"Button\"></label></td>";
        Print "<td><label><input type=\"Button\"></label></td>";
        Print "<td><label><input type=\"Button\"></label></td>";
        print "</tr>";
        } 

   }
}
print "</tbody></table>"; 
?>
</div>
</div>

<div class="popup" onclick="myFunction()">
<span class="popuptext" id="myPopup"></span>
</div>

<div id="myModal" class="reveal-modal">
<?php include "Cadastra_op.php";?>
<a id="Oper_Close_Modal" class="close-reveal-modal">&#215;</a>
</div>

<div id="Cnf_Corte" class="reveal-modal">
<a class="close-reveal-modal">&#215;</a>
<?php include "Cadastra_PD_CORTE.php";?>
</div>

<div id="Cnf_Papel" class="reveal-modal">
<a class="close-reveal-modal">&#215;</a>
<?php include "Cadastro_papel.html";?>
</div>


<div id="Cnf_medida_ctd" class="reveal-modal">
<a class="close-reveal-modal">&#215;</a>
<?php include "Cadastro_Med_Corte_ctd.html";?>
</div>

<div id="Cnf_Equipamentos" class="reveal-modal">
<a class="close-reveal-modal">&#215;</a>
<?php include "Cadastro_Equipamento.html";?>
</div>


<a href="" class="big-link" data-reveal-id="Conclusions" id="link_conc"></a>
<div id="Conclusions" class="reveal-modal">
<h3>Cadastro concluido</h3>
<span>Realizado o Cadastro solicitado!</span>
<a id="ClsOp" class="close-reveal-modal">&#215;</a>
</div>


<script>

function SendPop(){
  window.open('Cadastra_op.php', '_blank');
pup.show();
}
function SendMP(){
  window.open('Mp.php', '_blank');
}
function SendRB(){
  window.open('Rebobinadeira.php', '_blank');
}

function  SendConf_RB(){
  window.open('Cadastra_PD_CORTE.php', '_blank');
}

function Sending(SendIt){
document.getElementById("JBSend").value = SendIt;
document.forms["SendForm"].submit();
}

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}



function Includ_OP(){
var x = document.getElementById("Ct1").innerHTML;
document.getElementById("modal-body").innerHTML = x;
}

function Includ_CF(){
  var x = document.getElementById("Ct2").innerHTML;
document.getElementById("modal-body").innerHTML = x;
}

function SendPop(){
  window.open('Cadastra_op.php', '_blank');
pup.show();
}
function SendMP(){
  window.open('Mp.php', '_blank');
}
function SendRB(){
  window.open('Rebobinadeira.php', '_blank');
}

function SendCt(){
  window.open('Cortadeira.php', '_blank');
}

function  SendConf_BL(){
  window.open('Balanca.php', '_blank');
}

function  SendConf_RB(){
  window.open('Cadastra_PD_CORTE.php', '_blank');
}

function Sending(SendIt){
document.getElementById("JBSend").value = SendIt;
document.forms["SendForm"].submit();
}


function ExportCsv(){
  window.open('Export.php', '_blank');
}


function RelatorMP(){
  window.open('../Obj_Relators/Mp_Star_rating.php', '_blank');
}

$(document).ready(function() {
    $('#example').DataTable( {
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );

</script>

<form action="" method="post" name="SendForm">
<input type="text" name="Jumb" id="JBSend" hidden>
</form>
</body>
</html>