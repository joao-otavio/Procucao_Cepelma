
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
function Get_Pic_OP (OP_Pic){
    var popup = document.getElementById("PicOp");
    popup.classList.toggle("show");
     var nome   = OP_Pic;
     var Cartter   = document.getElementById("Name_form").value;
     var result = document.getElementById("PicOp");
     var xmlreq = CriaRequest();
     xmlreq.open("GET", "Return_objet_Pessoal_op.php?TxFind=" + nome + "&TxPar="+Cartter, true);
     xmlreq.onreadystatechange = function(){
         if (xmlreq.readyState == 4) {
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
                 console.log("operador:" + nome)
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
}

