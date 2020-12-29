<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP</title>
    <script src="./Main/Style/StyleMP.css"></script>
</head>
<body>

<?php


print "<form action=\"\">";


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

print "<div id =\"Opers\">";
$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = 'MP'";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Operador\">Operador: </label>";
  print "<br>";
  print "<select name=\"Operador\" id=\"Operador\" required>";
  print "<option value=\"0\"></option>";
  $i = 1;
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
    echo $Cod, ", ", $Nome, ", " , $Scan;
    print "<br>";
   
       if ($result->num_rows > 0) {
        $i = 1;
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$Cod,\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
print "<br>";
}

$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = 'MP'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  print "<label for=\"Ajudante\">Ajudante: </label>";
  print "<br>"; 
  print "<select name=\"Ajudante\" id=\"Ajudante\" required>";
  print "<option value=\"0\"></option>";
  $i = 1;
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
    echo $Cod, ", ", $Nome, ", " , $Scan;
    print "<br>";
   
       if ($result->num_rows > 0) {
        $i = 1;
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$Cod,\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
}
print "</div>";

print "<div>";
print "<label for=\"Data\">Data de Lançamento: </label>";
print "<br>";
print "<input type=\"date\" name=\"Data\" id=\"Data\" required>";
print "<br>";
print "<br>";
print "<label for=\"H_inicio\">Hora de Inicio: </label>";
print "<br>"; 
print "<input type=\"time\" name=\"H_inicio\" id=\"H_inicio\" required>";
print "<br>"; 
print "<br>"; 
print "<label for=\"H_fim\">Hora de Termino: </label>";
print "<br>"; 
print "<input type=\"time\" name=\"H_fim\" id=\"H_fim\" required>";
print "<br>"; 
print "<br>"; 
print "</div>";

print "<div>";


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$sql = "SELECT Codigo, Tipo FROM tipo_de_papel";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Papel\">Tipo de Papel: </label>";
print "<br>"; 
print "<select name=\"Papel\" id=\"Papel\" required>";
  print "<option value=\"0\"></option>";
  $i = 1;
  while($row = mysqli_fetch_array($result)) {
 
    $CodP = $row[0];
    $TipoP = $row[1];
     print "<br>";
   
       if ($result->num_rows > 0) {
        $i = 1;
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$CodP,\">$TipoP</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
print "<br>"; 
}

print "<label for=\"Gramatura\">Gramatura: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Gramatura\" name=\"Gramatura\" min=\"1\" max=\"120\" required>";  

print "<br>"; 
print "<label for=\"Tamanho\">Tamanho: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Tamanho\" name=\"Tamanho\" min=\"1\" max=\"160\" required>";

print "<br>"; 
print "<label for=\"Rotacao\">Rotação: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Rotacao\" name=\"Rotacao\" min=\"1\" max=\"2000\" required>";

print "<br>"; 
print "<label for=\"Peso\">Peso: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Peso\" name=\"Peso\" min=\"1\" max=\"700\" required>";

print print "</div>"; 


$conn->close();

print "</form>";
?>




<script>
 
</script>
    
</body>
</html>