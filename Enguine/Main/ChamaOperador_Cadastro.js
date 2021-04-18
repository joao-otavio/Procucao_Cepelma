
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
function Set_oper (){
     // Declaração de Variáveis
     var Eqpt = document.getElementById("EquipamentoC").value;
     var oper = document.getElementById("OperadorCd").value;
     var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    //  result.innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
     
     
     // Iniciar uma requisição
     xmlreq.open("GET", "Up_opers.php?TXT_OP=" + oper + "&TXT_EQ=" + Eqpt, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){

                
         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {
            
             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                document.getElementById("Oper_Close_Modal").click();
                document.getElementById("link_conc").click();
                }else{
                alert("Falha no cadastro");
             }
         }
     };
     xmlreq.send(null);
}

