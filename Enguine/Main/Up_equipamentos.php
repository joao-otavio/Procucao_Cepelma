<?php
  if (isset($_GET["TXT_Componente_CD"])) {

// $Equipamento = $_GET["TXT_Equipamento_CD"];
$Componente = $_GET["TXT_Componente_CD"];

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
$sql = "INSERT INTO equipamentos 
( 
  Componente
  -- Equipamento
) 
VALUES
( 
    '$Componente'
    -- '$Equipamento'
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
  ?>