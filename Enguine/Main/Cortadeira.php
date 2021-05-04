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

<input type="text" name="Name_form" id="Name_form" value="CT" hidden>

<form action="Update_Cortadeira.php" method="POST" name="Myform">

<div class="Flowless">
            
        

        <div class="Container_Major" id="Trabalho">
        <h3>Lançamento Cortadeira</h3>
        <div class="Resumo"><?php $DataSet = "cortadeira"; include "../Obj_Consulta_lancamento_ctd/Consulta_lancamento_ctd.php"; ?>
        </div>
        </div>

        <div class="Container" id="Selector">
        <?php include "../Obj_Seletor/Selector.php"; ?>
        <?php $Param = "CT"; include "../Obj_Pessoal/Objet_pessoal.php"; ?>
        </div>


        <div class="Container" id="Data">
        <?php include "../Obj_Data/Objet_data.php"; ?>
        <?php include "../Obj_Bancas/Objet_bancas.php"; ?>
        </div>

        <div class="Container" id="Data">
        <?php include "../Obj_Paradas/Paradas.php"; ?>
        </div>

        <div class="Container" id="Finalizada">
        <?php include "../Obj_Finalizada_Carga/Finalizada.php"; ?>
     
        <button type="submit" class="Buts"><i class="salvar"></i><small class="Sm">Enviar</small></button>
        <button type="reset" class="Buts"><i class="excluir"></i><small class="Sm">Limpar</small></button>

        </div>
        <br><br><br>

</div>


</form>

</body>

</html>