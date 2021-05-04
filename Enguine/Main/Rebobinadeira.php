<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebobinadeira</title>
    <link rel="icon" href="/ProdCepelma/Enguine/pic/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/ProdCepelma/Enguine/Style/StyleReb.css">

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- <script src="/ProdCepelma/Enguine/Main/Rb_FindJumb.js"></script> -->
    <script src="/ProdCepelma/Enguine/Main/PicOp_Return.js"></script>
    <script src="/ProdCepelma/Enguine/Main/PicAj_Return.js"></script>
    <!-- <script src="/ProdCepelma/Enguine/Main/Valida_Jumbo.js"></script> -->
    <div id="title">
            <h3>Lançamento Rebobinadeira</h3>
        </div>
<div id="FormSet">

<form action="Insert_reb.php" id="ReboBinadeiras" name="Lct" method="POST" >

            <div class="Content" id="Content">
                <div id="EquipamentoD">
                <label for="Equipamento">Rebobinadeira:</label>
               
                <select name="Equipamento" class="Inpts2" id="Equipamento" onblur="FinCh(this.value)" required>
                <option value=""></option> 
                <option value="Rebobinadeira 1">Rebobinadeira 1</option> 
                <option value="Rebobinadeira 2">Rebobinadeira 2</option> 
                </select>
                </div>

               
                <div id="Operadores">
                <?php include "Operadores_RB.php"; ?>
                </div>
               
                             
                <div id="Selecao">
                    <label for="Jumb">Numero do Jumbo:</label>
                    <br>
                    <input type="number" class="Inpts" id="Jumb" name="jumb" min="1" required>
                </div>

                
                <div id="T_trabalho">
                    
                    <label for="D_in">Data/Hora de Inicio:</label>
                    <br>
                    <input type="date" id="D_in" name="D_in" class="Inpts" required>
                    <input type="time" id="H_in" name="H_in" class="Inpts" required>
                    <br>
                   
                    <label for="D_fn">Data/Hora de Fim:   </label>
                    <br>
                    <input type="date" id="D_fn" name="D_fn" class="Inpts" required>
                    <input type="time" id="H_fn" name="H_fn" class="Inpts" required>
                </div>
                </div>
           
                <div class="flip-card">
                            <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                    <h3>Resumo do apontamento</h3>
                                    <span id="Rs1"></span><br>
                                    <span id="Rs2"></span><br>
                                    <span id="Rs3"></span><br>
                                    <span id="Rs4"></span><br>
                                    <span id="Rs5"></span><br>

                                    <span id="PS1"></span><br>
                                    <span id="PS2"></span><br>
                                    <span id="PS3"></span><br>
                                    <span id="PS4"></span><br>
                                    <span id="PS5"></span><br>
                                    <span id="Pt"></span><br>

                                    <span id="Tts1"></span><br>
                                    <span id="Tts2"></span><br>
                                    <span id="Tts3"></span><br>
                                    <span id="Tts4"></span><br>
                                    <span id="Tts5"></span><br>
                                    <span id="ReturnGet"></span>
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
             <br>
             <br>
             <br>
             <br>

               <div id="Medidas">
                   <div id="Mescl1">
                    <label for="Md_1">Tiradas:</label>
                    <br>
                    <input type="number" class="Inpts" id="Tiradas" name="Tiradas" min="1" required>
                    </div>
                    <?php include "Padrao_RB.php"; ?>
                    <br>
                    <div id="Mescl2">
                    <?php include "Formatos.php"; ?>
                    </div>
                    <div id="Dados">
                    </div>
                    <br>
                    <input type="radio" name="Ending" id="Process" onclick="CalcMeds()" checked>
                    <label for="Process"> <strong>Processando: </strong></label>
                    <br>
                    <input type="radio" name="Ending" id="Refug" onclick="CalcMeds()">
                    <label for="Refug"> <strong>Finalizado: </strong></label>
                    <br>
                    <input type="radio" name="Ending" id="Semia" onclick="CalcMeds()">
                    <label for="Semia"> <strong>Semi Acabado: </strong></label>
                    <br>
                </div>
                </div>
              
                       
                <div id="Buttons">
                    <button type="submit" class="BuTs" id="Enviar" value="Enviar">Enviar</button>
                    <input type="reset" class="BuTs" value="Resetar">
                    <!-- <button type="button" onclick="Includ_OP()" data-modal-target="#modal" class="BuTs">Cadastrar Op.</button>
                    <button type="button" onclick="Includ_CF()" data-modal-target="#modal" class="BuTs">Config Rb</button> -->
                </div>
        
        <br>
        
        <div id="LoadSh"><img src="/ProdCepelma/Enguine/pic/Loading_2.gif" id="Load"></div>
        
        </div>
    
        <input type="text" id="Tp_Fabric" name="Tp_Fabric" hidden>
        <input type="text" id="TempVida" name="TempVida" hidden>
        <input type="text" id="TempEspera" name="TempEspera" hidden>
        <input type="number" class="Inpts" id="Mp_1" value="0" name="Mp_1"  hidden>
        <input type="number" class="Inpts" id="Mp_2" value="0" name="Mp_2"  hidden>
        <input type="number" class="Inpts" id="Mp_3" value="0" name="Mp_3"  hidden>
        <input type="number" class="Inpts" id="Mp_4" value="0" name="Mp_4"  hidden>
        <input type="number" class="Inpts" id="Mp_5" value="0" name="Mp_5"  hidden>
            
        <input type="number" class="Inpts" id="Cp_1" value="0" name="Cp_1"  hidden>
        <input type="number" class="Inpts" id="Cp_2" value="0" name="Cp_2"  hidden>
        <input type="number" class="Inpts" id="Cp_3" value="0" name="Cp_3"  hidden>
        <input type="number" class="Inpts" id="Cp_4" value="0" name="Cp_4"  hidden>
        <input type="number" class="Inpts" id="Cp_5" value="0" name="Cp_5"  hidden>

        <input type="number" class="Inpts" id="PesTotal" value="0" name="PesTotal" hidden>
        <input type="number" class="Inpts" id="PesPonta" value="0" name="PesPonta" hidden>
        <input type="number" class="Inpts" id="PesSegregado" value="0" name="PesSegregado" hidden>
        <input type="number" class="Inpts" id="PesRefugo" value="0" name="PesRefugo" hidden>
        <input type="number" class="Inpts" id="PesAcabado" value="0" name="PesAcabado"  hidden>
        <input type="text" class="Inpts" id="chave" value="3003" name="chave"  hidden>

        <input type="number" class="Inpts" id="PesUnit_1" value="0" name="PesUnit_1" hidden>
        <input type="number" class="Inpts" id="PesUnit_2" value="0" name="PesUnit_2" hidden>
        <input type="number" class="Inpts" id="PesUnit_3" value="0" name="PesUnit_3" hidden>
        <input type="number" class="Inpts" id="PesUnit_4" value="0" name="PesUnit_4" hidden>
        <input type="number" class="Inpts" id="PesUnit_5" value="0" name="PesUnit_5" hidden>

        <input type="number" class="Inpts" id="QunatUnit_1" value="0" name="QunatUnit_1" hidden>
        <input type="number" class="Inpts" id="QunatUnit_2" value="0" name="QunatUnit_2" hidden>
        <input type="number" class="Inpts" id="QunatUnit_3" value="0" name="QunatUnit_3" hidden>
        <input type="number" class="Inpts" id="QunatUnit_4" value="0" name="QunatUnit_4" hidden>
        <input type="number" class="Inpts" id="QunatUnit_5" value="0" name="QunatUnit_5" hidden>

        <input type="number" class="Inpts" id="RefUnit_1" value="0" name="RefUnit_1" hidden>
        <input type="number" class="Inpts" id="RefUnit_2" value="0" name="RefUnit_2" hidden>
        <input type="number" class="Inpts" id="RefUnit_3" value="0" name="RefUnit_3" hidden>
        <input type="number" class="Inpts" id="RefUnit_4" value="0" name="RefUnit_4" hidden>
        <input type="number" class="Inpts" id="RefUnit_5" value="0" name="RefUnit_5" hidden>


