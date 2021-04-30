

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
    Data_Fim,
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
   '$D_in',
   '$D_fn',
   '$H_in',
   '$H_fn',

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

// echo "<script>window.close();</script>";


function redireciona($link){
  if ($link==-1){
  echo" <script>history.go(-1);</script>";
  }else{
  echo" <script>document.location.href='$link'</script>";
  }
};
//Cria uma variavel
$link = 'Mp.php';

//E aonde quiser chama a função dentro de um if ou qualquer coisa.

// Chama a função
redireciona($link); 
?>
</body>
</html>
