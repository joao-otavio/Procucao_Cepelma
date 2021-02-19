<?php

$Equipamento = $_POST['EquipamentoC'];
$RegFunc = $_POST['RegFunc'];


list($Nome, $scan) = explode("-",$RegFunc);

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO operadores 
( 
    Nome,
    Scan,
    Equipamento
) 
VALUES
(
'$Nome',
'$scan',
'$Equipamento'
)";


if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);
  echo "<script>window.close();</script>";
echo "<script>document.write('<a href=\"' + document.referrer + '\">Voltar</a>');</script>";
  ?>