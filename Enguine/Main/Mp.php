<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleMP.css">
    <!-- <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/Style_padrao.css"> -->
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/ProdCepelma/Enguine/Main/ajax.js"></script>
<input type="text" name="Name_form" id="Name_form" value="MP" hidden>

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
$NumJUmb = mysqli_num_rows ($result) +2;

$conn->close();

print "<div id=\"Title\" class=\"Container_Major\">";
print "<h3 id = \"Titles\">Lançamentos da MP - Jumbo: $NumJUmb</h3>";
print "</div>";
print "<div id =\"Mae\">";



print "<form action=\"Up_MP.php\" method=\"post\" name=\"LcMp\" id=\"PostFom\">";

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

print "<div class=\"Container\" id=\"pessoal_CT\">";
$Param = "MP"; include "../Obj_Pessoal/Objet_pessoal.php";
print "</div>";


print "<div id = \"Time_CT\" class=\"Container\">";
include "../Obj_Data/Objet_data.php";
print "</div>";

print "<div id=\"Paradas_CT\" class=\"Container-parada\">";
include "../Obj_Paradas/Paradas.php";
print "</div>";

print "<div id=\"produto_CT\" class=\"Container\">";

print "<h3>Configurações de Trabalho da MP</h3>";
print "<hr>";
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
print "<select name=\"Papel\" id=\"Papel\" class=\"Inpts\" required>";
  print "<option value=\"\"></option>";
 
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
print "<input type=\"number\" id=\"Tamanho\" class=\"Inpts\" name=\"Tamanho\" min=\"1\" max=\"160\" required>";
print "<br>"; 
print "<label for=\"Rotacao\">Rotação: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Rotacao\" class=\"Inpts\" name=\"Rotacao\" min=\"1\" max=\"2000\" required>";
print "<br>"; 
print "<label for=\"Peso\">Peso: </label>";
print "<br>"; 
print "<input type=\"number\" id=\"Peso\" class=\"Inpts\" name=\"Peso\" min=\"1\" max=\"700\" required>";
print "</div>"; 
$conn->close();

print "</div>";


print "<div id=\"Buttons_CT\" class=\"Container\">";
print "<button type=\"submit\" id=\"BtConcNext\" class=\"Buts\" value=\"Enviar\" name=\"Enviar\"><i class=\"confirmado\"></i><small class=\"Sm\">Enviar</small></button>";
print "<button type=\"button\"id=\"BtAddm\" hidden>Teste</button>";
// print "<button href=\"#\" type=\"button\"id=\"BtConcNext\" Name=\"X1\" class=\"Buts\" hidden><i class=\"confirmado\"></i><small class=\"Sm\">Confirmar</small></button>";
print "<button href=\"#\" type=\"button\"id=\"BtCancelar\" Name=\"X2\" class=\"Buts\"><i class=\"cancelar\"></i><small class=\"Sm\">Cancelar</small></button>";
print "</div>";

print "<div id=\"Find\" class=\"Container\">";
print "<h3><strong>Jumbo</strong>  (Edição): </h3>";
print "<hr>"; 
print "<input Type=\"number\" id=\"TxFind\" class=\"Inpts\" min=\"1\" max=\"1000000\">";
print "<br>"; 
print "<button type=\"button\"id=\"BtFind\" name=\"BtFind\" class=\"Buts\" onclick=\"getDados()\"><i class=\"buscar\"></i><small class=\"Sm\">Buscar</small></button>";
print "</div>";

print "<div id=\"test\">";
print "<input type=\"text\" hidden>";
print "</div>";

print "<input type=\"text\" name=\"TempProd\" id=\"TempProd\" hidden>";
print "<input type=\"text\" name=\"TempG\" id=\"TempG\" hidden>";
print "<input type=\"text\" name=\"TempF\" id=\"TempF\" hidden>";
print "<input type=\"text\" name=\"GramaturaG\" id=\"GramaturaG\" hidden>";
print "<input type=\"Text\" name=\"GramaturaB\" id=\"GramaturaB\" hidden>";
print "<input type=\"text\" name=\"GramaturaC\" id=\"GramaturaC\" hidden>";
print "<input type=\"text\" name=\"NumJum\" id=\"NumJum\" value=\"$NumJUmb\" hidden>";
print "</form>";
print "</div>";

?>
 


<div>
  <div id="Tmp"></div>
</div>

<script>

document.getElementById("test").src="/ProdCepelma/Enguine/Main/ajax.js";

document.getElementById("Operadors").focus;
var line = 1;
var Adicted = 0;




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

var CtTime = document.getElementById("TempF").value;
var PesV = document.getElementById('Peso').value;
var TamV = document.getElementById('Tamanho').value;
var RotV = document.getElementById('Rotacao').value;
var s = CtTime.split(":"), TempoV = +s[1] + s[0]*60;

var w = parseInt(TamV) / 100;
var x = ((parseInt(RotV)*113)/2000);
var y = parseInt(TempoV) / 60;
var z = (parseInt(PesV)/(parseInt(w)+parseInt(x)+parseInt(y)));
var GramaturaMedia = (z*10).toFixed(0);
document.getElementById('GramaturaC').value = GramaturaMedia;
alert(w + ' ' + x+ ' ' +y+ ' ' +z+ ' ' +GramaturaMedia); 
}


