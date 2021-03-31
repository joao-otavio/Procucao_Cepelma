<?php
$Operador = $_POST['Operador'];
$Ajudante = $_POST['Ajudante'];

$D_in = $_POST['D_in'];
$H_in = $_POST['H_in'];
$D_fn = $_POST['D_fn'];
$H_fn = $_POST['H_fn'];
$Tempo_Produtivo = $_POST['Tempo_Produtivo'];

$Carga = $_POST['Call_cont'];
$Peso_PD = $_POST['PesPd'];
$Plts = $_POST['Plts'];




$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


for ($i=1; $i <= $Plts ; $i++) {

    $Key_unix = $Carga.'-'.$i;
    $Plt_Qtd = $_POST[$Carga.'-'.$i];
    $Plt_Pes = $_POST[$Carga.'-'.$i.'-ps'];
    $Plt_OP = $_POST[$Carga.'-'.$i.'-G1'];
    $Plt_AJ = $_POST[$Carga.'-'.$i.'-G2'];
    $Plt_Frm = $_POST[$Carga.'-'.$i.'-G3'];
    $Plt_Ppl = $_POST[$Carga.'-'.$i.'-G4'];




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
    $sql = "INSERT INTO balanca 
    ( 
        Key_unix,
        Carga,
        PLT,
        P_Uni,
        QTD,
        P_Total,
        Papel,
        Formato,
        Tipo_Produto,
        Operador,
        Ajudante,
        D_in,
        H_in,
        D_fn,
        H_fn,
        Tempo_Produtivo
    ) 
    VALUES
    (
       '$Key_unix',
       '$Carga',
       '$Plt_Qtd',
       '$Peso_PD',
       '$Plt_Qtd',
       '$Plt_Pes',
       '$Plt_Ppl',
       '$Plt_Frm',
       '$',
       '$Plt_OP',
       '$Plt_AJ',
       '$D_in',
       '$H_in',
       '$D_fn',
       '$H_fn',
       '$Tempo_Produtivo'
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