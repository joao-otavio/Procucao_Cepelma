<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="pic/favicon.ico">
</head>
<body>
<script type="text/javascript" src="ChamaOperador_Cadastro.js"></script>

<div id="Frames">
<h1>Cadastro de Operadores</h1><br>
</div>

<div id="Frames">
    <div class="Select">
    <?php
    print "<form class=\"Selecao\" method=\"post\" action=\"Up_opers.php\" name=\"SelectF\" autocomplete=\"on\">";
    print "<select class=\"Inpts\" name=\"RegFunc\" placeholder=\"Selecione...\" id=\"OperadorCd\">";
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "movedb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Codigo, Funcionarios, CPF, scan FROM funcionarios where Status = 'Ativo' order by funcionarios ASC";
    $result = $conn->query($sql);
    // $Registros = mysqli_num_rows($sql)
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = mysqli_fetch_array($result)) {
        $ids = $row[0];
        $nomeFuncionarios = $row[1];
        $cpfs = $row[2];
        $images = $row[3];
        // MDI_MENU_FUNCIONARIOS.html
    print "<option value=\"$nomeFuncionarios-$images\">$nomeFuncionarios</option >";
    }
    }
    print "<input type=\"submit\" name=\"Selectd\" class =\"BuTs\" required hidden><br>";
    print "<hr><br>";
    print "";
    $conn->close();
    ?>
</div>
</div>
<div id="Frames">
<h3>Equipamento: </h3>
<select name="EquipamentoC" id="EquipamentoC">
    <option value="MP">Maquina de Papel</option>
    <option value="RB">Rebobinadeira</option>
    <option value="CT">Cortadeira</option>
    <option value="BL">Balança</option>
</select>
</div>
<br>
<hr>
<a href="#" onclick="Set_oper()" class="Buts">Cadastrar</a>
<div class="Funcionario" id="FuncionarioReg">
</div>
</form>
<script>
</script>
</body>
</html>
