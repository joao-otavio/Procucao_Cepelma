<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/pd_bts.css">
</head>
<body>
<!-- Config_Corte -->
<script type="text/javascript" src="Config_Corte.js"></script>

    <h4>Configurações de Corte</h4>
    <hr>
    <h5>Rebobinadeira</h5>
<form action="" name="CdCorte">
    <Label>Quantidade 1</Label>
    <input type="number" id="qtdum" name="Quantidade1" class="Btts"  value="0" required>
    <Label>Medida 1</Label>
    <input type="number" id="medidaum" name="Medida1" class="Btts" value="0"  required>
<br><hr>
<Label>Quantidade 2</Label>
    <input type="number" id="qtddois" name="Quantidade2" class="Btts" value="0" width="50px" required>
    <Label>Medida 2</Label>
    <input type="number" id="medidadois" name="Medida2" class="Btts" width="50px" value="0" required>
<br><hr>
<Label>Quantidade 3</Label>
    <input type="number" id="qtdtres" name="Quantidade3" class="Btts" width="50px" value="0" required>
    <Label>Medida 3</Label>
    <input type="number" id="medidatres" name="Medida3" class="Btts" width="50px" value="0" required>
    <br><br><hr>
    <a href="#" onclick="Set_Cort_Reb()" class="Buts">Cadastrar</a>
    </form>



</body>
</html>
