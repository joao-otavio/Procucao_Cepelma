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
            <th>Jumb</th>
            <th>Data</th> 
            <th>H_INICIO</th>
            <th>H_FIM</th>
            <th>Tipo</th>
            <th>Tamanho</th>
            <th>Rotacao</th>
            <th>Peso</th>
            <th>Temp_Fabr</th>
            <th>Temp_Para</th>
            <th>Temp_Prod</th>
            <th>Gram_Med</th>
            <th>Gram_Str</th>
            <th>Gram_Calc</th>
            <th>Gram_Prim</th>
            <th>Gram_Seg</th>
            <th>Quant_Para</th>
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
$return.= "<td>" . utf8_encode($linha["Operador"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["Ajudante"]) . "</td>";
$return.= "</tr>";
}
echo $return.="</tbody></table>"; 



  } else {
      // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
      echo "Não foram encontrados registros! Jumbo = ".$nome;
  }
}
?>