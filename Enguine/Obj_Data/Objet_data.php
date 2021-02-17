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
<input type="date" id="D_in" name="D_in" class="Inpts" onblur="CalcTime('1')" required>
<input type="time" id="H_in" name="H_in" class="Inpts" onblur="CalcTime('2')" required>
<br>
<label for="D_fn">Data/Hora de Fim:   </label>
<br>
<input type="date" id="D_fn" name="D_fn" class="Inpts" onblur="CalcTime('3')" required>
<input type="time" id="H_fn" name="H_fn" class="Inpts" onblur="CalcTime('4')" required>
</div>
<input type="text" id="Tempo_Produtivo" name="Tempo_Produtivo" class="Inpts" hidden>
</div>
<script src="/ProdCepelma/Enguine/Obj_Data/Script_objet_data.js"></script>

<script>

function MyLog1(){
    VaLog = document.getElementById("D_in").value;
    console.log("Data de Inicio: " + VaLog)
}

function MyLog2(){
    VaLog = document.getElementById("H_in").value;
    console.log("Hora de Inicio: " + VaLog)
}

function MyLog3(){
    VaLog = document.getElementById("D_fn").value;
    console.log("Data de Fim: " + VaLog)
}

function MyLog4(){
    VaLog = document.getElementById("H_fn").value;
    console.log("Hora de Fim: " + VaLog)
}
</script>

</body>
</html>