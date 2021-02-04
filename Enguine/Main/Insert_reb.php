<!-- campos POST Tratados para o Banco

name="Equipamento"
------ Inclusão dos operadores
name="Operador"
name="Ajudante"
name="jumb">
name="D_in" 
name="H_in"
name="D_fn" 
name="H_fn"
------ inclusão dos padrões
name="Padrao" 
------ Inclusão dos formatos
name="MySelectConf"
name="Refug" 

name="Tp_Fabric"
name="TempVida"
name="TempEspera"

name="Mp_1"
name="Mp_2"
name="Mp_3"
name="Mp_4"
name="Mp_5"

name="Cp_1"
name="Cp_2"
name="Cp_3"
name="Cp_4"
name="Cp_5"

name="PesTotal"
name="PesPonta"
name="PesSegregado"
name="PesRefugo"
name="PesAcabado"

name="Md_1"
name="Md_2"
name="Md_3"
name="Md_4"
name="Md_5"

name="Qt_1" 
name="Qt_2" 
name="Qt_3" 
name="Qt_4" 
name="Qt_5" 

Name="M1_p1" 
Name="M1_p2" 
Name="M1_p3" 
Name="M1_p4" 
Name="M1_p5" 

Name="M2_p1" 
Name="M2_p2" 
Name="M2_p3" 
Name="M2_p4" 
Name="M2_p5"

Name="M3_p1" 
Name="M3_p2" 
Name="M3_p3" 
Name="M3_p4" 
Name="M3_p5"

Name="M4_p1" 
Name="M4_p2" 
Name="M4_p3" 
Name="M4_p4" 
Name="M4_p5"

Name="M5_p1" 
Name="M5_p2" 
Name="M5_p3" 
Name="M5_p4" 
Name="M5_p5" 

script do jumbo

name=\"Boca\"
name=\"Dif_med\"
name=\"TempJumb\"
name=\"Gramatura\"
name=\"Calc\"
name=\"Op1\"
name=\"Op2\"    
name=\"DtIni_VIDA\"
name=\"HrIni_vida\"
name=\"HrIni_Esp\"
name=\"PesJUmb_get\"-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$chave =$_POST['chave'];
$Equipamento = $_POST['Equipamento'];
$Operador = $_POST['Operador'];
$Ajudante = $_POST['Ajudante'];
$jumb = $_POST['jumb'];
$D_in = $_POST['D_in'];
$H_in = $_POST['H_in'];
$D_fn = $_POST['D_fn'];
$H_fn = $_POST['H_fn'];
$Padrao = $_POST['Padrao'];
$MySelectConf = $_POST['MySelectConf'];

if (isset($_POST['Refug'])) {
$Refug = $_POST['Refug'];
}else{
$Refug = "0";
}

