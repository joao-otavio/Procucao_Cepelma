<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleMP.css">
</head>
<body>
<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Jumb FROM producao_mp";
$result = $conn->query($sql);
$NumJUmb = mysqli_num_rows ($result) +1;

$conn->close();

print "<div id=\"Title\">";
print "<h3>Lançamentos da MP - Jumbo: $NumJUmb</h3>";
print "</div>";
print "<div id =\"Mae\">";

print "<form action=\"Up_MP.php\" method=\"post\" name=\"LcMp\" target=\"blank\" id=\"PostFom\">";
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

print "<div id =\"Opers\">";
print "<Div id=\"Operador\">";
$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = 'MP'";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Operadors\" id=\"Operadors\">Operador: </label>";
  print "<br>";
  print "<select name=\"Operador\" id=\"Operadors\" required>";
  print "<option value=\"0\"></option>";
 
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
    
    print "<br>";
   
       if ($result->num_rows > 0) {
       
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$Nome,\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
print "</Div>";
}

print "<Div id=\"Ajudante\">";
$sql = "SELECT Cod, Nome, Scan FROM operadores where Equipamento = 'MP'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  print "<label for=\"Ajudante\" id=\"Ajudantes\">Ajudante: </label>";
  print "<br>"; 
  print "<select name=\"Ajudante\" id=\"Ajudantes\" required>";
  print "<option value=\"0\"></option>";
 
  while($row = mysqli_fetch_array($result)) {
 
    $Cod = $row[0];
    $Nome = $row[1];
    $Scan = $row[2];
  
    print "<br>";
   
       if ($result->num_rows > 0) {
       
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$Nome,\">$Nome</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
}
print "</div>";
print "</div>";

print "<div id = \"Job\">";
print "<br>";
print "<label for=\"Data\">Data de Lançamento: </label>";
print "<br>";
print "<input type=\"date\" name=\"Data\" id=\"Data\" required>";
print "<br>";
print "<label for=\"H_inicio\">Hora de Inicio: </label>";
print "<br>"; 
print "<input type=\"time\" name=\"H_inicio\" id=\"H_inicio\" required>";
print "<br>"; 
print "<label for=\"H_fim\">Hora de Termino: </label>";
print "<br>"; 
print "<input type=\"time\" name=\"H_fim\" id=\"H_fim\" required>";
print "<br>"; 
print "</div>";

print "<div id=\"Parada\" calss=\"Parada\">";
print "<div id=\"lines\"></iv>";
print "<button type=\"button\" onclick=\"addInput('lines')\" id=\"BtAdd\">Adicionar Manutenção</button>";
print "</div>";


print "<div id=\"produto\">";


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "producao";


$sql = "SELECT Codigo, Tipo FROM tipo_de_papel";
$result = $conn->query($sql);


$MyArray = array();
if ($result->num_rows > 0) {
  print "<label for=\"Papel\">Tipo de Papel: </label>";
print "<br>"; 
print "<select name=\"Papel\" id=\"Papel\" required>";
  print "<option value=\"0\"></option>";
 
  while($row = mysqli_fetch_array($result)) {
 
    $CodP = $row[0];
    $TipoP = $row[1];
     print "<br>";
   
       if ($result->num_rows > 0) {
       
        // $FcArray = [];
        // $MyArray = [];
        if ($Cod <> "") {
        // array_push($MyArray, [$Cod, $Nome, $Scan]);
        print "<option value=\"$TipoP\">$TipoP</option>";
        }else {
            while($row = mysqli_fetch_array($result)) {
                $Element = "$row[1],$row[2],";
                
             }
        }
        } 

   }
   
print "</select>";
print "<br>"; 
}

print "<label for=\"Gramatura\">Gramatura: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Gramatura1\" name=\"Gramatura1\" min=\"1\" max=\"120\" required>";
print "<input type=\"number\" id=\"Gramatura2\" name=\"Gramatura2\" min=\"1\" max=\"120\" required>";
print "<br>"; 
print "<label for=\"Tamanho\">Tamanho: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Tamanho\" name=\"Tamanho\" min=\"1\" max=\"160\" required>";
print "<br>"; 
print "<label for=\"Rotacao\">Rotação: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Rotacao\" name=\"Rotacao\" min=\"1\" max=\"2000\" required>";
print "<br>"; 
print "<label for=\"Peso\">Peso: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Peso\" name=\"Peso\" min=\"1\" max=\"700\" required>";
print "</div>"; 
$conn->close();

print "</div>";

print "<div id=\"Buttons\">";
print "<input type=\"submit\" value=\"Enviar\" name=\"Submit\" hidden>";
print "<button type=\"button\"id=\"BtAddm\" hidden>Teste</button>";
print "<a href=\"#\" type=\"button\"id=\"BtConcNext\">Lançar Proximo</a>";
print "</div>";

print "<div id=\"Find\">";
print "<input Type=\"number\" id=\"TxFind\">";
print "<button type=\"button\"id=\"BtFind\" >Buscar</button>";
print "</div>";



print "<input type=\"text\" name=\"TempProd\" id=\"TempProd\" hidden>";
print "<input type=\"text\" name=\"TempG\" id=\"TempG\" hidden>";
print "<input type=\"text\" name=\"TempF\" id=\"TempF\" hidden>";
print "<input type=\"text\" name=\"GramaturaG\" id=\"GramaturaG\" hidden>";
print "<input type=\"Text\" name=\"GramaturaB\" id=\"GramaturaB\" hidden>";
print "<input type=\"text\" name=\"GramaturaC\" id=\"GramaturaC\" hidden>";
print "<input type=\"text\" name=\"NumMan\" id=\"NumMan\" hidden>";
print "<input type=\"text\" name=\"NumJum\" id=\"NumJum\" value=\"$NumJUmb\" hidden>";
print "</form>";
?>

<div>
  <div id="Tmp"></div>
</div>

<script>
  document.getElementById("Operadors").focus;
var line = 1;
var Adicted = 0;


function addInput(divName) {
  var newdiv = document.createElement('div');
  newdiv.innerHTML  = '<br></br>['+line +']';
  newdiv.innerHTML += '<hr>';
  newdiv.innerHTML += '<label for="Pddesc">Descrição da parada</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<textarea name="Pddesc'+line +'_1" id="Pddesc'+line +'_1" cols="30" rows="10" class= \"Pddesc\" required></textarea> ';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<label for="PdIni">Hora Inicial</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<input type="time" name="PdIni'+line +'_1" id="PdIni'+line +'_1" class= \"PdIni\" required>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<label for="PdFin">Hora Final</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<input type="time" name="PdFin'+line +'_2" id="PdFin'+line +'_2" class= \"PdFin\" required>';
  newdiv.innerHTML += '<input type="time" name="TemPar'+line +'_2" id="TemPar'+line +'_2" hidden>';
  document.getElementById(divName).appendChild(newdiv);
  line++;
  Adicted=Adicted+1;
  // alert('Adicionado Manutenção: '+Adicted);
  document.getElementById('NumMan').value = Adicted;
}


function pad(num) {
return ("0"+num).slice(-2);
}
// _____________________________________________________________________
function diffTime(start,end) {
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + e[0]*60,
   diff = eMin-sMin;
  if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
}  
// _______________________________________________________________________
function diffTimeVid(start,end) {
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0]+25)*60,
   diff = eMin-sMin;
  if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
}  
// _______________________________________________________________________

