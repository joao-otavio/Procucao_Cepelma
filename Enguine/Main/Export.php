<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download MP</title>
</head>
<body>


<?php

$pdo = new PDO('mysql:host=localhost;port=3308;dbname=producao', 'root', '');
$stmt = $pdo->prepare('SELECT * FROM producao_mp');   
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$fccd = fopen( '../FileExport/Maquina de papel.csv','w' );
foreach ( $results as $fields ) {
    fputcsv( $fccd, $fields );
}
fclose( $fccd );


$arquivo = "../FileExport/Maquina de papel.csv";
   if(isset($arquivo) && file_exists($arquivo)){
   // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){
      // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }
      header("Content-Type: ".$tipo);
      // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo));
      // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo));
      // informa ao navegador que é tipo anexo e faz abrir a janela de download,
      //tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações
   }



?>
    
</body>
</html>