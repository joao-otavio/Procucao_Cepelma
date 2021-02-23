<?php

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "producao";

    $line =1;

    $Quant_Para = $_POST['NumMan'];
    $chave = $_POST['chave'];

    for ($i=0; $i < $Quant_Para; $i++) { 
    $Descricao = $_POST['Pddesc'.$line.'_1'];
    $Tip = $_POST['Tip_'.$line];
    $D_in = $_POST['D_in_'.$line];
    $H_in = $_POST['H_in_'.$line];
    $D_fn = $_POST['D_fn_'.$line];
    $H_fn = $_POST['H_fn_'.$line];

    $Temp_Parad = $_POST['TemPar_'.$line];

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
?>