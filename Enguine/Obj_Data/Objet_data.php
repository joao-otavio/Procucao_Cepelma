<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objet_data</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Obj_Data/Style_objet_data.css">
    <link rel="icon" href="/ProdCepelma/Enguine/Main/Ppic/favicon.ico">
</head>
<body>
    
<div id="Content">
<div id="Title">
<h3>Periodo:</h3>
<hr>
</div>
<div id="Inputs_Objet_data">
<label for="D_in">Data/Hora de Inicio:</label>
<br>
<input type="date" id="D_in" name="D_in" class="Inpts" onchange="CalcTime()" require>
<input type="time" id="H_in" name="H_in" class="Inpts" onchange="CalcTime()" require>
<br>
<label for="D_fn">Data/Hora de Fim:   </label>
<br>
<input type="date" id="D_fn" name="D_fn" class="Inpts" onchange="CalcTime()" require>
<input type="time" id="H_fn" name="H_fn" class="Inpts" onchange="CalcTime()" require>
</div>
<input type="text" id="Tempo_Produtivo" name="Tempo_Produtivo" class="Inpts" hidden>
</div>
<script src="/ProdCepelma/Enguine/Obj_Data/Script_objet_data.js"></script>

</body>
</html>