if (isset($_POST['Md_1'])) {
    $Md_1 = $_POST['Md_1'];
    $Mp_1 = $_POST['Mp_1'];
    $Cp_1 = $_POST['Cp_1'];
    $Qt_1 = $_POST['Qt_1'];
    $M1_p1 = $_POST['M1_p1'];
    $M1_p2 = $_POST['M1_p2'];
    $M1_p3 = $_POST['M1_p3'];
    $M1_p4 = $_POST['M1_p4'];
    $M1_p5 = $_POST['M1_p5'];
    $PesUnit_1 = $_POST['PesUnit_1'];
    $QunatUnit_1 = $_POST['QunatUnit_1'];
    $RefUnit_1 = $_POST['RefUnit_1'];
    }else{
    $Md_1 = "0";
    $Mp_1 = "0";
    $Cp_1 = "0";
    $Qt_1 = "0";
    $M1_p1 = "0";
    $M1_p2 = "0";
    $M1_p3 = "0";
    $M1_p4 = "0";
    $M1_p5 = "0";
    $PesUnit_1 ="0";
    $QunatUnit_1 = "0";
    $RefUnit_1 = "0"; 
    }

    if (isset($_POST['Md_2'])) {
    $Md_2 = $_POST['Md_2'];
    $Mp_2 = $_POST['Mp_2'];
    $Cp_2 = $_POST['Cp_2'];
    $Qt_2 = $_POST['Qt_2'];
    $M2_p1 = $_POST['M2_p1'];
    $M2_p2 = $_POST['M2_p2'];
    $M2_p3 = $_POST['M2_p3'];
    $M2_p4 = $_POST['M2_p4'];
    $M2_p5 = $_POST['M2_p5'];
    $PesUnit_2 = $_POST['PesUnit_2'];
    $QunatUnit_2 = $_POST['QunatUnit_2'];
    $RefUnit_2 = $_POST['RefUnit_2'];
    }else{
    $Md_2 = "0";
    $Mp_2 = "0";
    $Cp_2 = "0";
    $Qt_2 = "0";
    $M2_p1 = "0";
    $M2_p2 = "0";
    $M2_p3 = "0";
    $M2_p4 = "0";
    $M2_p5 = "0";
    $PesUnit_2 ="0";
    $QunatUnit_2 = "0";
    $RefUnit_2 = "0";
    }

    if (isset($_POST['Md_3'])) {
    $Md_3 = $_POST['Md_3'];
    $Mp_3 = $_POST['Mp_3'];
    $Cp_3 = $_POST['Cp_3'];
    $Qt_3 = $_POST['Qt_3'];
    $M_p1 = $_POST['M3_p1'];
    $M_p2 = $_POST['M3_p2'];
    $M_p3 = $_POST['M3_p3'];
    $M_p4 = $_POST['M3_p4'];
    $M_p5 = $_POST['M3_p5'];
    $PesUnit_3 = $_POST['PesUnit_3'];
    $QunatUnit_3 = $_POST['QunatUnit_3'];
    $RefUnit_3 = $_POST['RefUnit_3'];
    }else{
    $Md_3 = "0";
    $Mp_3 = "0";
    $Cp_3 = "0";
    $Qt_3 = "0";
    $M3_p1 = "0";
    $M3_p2 = "0";
    $M3_p3 = "0";
    $M3_p4 = "0";
    $M3_p5 = "0";
    $PesUnit_3 = "0";
    $QunatUnit_3 = "0";
    $RefUnit_3 = "0";
    }

    if (isset($_POST['Md_4'])) {
    $Md_4 = $_POST['Md_4'];
    $Mp_4 = $_POST['Mp_4'];
    $Cp_4 = $_POST['Cp_4'];
    $Qt_4 = $_POST['Qt_4'];
    $M4_p1 = $_POST['M4_p1'];
    $M4_p2 = $_POST['M4_p2'];
    $M4_p3 = $_POST['M4_p3'];
    $M4_p4 = $_POST['M4_p4'];
    $M4_p5 = $_POST['M4_p5'];
    $PesUnit_4 = $_POST['PesUnit_4'];
    $QunatUnit_4 = $_POST['QunatUnit_4'];
    $RefUnit_4 = $_POST['RefUnit_4'];
    }else{
    $Md_4 = "0";
    $Mp_4 = "0";
    $Cp_4 = "0";
    $Qt_4 = "0";
    $M4_p1 = "0";
    $M4_p2 = "0";
    $M4_p3 = "0";
    $M4_p4 = "0";
    $M4_p5 = "0";
    $PesUnit_4 = "0";
    $QunatUnit_4 = "0";
    $RefUnit_4 = "0";
    }   

    if (isset($_POST['Md_5'])) {
    $Md_5 = $_POST['Md_5'];
    $Mp_5 = $_POST['Mp_5'];
    $Cp_5 = $_POST['Cp_5'];
    $Qt_5 = $_POST['Qt_5'];
    $M5_p1 = $_POST['M5_p1'];
    $M5_p2 = $_POST['M5_p2'];
    $M5_p3 = $_POST['M5_p3'];
    $M5_p4 = $_POST['M5_p4'];
    $M5_p5 = $_POST['M5_p5'];
    $PesUnit_5 = $_POST['PesUnit_5'];
    $QunatUnit_5 = $_POST['QunatUnit_5'];
    $RefUnit_5 = $_POST['RefUnit_5'];
    }else{
    $Md_5 = "0";
    $Mp_5 = "0";
    $Cp_5 = "0";
    $Qt_5 = "0";
    $M5_p1 = "0";
    $M5_p2 = "0";
    $M5_p3 = "0";
    $M5_p4 = "0";
    $M5_p5 = "0";
    $PesUnit_5 = "0";
    $QunatUnit_5 = "0";
    $RefUnit_5 = "0";
    }

