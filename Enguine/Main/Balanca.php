<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balança</title>
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/Style_padrao.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">
</head>
<body>

<form action="Up_balanca.php" method="POST" name="Myform">

<div class="Flowless">


<div class="Container_Major" id="Trabalho">
<h3>Lançamento Balança</h3>

</div>

<div class="Container" id="PD_pes">
<img src="../pic/ca03c8b28aebd8fccc4c1e8e2684d87a.gif" alt="Balanca">
</div>


<div class="Container" id="Operadores_tr">
<?php $Param = "BL"; include "../Obj_Pessoal/Objet_pessoal.php"; ?>
</div>

<div class="Container" id="Call">
<label for="Call_cont"><strong>Carga:</strong></label>
<br>
<input type="number" id="Call_cont" name="Call_cont" class="Inpts" required>
<br>
<hr>
<button type="button" class="Buts" onClick="Call_Ct()"><i class="buscar"></i><small class="Sm">Buscar</small></button><br>

<hr>
<label for="PesPd"><strong>Peso Padrão:</strong></label>
<br>
<input type="text" id="PesPd" class="Inpts" name="PesPd" value="9.8" onblur="Calcm(this)" required>
<br>
<br>
</div>




<div class="Container" id="Job">
<?php include "../Obj_Data/Objet_data.php"; ?>
</div>




<div class="Container" id="Buttons_cont">
<div>
<label for="PesPd"><strong>Tipo de produto:</strong></label>
<br>
<select name="Produt" id="Prdt" class="Inpts" onblur="Insertpd(this.value)" required>
<option value=""></option>
<option value="Pacote">Pacote</option>
<option value="Fardo">Fardo</option>
</select>
</div>
<hr>
<button type="submit" class="Buts"><i class="salvar"></i><small class="Sm">Enviar</small></button>
<button type="reset" class="Buts"><i class="excluir"></i><small class="Sm">Limpar</small></button>
<br>
<input type="text" id="Ok_check" name="Ok_check" value="" hidden>

</div>
</div>

</form>

<script src="./Scrip_Busca_bl.js"></script>

<script>
function CalcZ(_x){
var _w = 0;
_m = _x.value
_x.value = _m.replace(',', '.');

var _f = _x.value;
var _g = _x.id;
var _y = document.getElementById("PesPd").value;

let _Z = parseFloat(parseFloat(_y)*parseFloat(_f)).toFixed(2);
document.getElementById(_g+"-ps").value = _Z;

var _carga = document.getElementById("Call_cont").value;

for (let _i = 1; _i < 50; _i++) {
 
   var dodge = _carga+"-"+_i; 

    if (document.getElementById(dodge) !== null) {
        
    
    if (document.getElementById(dodge).value !== "") {
      _w++;  
    } 
    }
}


   var _o = document.getElementById("Plts2").value

   if (_w < _o) {
    document.getElementById("Ok_check").value = "Editando";
   }else{
    document.getElementById("Ok_check").value = "Concluido";
   }

}

function Calcm(_x){
_n = _x.id
_m = _x.value
var _f =  _m.replace(',', '.');
document.getElementById(_n).value = _m;
}


function Insertpd(x_){
    
    var Cg = document.getElementById("Call_cont").value;

    for (let index = 1; index < 50; index++) {
       
    if (document.getElementById(Cg+"-p"+index)!= null) {
        document.getElementById(Cg+"-p"+index).value = x_;  
    }    



}

}



</script>

</body>
</html>