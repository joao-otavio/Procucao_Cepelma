<?php
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];

if (isset($_GET["TxPar"])) {
 $Parametries = $_GET["TxPar"];
}else{
  $Parametries = "";
}

  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";

  $i = 0;
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Scan FROM operadores where Nome = '$nome';";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)) {
      $Pic[$i] = $row[0];
      $i++;
    }
  }
}
print "<img src=\"http://".$_SERVER['HTTP_HOST']."/SkyBry/IMAGENS/".$Pic."\" alt=\"PicOPs\" id=\"PicPer1\">";

?>