<div class="modal" id="modal">
<div class="modal-header">
<div class="title">SkyBry - Modal</div>
<button data-close-button class="close-button">&times;</button>
</div>
<div class="modal-body" id="modal-body"> 
</div>
</div>
<div id="overlay"></div>
</form>
<script>
function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
      if ((new Date().getTime() - start) > milliseconds){
        break;
      }
    } 
}          

var letChar = "";

function FinCh(KD){
    if (KD = "Rebobinadeira 1") {
        letChar = "001"
    }else{
        letChar = "002"
    }
}


var newdiv ="";
var MSgBit ="";
console.log(new Date().toLocaleDateString())


var Inscale = 

document.getElementById("D_in").onblur = function Dod_D_Funcion(){
var In = document.getElementById("D_in");
document.getElementById("D_fn").value = document.getElementById("D_in").value;
GetSnt();
}

document.getElementById("Jumb").onchange = function GetJumb(){
var r = document.getElementById("Jumb").value;
document.getElementById("Load").style.display = 'block';
var x = document.getElementById("Jumb").value;
    getDados();
document.getElementById("Load").style.display = 'none';

}

function getDados() {
document.getElementById("Load").style.display = 'block';

var nome   = document.getElementById("Jumb").value;
var result = document.getElementById("ReturnJB");
var xmlreq = CriaRequest();

xmlreq.open("GET", "Rb_return.php?TxFind=" + nome, true);

xmlreq.onreadystatechange = function(){


if (xmlreq.readyState == 4) {

if (xmlreq.status == 200) {
result.innerHTML = xmlreq.responseText;
Consulta_JB();
}else{
result.innerHTML = "Erro: " + xmlreq.statusText;
}
}
};
xmlreq.send(null);
document.getElementById("Load").style.display = 'none';
}

