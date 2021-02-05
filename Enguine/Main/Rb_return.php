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
print "<p> Tipo de Papel: " . utf8_encode($linha["Tipo"]) . "</p>";
print "<p> Peso: " . utf8_encode($linha["Peso"]) . "</p>";
print "<p> Gramatura Reportada: " . utf8_encode($linha["Gram_Str"]) . "</p>";
// print "<p> " . utf8_encode($linha["Gram_Prim"]) . "</p>";
// print "<p>" . utf8_encode($linha["Gram_Seg"]) . "</p>";
print "<p> Operador 1: " . $linha["Operador"] . "</p>";
print "<p> Operador 2: " . $linha["Ajudante"] . "</p>";
print "<input type=\"text\" id=\"Boca\" name=\"Boca\" hidden value =\"".$linha["Tamanho"]."\">";
print "<input type=\"text\" id=\"Dif_med\" name=\"Dif_med\" hidden value =\"\">";
print "<input type=\"text\" id=\"TempJumb\" name=\"TempJumb\" hidden value =\"".$linha["Temp_Prod"]."\">";
print "<input type=\"text\" id=\"Tipo\" name=\"Tipo\" hidden value =\"".$linha["Tipo"]."\">";
print "<input type=\"text\" id=\"Gramatura\" name=\"Gramatura\" hidden value =\"".$linha["Gram_Str"]."\">";
print "<input type=\"text\" id=\"Calc\" name=\"Calc\" hidden value =\"".$linha["Gram_Calc"]."\">";
print "<input type=\"text\" id=\"Op1\" name=\"Op1\" hidden value =\"".$linha["Operador"]."\">";
print "<input type=\"text\" id=\"Op2\" name=\"Op2\" hidden value =\"".$linha["Ajudante"]."\">";
print "<input type=\"text\" id=\"DtIni_VIDA\" name=\"DtIni_VIDA\" hidden value =\"".$linha["Data"]."\">";
print "<input type=\"text\" id=\"HrIni_vida\" name=\"HrIni_vida\" hidden value =\"".$linha["H_INICIO"]."\">";
print "<input type=\"text\" id=\"HrIni_Esp\" name=\"HrIni_Esp\" hidden value =\"".$linha["H_FIM"]."\">";
print "<input type=\"text\" id=\"PesJUmb_get\" name=\"PesJUmb_get\" value =\"".$linha["Peso"]."\" hidden>";

}
}else {
 
  echo "Não foi encontrado este Registro!";
  echo "<br>";
}
}
?>