<?php



$fecha=date("Y-m-d\TH-i");
$host="localhost";
$user="istra144";
$pw="wqxsCHEOSr";
$db="istra144_EAP";


$conexion=mysqli_connect($host,$user,$pw,$db);
$query_suscr=mysqli_query($conexion,("SELECT email FROM suscriptores_anterior_servidor"));

$emails = [];
$cont = 0;
while ($row = @mysqli_fetch_array($query_suscr)) {
   $emails[$cont] = $row['email'];
   $cont++;
}
echo '<!DOCTYPE html><html lang="en" ><head><meta name="viewport" content="width=device-width, initial-scale=1.0"><style>body {
    width: 1400px;
    word-wrap: break-word;
}</style></head><body><div>';

echo '<p>Suscriptores de la tabla suscriptores_anteriores</p>';
//foreach ($dir as $valor) {
//  echo $valor;
//}

print_r($emails);




$stringEnviados ='marcelo@sgsa.com.ar, info@colonialweb.com.ar, chritian@aadee.com.ar,
    mercedeslarosa87@gmail.com, carolina.palastro@bancogalicia.com.ar,
    fernabdogalop@passair.com.ar, gcarrea@hoteliruna.com,
    mzeravika@ultrafreezer.com, nnvello@ultrafreezer.com.ar,
    mzeravika@ultrafreezer.com.ar, arturoluispaladino@gmail.com,
    carlos_rodriguez@live.com.ar, ricardo@garabello.com.ar,
    petroxeda@yahoo.com.ar, danielbarbalace@hotmail.com, anglada@moscuzza.com,
    sec_actasyprensa@uatre.org.ar, augusto.pedemonte@osdipp.com.ar,
    tesoreria@osdipp.com.ar, luis.ludevid@osdipp.com.ar,
    lisandro.rosental@rosental.com, marketing@dantien.com.ar,
    pablo.p.marexiano@icbc.com.ar, lautoro.spotorno@sap.com,
    veronica.casentini@axionenergy.com, ncohan@zelian.com.ar,
    jfragati@bna.com.ar, juan.garda@estudioguarda.com,
    daniela.chichizola@osde.com.ar, leonardo.petricca@applus.com,
    andrea.dala@arcelormittal.com.ar, bernd.valtingojer@allianz.com.ar,
    alejandra.carulla@allianz.com.ar, julieta.fondeville@allianz.com.ar,
    nteisaire@gador.com, ignacio.strauch@ixom.com, gclausi@lear.com,
    administracion@stoneflysalud.com, mviel@cerealesviel.com,
    v.allegro@raizen.com.ar, carlosgentile@lacabrera.com.ar,
    gpafundi@suizoargentina.com, gpafundi@suizoargentina.com.ar,
    lrivaldi@deloitte.com, info@endeavor.org.ar, anclamar@anclamar.com,
    info-argentina@drager.com, cpompey@amca.org.ar, rodrigo.benitez@draeger.com,
    evetosbsas@cabrales.com, gisela@heladoscolonial.com.ar, mduran@fscarg.com,
    tpugliese@sushiclubweb.com, secretaria@face.coop,
    carlos.skerjanc@dupont.com, amartyno@roemmers.com.ar,
    decano@frba.utn.edu.ar, tmartinez@fecofar.com.ar,
    projas@cuestablanca.com.ar, gestionnoirte@cemla.com.ar,
    info@cerantola.com.ar, nombre@apellido.com, gabrielsassaroli@hotmail.com,
    nicolas1234@gmail.com, brudnoosais@fibertel.com.ar,
    surreycolegiales@gmail.com, fllerena@llerena.com.ar,
    recepcion@llerena.com.ar, info@crescenti.com.ar, martin@sidus.com.ar,
    edgardo.martin@sidus.com.ar, acpabastocentral@gmail.com,
    Danielamre@hotmail.com, dianar@drimerchocolates.com.ar,
    agavric@unimoron.edu.ar, mfrangi@elecnor.com, cintia@ladco.com.ar,
    fgalop@passair.com.ar, federico.munoz@nbch.com.ar, fchomicz@icloud.com,
    jorge.garcia@neuralsoft.com, mabelarguet@hotmail.com, mlizio@agd.com.ar,
    susanabria@despad.com.ar, ospegaprg@speedy.com.ar, 867@gmeil.com,
    sindicato867@gmail.com, 867@gmail.com, chamorroz@speedy.com.ar,
    hmartinez@ceamse.gov.ar, sur_metal@hotmail.com, marcos.lopez.carp@gmail.com,
    ls@bac-dall.com.ar, corina.clausen@savencia-fd.com.ar,
    danielgonzalez@dcdproducts.com.ar, xcomunicaciones2020@gmail.com,
    gustavomartinez@nautilus.net.ar, prensa@caece.edu.ar, dserrot@eseade.edu.ar,
    promed@pemint.com, pelque@pelque.com, info@ecosan.com.ar,
    recepcion_argentina@merck.com, silvsna@suragua.com.ar,
    comunicacion@sanatoriomodelo.com, ncorvino@viu.com.ar, marmart73@gmail.com,
    mario.bonetto@mariobonetto.com.ar, ricardo.baldassari@bayer.com,
    sebastian.minervino@motomel.com.ar, fernanda.iglesias@motomel.com.ar,
    antunezjaralucas@gmail.com, carlosfsanchez@speedy.com.ar,
    jcalzoni@undav.edu.ar, daniela.deserio@pfizer.com, villalbasoem@gmail.com,
    stedesco@elrural.com, info@macor.com.ar, ggabello@boldt.com.ar,
    asistente@gracecafe.com, fcapdepont75@gmail.com,
    gonzalez_carlos48@yahoo.com.ar, marcelamolineri@gmail.com,
    emilianosassaroli@gmail.com, gluna@uthgra.org.ar, danilomachin@hotmail.com,
    yesii_90@yahoo.com.ar';


$arrayEnviados= explode(",", $stringEnviados);


//print_r($arrayEnviados);
$enviadosSinEspacios=[];

for($i=0;$i<count($arrayEnviados);$i++){
    $valor= trim($arrayEnviados[$i], ' ');
    array_push($enviadosSinEspacios, strval($valor));
}
echo '<p>Suscriptores con email enviado</p>';

print_r($enviadosSinEspacios);

$arregloSinRepetir=[];
$arregloRepetidos=[];

foreach($emails as $val){
    $repetido=false;
    foreach($enviadosSinEspacios as $valor2){
        if(strval($val)==strval($valor2)){             
           $repetido=true;
        }
    }
    if($repetido==false){
       array_push($arregloSinRepetir, $val);   
    }
    if($repetido==true){
        array_push($arregloRepetidos, $val);
    }
    
} 

echo '<p>Arreglo sin repetidos, con comas: </p>';
foreach($arregloSinRepetir as $sin){
    echo $sin.',';
    mysqli_query($conexion,("INSERT INTO suscriptores VALUES(default, '', '$sin', '$fecha')"));
}

echo "<p>Arreglo sin repetir</p>";
print_r($arregloSinRepetir);


echo "<p>Arreglo Repetidos</p>";
print_r($arregloRepetidos);
//foreach($arregloRepetir as $val){
  //  echo '<span>'.$val.",</span>";
//}
echo '</div></body></html>';

?>