// $Md_1 = $_POST['Md_1'];
// $Md_2 = $_POST['Md_2'];
// $Md_3 = $_POST['Md_3'];
// $Md_4 = $_POST['Md_4'];
// $Md_5 = $_POST['Md_5'];

// $Mp_1 = $_POST['Mp_1'];
// $Mp_2 = $_POST['Mp_2'];
// $Mp_3 = $_POST['Mp_3'];
// $Mp_4 = $_POST['Mp_4'];
// $Mp_5 = $_POST['Mp_5'];

// $Cp_1 = $_POST['Cp_1'];
// $Cp_2 = $_POST['Cp_2'];
// $Cp_3 = $_POST['Cp_3'];
// $Cp_4 = $_POST['Cp_4'];
// $Cp_5 = $_POST['Cp_5'];

// $Qt_1 = $_POST['Qt_1'];
// $Qt_2 = $_POST['Qt_2'];
// $Qt_3 = $_POST['Qt_3'];
// $Qt_4 = $_POST['Qt_4'];
// $Qt_5 = $_POST['Qt_5'];

// $M1_p1 = $_POST['M1_p1'];
// $M1_p2 = $_POST['M1_p2'];
// $M1_p3 = $_POST['M1_p3'];
// $M1_p4 = $_POST['M1_p4'];
// $M1_p5 = $_POST['M1_p5'];

// $M2_p1 = $_POST['M2_p1'];
// $M2_p2 = $_POST['M2_p2'];
// $M2_p3 = $_POST['M2_p3'];
// $M2_p4 = $_POST['M2_p4'];
// $M2_p5 = $_POST['M2_p5'];

// $M3_p1 = $_POST['M3_p1'];
// $M3_p2 = $_POST['M3_p2'];
// $M3_p3 = $_POST['M3_p3'];
// $M3_p4 = $_POST['M3_p4'];
// $M3_p5 = $_POST['M3_p5'];

// $M4_p1 = $_POST['M4_p1'];
// $M4_p2 = $_POST['M4_p2'];
// $M4_p3 = $_POST['M4_p3'];
// $M4_p4 = $_POST['M4_p4'];
// $M4_p5 = $_POST['M4_p5'];

// $M5_p1 = $_POST['M5_p1'];
// $M5_p2 = $_POST['M5_p2'];
// $M5_p3 = $_POST['M5_p3'];
// $M5_p4 = $_POST['M5_p4'];
// $M5_p5 = $_POST['M5_p5'];

$PesTotal = $_POST['PesTotal'];
$PesPonta = $_POST['PesPonta'];
$PesSegregado = $_POST['PesSegregado'];
$PesRefugo = $_POST['PesRefugo'];
$PesAcabado = $_POST['PesAcabado'];