document.getElementById('BtAddm').onclick=function() {

if (document.getElementById('H_inicio').value < 
      document.getElementById('H_fim').value
) {

  alert('Tempo de Fabricação de: '+ diffTime(
      document.getElementById('H_inicio').value, 
      document.getElementById('H_fim').value
  ));
 document.getElementById('TempProd').value = diffTime(
      document.getElementById('H_inicio').value, 
      document.getElementById('H_fim').value
  );
}else{
  alert('Tempo de Fabricação de: '+ diffTimeVid(
      document.getElementById('H_inicio').value, 
      (document.getElementById('H_fim').value)
  ));
  document.getElementById('TempProd').value = diffTime(
      document.getElementById('H_inicio').value, 
      document.getElementById('H_fim').value
  )};

var i = 1;

for (Cont=0;Cont<(line+1);Cont++){
  if (document.getElementById('PdIni'+i +'_1')!=null) {
  if (document.getElementById('PdIni'+i +'_1').value < 
      document.getElementById('PdFin'+i +'_2').value
) {

  alert('Tempo de Manutenção '+i+' de: '+ diffTime(
      document.getElementById('PdIni'+i +'_1').value, 
      document.getElementById('PdFin'+i +'_2').value
  ));
 document.getElementById('TemPar'+i +'_2').value = diffTime(
      document.getElementById('PdIni'+i +'_1').value, 
      document.getElementById('PdFin'+i +'_2').value
  );
}else{
  alert('Tempo de Manutenção '+i+' de: '+ diffTimeVid(
      document.getElementById('PdIni'+i +'_1').value, 
      (document.getElementById('PdFin'+i +'_2').value)
  ));
  document.getElementById('TemPar'+i +'_2').value = diffTime(
      document.getElementById('PdIni'+i +'_1').value, 
      document.getElementById('PdFin'+i +'_2').value
  )}
  i++;
  }
      
}
var Time2 = '00:00';
var y = 1;
var Time1 = document.getElementById('TempProd').value;
for (num=0;num<line;num++){
  if (document.getElementById('TemPar'+y +'_2')!=null) {

Time2 = SunTime(
  document.getElementById('TemPar'+y +'_2').value, 
  Time2
); 
}
y++;
}

function SunTime(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0])*60,
   diff = eMin+sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

