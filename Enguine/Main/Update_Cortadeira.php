<?php

$carga = $_POST['Lc'];

// Objeto Seletor

$Selects = $_POST['Selects'];

// objeto Pessoal

$Operador = $_POST['Operador'];
$Ajudante = $_POST['Ajudante'];

// Objeto data

$D_in = $_POST['D_in'];
$H_in = $_POST['H_in'];
$D_fn = $_POST['D_fn'];
$H_fn = $_POST['H_fn'];
$Tempo_Produtivo = $_POST['Tempo_Produtivo'];

// Objeto Bancas

$Formatos = $_POST['Formatos'];
$Bancas = $_POST['Bancas'];
$Gramatura = $_POST['Gramatura'];

// Objeto Finalizado

$NumLups = $_POST['NumLups'];
$MyArrJUMBOS = explode(' / ',$Selects);

$Conclusion = $_POST['Conclusion'];


// Caso finalizado
$Loops = count($MyArrJUMBOS);
for ($i=0; $i < $Loops; $i++) { 
    if (isset($_POST['Sd_'.$MyArrJUMBOS[$i]])){
    $SdJumbos[$i] = $_POST['Sd_'.$MyArrJUMBOS[$i]];   
    }
}

if ($Conclusion == "false") {


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";  
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "TRUNCATE TABLE banco_de_carga;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, $sql);



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
$sql = "INSERT INTO cortadeira 
( 
    carga,
    Selects,
    Operador,
    Ajudante,
    D_in,
    H_in,
    D_fn,
    H_fn,
    Tempo_Produtivo,
    Formatos,
    Bancas,
    Gramatura, 
    Peso
) 
VALUES
(
    '$carga',
    '$Selects',
    '$Operador',
    '$Ajudante',
    '$D_in',
    '$H_in',
    '$D_fn',
    '$H_fn',
    '$Tempo_Produtivo',
    '$Formatos',
    '$Bancas',
    '$Gramatura', 
    '0'
)";


if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);




$Contador = count($MyArrJUMBOS);

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

  for ($i=0; $i < $Contador; $i++) { 
 
    $JumboBc = $MyArrJUMBOS[$i];

  $sql = "INSERT INTO banco_de_carga 
  (     
      Jumbo,
      carga,
      operador,
      ajudante

  ) 
  VALUES
  (
    '$JumboBc',
    '$carga',
    '$Operador',
    '$Ajudante'
  )";
  
  
  if (mysqli_query($conn, $sql)) {
      print "<H3>Lançamento concluido</H3>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
      }

    }
    mysqli_close($conn);  

}else{

$Peso = "0";
$Contador = count($MyArrJUMBOS);

for ($i=0; $i < $Contador ; $i++) { 

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  Peso FROM producao_mp where Jumb = '$MyArrJUMBOS[$i]'";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
   
while ($Danco = mysqli_fetch_array($result)) {
    $Peso = $Peso + $Danco[0];
    }
  }

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "producao";  
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "TRUNCATE TABLE banco_de_carga;";
    $result = $conn->query($sql);
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn, $sql);
    
    
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
    $sql = "INSERT INTO cortadeira 
    ( 
        carga,
        Selects,
        Operador,
        Ajudante,
        D_in,
        H_in,
        D_fn,
        H_fn,
        Tempo_Produtivo,
        Formatos,
        Bancas,
        Gramatura, 
        Peso
    ) 
    VALUES
    (
        '$carga',
        '$Selects',
        '$Operador',
        '$Ajudante',
        '$D_in',
        '$H_in',
        '$D_fn',
        '$H_fn',
        '$Tempo_Produtivo',
        '$Formatos',
        '$Bancas',
        '$Gramatura', 
        '0'
    )";
    
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento concluido</H3>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
    



}
?>