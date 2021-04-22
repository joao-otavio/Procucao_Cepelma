<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradas</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Obj_Paradas/Style_Objet_paradas.css">
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">

</head>
<body>
<div class="Container">
<h3>Paradas do Equipamento</h3>
<hr>
<div id="lines">
</div>
<button type="button" onclick="addInput('lines')" id="BtAdd" class="Buts"><i class="ferramentas"></i><small>Parada</small></button>
<input type="text" name="NumMan" id="NumMan" hidden>
</div>

<script>
var line = 1;
var Adicted = 0;

function addInput(divName) {

MySelect = document.createElement('select')
MySelect.setAttribute("class", "Selectors");
MySelect.setAttribute("name", "Tip_"+line);
MySelect.setAttribute("id", "Tip_"+line);
newOption1 = document.createElement('option');
newOption2 = document.createElement('option');
newOption3 = document.createElement('option');
newOption4 = document.createElement('option');

newOption1.value="Abastecimento";
newOption1.text="Abastecimento";
MySelect.appendChild(newOption1);

newOption2.value="Manutenção";
newOption2.text="Manutenção";
MySelect.appendChild(newOption2);


newOption3.value="SetUp";
newOption3.text="SetUp";
MySelect.appendChild(newOption3);

newOption4.value="Troca de Turno";
newOption4.text="Troca de Turno";
MySelect.appendChild(newOption4);


  var newdiv = document.createElement('div');
  var vrb = "'Dv"+line +"M'"
  newdiv.id = "Dv"+line +"M";
  newdiv.innerHTML  = '<br></br><strong>['+line +']</strong>';
  newdiv.innerHTML += '<hr>';
  newdiv.innerHTML += '<label for="Tip_"'+line+'>Tipo de Parada</label>';
  newdiv.innerHTML += '<br>';
  newdiv.appendChild(MySelect);
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<label for="Pddesc">Descrição da parada</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<textarea name="Pddesc'+line +'_1" id="Pddesc'+line +'_1" cols="30" rows="10" class= \"Pddesc\" required></textarea> ';
  newdiv.innerHTML += '<br>';

  newdiv.innerHTML += '<label for="D_in_'+line +'">Data/Hora de Inicio:</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<input type="date" id="D_in_'+line +'" name="D_in_'+line +'" class="Inpts" onblur="CalcPar('+line+')" required>';
  newdiv.innerHTML += '<input type="time" id="H_in_'+line +'" name="H_in_'+line +'" class="Inpts" onblur="CalcPar('+line+')" required>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<label for="D_fn">Data/Hora de Fim:</label>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<input type="date" id="D_fn_'+line +'" name="D_fn_'+line +'" class="Inpts" onblur="CalcPar('+line+')" required>';
  newdiv.innerHTML += '<input type="time" id="H_fn_'+line +'" name="H_fn_'+line +'" class="Inpts" onblur="CalcPar('+line+')" required>';
  newdiv.innerHTML += '</div>';
  newdiv.innerHTML += '<input type="text" name="TemPar_'+line+'" id="TemPar_'+line+'" hidden>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<br>';
  newdiv.innerHTML += '<button type="button" onclick="excInput('+vrb+')" class="Buts" id="Exc_'+line +'"><i class="excluir"></i><small><small>Excluir ['+line +']</small></small></button>';
  newdiv.innerHTML += '<br>';
  document.getElementById(divName).appendChild(newdiv);
  line++;
  Adicted=Adicted+1;
  document.getElementById('NumMan').value = Adicted;
  document.getElementById("Tip_"+Adicted).focus();
}

function excInput(DivExc){
document.getElementById(DivExc).innerHTML = "";

var loss = document.getElementById('NumMan').value;
var Time2 = '00:00';
for (i = loss; i >= 1; i--) {
// var Time2 = '00:00';
if (document.getElementById('TemPar_'+i) == null) {
  Time2 = SunTime(
  "00:00", 
  Time2
); 
}else{
Time2 = SunTime(
  document.getElementById('TemPar_'+i).value, 
  Time2
); 
}
document.getElementById("TempG").value = Time2;

var Time3  = Reduct1(
  document.getElementById('TempG').value,
  document.getElementById('TempProd').value
);
document.getElementById('TempF').value = Time3;
}

}

  function CalcPar(Param){
    var dtini = document.getElementById("D_in_"+Param).value;
    var hrini = document.getElementById("H_in_"+Param).value;
    var dtfin = document.getElementById("D_fn_"+Param).value;
    var hrfin = document.getElementById("H_fn_"+Param).value;
    
    var prdinicial = dtini+' '+hrini;
    var prdfinal = dtfin+' '+hrfin;

    var dataCurrente = new Date();
    const date1 = new Date(prdinicial);
    const date2 = new Date(prdfinal);


    if (date1>dataCurrente) {
        alert("Periodo (Data & Hora) Inicial não pode ser maior do que hoje!")
        document.getElementById("D_in_"+Param).value = "";
        document.getElementById("H_in_"+Param).value = "";
        document.getElementById("D_in_"+Param).focus();
    }


    if (date1>dataCurrente) {
        alert("Periodo (Data & Hora) Final não pode ser maior do que hoje!")
        document.getElementById("D_fn_"+Param).value = "";
        document.getElementById("H_fn_"+Param).value = "";
        document.getElementById("D_fn_"+Param).focus();    
    }
    
    const diff = Math.abs(date1.getTime() - date2.getTime());
    const Hrs = Math.floor(diff / (1000 * 60 * 60));
    const HrTomin = Math.floor(Hrs * (3600*1000));
    const MinFiff = diff - HrTomin;
    const mints = Math.floor(MinFiff / (1000 * 60));
    if (mints < 10) {
        var TempPrd = Hrs +":0"+ mints;
    }else{
    var TempPrd = Hrs +":"+ mints;
    }
    document.getElementById("TemPar_"+Param).value = TempPrd;
    console.log("Tempo da parada "+Param+": " + TempPrd);





var loss = document.getElementById('NumMan').value;
var Time2 = '00:00';
for (i = 1; i <= loss; i++) {
// var Time2 = '00:00';

if (document.getElementById('TemPar_'+i) == null) {
  Time2 = SunTime(
  "00:00", 
  Time2
); 
}else{
Time2 = SunTime(
  document.getElementById('TemPar_'+i).value, 
  Time2
); 
}
document.getElementById("TempG").value = Time2;

var Time3  = Reduct1(
  document.getElementById('TempG').value,
  document.getElementById('TempProd').value
);
document.getElementById('TempF').value = Time3;
}

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

  function Reduct1(start,end){
  var s = start.split(":"), sMin = +s[1] + s[0]*60,
      e =   end.split(":"), eMin = +e[1] + (e[0])*60,
   diff = eMin-sMin;
   if (diff<0) { sMin-=12*60;  diff = eMin-sMin }
  var h = Math.floor(diff / 60),
      m = diff % 60;
  return "" + pad(h) + ":" + pad(m);
  }

 
</script>
</body>
</html>