<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cortadeira</title>
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/Style_padrao.css">
</head>
<body>

<div class="Container_Major" id="Trabalho">
<div>
<h3>Lançamento Cortadeira</h3>
</div>
</div>
<form action="" method="POST">
<div class="Container" id="Selector">
<div>
<?php include "../Obj_Seletor/Selector.php"; ?>
</div>
</div>

<div class="Container" id="Pessoal">
<div>
<?php include "../Obj_Pessoal/Objet_pessoal.php"; ?>
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
<input type="submit" value="Enviar" name="Send" class="Buts">
<input type="reset" value="Limpar" name="Send" class="Buts">
</div>
</div>

</form>
    
</body>
</html>