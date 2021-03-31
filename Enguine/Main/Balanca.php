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

<form action="" method="POST" name="Myform">

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
</div>




<div class="Container" id="Job">
<?php include "../Obj_Data/Objet_data.php"; ?>
</div>




<div class="Container" id="Buttons_cont">
     
<button type="submit" class="Buts"><i class="salvar"></i><small class="Sm">Enviar</small></button>
<button type="reset" class="Buts"><i class="excluir"></i><small class="Sm">Limpar</small></button>

</div>
</div>

</form>

<script src="./Scrip_Busca_bl.js"></script>

<script>
function CalcZ(_x){
_m = _x.value
_x.value = _m.replace(',', '.');
var _f = _x.value;
var _g = _x.id;
var _y = document.getElementById("PesPd").value;

let _Z = parseFloat(parseFloat(_y)*parseFloat(_f)).toFixed(2);
document.getElementById(_g+"-ps").value = _Z;
}

function Calcm(_x){
_m = _x.value
_x.value = _m.replace(',', '.');
}
</script>

</body>
</html>