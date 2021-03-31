
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleBalanca.css">

</head>
<body>
  
<?php
if (isset($_GET["TxFind"])) {
  $nome = $_GET["TxFind"];
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  $carga = "1";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Operador, Ajudante, Formatos, Papel, Bancas, Cod FROM cortadeira where carga = '$nome';";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);
  $x = "0";
  $y = "1";
  if ($result->num_rows > 0){
    while($row = mysqli_fetch_array($result)) {
      $operador = $row[0];
      $ajudante = $row[1];
      $formato = $row[2];
      $papel = $row[3];
      $bancas = $row[4];
      $x = $x + $bancas;
      if ($bancas >0) {
    
      print "<div>";
      print "<div class=\"child_Cont\">";
      print "<strong>Operador:</strong> $operador";
      print "<br>";
      print "<strong>Ajudante:</strong> $ajudante";
      print "<br>";
      print "<strong>Formato/Papel:</strong> $formato - $papel";
      print "<br>";
      print "<br>";
      print "</div>";

      print "<div class=\"child_Cont\">";

      for ($i=0; $i < $bancas; $i++) { 

              $conn_T = new mysqli($servername, $username, $password, $dbname);
              if ($conn_T->connect_error) {
              die("Connection failed: " . $conn_T->connect_error);
              }

              $sql_T = "SELECT * FROM balanca where Key_unix = '$nome-$y';";
              $result_T = $conn_T->query($sql_T);
              $conn_T = new mysqli($servername, $username, $password, $dbname);

              if ($result_T->num_rows >0){
               print "<hr>";
               print "<span class=\"Spn_Conc\"><i class=\"like\"></i><strong>Palet</strong> $y Concluido</span>";
               print "<hr>";

               $y++;  
              }else{
                print "<div class=\"Mini_Cont\">";
                print "<label for=\"$nome-$y\"><strong>Palet: </strong>$y</label>";
                print "<br>";
                print "<input type=\"text\" id=\"$nome-$y\" name=\"$nome-$y\" class=\"Inpts\" onblur=\"CalcZ(this)\">";
                print "<input type=\"text\" id=\"$nome-$y-ps\" name=\"$nome-$y-ps\" class=\"Inpts\" hidden>";
                
                print "<input type=\"text\" id=\"Gr_DDS\" name=\"$nome-$y-G1\" class=\"Inpts\" value =\"$operador\" hidden>";
                print "<input type=\"text\" id=\"Gr_DDS\" name=\"$nome-$y-G2\" class=\"Inpts\" value =\"$ajudante\" hidden>";
                print "<input type=\"text\" id=\"Gr_DDS\" name=\"$nome-$y-G3\" class=\"Inpts\" value =\"$formato\" hidden>";
                print "<input type=\"text\" id=\"Gr_DDS\" name=\"$nome-$y-G4\" class=\"Inpts\" value =\"$papel\" hidden>";
                print "<input type=\"text\" id=\"$nome-p$y\" name=\"$nome-p$y\" class=\"Inpts\" value =\"\" hidden>";
                              
                $y++;  
                print "</div>";
              }
            
      }
      
      print "<hr>";
      print "";
      print "";
      print "</div>";
    
      }
    }
  }
  print "<input type=\"text\" id=\"Cg\" name=\"Carga\" class=\"Inpts\" value =\"$nome\" hidden>";
  print "<input type=\"text\" id=\"Plts\" name=\"Plts\" class=\"Inpts\" value =\"$x\" hidden>";
  print "";
  print "";
  print "";
  print "";
  print "";
}
?>

</body>
</html>