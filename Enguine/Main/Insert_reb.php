<!-- campos Post Tratados para o Banco

name="Equipamento"
------ Inclusão dos operadores
name="Operador"
name="Ajudante"
name="jumb">
name="D_in" 
name="H_in"
name="D_fn" 
name="H_fn"
------ inclusão dos padrões
name="Padrao" 
------ Inclusão dos formatos
name="MySelectConf"
name="Refug" 

name="Tp_Fabric"
name="TempVida"
name="TempEspera"

name="Mp_1"
name="Mp_2"
name="Mp_3"
name="Mp_4"
name="Mp_5"

name="Cp_1"
name="Cp_2"
name="Cp_3"
name="Cp_4"
name="Cp_5"

name="PesTotal"
name="PesPonta"
name="PesSegregado"
name="PesRefugo"
name="PesAcabado"

name="Md_1"
name="Md_2"
name="Md_3"
name="Md_4"
name="Md_5"

name="Qt_1" 
name="Qt_2" 
name="Qt_3" 
name="Qt_4" 
name="Qt_5" 

Name="M1_p1" 
Name="M1_p2" 
Name="M1_p3" 
Name="M1_p4" 
Name="M1_p5" 

Name="M2_p1" 
Name="M2_p2" 
Name="M2_p3" 
Name="M2_p4" 
Name="M2_p5"

Name="M3_p1" 
Name="M3_p2" 
Name="M3_p3" 
Name="M3_p4" 
Name="M3_p5"

Name="M4_p1" 
Name="M4_p2" 
Name="M4_p3" 
Name="M4_p4" 
Name="M4_p5"

Name="M5_p1" 
Name="M5_p2" 
Name="M5_p3" 
Name="M5_p4" 
Name="M5_p5" 

script do jumbo

name=\"Boca\"
name=\"Dif_med\"
name=\"TempJumb\"
name=\"Gramatura\"
name=\"Calc\"
name=\"Op1\"
name=\"Op2\"
name=\"DtIni_VIDA\"
name=\"HrIni_vida\"
name=\"HrIni_Esp\"
name=\"PesJUmb_get\"-->




<?php
$Equipamento = $_POSt['Equipamento'];
$Operador = $_POSt['Operador'];
$Ajudante = $_POSt['Ajudante'];
$jumb = $_POSt['jumb'];
$D_in = $_POSt['D_in'];
$H_in = $_POSt['H_in'];
$D_fn = $_POSt['D_fn'];
$H_fn = $_POSt['H_fn'];
$Padrao = $_POSt['Padrao'];
$MySelectConf = $_POSt['MySelectConf'];
$Refug = $_POSt['Refug'];
$Mp_1 = $_POSt['Mp_1'];
$Mp_2 = $_POSt['Mp_2'];
$Mp_3 = $_POSt['Mp_3'];
$Mp_4 = $_POSt['Mp_4'];
$Mp_5 = $_POSt['Mp_5'];
$Cp_1 = $_POSt['Cp_1'];
$Cp_2 = $_POSt['Cp_2'];
$Cp_3 = $_POSt['Cp_3'];
$Cp_4 = $_POSt['Cp_4'];
$Cp_5 = $_POSt['Cp_5'];
$PesTotal = $_POSt['PesTotal'];
$PesPonta = $_POSt['PesPonta'];
$PesSegregado = $_POSt['PesSegregado'];
$PesRefugo = $_POSt['PesRefugo'];
$PesAcabado = $_POSt['PesAcabado'];
$Md_1 = $_POSt['Md_1'];
$Md_2 = $_POSt['Md_2'];
$Md_3 = $_POSt['Md_3'];
$Md_4 = $_POSt['Md_4'];
$Md_5 = $_POSt['Md_5'];
$Qt_1 = $_POSt['Qt_1'];
$Qt_2 = $_POSt['Qt_2'];
$Qt_3 = $_POSt['Qt_3'];
$Qt_4 = $_POSt['Qt_4'];
$Qt_5 = $_POSt['Qt_5'];
$M1_p1 = $_POSt['M1_p1'];
$M1_p2 = $_POSt['M1_p2'];
$M1_p3 = $_POSt['M1_p3'];
$M1_p4 = $_POSt['M1_p4'];
$M1_p5 = $_POSt['M1_p5'];
$M2_p1 = $_POSt['M2_p1'];
$M2_p2 = $_POSt['M2_p2'];
$M2_p3 = $_POSt['M2_p3'];
$M2_p4 = $_POSt['M2_p4'];
$M2_p5 = $_POSt['M2_p5'];
$M3_p1 = $_POSt['M3_p1'];
$M3_p2 = $_POSt['M3_p2'];
$M3_p3 = $_POSt['M3_p3'];
$M3_p4 = $_POSt['M3_p4'];
$M3_p5 = $_POSt['M3_p5'];
$M4_p1 = $_POSt['M4_p1'];
$M4_p2 = $_POSt['M4_p2'];
$M4_p3 = $_POSt['M4_p3'];
$M4_p4 = $_POSt['M4_p4'];
$M4_p5 = $_POSt['M4_p5'];
$M5_p1 = $_POSt['M5_p1'];
$M5_p2 = $_POSt['M5_p2'];
$M5_p3 = $_POSt['M5_p3'];
$M5_p4 = $_POSt['M5_p4'];
$M5_p5 = $_POSt['M5_p5'];
$Boca = $_POSt['Boca'];
$Dif_med = $_POSt['Dif_med'];
$TempJumb = $_POSt['TempJumb'];
$Gramatura = $_POSt['Gramatura'];
$Calc = $_POSt['Calc'];
$Op1 = $_POSt['Op1'];
$Op2 = $_POSt['Op2'];
$DtIni_VIDA = $_POSt['DtIni_VIDA'];
$HrIni_vida = $_POSt['HrIni_vida'];
$HrIni_Esp = $_POSt['HrIni_Esp'];
$PesJUmb_get = $_POSt['PesJUmb_get'];
$TempEspera = $_POSt['Tp_Fabric'];
$TempVida = $_POSt['TempVida'];
$TempEspera = $_POSt['TempEspera'];





?>