function Consulta_JB()
{
document.getElementById("Load").style.display = 'block';
 var nome   = document.getElementById("Jumb").value;
 var result = document.getElementById("ReturnGet");
 var xmlreq = CriaRequest();
 xmlreq.open("GET", "Valida_Jumbo.php?TxFind=" + nome, true);
 xmlreq.onreadystatechange = function(){
if (xmlreq.readyState == 4) {
if (xmlreq.status == 200) {
result.innerHTML = xmlreq.responseText;
var element = document.getElementById("Alert-pec");
if (typeof(element) != 'undefined' && element != null)
{
   var Stringer = document.getElementById("Jumb").value;
alert("Jumbo "+Stringer+" Não localizado!")
document.getElementById("Jumb").value = "";
}

}else{
result.innerHTML = "Erro: " + xmlreq.statusText;
}
}
}
 xmlreq.send(null);
 document.getElementById("Load").style.display = 'none';
}

// document.getElementById("Jumb").onblur =
function GetSnt(){
let $y;
if (document.getElementById("NewJumbPes") != null){
$y = document.getElementById("NewJumbPes").value;
console.log($y);
if ($y  < 1) {
document.getElementById("Jumb").value = "";
document.getElementById("Jumb").select;
}else{
document.getElementById("PesJUmb_get").value = document.getElementById("NewJumbPes").value;
}
}else{
}
}            
document.getElementById("H_fn").onblur = function CalcTime(){
document.getElementById("Load").style.display = 'block';
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
      var TipP = "";  
      let GramP = "";      
var element = document.getElementById("Tipo");
if (typeof(element) != 'undefined' && element != null)
{
TipP = document.getElementById("Tipo").value;
}else{
TipP = "Nenhum Jumbo Selecionado";
}

var element = document.getElementById("Calc");
if (typeof(element) != 'undefined' && element != null)
{
GramP = (parseFloat(document.getElementById("Calc").value)).toFixed(2);
}else{
GramP = "Sem Jumbo para parametro!";
alert("Necessarion informar Jumbo, 'Selecionados campos de data negligenciando o campo de jumbo'")
document.getElementById("Jumb").focus();

}

let Tesp = document.getElementById("TempEspera").value;
let TProd = document.getElementById("Tp_Fabric").value;
let TVida = document.getElementById("TempVida").value;

document.getElementById("Rs1").innerText = " Tipo de Papel: " + TipP;
document.getElementById("Rs2").innerText = "Gramatura Calculada Deste Jumbo: " + GramP;
document.getElementById("Rs3").innerText = "Tempo Produtivo da Equipe: "+TProd;
document.getElementById("Rs4").innerText = "Tempo de Espera do Jumbo (chão): "+Tesp;
document.getElementById("Rs5").innerText = "Ciclo Produtivo (Tempo de Vida): "+TVida;


document.getElementById("Load").style.display = 'none';
document.getElementById("chave").value = 3003 + dtini + hrini + letChar;
}

