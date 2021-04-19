
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
function Set_Cort_Reb(){
     // Declaração de Variáveis

    var Quantidade1 = document.getElementById("qtdum").value;
    var Medida1 = document.getElementById("medidaum").value;

    var Quantidade2 = document.getElementById("qtddois").value;
    var Medida2 = document.getElementById("medidadois").value;

    var Quantidade3 = document.getElementById("qtdtres").value;
    var Medida3 = document.getElementById("medidatres").value;

     var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    //  result.innerHTML = '<img src="/ProdCepelma/Enguine/pic/Loading_2.gif"/ id="Load">';
     
     
     // Iniciar uma requisição
     xmlreq.open("GET", "Up_CONF_REB.php?Quantidade1=" + Quantidade1 + "&Medida1=" + Medida1 + "&Quantidade2="  + Quantidade2 + "&Medida2=" + Medida2 + "&Quantidade3="  + Quantidade3 + "&Medida3=" + Medida3, true);

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

