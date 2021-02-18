<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Obj_Seletor/StyleSelector.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Obj_Seletor/SelectorMod.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">

</head>
<body>

<div id="Containt">
<div class="demo-zone" id="demo-multiple">
		<label><h3>Seleção de Jumbos: </h3></label>
		<hr>
		<select id="brandsMulti" multiple size="3"></select>
		<hr>
		<div class="btns-active">
      
			<button type="button" class="Buts" onClick="empty('brandsMulti')"><i class="excluir"></i><small class="Sm">Limpar</small></button><br>
			<!-- <button class="Buts" onClick="setValues('brandsMulti',['Lamborghini','Land Rover'])">setValue(['Lamborghini','Land Rover'])</button> -->
			<!-- <button class="Buts" onClick="setValues('brandsMulti','all')">Selecionar Todos</button><br> -->
			<!-- <button class="Buts" onClick="setEnable('brandsMulti',false)">disable()</button>
			<button class="Buts" onClick="setEnable('brandsMulti',true)">enable()</button>
			<button class="Buts" onClick="doDestroy('brandsMulti')">destroy()</button> -->
			<br>
			<button type="button"  class="Buts" onClick="document.getElementById('Selects').value=(getValues('brandsMulti')).join(' / ');"><i class="confirmado"></i><small class="Sm">Confirmar</small></button>
&nbsp;
&nbsp;
&nbsp;
		</div>
		<div class="btns-inactive" style="display:none";>
			<button class="demo" onClick="init('brandsMulti')">vanillaSelectBox()</button>
		</div>
    </div>
<br>
<hr>
<input type="text" name="Selects" id="Selects" class="selectable" onchange="document.getElementById('Selects').value=(getValues('brandsMulti')).join(' / ');" required>
	<span id="brandsMultiChoice"></span>
</div>
<?php


  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "producao";
  // Create connectionW
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Jumb FROM producao_mp order by Jumb DESC";
  $result = $conn->query($sql);
  $conn = new mysqli($servername, $username, $password, $dbname);

$JumbosArr = array();
$i = 0;
if ($result->num_rows > 0) {
while ($Jumbos = mysqli_fetch_array($result)) {
$JumbosArr[$i] = $Jumbos[0];
$i = $i+1;
}
}else {
 
  echo "Não foi encontrado este Registro!";
  echo "<br>";
}
$string_array = implode("|", $JumbosArr);

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jumbo FROM saldo_jumbo where peso >= 1 order by jumbo DESC;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
$i = 0;
if ($result->num_rows > 0) {
while ($Pontas = mysqli_fetch_array($result)) {
	$PontasArr[$i] = $Pontas[0];
	$i = $i+1;
}
}else {
echo "Não foi encontrado este Registro!";
echo "<br>";
}
$string_PontArr = implode("|", $PontasArr);

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$conn = new mysqli($servername, $username, $password, $dbname);
$i = 0;
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT jumbo FROM saldo_jumbo where peso <= 0 order by jumbo DESC;";
$result = $conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($result->num_rows > 0) {
while ($Finalizados = mysqli_fetch_array($result)) {

$FinalizadossArr[$i] = $Finalizados[0];
$i = $i+1;

}
}else {

echo "Não foi encontrado este Registro!";
echo "<br>";
}

$string_FinalizadosArr = implode("|", $FinalizadossArr);

?>

<script>
string_array = "<?php echo $string_array; ?>";
let brands = string_array.split("|");


string_PontArr = "<?php echo $string_PontArr; ?>";
let targets = string_PontArr.split("|");


string_FinalizadosArr = "<?php echo $string_FinalizadosArr; ?>";
let lokeds = string_FinalizadosArr.split("|");


</script>

<script src="/ProdCepelma/Enguine/Obj_Seletor/SelectorMod.js"></script>
<script src="/ProdCepelma/Enguine/Obj_Seletor/Inserch_js.js"></script>
</body>
</html>