// 2 Adicionando dados e refazendo tela ___________________________________________

                  document.getElementById('BtConcNext').onclick=function recval() {


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

                  var CtTime = document.getElementById("TempF").value;
                  var PesV = document.getElementById('Peso').value;
                  var TamV = document.getElementById('Tamanho').value;
                  var RotV = document.getElementById('Rotacao').value;
                  var s = CtTime.split(":"), TempoV = +s[1] + s[0]*60;

                  var w = parseInt(TamV) / 100;
                  var x = ((parseInt(RotV)*113)/2000);
                  var y = parseInt(TempoV) / 60;
                  var z = (parseInt(PesV)/(parseInt(w)+parseInt(x)+parseInt(y)));
                  var GramaturaMedia = (z*10).toFixed(0);
                  document.getElementById('GramaturaC').value = GramaturaMedia;
                  document.getElementById('GramaturaC').value = GramaturaMedia;
                  // // alert(w + ' ' + x+ ' ' +y+ ' ' +z+ ' ' +GramaturaMedia); 

                  // // document.forms["LcMp"].submit();

                  // // window.location.reload(true);
                  // // clearstatcache();
                  
                  // document.getElementById('Titles').innerText = "Lançamentos da MP - Jumbo: <?php echo $NumJUmb; ?>";
                  
                }



function formata_data(data) { // dd/mm/yyyy -> yyyy-mm-dd
    data_formatada = data.substr(6,4) + '-' + data.substr(3,2) + '-' + data.substr(0,2);
    return new Date(data_formatada);
}
function PshEdit(){

  var txt;
  var Tolkit_encode = document.getElementById("Tolkit").value;
  var person = prompt("Insira o codigo Tolk:","");
  if (person == null || person == "") {
    txt = "Cancelado pelo usuario!";
  } else {
if (person == Tolkit_encode) {
document.getElementById("BtConcNext").style.display="initial";
document.getElementById("BtCancelar").style.display="initial";  
let linhas = document.getElementsByTagName("td");
var Jumbt = linhas[0].innerHTML;
var Datai = linhas[1].innerHTML;
var Dataf = linhas[2].innerHTML;
var H_inicio = linhas[3].innerHTML;
var H_Fim  = linhas[4].innerHTML;
var Tipo = linhas[5].innerHTML;
var Tamanho  = linhas[6].innerHTML;
var Rotacao  = linhas[7].innerHTML;
var Peso  = linhas[8].innerHTML;
var Temp_Fabr  = linhas[9].innerHTML;
var Temp_Para  = linhas[10].innerHTML;
var Temp_Prod  = linhas[11].innerHTML;
var Gram_Med  = linhas[12].innerHTML;
var Gram_Str  = linhas[13].innerHTML;
var Gram_Calc  = linhas[14].innerHTML;
var Gram_Prim  = linhas[15].innerHTML;
var Gram_Seg  = linhas[16].innerHTML;
var Quant_Para  = linhas[17].innerHTML;
var Operador  = linhas[18].innerHTML;
var Ajudante  = linhas[19].innerHTML;

document.getElementById("D_in").value = Datai;
document.getElementById("D_fn").value = Dataf;
document.getElementById("H_in").value = H_inicio;
document.getElementById("H_fn").value = H_Fim;
document.getElementById("Papel").value = Tipo;
document.getElementById("Tamanho").value = Tamanho;
document.getElementById("Peso").value = Peso;
document.getElementById("Rotacao").value = Rotacao;
document.getElementById("Gramatura1").value = Gram_Prim;
document.getElementById("Gramatura2").value = Gram_Seg;
document.getElementById("Operadors").value = Operador;
document.getElementById("Ajudantes").value = Ajudante;


for (i=0;i<Quant_Para;i++) {  
addInput('lines');
}
var y = 1;
for (i=0;i<Quant_Para;i++) {
var list = document.getElementsByClassName("Mn"+y);

Array.prototype.forEach.call(list, function(el) {

    console.log(el.tagName);
});
var Descricao = list[0].innerHTML;
var D_Inicial = list[1].innerHTML;
var H_Final  = list[2].innerHTML;
var D_Final = list[3].innerHTML;
var H_Inicial = list[4].innerHTML;
var Temp_Total = list[5].innerHTML;
var Tipo = list[6].innerHTML;

document.getElementById("Pddesc"+y+"_1").value = Descricao;
document.getElementById("D_in_"+y).value = D_Inicial;
document.getElementById("H_in_"+y).value = H_Inicial;
document.getElementById("D_fn_"+y).value = D_Final;
document.getElementById("H_fn_"+y).value = H_Final;
document.getElementById("TemPar_"+y).value = Temp_Total;
document.getElementById("Tip_"+y).value = Tipo;
y = y +1;
}
function DeletTables(){
document.getElementById("test").innerHTML = "";
document.getElementById("Find").hidden = true;
document.getElementById('PostFom').action = 'UpDate_Mp.php';
document.getElementById("Titles").innerText = "EDIÇÃO DE ROLO da MP - Jumbo: " + Jumbt;
document.getElementById("NumJum").value = Jumbt;
document.getElementById("H_fn").focus();
var y = 1;
for (i=0;i<Quant_Para;i++) {
  document.getElementById("H_fn_"+y).focus();
  y++;
}

}
DeletTables();

txt = "Liberado acesso de edição para usuario";
}else{
txt = "Codigo do Token Invalido!";
}
  alert(txt);
}
}

function CancelEdit(){
  window.location.reload(true);
}


document.getElementById('BtCancelar').onclick=function() {
  window.location.reload(true);
}


var formID = document.getElementById("PostFom");
var send = $("#BtConcNext");

$(formID).submit(function(event){
  if (formID.checkValidity()) {
    send.attr('disabled', 'disabled');
  }
});

</script>
</body>
</html>