<?php

if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";

  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Scan FROM operadores where Nome = '$nome';";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)) {
   
      $Pic = $row[0];
      print "<img src=\"http://".$_SERVER['HTTP_HOST']."/SkyBry/IMAGENS/".$Pic."\" alt=\"PicOPs\" id=\"PicPer1\">";
    }
  }
}
?>