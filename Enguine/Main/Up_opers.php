<?php
if (isset($_GET["TXT_OP"])) {
  if (isset($_GET["TXT_EQ"])) {

  $nomeSCan = $_GET["TXT_OP"];
  $Equipamento = $_GET['TXT_EQ'];
 
  list($Nome, $scan) = explode("-",$nomeSCan);

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
  }else{
    echo "não encontrado Equipamento";
  }
}else{
  echo "não encontrado Operador";
}
  ?>