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

print "<div id =\"Conf\">";
print "<Div id=\"Conf\">";
$sql = "SELECT Descricao, Medida1, Qt1, Medida2, Qt2, Medida3, Qt3 FROM config_cortadeira;";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"MySelectConf\">Configuração de corte: </label>";
  print "<br>";
  print "<select class=\"Inpts2\" name=\"MySelectConf\" id=\"MySelectConf\" onchange=\"AbCamps()\" required>";
  print "<option value=\"\"></option>";
 
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Sd = $row[1];
   
       if ($result->num_rows > 0) {
       
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$Cod\">$Cod</option>";
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