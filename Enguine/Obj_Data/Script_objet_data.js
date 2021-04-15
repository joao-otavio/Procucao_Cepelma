function CalcTime( Param){
    var dtini = document.getElementById("D_in").value;
    var hrini = document.getElementById("H_in").value;
    var dtfin = document.getElementById("D_fn").value;
    var hrfin = document.getElementById("H_fn").value;
    
    var prdinicial = dtini+' '+hrini;
    var prdfinal = dtfin+' '+hrfin;

    var dataCurrente = new Date();
    const date1 = new Date(prdinicial);
    const date2 = new Date(prdfinal);


    if (date1>dataCurrente) {
        alert("Periodo (Data & Hora) Inicial não pode ser maior do que hoje!")
        document.getElementById("D_in").value = ""
        document.getElementById("H_in").value = ""
        document.getElementById("D_in").focus();
    }


    if (date1>dataCurrente) {
        alert("Periodo (Data & Hora) Final não pode ser maior do que hoje!")
        document.getElementById("D_fn").value = ""
        document.getElementById("H_fn").value = ""
        document.getElementById("D_fn").focus();    
    }
    
    var MyEarlyDate = new Date();
    MyEarlyDate.setDate(MyEarlyDate.getDate() - 7);

    if (date1<MyEarlyDate) {
        if (Param = "1") {
            alert("Atenção, voce esta lançando um periodo inicial com mais de 7 dias de atraso!");
        }
        
    }
    
    if (date2<MyEarlyDate) {
        if (Param = "3") {
             alert("Atenção, voce esta lançando um periodo Final com mais de 7 dias de atraso!");
        }
       
    }


    if (date2<date1) {
        alert ("Atenção, a data final não pode ser menor que a inicial");
        document.getElementById("D_fn").value = "";
        document.getElementById("H_fn").value = "";
    }

    var letChar = "501"
    document.getElementById("chave").value = 3003 + dtini + hrini + letChar;

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
    document.getElementById("Tempo_Produtivo").value = TempPrd;
    console.log("Tempo Produtivo: " + TempPrd);
    if (Param = "1") {
        MyLog1(); 
    }

    if (Param = "2") {
        MyLog2();  
    }

    if (Param = "3") {
        MyLog3();  
    }

    if (Param = "4") {
        MyLog4();  
    }

    }  
     