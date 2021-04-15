<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hating MP</title>
    <link rel="stylesheet" type="text/css" href="../Obj_Relators/Ratinng.css">
</head>
<body>
<?php

include "../Obj_conection/Conect_Producao.php";

// -----------------
// jumbos destaque
$Maior_Jb = "";
$Mr_Operador ="";
$Mr_ajudante ="";
$Mr_Peso = "";
$Mr_tempo = "";
$Mr_data = "";
$Mr_Papel = "";

$Menor_Jb = "";
$Mn_Operador ="";
$Mn_ajudante ="";
$Mn_Peso = "";
$Mn_tempo = "";
$Mn_data = "";
$Mn_Papel = "";

// -----------------



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT max(Peso) FROM producao_mp;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {
$Mr_Peso = $row[0];   

}
}else{
    echo "cenection falha";
}

$sql = "SELECT Jumb, Operador, Ajudante, Temp_Prod, Data, Tipo FROM producao_mp where Peso = '$Mr_Peso'";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) { 
$Maior_Jb = $row[0];
$Mr_Operador =$row[1];
$Mr_ajudante =$row[2];
$Mr_tempo = $row[3];
$Mr_data = $row[4];
$Mr_Papel = $row[5];

    }
  }else{
    echo "vazio";
  }

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT min(Peso) FROM producao_mp;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {
$Mn_Peso = $row[0];   


$sql = "SELECT Jumb, Operador, Ajudante, Temp_Prod, Data, Tipo FROM producao_mp where Peso = '$Mn_Peso'";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) { 
$Menor_Jb = $row[0];
$Mn_Operador =$row[1];
$Mn_ajudante =$row[2];
$Mn_tempo = $row[3];
$Mn_data = $row[4];
$Mn_Papel = $row[5];
    }
  }

}
}else{
    echo "cenection falha";
}

$rate = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Peso FROM producao_mp;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {

$rate = $rate + $row[0];   

}
}else{
    echo "cenection falha";
}


$rate = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Peso FROM producao_mp;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {

$rate = $rate + $row[0];   

}
}else{
    echo "cenection falha";
}

print"<div class=\"Title2\">";
print"<div class=\"BoxT\">";
echo "<h1 class=\"Tx_title\">Produção Geral da MP: $rate</h1>";
print"</div>";
print"</div>";
print"<br>";

print"<div class=\"Medio_Div\">";
print"<span><strong>Jumbo De maior peso:</strong> $Maior_Jb</span>";
print"<br>";
print"<span><strong>Peso:</strong> $Mr_Peso</span>";
print"<br>";
print"<span><strong>Operador:</strong> $Mr_Operador</span>";
print"<br>";
print"<span><strong>Ajudante:</strong> $Mr_ajudante</span>";
print"<br>";
print"<span><strong>Tempo:</strong> $Mr_tempo</span>";
print"<br>";
print"<span><strong>Data:</strong> $Mr_data</span>";
print"<br>";
print"<span><strong>Tipo de Papel:</strong> $Mr_Papel</span>";
print"</div>";
print "</div>";



print"<div class=\"Medio_Div\">";
print"<span><strong>Jumbo De Menor peso:</strong> $Menor_Jb</span>";
print"<br>";
print"<span><strong>Peso:</strong> $Mn_Peso</span>";
print"<br>";
print"<span><strong>Operador:</strong> $Mn_Operador</span>";
print"<br>";
print"<span><strong>Ajudante:</strong> $Mn_ajudante</span>";
print"<br>";
print"<span><strong>Tempo:</strong>$Mn_tempo</span>";
print"<br>";
print"<span><strong>Data:</strong>$Mn_data</span>";
print"<br>";
print"<span><strong>Tipo de Papel:</strong> $Mn_Papel</span>";
print"</div>";
print "</div>";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Nome,Scan  FROM operadores Where Equipamento = 'MP';";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

$i =0;
if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {

$Opers[$i] = $row[0];
$Pic[$i] = $row[1];
$i++;
}

}else{
    echo "cenection falha";
}

print " <div class=\"Major\">";
print"<h2>Taxa de Avaliação dos Operadores MP - Jumbos</h2>";
print "<br>";
print "<hr>";


$Cont = count($Opers);
for ($i=0; $i < $Cont; $i++) { 
$sql = "SELECT Peso FROM producao_mp where Operador = '$Opers[$i]';";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

$Res_t = 0;
if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {
  $Res_t =  $Res_t + $row[0];
}
}
$rating = round(($Res_t * 100)/$rate);



$sql = "SELECT Acabado, Refugado FROM resultado_op_mp where nome = '$Opers[$i]';";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

