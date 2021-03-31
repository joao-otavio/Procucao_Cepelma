function CriaRequest() {
    try{
         request = new XMLHttpRequest();
     }catch (IEAtual){
         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");
         }catch(IEAntigo){
             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");
             }catch(falha){
                 request = false;
             }
         }
     }
     if (!request)
    alert("Seu Navegador não suporta Ajax!");
     else
    return request;
 }
 function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
      if ((new Date().getTime() - start) > milliseconds){
        break;
      }
    } 
} 
function Call_Ct(){
    // var popup = document.getElementById("PicAj");
    //     popup.classList.toggle("show");

     var nome   = document.getElementById("Call_cont").value;
     var result = document.getElementById("PD_pes");
     var xmlreq = CriaRequest();

     xmlreq.open("GET", "Obj_Embalagens.php?TxFind=" + nome, true);


     xmlreq.onreadystatechange = function(){


         if (xmlreq.readyState == 4) {

             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
                 console.log("Ajudante:" + nome)
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
}