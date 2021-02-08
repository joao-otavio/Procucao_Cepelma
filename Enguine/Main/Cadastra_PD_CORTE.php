<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="pic/favicon.ico">
</head>
<body>
    <h1>Configurações de Corte</h1><br>
    <hr>
    <h3>Rebobinadeira</h3><br>
    <hr>
    <br>
<form action="Up_CONF_REB.php" name="SelectF" method="POST">
    <Label>Quantidade 1</Label>
    <input type="text" name="Quantidade1" value="0" required>
    <Label>Medida 1</Label>
    <input type="text" name="Medida1" value="0" required>
<br><hr>

<Label>Quantidade 2</Label>
    <input type="text" name="Quantidade2" value="0" required>
    <Label>Medida 2</Label>
    <input type="text" name="Medida2"  value="0" required>
<br><hr>

<Label>Quantidade 3</Label>
    <input type="text" name="Quantidade3" value="0" required>
    <Label>Medida 3</Label>
    <input type="text" name="Medida3" value="0" required>
<br><hr>
</form>
</div>
<br>
<br>
<br>
<a onclick="myAdiantamento();return false;" href="#">Cadastrar Funcionario</a>
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
