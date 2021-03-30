<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanca</title>
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/Style_padrao.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">
</head>
<body>
    
<div class="Flowless">


<div class="Container_Major" id="Trabalho">
<h3>Lançamento Balança</h3>
<div class="Resumo">
</div>
</div>

<div class="Container" id="Call">
<label for="Call_cont"><strong>Carga:</strong></label>
<br>
<input type="number" id="Call_cont" class="Inpts">
<br>
<hr>
<button type="button" class="Buts" onClick="Call_Ct()"><i class="buscar"></i><small class="Sm">Buscar</small></button><br>
</div>

<form action="" method="POST" name="Myform">

<div class="Container" id="Select_Carga">

</div>


<div class="Container" id="Job">
<?php include "../Obj_Data/Objet_data.php"; ?>
</div>


<div class="Container" id="PD_pes">
<?php include "../Obj_Embalagem/Obj_Embalagens.php"; ?>
</div>


<div class="Container" id="Operadores_tr">
<?php $Param = "BL"; include "../Obj_Pessoal/Objet_pessoal.php"; ?>
</div>


<div class="Container" id="Buttons_cont">
     
<button type="submit" class="Buts"><i class="salvar"></i><small class="Sm">Enviar</small></button>
<button type="reset" class="Buts"><i class="excluir"></i><small class="Sm">Limpar</small></button>

</div>
</div>

</form>

<script src="./Scrip_Busca_bl.js"></script>


</body>
</html>