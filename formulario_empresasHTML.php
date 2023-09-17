<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="formulario.css">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
                <meta name="robots" content="NOODP">
                <meta name="robots" content="nosnippet">
		<title>Editorial Ambito Policial-Suscripción</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
		<meta name="description" content="Publicación Independiente y de Interés General. Al servicio de la familia policial de la República Argentina. Editor responsable: Juan Carlos Lasalvia . Dirección de la Editorial: Lavalle 1330 2° Piso Of 5-CP 1048AAH-CABA" />
		<meta name="keywords" content="Policia, Federal, Revista, Editorial, pfa, ambito, policial, publicacion, publicación, policía, digital" />
		<meta name="author" content="Codrops" />       
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link href="clasesCSS.css" rel="stylesheet" type="text/css">
	    <link href="eapstylesheet8.css" rel="stylesheet" type="text/css">
		<!-- custom demo style -->
	        <script src="https://kit.fontawesome.com/6cad21801f.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
		<link rel="icon" href="imagenes/logo_titulo.ico">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171613717-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171613717-1');
</script>
		<script src="js/modernizr.custom.js">
</script>

           	    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5shiv-printshiv.js"></script>
    <![endif]-->
	</head>
	

            <a href="#" class="scroll-top" title="Ir arriba">
    <i class="fa fa-angle-up"></i>
</a>
	    <nav id="seccionesarriba">
	    	
	    	<script type="text/javascript">		
var d = new Date();

var dia=new Array(7);
dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miercoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sabado";
var mes=new Array(12);
mes[0]="Enero";
mes[1]="Febrero";
mes[2]="Marzo";
mes[3]="Abril";
mes[4]="Mayo";
mes[5]="Junio";
mes[6]="Julio";
mes[7]="Agosto";
mes[8]="Septiembre";
mes[9]="Octubre";
mes[10]="Noviembre";
mes[11]="Diciembre";

document.write("<div id='fechahoy'><p>"+ dia[d.getDay()]+ " ",+d.getDate()+" de ", mes[d.getMonth()]+" de ",+d.getFullYear()+"</p></div>");

</script>
</div>
        <div id="clearboth"></div>
	    </nav>
        <div id="contenedor_titulo">
        	<div id="bannertitulo">
        		<div id="cabecera"> 
        		           <div id="logo_titulo"></div>
        			   <div id="contacto">
        			       <p>Lavalle 1330-2°Piso Oficina N°5-C1048AAH-CABA<br/>
                                        Tel(011)4371-2503//<br>Mail: 
                                        jclasalvia@editorialambitopolicial.com
                                      </p>
                                   </div>
                                   <div id="clearboth"></div>
        		</div>
                        <div id="clearboth"></div>
        		<div id="titulopag"><h1>EDITORIAL AMBITO POLICIAL</h1></div>
        	</div>          
            <nav id="botonera">
            <ul id="listasecciones">
	    		<a href="index.php"><li>INICIO</li></a>
	    		<a href="index.php?#contenidoprincipal"><li style="border-right: 1px solid #dedede; border-left: 1px solid #dedede">REVISTA ÁMBITO POLICIAL</li></a>
	    		<a href="index.php?susc=1#suscripcion"><li style="border-right: 1px solid #dedede;">SUSCRIPCIÓN</li></a>
<a href="formulario_empresas.html"><li>Suscripción Edición Impresa</li></a>
	    	</ul>
	    	<div id="clearboth"></div>
            </nav>        	
        </div>
	
<?php
   echo ' <form action="formulario_empresas.php" method="POST">
    <div style="color:#3c3c3c" class="container my-4 py-5">
       <h2>Formulario de suscripción a la Revista Editorial Ambito Policial.</h2>
       <p>Complete los siguientes datos para recibir en su domicilio la publicación.<br/>
          Con su suscripción anual le enviaremos la edición actual, y recibirá cada revista cuando la publicamos mientras su suscripción esté activa.
       </p>
