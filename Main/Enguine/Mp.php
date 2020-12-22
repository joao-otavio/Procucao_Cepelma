<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP</title>
</head>
<body>

<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = 'MP'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
   
    $i = 1;
    if ($result->num_rows > 0) {
        $i = 1;
        $BcArr = [];
        if ($BcArr <> "") {
            $BcArr[$row[0]] = "$row[1],$row[2]";
            print_r ($BcArr);   
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        }
        $i =$i +1;
    }
}
$conn->close();

?>

<script>
    // <?php echo $BcArr; ?>;


</script>



    <form action="">
    <select name="Operador1" id="Operador1"></select>
    </form>

</body>
</html>