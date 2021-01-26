<?php

// Verifica se existe a variável txtnome
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];



  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  // Create connectionW
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Tokit FROM tolkit;";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
   
      $Tolkit = $row[0];
      print "<input type=\"text\" name=\"Tolkit\" id=\"Tolkit\" value =\"$Tolkit\" hidden>";
    }
  }

  // Conexao com o banco de dados
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  // Create connectionW
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Jumb, Data, H_INICIO, H_FIM, Tipo, Tamanho, Rotacao, Peso, Temp_Fabr, Temp_Para,
  Temp_Prod, Gram_Med, Gram_Str, Gram_Calc, Gram_Prim, Gram_Seg, Quant_Para, Operador, Ajudante 
  FROM producao_mp where Jumb = '$nome'";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
 
  if ($result->num_rows > 0) {
  


while ($linha = mysqli_fetch_array($result)) {
print "<p> Nunero do Jumbo: " . utf8_encode($linha["Jumb"]) . "</p>";
print "<p> Data de Fabricação: " . utf8_encode($linha["Data"]) . "</p>";
print "<p> Hora de Inicio: " . utf8_encode($linha["H_INICIO"]) . "</p>";
print "<p> Hora de Termino: " . utf8_encode($linha["H_FIM"]) . "</p>";
print "<p> Tipo de Papel: " . utf8_encode($linha["Tipo"]) . "</p>";
print "<p> Tamanho: " . utf8_encode($linha["Tamanho"]) . "</p>";
print "<p> Rotação da Maquina: " . utf8_encode($linha["Rotacao"]) . "</p>";
print "<p> Peso: " . utf8_encode($linha["Peso"]) . "</p>";
$Vrt = $linha["Temp_Para"];
if ($Vrt == "00:00") {
}else{
print "<p> Tempo de Fabricação: " . utf8_encode($linha["Temp_Fabr"]) . "</p>";
print "<p> Tempos de Parada: " . utf8_encode($linha["Temp_Para"]) . "</p>";
}
print "<p> Tempo Produtivo: " . utf8_encode($linha["Temp_Prod"]) . "</p>";
print "<p> Gramatura Media programada: " . utf8_encode($linha["Gram_Med"]) . "</p>";
print "<p> Gramatura Reportada: " . utf8_encode($linha["Gram_Str"]) . "</p>";
print "<p> Gramatura Calculada: " . utf8_encode($linha["Gram_Calc"]) . "</p>";
// print "<p> " . utf8_encode($linha["Gram_Prim"]) . "</p>";
// print "<p>" . utf8_encode($linha["Gram_Seg"]) . "</p>";
print "<p> Quantiade de Paradas: " . utf8_encode($linha["Quant_Para"]) . "</p>";
print "<p> Operador 1: " . $linha["Operador"] . "</p>";
print "<p> Operador 2: " . $linha["Ajudante"] . "</p>";
print "</tr>";
}

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";
// Create connectionW

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Descricao, H_Inicial, H_Final, Temp_Total FROM paradas_mp where Jum = '$nome'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

$i = 1;

while ($linha = mysqli_fetch_array($result)) {
print "<p class ='Mn$i'> Parada: " . $linha["Descricao"] . "</p>";
print "<p class ='Mn$i'> Hora de Inicio: " . utf8_encode($linha["H_Inicial"]) . "</p>";
print "<p class ='Mn$i'> Hora de Termino: " . utf8_encode($linha["H_Final"]) . "</p>";
print "<p class ='Mn$i'> Tempo de Parada: " . utf8_encode($linha["Temp_Total"]) . "</p>";
print "</tr>";
$i = $i +1;
}

  } else {
       echo "Não foram encontradas Paradas!";
  }
}else {
 
  echo "Não foi encontrado este Registro!";
  echo "<br>";
}
}
?>