document.getElementById('TempG').value = Time2;
alert('tempo total de manutenção: '+Time2);


function Reduct1(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0])*60,
   diff = eMin-sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

  function Reduct2(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0]+25)*60,
   diff = eMin-sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

if (
  document.getElementById('TempProd').value <
  document.getElementById('TempG').value)
  { 
    alert('Tempo de Manutenção maior que o Tempo de Fabricação Verificar Erro.');
  }
else
{
  var Time3  = Reduct1(
  document.getElementById('TempG').value,
  document.getElementById('TempProd').value
);
}
 document.getElementById('TempF').value = Time3;
 alert('tempo real Produtivo: '+Time3+'\ '+document.getElementById('TempG').value+'\ '+document.getElementById('TempProd').value);

var grang = 0;
var gran1 =   document.getElementById('Gramatura1').value;
var gran2 =   document.getElementById('Gramatura2').value;

if (gran1 < gran2) {
  grang = (parseInt(gran1) + parseInt(gran2))/2;
  document.getElementById('Gramatura1').value = gran1;
  document.getElementById('Gramatura2').value = gran2;
  document.getElementById('GramaturaG').value = grang;
  document.getElementById('GramaturaB').value = gran1+'/'+gran2;
  alert('Gramatura 1: '+ gran1 +' ,Gramatura 2: '+gran2 + ' ,Gramatura Media: '+ grang);
}else{
  grang = (parseInt(gran1) + parseInt(gran2))/2;
  document.getElementById('Gramatura1').value = gran2;
  document.getElementById('Gramatura2').value = gran1;
  document.getElementById('GramaturaG').value = grang;
  document.getElementById('GramaturaB').value = gran2+'/'+gran1;
  alert('Gramatura 1: '+ gran1 +' ,Gramatura 2: '+gran2 + ' ,Gramatura Media: '+ grang);
}

var PesV = document.getElementById('Peso').value;
var TamV = document.getElementById('Tamanho').value;
var RotV = document.getElementById('Rotacao').value;
var s = Time3.split(":"), TempoV = +s[1] + s[0]*60;

var w = parseInt(TamV) / 100;
var x = ((parseInt(RotV)*113)/2000);
var y = parseInt(TempoV) / 60;
var z = (parseInt(PesV)/(parseInt(w)+parseInt(x)+parseInt(y)));
var GramaturaMedia = z*10;
document.getElementById('GramaturaC').value = GramaturaMedia;
alert(w + ' ' + x+ ' ' +y+ ' ' +z+ ' ' +GramaturaMedia); 
}


// 2 Adicionando dados e refazendo tela ___________________________________________

document.getElementById('BtConcNext').onclick=function() {

if (document.getElementById('H_inicio').value < 
      document.getElementById('H_fim').value
) {

  // alert('Tempo de Fabricação de: '+ diffTime(
  //     document.getElementById('H_inicio').value, 
  //     document.getElementById('H_fim').value
  // ));
 document.getElementById('TempProd').value = diffTime(
      document.getElementById('H_inicio').value, 
      document.getElementById('H_fim').value
  );
}else{
  // alert('Tempo de Fabricação de: '+ diffTimeVid(
  //     document.getElementById('H_inicio').value, 
  //     (document.getElementById('H_fim').value)
  // ));
  document.getElementById('TempProd').value = diffTime(
      document.getElementById('H_inicio').value, 
      document.getElementById('H_fim').value
  )};

var i = 1;

for (Cont=0;Cont<(line+1);Cont++){
  if (document.getElementById('PdIni'+i +'_1')!=null) {
  if (document.getElementById('PdIni'+i +'_1').value < 
      document.getElementById('PdFin'+i +'_2').value
) {

  // alert('Tempo de Manutenção '+i+' de: '+ diffTime(
  //     document.getElementById('PdIni'+i +'_1').value, 
  //     document.getElementById('PdFin'+i +'_2').value
  // ));
 document.getElementById('TemPar'+i +'_2').value = diffTime(
      document.getElementById('PdIni'+i +'_1').value, 
      document.getElementById('PdFin'+i +'_2').value
  );
}else{
  // alert('Tempo de Manutenção '+i+' de: '+ diffTimeVid(
  //     document.getElementById('PdIni'+i +'_1').value, 
  //     (document.getElementById('PdFin'+i +'_2').value)
  // ));
  document.getElementById('TemPar'+i +'_2').value = diffTime(
      document.getElementById('PdIni'+i +'_1').value, 
      document.getElementById('PdFin'+i +'_2').value
  )}
  i++;
  }
      
}
var Time2 = '00:00';
var y = 1;
var Time1 = document.getElementById('TempProd').value;
for (num=0;num<line;num++){
  if (document.getElementById('TemPar'+y +'_2')!=null) {

Time2 = SunTime(
  document.getElementById('TemPar'+y +'_2').value, 
  Time2
); 
}
y++;
}

function SunTime(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0])*60,
   diff = eMin+sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

