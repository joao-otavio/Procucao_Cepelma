<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Producao</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleMenu.css">
</head>
<body>
<script src="/ProdCepelma/Enguine/Main/Return_Resume.js"></script>

<div id= "Title">
<h1>Menu Produção</h1>
</div>
<div id="Buttons">
<button id="Buts" onclick="SendMP();">MP</button>
<button id="Buts" onclick="SendRB();">Rebobinadeira</button>
<button id="Buts" onclick="SendCt();">Cortadeira</button> 
<button id="Buts" onclick=" SendConf_BL()">Balança</button>
<button id="Buts" onclick="SendPop();">Cadastrar Op.</button>
<button id="Buts" onclick="SendConf_RB();">Config Rb</button>
<button id="Buts" onclick="Includ_OP()" data-modal-target="#modal">Cadastrar Op.</button>
<button id="Buts" onclick="Includ_CF()" data-modal-target="#modal">Config Rb</button>
 
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">SkyBry - Modal</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body" id="modal-body">   
    </div>
  </div>
  <div id="overlay"></div>
<div hidden id="Ct1">
<?php include "Cadastra_op.php";?>
</div>
<div hidden id="Ct2">
<?php include "Cadastra_PD_CORTE.php";?>
</div>
</div>
<div id="Conteudo">
<span><h4>Lançamentos MP </h4></span>
<div id="Table">
<?php
print "<table border='1' id = 'Table'>";
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

<script>

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


</script>
<form action="" method="post" name="SendForm">
<input type="text" name="Jumb" id="JBSend" hidden>
</form>
</body>
</html>