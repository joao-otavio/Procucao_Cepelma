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
    $as_erro = $_POST[$Carga.'-'.$i];
    $Plt_Pes = $_POST[$Carga.'-'.$i.'-ps'];
    $Plt_OP = $_POST[$Carga.'-'.$i.'-G1'];
    $Plt_AJ = $_POST[$Carga.'-'.$i.'-G2'];
    $Plt_Frm = $_POST[$Carga.'-'.$i.'-G3'];
    $Plt_Ppl = $_POST[$Carga.'-'.$i.'-G4'];
    $Plt_Prdt = $_POST[$Carga.'-p'.$i];


    if ($as_erro ==! "") {
    

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
        Tempo_Produtivo,
        Balanceiro,
        Embalador
    ) 
    VALUES
    (
       '$Key_unix',
       '$Carga',
       '$i',
       '$Peso_PD',
       '$as_erro',
       '$Plt_Pes',
       '$Plt_Ppl',
       '$Plt_Frm',
       '$Plt_Prdt',
       '$Plt_OP',
       '$Plt_AJ',
       '$D_in',
       '$H_in',
       '$D_fn',
       '$H_fn',
       '$Tempo_Produtivo',
       '$Operador',
       '$Ajudante'
       
    )";
    
    
    if (mysqli_query($conn, $sql)) {
            
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
        print "$Plt_Qtd";
        print "<br>";
      
    }
 
}


 for ($i=1; $i <= 50 ; $i++) {
    $mn = 0;
    $as_Notnul = $_POST[$Carga.'-'.$i];

    if ($as_Notnul ==! "") {

        $Select = $_POST[$Carga.'-sl-'.$i];
        $pieces = explode(" / ", $Select);
        $mn = count($pieces);
        $Plt_Pes = intval($_POST[$Carga.'-'.$i.'-ps']);
        $rat = $Plt_Pes/$mn;
        
        for ($j=0; $j < $mn  ; $j++) {

            echo "array de jubos: $Select";
            print "<br>";
            echo "peso carregado:  $Plt_Pes";
            print "<br>";
            echo "Rateio por jumbo $rat";
            print "<br>";            
            echo "Quantidade de jumbos: $mn";
            print "<br>";
            echo "jumbo: $pieces[$j]";
            print "<br>";


        $conn = new mysqli($servername, $username, $password, $dbname);    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT Operador, Ajudante FROM producao_mp where Jumb = '$pieces[$j]';";
          $result = $conn->query($sql);
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result)) {
           
              $Operador_mp = $row[0];
              $Ajudante_mp = $row[1];
              $key_Crg = $Carga.'-'.$i.'-'.$pieces[$j];
                
      
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
          $sql = "INSERT INTO resultado_op_mp 
          ( 
              chave,
              Acabado,
              tempo,
              nome,
              Equipamento
          ) 
          VALUES
          (
             '$key_Crg',
             '$rat',
             '$Tempo_Produtivo',
             '$Operador_mp',
             'Cortadeira'
          )";
          
          
          if (mysqli_query($conn, $sql)) {
                  
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
              }

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
              $sql = "INSERT INTO resultado_op_mp 
              ( 
                  chave,
                  Acabado,
                  tempo,
                  nome,
                  Equipamento
              ) 
              VALUES
              (
                 '$key_Crg',
                 '$rat',
                 '$Tempo_Produtivo',
                 '$Ajudante_mp',
                 'Cortadeira'
              )";
              
              
              if (mysqli_query($conn, $sql)) {
                      
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
                  }
              
            mysqli_close($conn);

        }
    }
        }
    }
}

?>