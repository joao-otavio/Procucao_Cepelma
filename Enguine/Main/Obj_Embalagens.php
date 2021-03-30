<?php
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  $carga = "1";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Operador, Ajudante, Formatos, Papel, Bancas, Cod FROM cortadeira where carga = '$nome';";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
  

  if ($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)) {
      $operador = $row[0];
      $ajudante = $row[1];
      $formato = $row[2];
      $papel = $row[3];
      $bancas = $row[4];

      print "<div>";
      print "<strong>Operador:</strong> $operador";
      print "<br>";
      print "<strong>Ajudante:</strong> $ajudante";
      print "<br>";
      print "<strong>Formato/Papel:</strong> $formato - $papel";
      print "<br>";
      print "<br>";
      print "<input type=\"text\" id=\"\" name=\"\" class=\"Inpts\">";
      print "<hr>";
      print "";
      print "";
      print "</div>";

    }
  }
}
?>