<?php
$chave = $_POST['chave'];
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
$Papel = $_POST['Papel'];
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

if ($Conclusion == "false"){

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
    Peso,
    Papel
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
    '0',
    '$Papel'
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

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

for ($i=0; $i < $Contador ; $i++) { 
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
        Peso,
        Papel
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
        '$Peso',
        '$Papel'
    )";
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento concluido</H3>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);



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
$JumboSD = $SdJumbos[$i];


$sql = "DELETE FROM saldo_jumbo where Jumbo = '$JumboBc'";
$result = $conn->query($sql);

$sql = "INSERT INTO saldo_jumbo 
( 
    jumbo,
    peso

) 
VALUES
(
    '$JumboBc',
    '$JumboSD'

)";
if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
}
mysqli_close($conn);

}



$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

$line =1;

$Quant_Para = $_POST['NumMan'];
$chave = $_POST['chave'];

for ($i=1; $i <= $Quant_Para; $i++) { 
$Descricao = $_POST['Pddesc'.$i.'_1'];
$Tip = $_POST['Tip_'.$i];
$D_in = $_POST['D_in_'.$i];
$H_in = $_POST['H_in_'.$i];
$D_fn = $_POST['D_fn_'.$i];
$H_fn = $_POST['H_fn_'.$i];

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
$sql = "INSERT INTO paradas_geral 
( 
    chave,
    D_in,
    H_in,
    D_fn,
    H_fn,
    T_parada,
    tipo,
    descricao
) 
VALUES
(
   '$chave',
   '$D_in',
   '$H_in',
   '$D_fn',
   '$H_fn',
   '$Temp_Parad',
   '$Tip',
   '$Descricao'
)";


if (mysqli_query($conn, $sql)) {
    print "<H3>Parada $chave lançada</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);
  $line = $line +1;
}

echo "<script>document.write('<a href=\"' + document.referrer + '\">Voltar</a>');</script>";
        
?>