<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebobinadeira</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleReb.css">

</head>
<body>
        <div id="title">
            <h3>Lançamento Rebobinadeira</h3>
        </div>
        <div id="FormSet">

            <form action="" id="ReboBinadeiras" name="Lct" method="POST">

                <br>
                <div id="Operadores">
                </div>

                <br>
                <div id="Selecao">
                </div>

                <br>
                <div id="T_trabalho">
                    <label for="D_in">Data/Hora de Inicio:</label>
                    <input type="date" id="D_in" name="D_in" class="Inpts" require>
                    <input type="time" id="H_in" name="H_in" class="Inpts" require>
                    <br>
                    <label for="D_fn">Data/Hora de Fim:   </label>
                    <input type="date" id="D_fn" name="D_fn" class="Inpts" require>
                    <input type="time" id="H_fn" name="H_fn" class="Inpts" require>
                </div>

                <br>
                <div id="Medidas">
                    <label for="Md_1">Medidas:</label>
                    <br>
                    <input type="number" class="Inpts" id="Md_1" name="Md_1" require>
                    <input type="number" class="Inpts" id="Md_2" name="Md_2" require>
                    <input type="number" class="Inpts" id="Md_3" name="Md_3" require>
                    <input type="number" class="Inpts" id="Md_4" name="Md_4" require>
                    
                </div>

                <br>
                <div id="Buttons">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Resetar">
                </div>
                    

            </form>

        </div>
</body>
</html>