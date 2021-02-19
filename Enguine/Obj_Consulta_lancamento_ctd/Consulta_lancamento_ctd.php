
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";
$NextCall = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Jumbo FROM banco_de_carga";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);


if ($result->num_rows > 0) {
  $i = 0;
  while ($Danco = mysqli_fetch_array($result)) {

    $DancosArr[$i] = $Danco[0];
    $i = $i+1;
  
  }
  
  $Carregados_Arr = implode("|", $DancosArr);

  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$sql = "SELECT max(carga) FROM $DataSet";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
 
 
if ($result->num_rows > 0) {
  while($row = mysqli_fetch_array($result)) {
      $NextCall = "";
      $NextCall = $row[0];
  }
}


  print "<div class=\"Ling\">";
  print "<hr>";
  print "<p>";
  print "<small>";
  print "Continuação da Carga N°: <strong class=\"RedTax\">".$NextCall."</strong>";
  print "</small>";
  print "</p>";
  print "</div>";

}else{

$Carregados_Arr = "";

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
  $sql = "SELECT max(carga) FROM $DataSet";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
 
  if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
      $NextCall = "";
      $NextCall = $row[0];
      $NextCall = $NextCall +1;
    }
  }

print "<div class=\"Ling\">";
print "<hr>";
print "<p>";
print "<small>";
print "Nova Carga N°: <strong class=\"RedTax\">".$NextCall."</strong>";
print "</small>";
print "</p>";
print "</div>";
}
?>

<style>
.RedTax{color: red;}
.Ling{ text-align: right; font-size: 20px;}
</style>

<script>
let carregados = "";
Carregados_Arr = "<?php echo $Carregados_Arr; ?>";
if (Carregados_Arr !== "") {
carregados = Carregados_Arr.split("|"); 
}else{
carregados = "";
}

</script>
<input type="text" id="Lc" name="Lc" value="<?php echo $NextCall;?>" hidden> 
</body>
</html>
