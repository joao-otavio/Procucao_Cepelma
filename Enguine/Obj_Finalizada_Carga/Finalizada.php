<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <title>Padrao doc</title>
</head>
<body>

<h3>Conclusão da carga</h3>
<hr>
<div class="Box_saldos" id="Box_saldos">
<input type="checkbox" name="Confirm_Ck" id="Confirm_Ck" onclick="Finalizado();">
<label for="Confirm_Ck"><strong>Finalizada</strong></label>
<input type="text" name="NumLups" id="NumLups" value="0" hidden>
<input type="text" name="Conclusion" id="Conclusion" value="false" hidden>
<br>
<hr>
<br>
<br>
<div id="Inserach">
    <!-- Conteudo para inserção... -->
</div>
</div>


<script>
function Finalizado(){
var FatherDiv = document.getElementById("Inserach");
var CheckFin = document.getElementById("Confirm_Ck");
if (CheckFin.checked == true) {
var Selectables = document.getElementById("Selects").value;
if (Selectables == ""){
alert("Selecione os jumbos!");
CheckFin.checked = false;
document.getElementById("NumLups").value = 0;
}else{
        const ArrJumbos = Selectables.split(" / ")
        console.log(ArrJumbos);

        var x = 0; 
        for (let i = 0; i < ArrJumbos.length; i++) {
            const element = ArrJumbos[i];
            var Brl, Lin, Jbl, Jbv, Sdl, Sdv;

            Brl = document.createElement('br');

            lin = document.createElement('hr');

            Jbl = document.createElement("span");
            Jbl.setAttribute("for", "Jb_"+element);
            Jbl.setAttribute("text", "Jumbo: "+element);

            Jbv = document.createElement("input");
            Jbv.setAttribute("type", "text");
            Jbv.setAttribute("class", "Inpts");
            Jbv.setAttribute("id", "Jb_"+element);
            Jbv.setAttribute("value", element);
            Jbv.setAttribute("hidden", true);

            Sdl = document.createElement("label");
            Sdl.setAttribute("for", "Sd_"+element);
            Sdl.setAttribute("text", "Saldo:");

            Sdv = document.createElement("input");
            Sdv.setAttribute("type", "text");
            Sdv.setAttribute("class", "Inpts");
            Sdv.setAttribute("id", "Sd_"+element);
            Sdv.setAttribute("name", "Sd_"+element);
            Sdv.setAttribute("value", "0");
                              

            FatherDiv.append("Jumbo: "+element+" ");
            FatherDiv.appendChild(Brl);
            FatherDiv.appendChild(Jbv);
            FatherDiv.appendChild(Brl);
            FatherDiv.append("   -    Saldo: ");
            FatherDiv.appendChild(Sdv);
            FatherDiv.appendChild(lin);
            FatherDiv.appendChild(Brl);
            x = x + 1;
            console.log("Adicionado Jumbo "+ element +" para Informar Saldo Restante")
        }
        document.getElementById("Conclusion").value = "true";
        document.getElementById("NumLups").value = x;
    }

    }else{
        FatherDiv.innerHTML = "";
        console.log("Alterado estatus de Acabado da Carga, Removidos Campos de Saldo dos jumbos!")
        document.getElementById("Conclusion").value = "false";
    }
}



</script>

</body>
</html>