$acabamento_Ac = 0;
$acabamento_Rf = 0;
if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {
  $acabamento_Ac =  $acabamento_Ac + $row[0];
  $acabamento_Rf =  $acabamento_Rf + $row[1];
}
}
if ($acabamento_Ac != 0) {
  
$tx_Acab = $acabamento_Ac - $acabamento_Rf;
$Ht_Acab = round(($tx_Acab * 100)/$Res_t);
$HT_Efc = round((($acabamento_Ac - $acabamento_Rf)/$acabamento_Ac)*100);


}









if ($rating > 0) {
 print " <div class=\"Rating\">";
 print "<img src=\"http://".$_SERVER['HTTP_HOST']."/SkyBry/IMAGENS/".$Pic[$i]."\" alt=\"PicOPs\" class=\"PicPer\" width=\"50\" height=\"50\">";
 print "<h3>$Opers[$i]</h3>";
 print "<br>";
 print "<span><small>MP - Produção</small></span>";
 print "<br>";
 print "<span>Produção Geral: $Res_t kg</span>";
 print "<br>";
 print "<span>Acagamento: $tx_Acab Kg </span>";
 print "<br>";
 print "<span>performance: $rating% </span>";
 print "<br>";
 print "<span>Eficiencia: $Ht_Acab% </span>";
 print "<br>";
 print "<span>Qualidade: $HT_Efc% </span>";
 print "<br>";
if ($rating >= 5 && $rating <= 9) {
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<br>";
print "<span>Produção inferior</span>";
}elseif ($rating > 10 && $rating <=14) {
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<br>";
print "<span>Produção baixa</span>";
}elseif ($rating >= 15 && $rating <= 19) {
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<br>";
print "<span>Produção média</span>";
}elseif ($rating >= 20 && $rating <= 24) {
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<br>";
print "<span>Produção boa</span>";
}elseif ($rating >= 25) {
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
print "<br>";
print "<span color=\"\">Produção excelente</span>";
}
print "</div>";
}
}
print "</div>";




$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Nome,Scan  FROM operadores Where Equipamento = 'MP';";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

$i =0;
if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {

$Opers[$i] = $row[0];
$Pic[$i] = $row[1];
$i++;
}

}else{
    echo "cenection falha";
}


print " <div class=\"Major\">";
print"<h2>Taxa de Avaliação dos Ajudantes MP - Jumbos</h2>";
print "<br>";
print "<hr>";


$Cont = count($Opers);
for ($i=0; $i < $Cont; $i++) { 
$sql = "SELECT Peso FROM producao_mp where Ajudante = '$Opers[$i]';";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

$Res_t = 0;
if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)) {
  $Res_t =  $Res_t + $row[0];
}
}
$rating = round(($Res_t * 100)/$rate);

if ($rating > 0) {
 print " <div class=\"Rating\">";
 print "<img src=\"http://".$_SERVER['HTTP_HOST']."/SkyBry/IMAGENS/".$Pic[$i]."\" alt=\"PicOPs\" class=\"PicPer\" width=\"50\" height=\"50\">";
 print "<h3>$Opers[$i]</h3>";
 print "<br>";
 print "<span><small>MP - Produção</small></span>";
 print "<br>";
 print "<span>Produção Geral: $Res_t</span>";
 print "<br>";
 print "<span>Participação sobre o resultado: $rating% </span>";
 print "<br>";
if ($rating >= 5 && $rating <= 9) {
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
 print "<br>";
 print "<span>Produção inferior</span>";
}elseif ($rating > 10 && $rating <=14) {
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
 print "<br>";
 print "<span>Produção baixa</span>";
}elseif ($rating >= 15 && $rating <= 19) {
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
 print "<br>";
 print "<span>Produção média</span>";
}elseif ($rating >= 20 && $rating <= 24) {
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
 print "<br>";
 print "<span>Produção boa</span>";
}elseif ($rating >= 25) {
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
  print "<img src=\"../pic/star.png\" width=\"30\" height=\"30\">";
 print "<br>";
 print "<span color=\"\">Produção excelente</span>";
}
print "</div>";
}
}
print "</div>";
?>


<form class="Form" action="">
<hr>
<h3>Relatorio de Produção por Periodo</h3>
<label for="">Data e Hora de inicio</label>
<br>
<input type="date">
<input type="time">
<br>
<label for="">Data e Hora de fim</label>
<br>
<input type="date">
<input type="time">
<br>
<span><small><small>**A Hora e Opcional</small></small></span>
<br>
<input type="submit">
</form>


</body>
</html>