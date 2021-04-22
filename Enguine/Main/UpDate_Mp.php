

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$D_in = $_POST['D_in'];
$H_in = $_POST['H_in'];
$D_fn = $_POST['D_fn'];
$H_fn = $_POST['H_fn'];

$Tipo = $_POST['Papel'];
$Tamanho = $_POST['Tamanho'];
$Rotacao = $_POST['Rotacao'];
$Peso = $_POST['Peso'];
$Temp_Fabr = $_POST['TempProd'];
$Temp_Para = $_POST['TempG'];
$Temp_Prod = $_POST['TempF'];
$Gram_Med = $_POST['GramaturaG'];
$Gram_Str = $_POST['GramaturaB'];
$Gram_Calc = $_POST['GramaturaC'];
$Gram_Prim = $_POST['Gramatura1'];
$Gram_Seg = $_POST['Gramatura2'];
$Quant_Para = $_POST['NumMan'];
$Operador = $_POST['Operador'];
$Ajudante = $_POST['Ajudante'];
$NumJUmbo = $_POST['NumJum'];


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM paradas_mp WHERE Jum = '$NumJUmbo'";


if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE producao_mp SET 
Data = '$D_in', 
Data_Fim = '$D_fn', 
H_INICIO = '$H_in',
H_FIM = '$H_fn',
Tipo = '$Tipo',
Tamanho = '$Tamanho',
Rotacao = '$Rotacao',
Peso = '$Peso',
Temp_Fabr = '$Temp_Fabr',
Temp_Para = '$Temp_Para',
Temp_Prod = '$Temp_Prod',
Gram_Med = '$Gram_Med',
Gram_Str = '$Gram_Str',
Gram_Calc = '$Gram_Calc',
Gram_Prim = '$Gram_Prim',
Gram_Seg = '$Gram_Seg',
Quant_Para = '$Quant_Para',
Operador = '$Operador',
Ajudante = '$Ajudante' 
WHERE Jumb = $NumJUmbo";

if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);


 
$line =1;
for ($i=1; $i < ($Quant_Para+1); $i++) { 

  
  
  $Jum = $_POST['NumJum'];
  $Descricao = $_POST['Pddesc'.$i.'_1'];
  $Tip = $_POST['Tip_'.$i];
  $D_inp = $_POST['D_in_'.$i];
  $H_inp = $_POST['H_in_'.$i];
  $D_fnp = $_POST['D_fn_'.$i];
  $H_fnp = $_POST['H_fn_'.$i];
  $Temp_Parad = $_POST['TemPar_'.$i];

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
  $sql = "INSERT INTO paradas_mp 
  ( 
      Jum,
      Descricao,
      D_Inicial,
      H_Inicial,
      D_Final,
      H_Final,
      Temp_Total,
      Tipo
  ) 
  VALUES
  (
     '$Jum',
     '$Descricao',
     '$D_inp',
     '$H_inp',
     '$D_fnp',
     '$H_fnp',
     '$Temp_Parad',
      '$Tip'
  )";
  
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
      $line = $line +1;
}

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
$sql = "TRUNCATE TABLE tolkit;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
  }
}
$int = rand(100000,999999);

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
$sql = "INSERT INTO tolkit 
( 
  Tokit
) 
VALUES
(
   '$int'
)";
if (mysqli_query($conn, $sql)) {
}
echo "<script>window.close();</script>";
echo "<script>document.write('<a href=\"' + document.referrer + '\">Go Back</a>');</script>";
?>
</body>
</html>
