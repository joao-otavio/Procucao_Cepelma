<?php

// Verifica se existe a variável txtnome
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];

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
  
    $tabela = "<table border='1' id = 'Table'>
    <thead>
        <tr>
            <th>Jumbo</th>
            <th>Data</th> 
            <th>H. Inicio</th>
            <th>H. Fim</th>
            <th>Tipo</th>
            <th>Tamanho</th>
            <th>Rotacao</th>
            <th>Peso</th>
            <th>T. Fabricação</th>
            <th>T. Parada</th>
            <th>T. Produtivo</th>
            <th>G. Media</th>
            <th>G. Produto</th>
            <th>G. Calculada</th>
            <th>G. Prime</th>
            <th>G. Segund</th>
            <th>Q. Paradas</th>
            <th>Operador</th>
            <th>Ajudante</th>
        </tr>
    </thead>
    <tbody>
    <tr>"; 
$return = "$tabela";
// Captura os dados da consulta e inseri na tabela HTML
while ($linha = mysqli_fetch_array($result)) {
$return.= "<td>" . utf8_encode($linha["Jumb"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Data"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["H_INICIO"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["H_FIM"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Tipo"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Tamanho"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Rotacao"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Peso"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Temp_Fabr"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Temp_Para"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Temp_Prod"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Gram_Med"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Gram_Str"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Gram_Calc"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Gram_Prim"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Gram_Seg"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Quant_Para"]) . "</td>";
$return.= "<td>" . $linha["Operador"] . "</td>";
$return.= "<td>" . $linha["Ajudante"] . "</td>";
$return.= "</tr>";
$return.= "<Button type=\"button\" id = \"Confirm\" onclick=\"PshEdit()\">Confirmar dados</Button>";
$return.= "<Button type=\"button\" id = \"Confirm\" onclick=\"CancelEdit()\">Cancelar</Button>";
}
echo $return.="</tbody></table>"; 

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

  $tabela = "<table border='1' id = 'Table2'>
  <thead>
      <tr>
          <th>Descricao</th>
          <th>H_Inicial</th> 
          <th>H_Final</th>
          <th>Temp_Total</th>
       </tr>
  </thead>
  <tbody>
  <tr>"; 
$i = 1;
$return = "$tabela";
// Captura os dados da consulta e inseri na tabela HTML
while ($linha = mysqli_fetch_array($result)) {
$return.= "<td class ='Mn$i'>" . $linha["Descricao"] . "</td>";
$return.= "<td class ='Mn$i'>" . utf8_encode($linha["H_Inicial"]) . "</td>";
$return.= "<td class ='Mn$i'>" . utf8_encode($linha["H_Final"]) . "</td>";
$return.= "<td class ='Mn$i'>" . utf8_encode($linha["Temp_Total"]) . "</td>";
$return.= "</tr>";
$i = $i +1;
}
echo $return.="</tbody></table>"; 


  } else {
 
      echo "Não foram encontradas Paradas!";
  }
}else {
 
  echo "Não foi encontrado este Registro!";
}
}
?>