$Boca = $_POST['Boca'];
$Dif_med = $_POST['Dif_med'];
$TempJumb = $_POST['TempJumb'];
$Gramatura = $_POST['Gramatura'];
$Tipo = $_POST['Tipo'];
$Calc = $_POST['Calc'];
$Op1 = $_POST['Op1'];
$Op2 = $_POST['Op2'];
$DtIni_VIDA = $_POST['DtIni_VIDA'];
$HrIni_vida = $_POST['HrIni_vida'];
$HrIni_Esp = $_POST['HrIni_Esp'];
$PesJUmb_get = $_POST['PesJUmb_get'];
$Tp_Fabric = $_POST['Tp_Fabric'];
$TempVida = $_POST['TempVida'];
$TempEspera = $_POST['TempEspera'];


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

$sql = "INSERT INTO rebobinadeira 
(
Equipamento,
Operador,
Ajudante,
jumb,
D_in,
H_in,
D_fn,
H_fn,
Padrao,
MySelectConf,
Refug,
Mp_1,
Mp_2,
Mp_3,
Mp_4,
Mp_5,
Cp_1,
Cp_2,
Cp_3,
Cp_4,
Cp_5,
PesTotal,
PesPonta,
PesSegregado,
PesRefugo,
PesAcabado,
Md_1,
Md_2,
Md_3,
Md_4,
Md_5,
Qt_1,
Qt_2,
Qt_3,
Qt_4,
Qt_5,
M1_p1,
M1_p2,
M1_p3,
M1_p4,
M1_p5,
M2_p1,
M2_p2,
M2_p3,
M2_p4,
M2_p5,
M3_p1,
M3_p2,
M3_p3,
M3_p4,
M3_p5,
M4_p1,
M4_p2,
M4_p3,
M4_p4,
M4_p5,
M5_p1,
M5_p2,
M5_p3,
M5_p4,
M5_p5,
PesUnit_1,
PesUnit_2,
PesUnit_3,
PesUnit_4,
PesUnit_5,
QunatUnit_1,
QunatUnit_2,
QunatUnit_3,
QunatUnit_4,
QunatUnit_5,
Boca,
Dif_med,
TempJumb,
Gramatura,
Calc,
Op1,
Op2,
DtIni_VIDA,
HrIni_vida,
HrIni_Esp,
PesJUmb_get,
TempVida,
TempEspera,
Tp_Fabric,
chave
) 
VALUES 
(
'$Equipamento',
'$Operador',
'$Ajudante',
'$jumb',
'$D_in',
'$H_in',
'$D_fn',
'$H_fn',
'$Padrao',
'$MySelectConf',
'$Refug',
'$Mp_1',
'$Mp_2',
'$Mp_3',
'$Mp_4',
'$Mp_5',
'$Cp_1',
'$Cp_2',
'$Cp_3',
'$Cp_4',
'$Cp_5',
'$PesTotal',
'$PesPonta',
'$PesSegregado',
'$PesRefugo',
'$PesAcabado',
'$Md_1',
'$Md_2',
'$Md_3',
'$Md_4',
'$Md_5',
'$Qt_1',
'$Qt_2',
'$Qt_3',
'$Qt_4',
'$Qt_5',
'$M1_p1',
'$M1_p2',
'$M1_p3',
'$M1_p4',
'$M1_p5',
'$M2_p1',
'$M2_p2',
'$M2_p3',
'$M2_p4',
'$M2_p5',
'$M3_p1',
'$M3_p2',
'$M3_p3',
'$M3_p4',
'$M3_p5',
'$M4_p1',
'$M4_p2',
'$M4_p3',
'$M4_p4',
'$M4_p5',
'$M5_p1',
'$M5_p2',
'$M5_p3',
'$M5_p4',
'$M5_p5',
'$PesUnit_1',
'$PesUnit_2',
'$PesUnit_3',
'$PesUnit_4',
'$PesUnit_5',
'$QunatUnit_1',
'$QunatUnit_2',
'$QunatUnit_3',
'$QunatUnit_4',
'$QunatUnit_5',
'$Boca',
'$Dif_med',
'$TempJumb',
'$Gramatura',
'$Calc',
'$Op1',
'$Op2',
'$DtIni_VIDA',
'$HrIni_vida',
'$HrIni_Esp',
'$PesJUmb_get',
'$TempVida',
'$TempEspera',
'$Tp_Fabric',
'$chave'
)";

