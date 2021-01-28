<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebobinadeira</title>
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleReb.css">

</head>
<body>
    <script src="/ProdCepelma/Enguine/Main/Rb_FindJumb.js"></script>
        <div id="title">
            <h3>Lançamento Rebobinadeira</h3>
        </div>
        <div id="FormSet">

            <form action="" id="ReboBinadeiras" name="Lct" method="POST">

            <div class="Content" id="Content">
                <div id="EquipamentoD">
                <label for="Equipamento">Rebobinadeira:</label>
               
                <select name="Equipamento" class="Inpts2" id="Equipamento" required>
                    <option value=""></option> 
                   <option value="Rebobinadeira 1">Rebobinadeira 1</option> 
                   <option value="Rebobinadeira 2">Rebobinadeira 2</option> 
                </select>
                </div>

               
                <div id="Operadores">
                <?php include "Operadores_RB.php"; ?>
                </div>
                <br>
                             
                <div id="Selecao">
                    <label for="Jumb">Numero do Jumbo:</label>
                    <br>
                    <input type="number" class="Inpts" id="Jumb" name="jumb">
                </div>

                
                <div id="T_trabalho">
                    <label for="D_in">Data/Hora de Inicio:</label>
                    <br>
                    <input type="date" id="D_in" name="D_in" class="Inpts" require>
                    <input type="time" id="H_in" name="H_in" class="Inpts" require>
                    <br>
                    <br>
                    <label for="D_fn">Data/Hora de Fim:   </label>
                    <br>
                    <input type="date" id="D_fn" name="D_fn" class="Inpts" require>
                    <input type="time" id="H_fn" name="H_fn" class="Inpts" require>
                </div>
                </div>
           
                <div class="flip-card">
                            <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                    <h3>Resumo do apontamento</h3>
                                    <span id="produtos"></span>
                                    </div>
                                <div class="flip-card-back">
                                <h3>Dados do Jumbo</h3>
                                <span id="ReturnJB"></span>
                                </div>
                            </div>
                        </div>
               
               <div class="ShowAlert" id="ShowAlert">
                <span>
                    <h3></h3>
                </span>
               </div>
             <br>
               <div id="Medidas">
                    <label for="Md_1">Tiradas:</label>
                    <br>
                    <input type="number" class="Inpts" id="Tiradas" name="Tiradas" require>
                    <br>
                    <br>
                    <label for="Md_1">Medidas:</label>
                    <br>
                    <input type="number" class="Inpts" id="Md_1" name="Md_1" require value="0">
                    <label for="M1_p1">Pesos >></label>
                    <input type="text" class="Inpts" id="M1_p1" name="M1_p1" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M1_p2" name="M1_p2" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M1_p3" name="M1_p3" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M1_p4" name="M1_p4" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M1_p5" name="M1_p5" require value="0" onchange="CalcMeds()">
                    <br>
                    <input type="number" class="Inpts" id="Md_2" name="Md_2" require value="0">
                    <label for="M2_p1">Pesos >></label>
                    <input type="text" class="Inpts" id="M2_p1" name="M2_p1" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M2_p2" name="M2_p2" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M2_p3" name="M2_p3" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M2_p4" name="M2_p4" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M2_p5" name="M2_p5" require value="0" onchange="CalcMeds()">
                    <br>
                    <input type="number" class="Inpts" id="Md_3" name="Md_3" require value="0">
                    <label for="M3_p1">Pesos >></label>
                    <input type="text" class="Inpts" id="M3_p1" name="M3_p1" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M3_p2" name="M3_p2" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M3_p3" name="M3_p3" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M3_p4" name="M3_p4" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M3_p5" name="M3_p5" require value="0" onchange="CalcMeds()">
                    <br>
                    <input type="number" class="Inpts" id="Md_4" name="Md_4" require value="0">
                    <label for="M4_p1">Pesos >></label>
                    <input type="text" class="Inpts" id="M4_p1" name="M4_p1" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M4_p2" name="M4_p2" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M4_p3" name="M4_p3" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M4_p4" name="M4_p4" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M4_p5" name="M4_p5" require value="0" onchange="CalcMeds()">
                    <br>
                    <input type="number" class="Inpts" id="Md_5" name="Md_4" require value="0">
                    <label for="M5_p1">Pesos >></label>
                    <input type="text" class="Inpts" id="M5_p1" name="M5_p1" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M5_p2" name="M5_p2" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M5_p3" name="M5_p3" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M5_p4" name="M5_p4" require value="0" onchange="CalcMeds()">
                    <input type="text" class="Inpts" id="M5_p5" name="M5_p5" require value="0" onchange="CalcMeds()">
                    <br>


                </div>
                
                <div id="Buttons">
                    <input type="submit" class="BuTs" value="Enviar">
                    <input type="reset" class="BuTs" value="Resetar">
                </div>

             
        </div>
        
        <br>
        
        <div id="Load"></div>
        
        </div>

        <input type="text" id="Tp_Fabric" name="Tp_Fabric" hidden>
        <input type="text" id="TempVida" name="TempVida" hidden>
        <input type="text" id="TempEspera" name="TempEspera" hidden>
        <input type="number" class="Inpts" id="Mp_1" name="Mp_1" require value="0" hidden>
        <input type="number" class="Inpts" id="Mp_2" name="Mp_2" require value="0" hidden>
        <input type="number" class="Inpts" id="Mp_3" name="Mp_3" require value="0" hidden>
        <input type="number" class="Inpts" id="Mp_4" name="Mp_4" require value="0" hidden>
        <input type="number" class="Inpts" id="Mp_5" name="Mp_5" require value="0" hidden>

