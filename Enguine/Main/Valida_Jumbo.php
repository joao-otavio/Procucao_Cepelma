<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

// Verifica se existe a variável txtnome
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];

  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT jumbo, peso FROM saldo_jumbo where jumbo = '$nome'"; 
  $result = $conn->query($sql);
  while($row = mysqli_fetch_array($result)) {

              $Jumbo = $row[0];
              $Peso = $row[1];
            if ($Peso > 1) {
              print "<input type=\"text\" id=\"NewJumbPes\" name=\"NewJumbPes\" value =\"$Peso\" onchange=\"GetSnt();\" hidden>";
              print "<p>Este Jumbo ja Passou pelo acabamento Possui Saldo Atual de ".$Peso." Kg</p>";
            }else{
              print "<h3>Jumbo Finalizado, não pode ser laçado!!</h3>";
              print "<input type=\"text\" id=\"NewJumbPes\" name=\"NewJumbPes\" value =\"$Peso\" onchange=\"GetSnt();\" hidden>";

            }
  if (mysqli_query($conn, $sql)) {

  } else {
   print "Jumbo iniciando acabamento!";
  }
    mysqli_close($conn);
  }
}

?>
<script>
function GetSnt(){
let $y;
if (document.getElementById("NewJumbPes") != null){
$y = document.getElementById("NewJumbPes").value;
console.log($y);
if ($y  < 1) {
alert("Este jumbo ja foi 'Finalizado'");
document.getElementById("Jumb").value = "";
}else{
document.getElementById("PesJUmb_get").value = document.getElementById("NewJumbPes").value;
alert("ok");
}
}else{
alert("vazio");
}
}
</script>
</body>
</html>