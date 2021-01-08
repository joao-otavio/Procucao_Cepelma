<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tolkit</title>
    <link rel="stylesheet" type="text/css" href="StyleTolkit.css">
</head>
<body>
<div id="Contt">
    <h1>Codigo De acesso Para Desbloqueios</h1>
    <h2>Tolkit - SkyBry</h2>
  
<?php
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

if ($result->num_rows > 0) {
  while($row = mysqli_fetch_array($result)) {
$Tolkit = $row[0];
print "<h3 id=\"Tolkit_letrer\">$Tolkit</h3>";
  }
}
?>
</div>  
</body>
</html>