if (mysqli_query($conn, $sql)) {
    print "<H3>Lançamento de dados da Rebobinadeira (Mascara)</H3>";
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
    print "<H3>Lançamento de dados da Rebobinadeira (FALHA!!!)</H3>";

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
  $sql = "DELETE FROM saldo_jumbo WHERE jumbo = '$jumb'";
  
  
  if (mysqli_query($conn, $sql)) {
      print "<H3>Removido Saldo Anterior do jumbo</H3>";
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
        echo "Jumbo não posuia saldo (".$jumb.")";  
        
      }
    mysqli_close($conn);



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
  
  $sql = "INSERT INTO saldo_jumbo 
  (
    jumbo,
    peso
  ) 
  VALUES 
  (
    '$jumb',
    '$PesPonta'
  )";
  
  if (mysqli_query($conn, $sql)) {
      print "<H3>Lançamento de Saldo Do Jumbo".$jumb.": ".$PesPonta.".</H3>";
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
      }
    mysqli_close($conn);


  if (isset($_POST['Md_1'])) {
   
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
  
  $sql = "INSERT INTO acabamento_rb 
  (
    chave,
    bobina,
    tipo,
    padrao,
    gramatura,
    gramatura_calc,
    quantidade,
    peso,
    media,
    refugado,
    data
  ) 
  VALUES 
  (
    '$chave',
    '$Md_1',
    '$Tipo',
    '$Padrao',
    '$Gramatura',
    '$Calc',
    '$QunatUnit_1',
    '$PesUnit_1',
    '$Mp_1',
    '$RefUnit_1',
    '$D_fn'
    
  )";
  
  if (mysqli_query($conn, $sql)) {
      print "<H3>Lançamento do ".$Md_1." concluido</H3>";
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
      }
    mysqli_close($conn);
}    

if (isset($_POST['Md_2'])) {
   
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
    
    $sql = "INSERT INTO acabamento_rb 
    (
      chave,
      bobina,
      tipo,
      padrao,
      gramatura,
      gramatura_calc,
      quantidade,
      peso,
      media,
      refugado,
      data
    ) 
    VALUES 
    (
      '$chave',
      '$Md_2',
      '$Tipo',
      '$Padrao',
      '$Gramatura',
      '$Calc',
      '$QunatUnit_2',
      '$PesUnit_2',
      '$Mp_2',
      '$RefUnit_2',
      '$D_fn'
      
    )";
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento do ".$Md_2." concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
  }  


 if (isset($_POST['Md_3'])) {
   
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
    
    $sql = "INSERT INTO acabamento_rb 
    (
      chave,
      bobina,
      tipo,
      padrao,
      gramatura,
      gramatura_calc,
      quantidade,
      peso,
      media,
      refugado,
      data
    ) 
    VALUES 
    (
      '$chave',
      '$Md_3',
      '$Tipo',
      '$Padrao',
      '$Gramatura',
      '$Calc',
      '$QunatUnit_3',
      '$PesUnit_3',
      '$Mp_3',
      '$RefUnit_3',
      '$D_fn'
      
    )";
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento do ".$Md_3." concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
  }  



  if (isset($_POST['Md_4'])) {
   
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
    
    $sql = "INSERT INTO acabamento_rb 
    (
      chave,
      bobina,
      tipo,
      padrao,
      gramatura,
      gramatura_calc,
      quantidade,
      peso,
      media,
      refugado,
      data
    ) 
    VALUES 
    (
      '$chave',
      '$Md_4',
      '$Tipo',
      '$Padrao',
      '$Gramatura',
      '$Calc',
      '$QunatUnit_4',
      '$PesUnit_4',
      '$Mp_4',
      '$RefUnit_4',
      '$D_fn'
      
    )";
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento do ".$Md_4." concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
  } 


  if (isset($_POST['Md_5'])) {
   
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
    
    $sql = "INSERT INTO acabamento_rb 
    (
      chave,
      bobina,
      tipo,
      padrao,
      gramatura,
      gramatura_calc,
      quantidade,
      peso,
      media,
      refugado,
      data
    ) 
    VALUES 
    (
      '$chave',
      '$Md_5',
      '$Tipo',
      '$Padrao',
      '$Gramatura',
      '$Calc',
      '$QunatUnit_5',
      '$PesUnit_5',
      '$Mp_5',
      '$RefUnit_5',
      '$D_fn'
      
    )";
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento do ".$Md_5." concluido</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);
  } 


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
  
  $sql = "INSERT INTO jumbo_localizaçao 
  (
    chave,
    jumbo,
    Equipamento,
    T_Produtivo,
    T_Espera,
    T_Vida,
    D_inicial,
    D_Final,
    H_Inicial,
    H_Final,
    Op1,
    Op2
    
  ) 
  VALUES 
  (
    '$chave',
    '$jumb',
    '$Equipamento',
    '$Tp_Fabric',
    '$TempEspera',
    '$TempVida',
    '$D_in',
    '$D_fn',
    '$H_in',
    '$H_fn',
    '$Operador',
    '$Ajudante'
  
  )";
  
  if (mysqli_query($conn, $sql)) {
      print "<H3>Lançamento da Localização do jumbo ".$jumb." concluido</H3>";
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
      }
    mysqli_close($conn);


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
    
    $sql = "INSERT INTO resultado_op_mp 
    (
    chave,
    Acabado,
    Refugado,
    tempo,
    nome,
    Equipamento
    ) 
    VALUES 
    (
      '$chave',
      '$PesAcabado',
      '$PesSegregado',
      '$Tp_Fabric',
      '$Op1',
      'MP'
      
    )";
    
    if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento de Resultado do ".$Op1." concluido (Produto Acabado)!</H3>";
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
        }
      mysqli_close($conn);

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
      
      $sql = "INSERT INTO resultado_op_mp 
      (
      chave,
      Acabado,
      Refugado,
      tempo,
      nome,
      Equipamento
      ) 
      VALUES 
      (
        '$chave',
        '$PesAcabado',
        '$PesSegregado',
        '$Tp_Fabric',
        '$Op2',
        'MP'
        
      )";
      
      if (mysqli_query($conn, $sql)) {
        print "<H3>Lançamento de Resultado do ".$Op2." concluido (Produto Acabado)!</H3>";
          
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
          }
        mysqli_close($conn);



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
        
        $sql = "INSERT INTO resultado_op_mp 
        (
        chave,
        Acabado,
        Refugado,
        tempo,
        nome,
        Equipamento
        ) 
        VALUES 
        (
          '$chave',
          '$PesAcabado',
          '$PesSegregado',
          '$Tp_Fabric',
          '$Operador',
          '$Equipamento'
          
        )";
        
        if (mysqli_query($conn, $sql)) {
            print "<H3>Lançamento de Resultado do ".$Operador." concluido!</H3>";
            
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
            }
          mysqli_close($conn);



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
          
          $sql = "INSERT INTO resultado_op_mp 
          (
          chave,
          Acabado,
          Refugado,
          tempo,
          nome,
          Equipamento
          ) 
          VALUES 
          (
            '$chave',
            '$PesAcabado',
            '$PesSegregado',
            '$Tp_Fabric',
            '$Ajudante',
            '$Equipamento'
            
          )";
          
          if (mysqli_query($conn, $sql)) {
              print "<H3>Lançamento de Resultado do ".$Ajudante." concluido!</H3>";
              
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
              }
            mysqli_close($conn);

?>
    
</body>
</html>