</form>
     <script>
            console.log(new Date().toLocaleDateString())
    
               document.getElementById("D_in").onblur = function Dod_D_Funcion(){
                   var In = document.getElementById("D_in");
                   document.getElementById("D_fn").value = document.getElementById("D_in").value;
                }

                document.getElementById("Md_1").onchange = function SmMEd(){
                    if (document.getElementById("Md_1").value == "") {
                        document.getElementById("Md_1").value = "0"  
                    }else{
                    
                    let Bc =  document.getElementById("Boca").value;
                    let w = document.getElementById("Md_1").value;
                    let x = document.getElementById("Md_2").value;
                    let y = document.getElementById("Md_3").value;
                    let z = document.getElementById("Md_4").value;
                    let v = document.getElementById("Md_5").value;
                    // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                    let Sts =parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                    var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                    document.getElementById("Dif_med").value = Sts;
                                var newdiv = document.createElement('div');
                                newdiv.id = "Valid";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;
                    }
                }
                document.getElementById("Md_2").onchange = function SmMEd(){
                    if (document.getElementById("Md_2").value == "") {
                        document.getElementById("Md_2").value = "0"  
                    }else{
                    
                    let Bc =  document.getElementById("Boca").value;
                    let w = document.getElementById("Md_1").value;
                    let x = document.getElementById("Md_2").value;
                    let y = document.getElementById("Md_3").value;
                    let z = document.getElementById("Md_4").value;
                    let v = document.getElementById("Md_5").value;
                    // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                    let Sts =parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                    var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                    document.getElementById("Dif_med").value = Sts;
                                var newdiv = document.createElement('div');
                                newdiv.id = "Valid";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;
                    }
                }
                document.getElementById("Md_3").onchange = function SmMEd(){
                    if (document.getElementById("Md_3").value == "") {
                        document.getElementById("Md_3").value = "0"  
                    }else{
                    let Bc =  document.getElementById("Boca").value;
                    let w = document.getElementById("Md_1").value;
                    let x = document.getElementById("Md_2").value;
                    let y = document.getElementById("Md_3").value;
                    let z = document.getElementById("Md_4").value;
                    let v = document.getElementById("Md_5").value;
                    // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                    let Sts =parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                    var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                    document.getElementById("Dif_med").value = Sts;
                                var newdiv = document.createElement('div');
                                newdiv.id = "Valid";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;
                    }
                }

                document.getElementById("Md_4").onchange = function SmMEd(){
                    if (document.getElementById("Md_4").value == "") {
                        document.getElementById("Md_4").value = "0"  
                    }else{
                    let Bc =  document.getElementById("Boca").value;
                    let w = document.getElementById("Md_1").value;
                    let x = document.getElementById("Md_2").value;
                    let y = document.getElementById("Md_3").value;
                    let z = document.getElementById("Md_4").value;
                    let v = document.getElementById("Md_5").value;
                    // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                    let Sts =parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                    var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                    document.getElementById("Dif_med").value = Sts;
                                var line = 1;
                                var newdiv = document.createElement('div');
                                newdiv.id = "Valid";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;
                    }
                }

                document.getElementById("Md_5").onchange = function SmMEd(){
                    if (document.getElementById("Md_5").value == "") {
                        document.getElementById("Md_5").value = "0"  
                    }else{
                    let Bc = document.getElementById("Boca").value;
                    let w = document.getElementById("Md_1").value;
                    let x = document.getElementById("Md_2").value;
                    let y = document.getElementById("Md_3").value;
                    let z = document.getElementById("Md_4").value;
                    let v = document.getElementById("Md_5").value;
                    // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                    let Sts =parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                    var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                    document.getElementById("Dif_med").value = Sts;

                                var line = 1;
                                var newdiv = document.createElement('div');
                                newdiv.id = "Valid";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;

                    }
                }
            
            document.getElementById("Jumb").onblur = function GetJumb(){
                var x = document.getElementById("Jumb").value
                // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
            getDados();
                // document.getElementById("Load").innerText = "";

                }
                var MSgBit = "";
                function CalcMeds(){


                        for (let $i = 1; $i < 6; $i++) {

                            if (document.getElementById("Md_"+$i).value != "0"){
                            let contador = 0;
                            let Somador = 0;
                                for (let $j = 1; $j < "6"; $j++) {
                                if ( document.getElementById("M"+$i+"_p"+$j).value != "0") {

                                var Org = document.getElementById("M"+$i+"_p"+$j).value;
                                var cvt = Org.replace(',', '.')
                                document.getElementById("M"+$i+"_p"+$j).value = cvt;

                                    var num = parseFloat(document.getElementById("M"+$i+"_p"+$j).value);
                                    var n = num.toFixed(2);
                                    Somador = parseFloat(Somador) + parseFloat(n);
                                    contador = parseFloat(contador) +1;  
                                    let med = (parseFloat(Somador) / parseFloat(contador)).toFixed(1);
                                    MSgBit = "Mêdia da Medida "+$i + ": "+med;
                                    document.getElementById("Mp_"+$i).value = med;
                                }

                           }
                           var line = 1;
                                var newdiv = document.createElement('div');
                                newdiv.id = "alert";
                                newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                                newdiv.innerHTML += '<strong>Atenção: </strong> '+ MSgBit ;
                                newdiv.innerHTML += '<br>';
                                document.getElementById("ShowAlert").appendChild(newdiv);
                                line++;
                                var objScrDiv = document.getElementById("ShowAlert");
                                objScrDiv.scrollTop = objScrDiv.scrollHeight;
                        }
                        
                    }
                
                }


