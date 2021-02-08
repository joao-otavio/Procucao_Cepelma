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
<span>Menu</span>
<br>
<button id="Buts" onclick="SendMP();">MP</button>
<button id="Buts">Cortadeira</button>
<button id="Buts" onclick="SendRB();">Rebobinadeira</button>
<button id="Buts" >Balança</button>
<button id="Buts" onclick="SendPop();">Cadastrar Op.</button>
<button id="Buts" onclick="SendConf_RB();">Config Rb</button>

</div>
<div id="Conteudo">
<span>Lançamentos MP</span>
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
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

function SendPop(){
  window.open('Cadastra_op.php', '_blank');
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


</script>
<form action="" method="post" name="SendForm">
<input type="text" name="Jumb" id="JBSend" hidden>
</form>
</body>
</html>