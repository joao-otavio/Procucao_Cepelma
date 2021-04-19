<?php

  if (isset($_GET["Quantidade1"])) {
    if (isset($_GET["Medida1"])) {            

$Quantidade1 = $_GET['Quantidade1'];
$Medida1 = $_GET['Medida1'];

$Quantidade2 = $_GET['Quantidade2'];
$Medida2 = $_GET['Medida2'];

$Quantidade3 = $_GET['Quantidade3'];
$Medida3 = $_GET['Medida3'];

$Descricao = "";
if ($Medida1 != 0) {
  $Descricao = $Quantidade1."-".$Medida1;
  if ($Medida2 != 0) {
    $Descricao = $Descricao ."/". $Quantidade2."-".$Medida2;
    if ($Medida3 != 0) {
      $Descricao = $Descricao ."/". $Quantidade3."-".$Medida3;
    }    
  }  
}

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
$sql = "INSERT INTO config_cortadeira 
( 
  Descricao,
  Medida1,
  Qt1,
  Medida2,
  Qt2,  
  Medida3,
  Qt3
) 
VALUES
(
  '$Descricao',
  '$Medida1',
  '$Quantidade1',
  '$Medida2',
  '$Quantidade2',  
  '$Medida3',
  '$Quantidade3'
)";


if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);
 
  }
    }else{
      echo "Pelo Menos 1 medida deve ser cadastrada";
    }

    ?>