document.getElementById("H_fn").onblur = function CalcTime(){
    var dtini = document.getElementById("D_in").value;
    var hrini = document.getElementById("H_in").value;
    var dtfin = document.getElementById("D_fn").value;
    var hrfin = document.getElementById("H_fn").value;

    var prdinicial = dtini+' '+hrini;
    var prdfinal = dtfin+' '+hrfin;

const date1 = new Date(prdinicial);
const date2 = new Date(prdfinal);

const diff = Math.abs(date1.getTime() - date2.getTime());
const Hrs = Math.floor(diff / (1000 * 60 * 60));
const HrTomin = Math.floor(Hrs * (3600*1000));
const MinFiff = diff - HrTomin
const mints = Math.floor(MinFiff / (1000 * 60));
if (mints < 10) {
    var TempPrd = Hrs +":0"+ mints;
}else{
var TempPrd = Hrs +":"+ mints;
}
document.getElementById("Tp_Fabric").value = TempPrd;

TpVida();
TpEspera();
}

function TpVida(){

    
    var Sdata = document.getElementById("DtIni_VIDA").value;
    Sdata = Sdata.split('/').reverse().join('-');
    var hrini = document.getElementById("HrIni_vida").value;
    var dtfin = document.getElementById("D_fn").value;
    var hrfin = document.getElementById("H_fn").value;
    var prdinicial = Sdata+' '+hrini;
    var prdfinal = dtfin+' '+hrfin;



const date1 = new Date(prdinicial);
const date2 = new Date(prdfinal);

const diff = Math.abs(date1.getTime() - date2.getTime());
const Hrs = Math.floor(diff / (1000 * 60 * 60));
const HrTomin = Math.floor(Hrs * (3600*1000));
const MinFiff = diff - HrTomin
const mints = Math.floor(MinFiff / (1000 * 60));
if (mints < 10) {
    var TempPrd = Hrs +":0"+ mints;
}else{
var TempPrd = Hrs +":"+ mints;
}
document.getElementById("TempVida").value = TempPrd;
}


function TpEspera(){

    
var Sdata = document.getElementById("DtIni_VIDA").value;
Sdata = Sdata.split('/').reverse().join('-');
var hrini = document.getElementById("HrIni_Esp").value;
var dtfin = document.getElementById("D_in").value;
var hrfin = document.getElementById("H_in").value;

var prdinicial = Sdata+' '+hrini;
var prdfinal = dtfin+' '+hrfin;

const date1 = new Date(prdinicial);
const date2 = new Date(prdfinal);

const diff = Math.abs(date1.getTime() - date2.getTime());
const Hrs = Math.floor(diff / (1000 * 60 * 60));
const HrTomin = Math.floor(Hrs * (3600*1000));
const MinFiff = diff - HrTomin
const mints = Math.floor(MinFiff / (1000 * 60));
if (mints < 10) {
    var TempPrd = Hrs +":0"+ mints;
}else{
var TempPrd = Hrs +":"+ mints;
}
document.getElementById("TempEspera").value = TempPrd;
}

</script>   
</body>
</html>