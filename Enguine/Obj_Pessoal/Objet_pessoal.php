<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objet Pessoal</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Obj_Pessoal/Style_objet_pessoal.css">
</head>
<body>
<div id="Objetos_Elemento_Pessoal">
<h3>Funcionarios</h3>
<hr>
<div id="Busca_php_pessoal">
<?php
$servername = "localhost:3308";
$username = "root"; 
$password = "";
$dbname = "producao";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
print "<div id =\"Opers\">";
print "<Div id=\"Operador\">";
print "<Div id=\"PicOp\"></div>";
$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = '$Param'";
$result = $conn->query($sql);
$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Operadors\">Operador: </label>";
  print "<br>";
  print "<select class=\"Selectors\" name=\"Operador\" id=\"Operadors\" onchange=\"Get_Pic_OP(this.value)\" required>";
  print "<option value=\"\"></option>";
  while($row = mysqli_fetch_array($result)) {
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
       if ($result->num_rows > 0) {
        if ($Cod <> "") {
        print "<option value=\"$Nome\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],"; 
             }
        }
        } 
   }
print "</select>";
print "</div>";
}
print "<Div id=\"Ajudante\">";
print "<Div id=\"PicAj\"></div>";
$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = '$Param'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  print "<label for=\"Ajudante\">Ajudante: </label>";
  print "<br>"; 
  print "<select class=\"Selectors\" name=\"Ajudante\" id=\"Ajudantes\" onchange=\"Get_Pic_AJ(this.value)\" required>";
  print "<option value=\"\"></option>";
  while($row = mysqli_fetch_array($result)) {
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];  
    if ($result->num_rows > 0) {      
        if ($Cod <> "") {
        print "<option value=\"$Nome\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";    
             }
        }
        } 
   }
print "</select>";
print "</div>";
print "</div>";
}
?>
</div>
</div>
<script src="/ProdCepelma/Enguine/Obj_Pessoal/Script_Objet_pessoal_OP.js"></script>
<script src="/ProdCepelma/Enguine/Obj_Pessoal/Script_Objet_pessoal_AJ.js"></script>
</body>
</html>