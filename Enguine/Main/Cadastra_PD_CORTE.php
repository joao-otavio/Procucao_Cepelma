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
    <h3>Configurações de Corte</h3>
    <hr>
    <h4>Rebobinadeira</h4>
<form action="Up_CONF_REB.php" name="SelectF" method="POST">
    <Label>Quantidade 1</Label>
    <input id="Btts" type="text" name="Quantidade1" value="0" width="50px" required>
    <Label>Medida 1</Label>
    <input id="Btts" type="text" name="Medida1" value="0" width="50px" required>
<br><hr>
<Label>Quantidade 2</Label>
    <input id="Btts" type="text" name="Quantidade2" value="0" width="50px" required>
    <Label>Medida 2</Label>
    <input id="Btts" type="text" name="Medida2"  value="0" width="50px" required>
<br><hr>
<Label>Quantidade 3</Label>
    <input id="Btts" type="text" name="Quantidade3" value="0" width="50px" required>
    <Label>Medida 3</Label>
    <input id="Btts" type="text" name="Medida3" value="0" width="50px" required>
    <br><br><hr>
<a onclick="myAdiantamento();return false;" href="#" target="_blank">Confirmar padrão</a>
</form>
</div>
<div class="Funcionario" id="FuncionarioReg">
</div>
</form>
<script>
function myAdiantamento() {
    document.getElementById('FuncionarioReg').value = "CarregaFuncionario_Div_med.php";
    document.SelectF.submit();
}
</script>
</body>
</html>
