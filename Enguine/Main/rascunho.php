<?php


for ($i=1; $i <= $Plts ; $i++) {
    $Operador_mp = "";
    $Ajudante_mp = "";
    $Select = $_POST[$Carga.'-sl-'.$i];
    $pieces = explode(" / ", $Select);
    $mn = count($pieces);
    $Plt_Pes = intval($_POST[$Carga.'-'.$i.'-ps']);
    $rat = gmp_div_r($Plt_Pes, $mn);
    $key_Crg = $Carga.'-'.$i ;
    
    for ($i=0; $i < $mn  ; $i++) { 
    
        $servername = "localhost:3308";
        $username = "root";
        $password = "";
        $dbname = "producao";
        // Create connectionW
        
      
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Operador, Ajudante FROM producao_mp where Jumb = '$pieces[$i]';";
        $result = $conn->query($sql);
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($result->num_rows > 0) {
          while($row = mysqli_fetch_array($result)) {
         
            $Operador_mp = $row[0];
            $Ajudante_mp = $row[1];
    
    
    
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



?>