function TpVida(){

    var Sdata="";
    var Stime="";

    document.getElementById("Load").style.display = 'block';

var element = document.getElementById("DtIni_VIDA");
if (typeof(element) != 'undefined' && element != null)
{
Sdata = document.getElementById("DtIni_VIDA").value
}else{
Sdata = "01/01/2000"
}
  
var element = document.getElementById("HrIni_vida");
if (typeof(element) != 'undefined' && element != null)
{
Stime = document.getElementById("HrIni_vida").value
}else{
Stime = "00:00:00"
}

    Sdata = Sdata.split('/').reverse().join('-');
    var hrini = Stime;
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
document.getElementById("Load").style.display = 'none';
}


function TpEspera(){
    var Sdata="";
    var Stime="";


var element = document.getElementById("DtIni_VIDA");
if (typeof(element) != 'undefined' && element != null)
{
Sdata = document.getElementById("DtIni_VIDA").value
}else{
Sdata = "01/01/2000"
}

var element = document.getElementById("HrIni_Esp");
if (typeof(element) != 'undefined' && element != null)
{
Stime = document.getElementById("HrIni_Esp").value
}else{
Stime = "00:00:00"
}

document.getElementById("Load").style.display = 'block';    
Sdata = Sdata.split('/').reverse().join('-');
var hrini = Stime;
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
document.getElementById("Load").style.display = 'none';
document.getElementById("Load").style.display = 'none';

}


