<?php

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
print "<Div id=\"Operador\">";
print "<Div id=\"PadraoDv\"></div>";
$sql = "SELECT Cod, Descricao FROM padrao_reb";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Padrao\">Pardão: </label>";
  print "<br>";
  print "<select class=\"Inpts\" name=\"Padrao\" id=\"Padraos\"  required>";
  print "<option value=\"\"></option>";
 
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
    
    
   
       if ($result->num_rows > 0) {
       
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
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
?>