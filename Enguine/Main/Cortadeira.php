<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cortadeira</title>
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/Style_padrao.css">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Reference_Icon/Incons_style_buttons.css">
</head>
<body>
<form action="Update_Cortadeira.php" method="POST" name="Myform">
<div class="Container_Major" id="Trabalho">
<div>
<h3>Lançamento Cortadeira</h3>
<div class="Resumo"><?php $DataSet = "cortadeira"; include "../Obj_Consulta_lancamento_ctd/Consulta_lancamento_ctd.php"; ?></div>
</div>
</div>
<div class="Flowless">

<div class="Container" id="Selector">
<div>
<?php include "../Obj_Seletor/Selector.php"; ?>
</div>
</div>

<div class="Container" id="Pessoal">
<div>
<?php $Param = "CT"; include "../Obj_Pessoal/Objet_pessoal.php"; ?>
</div>
</div>

<div class="Container" id="Data">
<div>
<?php include "../Obj_Data/Objet_data.php"; ?>
</div>
</div>

<div class="Container" id="Trabalho">
<div>
<?php include "../Obj_Bancas/Objet_bancas.php"; ?>
</div>
</div>

<div class="Container" id="Finalizada">
<div>
<?php include "../Obj_Finalizada_Carga/Finalizada.php"; ?>
</div>
</div>


<div class="Container" id="Buttons">
<div>
<button type="submit" class="Buts"><i class="salvar"></i><small class="Sm">Enviar</small></button>
<button type="reset" class="Buts"><i class="excluir"></i><small class="Sm">limpar</small></button>
</div>
</div>
</div>
</form>
    
</body>
</html>