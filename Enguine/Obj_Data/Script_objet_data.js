function CalcTime( Param){
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