<div id="campos">
          <div class="row my-2">
              <div class="col-xl-4"><label for="nombre">Nombre y apellido*</label><input required class="form-control" type="text" name="nombre"/></div>
              <div class="col-xl-4"><label for="razonSocial">Razón Social* </label><input required class="form-control" type="text" name="razonSocial"/></div>
          </div>    
           <div class="row my-4">        
              <div class="col-xl-4"><label for="domicilio">Domicilio*</label><input required class="form-control" placeholder="Ej: Av.Belgrano 1900" type="text" name="domicilio"/></div>
              <div class="col-xl-4"><label for="piso">Piso/Dpto/Oficina</label><input class="form-control" type="text" name="piso"/></div>
              
          </div> 
          <div class="row my-4"> 
              <div class="col-xl-4 ">
                  <label for="provincia">Provincia*</label>
                     <select required class="form-select" name="provincia" id="provincia">
                      <option value="BUENOS AIRES">BUENOS AIRES</option>
                      <option value="CATAMARCA">CATAMARCA</option>
                      <option value="CHACO">CHACO</option>
                      <option value="CHUBUT">CHUBUT</option>
                      <option value="CIUDAD AUTONOMA DE Bs As">CIUDAD AUTONOMA DE Bs As</option>
                      <option value="CORDOBA">CORDOBA</option>
                      <option value="CORRIENTES">CORRIENTES</option>
                      <option value="ENTRE RIOS">ENTRE RIOS</option>
                      <option value="FORMOSA">FORMOSA</option>
                      <option value="JUJUY">JUJUY</option>
                      <option value="LA PAMPA">LA PAMPA</option>
                      <option value="LA RIOJA">LA RIOJA</option>
                      <option value="MENDOZA">MENDOZA</option>
                      <option value="MISIONES">MISIONES</option>
                      <option value="NEUQUEN">NEUQUEN</option>
                      <option value="RIO NEGRO">RIO NEGRO</option>
                      <option value="SALTA">SALTA</option>
                      <option value="SAN LUIS">SAN LUIS</option>
                      <option value="SANTA CRUZ">SANTA CRUZ</option>
                      <option value="SANTA FE">SANTA FE</option>
                      <option value="SANTIAGO DEL ESTERO">SANTIAGO DEL ESTERO</option>
                      <option value="TIERRA DEL FUEGO">TIERRA DEL FUEGO</option>
                      <option disabled="true" selected="true" value="">Seleccionar una Provincia</option>
                  </select>
              </div>            
              <div class="col-xl-3">
                  <label for="localidad">Localidad* </label><input required class="form-control" type="text" name="localidad"/> 
              </div>
                 
          </div>   
          <div class="row mt-4 py-4">
               <div class="col-xl-2">
                  <label for="codigopostal">Código Postal*</label><input required class="form-control" type="text" name="codigopostal"/> 
              </div>
              <div class="col-xl-3">
                  <label for="telefono">Teléfono*</label><input required class="form-control" type="text" name="telefono"/>
              </div>
                             
          </div>
<div class="row mt-2 mb-4 py-2">
<div class="col-xl-6"> 
                  <label for="email">E-mail*</label>
                  <input required class="form-control" type="email" name="email"/>                    
              </div> 
</div> 
          <p>*Campos obligatorios</p>
</div>
          <button id="buttonEnviar" type="submit" class="my-4">Enviar</button>
      </div>  
      
    </form> '   ;

    if(isset($_GET['suscr'])){
    
        if(($_GET['suscr'])==0){
           echo '<div id="yasuscripto" class="yaSuscr"><h2>Ud. ya se suscribió anteriormente.</h2></div>
           <a href="index.php">
           <div class="yaSuscrButton mb-5">
           Volver al inicio
           </div>
           </a>';
        }
        
    } 
     


      ?>

</body>
<footer>
    <nav id="navfooter">
                    
        <ul id="secfooter">
            <a href="index.php"><li>Inicio</li></a>
            <a href="index.php?lib=1#contenedor2"><li>Edición Julio 2020</li></a>
            <a href="index.php?susc=1#suscripcion"><li>Suscripción</li></a>
        </ul>
        <div id="escfooter"></div>
            <div id="clearboth"></div>
    </nav>
    <div id="pie">Editorial Ambito Policial</div>    
</footer>

	
<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('a.scroll-top').fadeIn('slow');
    } else {
        $('a.scroll-top').fadeOut('slow');
    }
});
$('a.scroll-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 600);
});
</script>
</html>