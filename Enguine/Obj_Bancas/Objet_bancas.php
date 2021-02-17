<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <title>Bancas</title>
</head>
<body>

<h3>Bancas</h3>
<hr>
<?php 
$servername = "localhost:3308";
$username = "root"; 
$password = "";
$dbname = "producao";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
print "<div id =\"Formato\">";
print "<div id=\"Operador\">";
$sql = "SELECT StringFormato FROM conf_formatos_cortadeira;";
$result = $conn->query($sql);
$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Formatos\">Formato:</label>";
  print "<br>";
  print "<select class=\"Selectors\" name=\"Formatos\" id=\"Formatos\" required>";
  print "<option value=\"\"></option>";
  while($row = mysqli_fetch_array($result)) {
    $Nome = $row[0];
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
}
print "</select>";
print "</div>";
print "</div>"; 
?>

<div class="FormBanca" id="Banc">
<div>
<label for="Bancas">Qt. Bancas:</label><br>
<input type="number" name="Bancas" id="Bancas" class="Inpts" min="1" max="50" required>
</div>
</div>

<div class="FormBanca" id="Gram">
<div>
<label for="Gramatura">Gramatura:</label><br>
<input type="number" name="Gramatura" id="Gramatura" class="Inpts" min="1" max="120" required>
</div>
</div>

<script>

  document.getElementById("Formatos").onblur = function Mylog(){
    VaLog = document.getElementById("Formatos").value;
    console.log("formato: " + VaLog);
  }

  document.getElementById("Bancas").onblur = function Mylog2(){
    VaLog = document.getElementById("Bancas").value;
    console.log("Quantidade de bancas: " + VaLog);
  }

  document.getElementById("Gramatura").onblur = function Mylog3(){
    VaLog = document.getElementById("Gramatura").value;
    console.log("Gramatura: " + VaLog);
  }

  
</script>


</body>
</html>