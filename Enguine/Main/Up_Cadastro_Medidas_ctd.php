<?php
if (isset($_GET["TXT_Largura"])) {
  if (isset($_GET["TXT_Comprimento"])) {

  $largura = $_GET["TXT_Largura"];
  $comprimento = $_GET['TXT_Comprimento'];
 

  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";

  if ($largura > $comprimento) {
    $medida_menor = $comprimento;
    $medida_maior = $largura ;
    $St_Formato = $comprimento."x".$largura;
  }else{
    $medida_menor = $largura;
    $medida_maior = $comprimento ;
    $St_Formato = $largura."x".$comprimento;
  }

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
$sql = "INSERT INTO conf_formatos_cortadeira 
( 
  Med_Menor,
  Med_Maior,
  StringFormato
) 
VALUES
( 
    '$medida_menor',
    '$medida_maior',
    '$St_Formato'
)";

if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento concluido</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
  mysqli_close($conn);
  }else{
    echo "não encontrado Equipamento";
  }
}else{
  echo "não encontrado Operador";
}
  ?>