function AbCamps(){
    document.getElementById("Dados").innerHTML="";
    document.getElementById("Load").style.display = 'block';

    // var select = document.getElementById('Conf');
	// var value = select.options[select.selectedIndex].value;
	// console.log(value);

    var select =  document.getElementById('MySelectConf');
    Mystring = select.options[select.selectedIndex].text;
    var Returns = Mystring.split("/");
    // alert(Mystring);
    for (let i = 0; i < Returns.length; i++) {
        var $i = i+1;
        const element = Returns[i];
        var MySubStr = element;
        var camp = MySubStr.split("-")
        var MyDiv = document.createElement('div');
        MyDiv.id = "Spl_"+$i;
        MyDiv.innerHTML += '<label for="Md_'+$i+'">Medida: </label>';
        MyDiv.innerHTML += '<input type="text" id="Md_'+$i+'" Class="Inpts3" value="'+camp[1]+'" name="Md_'+$i+'" onblur="SmMEd'+$i+'()">';
        MyDiv.innerHTML += '<label for="Qt_'+$i+'">   Quantidade: </label>';
        MyDiv.innerHTML += '<input type="text" id="Qt_'+$i+'" Class="Inpts3" value="'+camp[0]+'" name="Qt_'+$i+'">';
        MyDiv.innerHTML += '<label for="M'+$i+'_p1">   Pesos: </label>';
        MyDiv.innerHTML += '<input type="text" id="M'+$i+'_p1" Class="Inpts3" value="0" Name="M'+$i+'_p1" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<input type="text" id="M'+$i+'_p2" Class="Inpts3" value="0" Name="M'+$i+'_p2" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<input type="text" id="M'+$i+'_p3" Class="Inpts3" value="0" Name="M'+$i+'_p3" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<input type="text" id="M'+$i+'_p4" Class="Inpts3" value="0" Name="M'+$i+'_p4" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<input type="text" id="M'+$i+'_p5" Class="Inpts3" value="0" Name="M'+$i+'_p5" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<label for="M'+$i+'_p1">   Bobinas Refugadas (Qtd.): </label>';
        MyDiv.innerHTML += '<input type="text" id="R'+$i+'_p1" Class="Inpts3" Name="R'+$i+'_p1" value="0" onblur="CalcMeds()" required>';
        MyDiv.innerHTML += '<br>';
        document.getElementById("Dados").appendChild(MyDiv);
        document.getElementById("Load").style.display = 'none';
    }
    document.getElementById("Load").style.display = 'none';
}

                            function SmMEd1(){
                                document.getElementById("Load").style.display = 'block';
                                if (document.getElementById("Md_1").value == "") {
                            document.getElementById("Md_1").value = "0"  
                            document.getElementById("Load").style.display = 'none';
                           
                            }else{
                           
                            
                            let Bc =  document.getElementById("Boca").value;
                            let w = "0";
                            let x = "0";
                            let y = "0";
                            let z = "0";
                            let v = "0";

                            

                            if (document.getElementById("Md_1") != null) {
                            w = document.getElementById("Md_1").value; 
                            var multiplicador = document.getElementById("Qt_1").value; 
                            w = multiplicador * w; 
                            
                            }

                            if (document.getElementById("Md_2") != null) {
                            x = document.getElementById("Md_2").value;   
                            var multiplicador = document.getElementById("Qt_2").value; 
                            x = multiplicador * x; 
                            }

                            if (document.getElementById("Md_3") != null) {
                            y = document.getElementById("Md_3").value;  
                            var multiplicador = document.getElementById("Qt_3").value; 
                            y = multiplicador * y;  
                            
                            }

                            if (document.getElementById("Md_4") != null) {
                            z = document.getElementById("Md_4").value;   
                            var multiplicador = document.getElementById("Qt_4").value; 
                            z = multiplicador * z; 
                            
                            }

                            if (document.getElementById("Md_5") != null) {
                            v = document.getElementById("Md_5").value;
                            var multiplicador = document.getElementById("Qt_5").value; 
                            v = multiplicador * v;    
                            
                            }

                            // document.getElementById("Load").innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
                            let Sts = parseInt(Bc)-(parseInt(w)+parseInt(x)+parseInt(y)+parseInt(z)+parseInt(v));
                            var MSgBit = "Medida do Jumbo: "+Bc+ ", Diferença de medidas: "+ Sts ;
                            document.getElementById("Dif_med").value = Sts;
                            var newdiv = document.createElement('div');
                            newdiv.id = "Valid";
                            newdiv.innerHTML += '<span class="closebtn" onclick="this.parentElement.style.display='+"'none'"+';">&times;</span>';
                            newdiv.innerHTML += '<strong>MSg: </strong> '+ MSgBit ;
                            newdiv.innerHTML += '<br>';
                            document.getElementById("ShowAlert").appendChild(newdiv);
                            
                            var objScrDiv = document.getElementById("ShowAlert");
                            objScrDiv.scrollTop = objScrDiv.scrollHeight;
                             document.getElementById("Load").style.display = 'none';

                            }
                            document.getElementById("Load").style.display = 'none';
                            }
                                        function SmMEd2(){
                                            document.getElementById("Load").style.display = 'block';
                                            
                                        if (document.getElementById("Md_2").value == "") {
                                        document.getElementById("Md_2").value = "0"  
                                        document.getElementById("Load").style.display = 'none';
                                        }else{

                                            let Bc =  document.getElementById("Boca").value;
                            let w = "0";
                            let x = "0";
                            let y = "0";
                            let z = "0";
                            let v = "0";

                            

                            if (document.getElementById("Md_1") != null) {
                            w = document.getElementById("Md_1").value; 
                            var multiplicador = document.getElementById("Qt_1").value; 
                            w = multiplicador * w; 
                            
                            }

                            if (document.getElementById("Md_2") != null) {
                            x = document.getElementById("Md_2").value;   
                            var multiplicador = document.getElementById("Qt_2").value; 
                            x = multiplicador * x; 
                            }

                            if (document.getElementById("Md_3") != null) {
                            y = document.getElementById("Md_3").value;  
                            var multiplicador = document.getElementById("Qt_3").value; 
                            y = multiplicador * y;  
                            
                            }

                            if (document.getElementById("Md_4") != null) {
                            z = document.getElementById("Md_4").value;   
                            var multiplicador = document.getElementById("Qt_4").value; 
                            z = multiplicador * z; 
                            
                            }

                            if (document.getElementById("Md_5") != null) {
                            v = document.getElementById("Md_5").value;
                            var multiplicador = document.getElementById("Qt_5").value; 
                            v = multiplicador * v;    
                            
                            }
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
                                        
                                        var objScrDiv = document.getElementById("ShowAlert");
                                        objScrDiv.scrollTop = objScrDiv.scrollHeight;
                                        document.getElementById("Load").style.display = 'none';
                                        }
                                        document.getElementById("Load").style.display = 'none';
                                        }
        function SmMEd3(){
            document.getElementById("Load").style.display = 'block';
        if (document.getElementById("Md_3").value == "") {
        document.getElementById("Md_3").value = "0"  
        document.getElementById("Load").style.display = 'none';
        }else{
            let Bc =  document.getElementById("Boca").value;
                            let w = "0";
                            let x = "0";
                            let y = "0";
                            let z = "0";
                            let v = "0";

                            

                            if (document.getElementById("Md_1") != null) {
                            w = document.getElementById("Md_1").value; 
                            var multiplicador = document.getElementById("Qt_1").value; 
                            w = multiplicador * w; 
                            
                            }

                            if (document.getElementById("Md_2") != null) {
                            x = document.getElementById("Md_2").value;   
                            var multiplicador = document.getElementById("Qt_2").value; 
                            x = multiplicador * x; 
                            }

                            if (document.getElementById("Md_3") != null) {
                            y = document.getElementById("Md_3").value;  
                            var multiplicador = document.getElementById("Qt_3").value; 
                            y = multiplicador * y;  
                            
                            }

                            if (document.getElementById("Md_4") != null) {
                            z = document.getElementById("Md_4").value;   
                            var multiplicador = document.getElementById("Qt_4").value; 
                            z = multiplicador * z; 
                            
                            }

                            if (document.getElementById("Md_5") != null) {
                            v = document.getElementById("Md_5").value;
                            var multiplicador = document.getElementById("Qt_5").value; 
                            v = multiplicador * v;    
                            
                            }
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
        
        var objScrDiv = document.getElementById("ShowAlert");
        objScrDiv.scrollTop = objScrDiv.scrollHeight;
        document.getElementById("Load").style.display = 'none';
        }
        document.getElementById("Load").style.display = 'none';
        }

                    function SmMEd4(){
                        document.getElementById("Load").style.display = 'block';
                    if (document.getElementById("Md_4").value == "") {
                    document.getElementById("Md_4").value = "0" 
                    document.getElementById("Load").style.display = 'none'; 
                    }else{
                        let Bc =  document.getElementById("Boca").value;
                            let w = "0";
                            let x = "0";
                            let y = "0";
                            let z = "0";
                            let v = "0";

                            

                            if (document.getElementById("Md_1") != null) {
                            w = document.getElementById("Md_1").value; 
                            var multiplicador = document.getElementById("Qt_1").value; 
                            w = multiplicador * w; 
                            
                            }

                            if (document.getElementById("Md_2") != null) {
                            x = document.getElementById("Md_2").value;   
                            var multiplicador = document.getElementById("Qt_2").value; 
                            x = multiplicador * x; 
                            }

                            if (document.getElementById("Md_3") != null) {
                            y = document.getElementById("Md_3").value;  
                            var multiplicador = document.getElementById("Qt_3").value; 
                            y = multiplicador * y;  
                            
                            }

                            if (document.getElementById("Md_4") != null) {
                            z = document.getElementById("Md_4").value;   
                            var multiplicador = document.getElementById("Qt_4").value; 
                            z = multiplicador * z; 
                            
                            }

                            if (document.getElementById("Md_5") != null) {
                            v = document.getElementById("Md_5").value;
                            var multiplicador = document.getElementById("Qt_5").value; 
                            v = multiplicador * v;    
                            
                            }
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
                    
                    var objScrDiv = document.getElementById("ShowAlert");
                    objScrDiv.scrollTop = objScrDiv.scrollHeight;
                    document.getElementById("Load").style.display = 'none';
                    }
                    document.getElementById("Load").style.display = 'none';

                    }

        function SmMEd5(){
            document.getElementById("Load").style.display = 'block';
        if (document.getElementById("Md_5").value == "") {
        document.getElementById("Md_5").value = "0"  
        document.getElementById("Load").style.display = 'none';

        }else{
            let Bc =  document.getElementById("Boca").value;
                            let w = "0";
                            let x = "0";
                            let y = "0";
                            let z = "0";
                            let v = "0";

                            

                            if (document.getElementById("Md_1") != null) {
                            w = document.getElementById("Md_1").value; 
                            var multiplicador = document.getElementById("Qt_1").value; 
                            w = multiplicador * w; 
                            
                            }

                            if (document.getElementById("Md_2") != null) {
                            x = document.getElementById("Md_2").value;   
                            var multiplicador = document.getElementById("Qt_2").value; 
                            x = multiplicador * x; 
                            }

                            if (document.getElementById("Md_3") != null) {
                            y = document.getElementById("Md_3").value;  
                            var multiplicador = document.getElementById("Qt_3").value; 
                            y = multiplicador * y;  
                            
                            }

                            if (document.getElementById("Md_4") != null) {
                            z = document.getElementById("Md_4").value;   
                            var multiplicador = document.getElementById("Qt_4").value; 
                            z = multiplicador * z; 
                            
                            }

                            if (document.getElementById("Md_5") != null) {
                            v = document.getElementById("Md_5").value;
                            var multiplicador = document.getElementById("Qt_5").value; 
                            v = multiplicador * v;    
                            
                            }
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
        
        var objScrDiv = document.getElementById("ShowAlert");
        objScrDiv.scrollTop = objScrDiv.scrollHeight;
        document.getElementById("Load").style.display = 'none';

        }
        document.getElementById("Load").style.display = 'none';
        }

                            function CalcMeds(){
                                

                            for (let $i = 1; $i < 6; $i++) {

                            if (document.getElementById("Md_"+$i)!== null){
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

                            let Tir = document.getElementById("Tiradas").value
                            let Constante = document.getElementById("Qt_"+$i).value;
                            let pes = (((parseFloat(Constante) * parseFloat(med))* parseFloat(Tir))).toFixed(2);
                            var prod = document.getElementById("Md_"+$i).value
                            document.getElementById("Cp_"+$i).value = pes;

                                let $a = document.getElementById("Cp_1").value
                                let $b = document.getElementById("Cp_2").value
                                let $c = document.getElementById("Cp_3").value
                                let $d = document.getElementById("Cp_4").value
                                let $e = document.getElementById("Cp_5").value

                                let $f0 = 0;
                                let $f1 = 0;
                                let $f2 = 0;
                                let $f3 = 0;
                                let $f4 = 0;
                                let $f = 0;

                            if (document.getElementById("R1_p1") !== null) {  
                                let Dirr =  parseFloat(document.getElementById("R1_p1").value)
                                let Under = parseFloat(document.getElementById("Mp_1").value)
                                $f0 =  parseFloat(parseFloat(Under)*parseFloat(Dirr)).toFixed(2)
                                console.log("Calculo de Peso ref 01"+$f0);
                            }
                            if (document.getElementById("R2_p1") !== null) {
                                let Dirr =  parseFloat(document.getElementById("R2_p1").value)
                                let Under = parseFloat(document.getElementById("Mp_2").value)
                                $f1 =  parseFloat(parseFloat(Under)*parseFloat(Dirr)).toFixed(2)
                                console.log("Calculo de Peso ref 02"+$f1);
                            }
                            if (document.getElementById("R3_p1")!== null) {
                                let Dirr =  parseFloat(document.getElementById("R3_p1").value)
                                let Under = parseFloat(document.getElementById("Mp_3").value)
                                $f2 =  parseFloat(parseFloat(Under)*parseFloat(Dirr)).toFixed(2)
                                console.log("Calculo de Peso ref 03"+$f2);
                            }
                            if (document.getElementById("R4_p1") !== null) {
                                let Dirr =  parseFloat(document.getElementById("R4_p1").value)
                                let Under = parseFloat(document.getElementById("Mp_4").value)
                                $f3 =  parseFloat(parseFloat(Under)*parseFloat(Dirr)).toFixed(2)
                                console.log("Calculo de Peso ref 04"+$f3);
                            }
                            if (document.getElementById("R5_p1") !== null) {
                                let Dirr =  parseFloat(document.getElementById("R5_p1").value)
                                let Under = parseFloat(document.getElementById("Mp_5").value)
                                $f4 =  parseFloat(parseFloat(Under)*parseFloat(Dirr)).toFixed(2)
                                console.log("Calculo de Peso ref 05"+$f4);
                            }
                        
                                $f =  (parseFloat($f0)+parseFloat($f1)+parseFloat($f2)+parseFloat($f3)+parseFloat($f4)).toFixed(2);
                                console.log("Total de peso Refugado:"+$f);
                                let PesRef = (parseFloat($f)).toFixed(2);

                                // PesJUmb_get
                                let pesTotalp = ((parseFloat($a))+(parseFloat($b))+(parseFloat($c))+(parseFloat($d))+(parseFloat($e))).toFixed(2);
                                let PesJUmbo = document.getElementById("PesJUmb_get").value;
                                let difPesop = (parseFloat(PesJUmbo)-parseFloat(pesTotalp)).toFixed(2);
                                let pesAcabado = ((parseFloat($a))+(parseFloat($b))+(parseFloat($c))+(parseFloat($d))+(parseFloat($e)-(parseFloat(PesRef)))).toFixed(2);

                                // if (difPesop < 0) {
                                //     alert("Atenção o Peso do Jumbo é inferior ao peso total de Produtos Acabados,"+
                                //      "Voce tem ciencia? \n Peso do Jumbo: "+ PesJUmbo +" Peso Acabado: "+pesTotalp);
                                // }



                            document.getElementById("PS"+$i).innerText = "Peso Medio da Bobina de "+prod+ " de " + med + ", Peso Total: " + pes;
                            document.getElementById("Tts1").innerText = "Peso Total Produzido: "+pesTotalp;
                            document.getElementById("Tts2").innerText = "Diferença de Peso: "+difPesop;
                            // PesUnit_1
                            
                            let QtRefg  = document.getElementById("R"+$i+"_p1").value;
                            let PesUnd = (parseFloat(pes)-(parseFloat(QtRefg)*parseFloat(med))).toFixed(2);
                            let Tf = document.getElementById("Tiradas").value;
                            let Ts = document.getElementById("Qt_"+$i).value;;
                            let QtdPrd = ((parseFloat(Tf)*parseFloat(Ts))-parseFloat(QtRefg)).toFixed(2);
                            let pesRefUnd = (parseFloat(QtRefg)*parseFloat(med)).toFixed(2);

                            document.getElementById("PesUnit_"+$i).value = PesUnd;
                            console.log("Total de peso Produzido do "+(document.getElementById("Md_"+$i).value)+" :"+PesUnd);
                            document.getElementById("QunatUnit_"+$i).value = QtdPrd;
                            console.log("Quantidade produzida do "+(document.getElementById("Md_"+$i).value)+" :"+QtdPrd);
                            document.getElementById("RefUnit_"+$i).value = pesRefUnd;
                            console.log("Peso Refugado do "+(document.getElementById("Md_"+$i).value)+" :"+pesRefUnd);

                            
                            if (PesRef > 0) {
                            document.getElementById("Tts3").innerText = "Peso do Refugo: "+PesRef;
                            document.getElementById("Tts5").innerText = "Peso de Produtos Acabados: "+pesAcabado;
                                }else{
                            document.getElementById("Tts3").innerText = "";
                            document.getElementById("Tts5").innerText = "";
                                }
                            document.getElementById("PesTotal").value = pesTotalp;
                            document.getElementById("PesPonta").value = difPesop;
                            document.getElementById("PesSegregado").value = PesRef;
                            document.getElementById("PesAcabado").value = pesAcabado;
                            
                            // Refug
                            var CheckFin = document.getElementById("Refug");

                                if (CheckFin.checked == true) {
                                console.log("Solicitado finalizar o jumbo");
                                document.getElementById("PesPonta").value = "0";
                                document.getElementById("Tts2").innerText = "Jumbo Finalizado"; 
                                document.getElementById("Refug").value = "0";
                                
                                let NewRef = (parseFloat(difPesop) + parseFloat(PesRef)).toFixed(2)
                                document.getElementById("PesSegregado").value = NewRef;
                                document.getElementById("Tts3").innerText = "Peso do Refugo: "+NewRef;
                                }else{
                                console.log("Solicitado Manter Ponta");
                                
                                }


                            document.getElementById("Load").style.display = 'none';

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
                            document.getElementById("Load").style.display = 'none';
                            }      

    function Includ_OP(){
    var x = document.getElementById("Ct1").innerHTML;
    document.getElementById("modal-body").innerHTML = x;
    }

    function Includ_CF(){
    var x = document.getElementById("Ct2").innerHTML;
    document.getElementById("modal-body").innerHTML = x;
    }
             
    const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}

var formID = document.getElementById("ReboBinadeiras");
var send = $("#Enviar");

$(formID).submit(function(event){
  if (formID.checkValidity()) {
    send.attr('disabled', 'disabled');
  }
});



</script>  

</body>
</html>