document.getElementById('TempG').value = Time2;
// alert('tempo total de manutenção: '+Time2);


function Reduct1(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0])*60,
   diff = eMin-sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

  function Reduct2(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0]+25)*60,
   diff = eMin-sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

if (
  document.getElementById('TempProd').value <
  document.getElementById('TempG').value)
  { 
    // alert('Tempo de Manutenção maior que o Tempo de Fabricação Verificar Erro.');
  }
else
{
  var Time3  = Reduct1(
  document.getElementById('TempG').value,
  document.getElementById('TempProd').value
);
}
 document.getElementById('TempF').value = Time3;
 // alert('tempo real Produtivo: '+Time3+'\ '+document.getElementById('TempG').value+'\ '+document.getElementById('TempProd').value);

var grang = 0;
var gran1 =   document.getElementById('Gramatura1').value;
var gran2 =   document.getElementById('Gramatura2').value;

if (gran1 < gran2) {
  grang = (parseInt(gran1) + parseInt(gran2))/2;
  document.getElementById('Gramatura1').value = gran1;
  document.getElementById('Gramatura2').value = gran2;
  document.getElementById('GramaturaG').value = grang;
  document.getElementById('GramaturaB').value = gran1+'/'+gran2;
  // alert('Gramatura 1: '+ gran1 +' ,Gramatura 2: '+gran2 + ' ,Gramatura Media: '+ grang);
}else{
  grang = (parseInt(gran1) + parseInt(gran2))/2;
  document.getElementById('Gramatura1').value = gran2;
  document.getElementById('Gramatura2').value = gran1;
  document.getElementById('GramaturaG').value = grang;
  document.getElementById('GramaturaB').value = gran2+'/'+gran1;
  // alert('Gramatura 1: '+ gran1 +' ,Gramatura 2: '+gran2 + ' ,Gramatura Media: '+ grang);
}

var PesV = document.getElementById('Peso').value;
var TamV = document.getElementById('Tamanho').value;
var RotV = document.getElementById('Rotacao').value;
var s = Time3.split(":"), TempoV = +s[1] + s[0]*60;

var w = parseInt(TamV) / 100;
var x = ((parseInt(RotV)*113)/2000);
var y = parseInt(TempoV) / 60;
var z = (parseInt(PesV)/(parseInt(w)+parseInt(x)+parseInt(y)));
var GramaturaMedia = z*10;
document.getElementById('GramaturaC').value = GramaturaMedia;
// alert(w + ' ' + x+ ' ' +y+ ' ' +z+ ' ' +GramaturaMedia); 

document.getElementById("PostFom").submit();

var Init = document.getElementById("H_fim").value;
var Dt = document.getElementById("Data").value;
var Tp = document.getElementById("Papel").value;
var Gran1 = document.getElementById("Gramatura1").value;
var Gran2 = document.getElementById("Gramatura2").value;
var Tmn = document.getElementById("Tamanho").value;
var Rot = document.getElementById("Rotacao").value;
var Ps = document.getElementById("Peso").value;
var Op = document.getElementById("Operadors").value;
var Aj = document.getElementById("Ajudantes").value;

document.location.reload(true);

document.getElementById("H_fim").value = Init ;
document.getElementById("Data").value = Dt ;
document.getElementById("Papel").value = Tp;
document.getElementById("Gramatura1").value = Gran1;
document.getElementById("Gramatura2").value = Gran2;
document.getElementById("Tamanho").value = Tmn;
document.getElementById("Rotacao").value = Rot;
document.getElementById("Peso").value = Ps;
document.getElementById("Operadors").value = Op;
document.getElementById("Ajudantes").value = Aj;
}

document.getElementById('BtFind').onclick=function() {
var Jumb_Busca = document.getElementById('TxFind').value;



}

</script>


</body>
</html>