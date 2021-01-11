

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$myDateTime = DateTime::createFromFormat('Y-m-d',$_POST['Data']);
$Data = $myDateTime->format('d/m/Y');

$H_INICIO = $_POST['H_inicio'];
$H_FIM = $_POST['H_fim'];
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
$sql = "INSERT INTO producao_mp 
( 
    Data,
    H_INICIO,
    H_FIM,
    Tipo,
   
    Tamanho,
    Rotacao,
    Peso,
    Temp_Fabr,
    Temp_Para,
    Temp_Prod,
    Gram_Med,
    Gram_Str,
    Gram_Calc,
    Gram_Prim,
    Gram_Seg,
    Quant_Para,
    Operador,
    Ajudante    
    ) 
VALUES
(
   '$Data',
   '$H_INICIO',
   '$H_FIM',
   '$Tipo',
   
   '$Tamanho',
   '$Rotacao',
   '$Peso',
   '$Temp_Fabr',
   '$Temp_Para',
   '$Temp_Prod',
   '$Gram_Med',
   '$Gram_Str',
   '$Gram_Calc',
   '$Gram_Prim',
   '$Gram_Seg',
   '$Quant_Para',
   '$Operador',
   '$Ajudante'

    )";


if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);



$line =1;
for ($i=0; $i < $Quant_Para; $i++) { 

  
    $Jum = $_POST['NumJum'];
    $Descricao = $_POST['Pddesc'.$line.'_1'];
    $H_Inicial = $_POST['PdIni'.$line .'_1'];
    $H_Final = $_POST['PdFin'.$line.'_2'];
    $Temp_Total = $_POST['TemPar'.$line.'_2'];

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
        H_Inicial,
        H_Final,
        Temp_Total
    ) 
    VALUES
    (
       '$Jum',
       '$Descricao',
       '$H_Inicial',
       '$H_Final',
       '$Temp_Total'
    )";
    
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
      $line = $line +1;
}
echo "<script>window.close();</script>";
echo "<script>document.write('<a href=\"' + document.referrer + '\">Go Back</a>');</script>";
?>
</body>
</html>
