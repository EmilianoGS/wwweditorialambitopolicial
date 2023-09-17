<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
	<meta name="robots" content="NOODP">
	<meta name="robots" content="nosnippet">
      <link href="dist/css/lightbox.css" rel="stylesheet" />
	<title>Editorial Ambito Policial</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
	<meta name="description"
		content="Publicación Independiente y de Interés General. Al servicio de la familia policial de la República Argentina. Editor responsable: Juan Carlos Lasalvia . Dirección de la Editorial: Lavalle 1330 2° Piso Of 5-CP 1048AAH-CABA" />
	<meta name="keywords"
		content="Policia, Federal, Revista, Editorial, pfa, ambito, policial, publicacion, publicación, policía, digital" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link href="clasesCSS.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="eapstylesheet8.css" rel="stylesheet" type="text/css"> -->
	<!-- custom demo style -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://kit.fontawesome.com/6cad21801f.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="icon" href="imagenes/logo_titulo.ico">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171613717-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-171613717-1');
	</script>
	<script src="js/modernizr.custom.js"></script>


	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5shiv-printshiv.js"></script>
    <![endif]-->
</head>
<!--body-->

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0" nonce="QCtD1BMY"></script>
	<a href="#" class="scroll-top" title="Ir arriba">
		<i class="fas fa-chevron-up"></i>
	</a>
	<nav class="container">
		<script type="text/javascript">
			var d = new Date();
			var dia = new Array(7);
			dia[0] = "Domingo";
			dia[1] = "Lunes";
			dia[2] = "Martes";
			dia[3] = "Miércoles";
			dia[4] = "Jueves";
			dia[5] = "Viernes";
			dia[6] = "Sábado";
			var mes = new Array(12);
			mes[0] = "Enero";
			mes[1] = "Febrero";
			mes[2] = "Marzo";
			mes[3] = "Abril";
			mes[4] = "Mayo";
			mes[5] = "Junio";
			mes[6] = "Julio";
			mes[7] = "Agosto";
			mes[8] = "Septiembre";
			mes[9] = "Octubre";
			mes[10] = "Noviembre";
			mes[11] = "Diciembre";

			document.write("<div class='ft-color2 mt-2'><p>" + dia[d.getDay()] + " ", +d.getDate() + " de ", mes[d.getMonth()] + " de ", +
				d.getFullYear() + "</p></div>");
		</script>
		<div id="clearboth"></div>
	</nav>
	<?php
          if(isset($_GET['sus'])){
          echo "<script>
          alert('Se ha suscripto exitosamente')
          </script>";
          }
          ?>
	<div id="contenedor_titulo">
		<div id="bannertitulo">
			<div class="container" id="cabecera" >
				<div class="row mx-0">
					<div class="escudoCol col-xl-6 col-lg-5 col-md-5 col-sm-12">
						<img src="imagenes/escudo.png" width="200"/>
					</div>				
					<div class="col-xl-5 col-lg-5 col-md-5" id="contacto">
						<p>Lavalle 1330-2°Piso Oficina N°5-C1048AAH-CABA<br />
							Tel: (011)4371-2503//<br>
							E-Mail: administracion@editorialambitopolicial.com 
						</p>
					</div>
				</div>					
			</div>
			<div id="clearboth"></div>
			<div id="titulopag">
				<div class="container">
					<h1>EDITORIAL AMBITO POLICIAL</h1>
				</div>
			</div>
		</div>
		<div id="botonera" class="bg-white">		 
		    <nav  class="container">
			<ul id="listasecciones">
				<a href="index.php">
					<li>INICIO</li>
				</a>
				<a href="index.php?#contenidoprincipal">
					<li >REVISTA ÁMBITO POLICIAL
					</li>
				</a>
				<a href="index.php?susc=1#suscripcion">
					<li >SUSCRIPCIÓN</li>
				</a>
				<a href="formulario_empresasHTML.php">
					<li>SUSCRIPCIÓN EDICIÓN IMPRESA</li>
				</a>
			</ul>
			<div id="clearboth"></div>
		</nav>
		</div>
	</div>
	
	<div class="bg-grisC py-5">
		<div class="container ">
			<div class="row justify-content-between">
				<div class="col-xl-8" id="contenidoPortada">
				    	<div class='divNot '>
						<p style="font-family: 'Open-sans', sans-serif;">27 de junio de 2023</p>
						<h1 class="h3class ">Cadetes de 1er año juran lealtad a la Bandera Nacional Argentina frente a la Plaza Gral. Manuel Belgrano, en CABA.</h1>
						<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F789878682803918%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>		
				
						<div class="divNot">
						<p style="font-family: 'Open-sans', sans-serif;"><small class="ft-color2">14 de mayo de 2023</small></p>
						<h1 class="claseH3">Misa Institucional de PFA del lunes 8 de Mayo con ocasión del día de la Virgen de Luján y el 77° Aniversario de la División Clero Policial PFA.</h1>
						<span class="videosClass" id="spanVideo14mayo">
    						<video controls="" id="video14mayo">				
    							<source src="imagenes/video_14_mayo.mp4" type="video/mp4">
    						</video>
    					</span>
					</div>
					<div class="divNot">
						<p style="font-family: 'Open-sans', sans-serif;"><small class="ft-color2">19 de abril de 2023</small></p>
						<h1 class="claseH3">Día Nacional del Policía</h1>
						<img height="auto" src="imagenes/dia_policia_23.jpg" style=" padding:30px 0px 50px" width="90%">
					</div>

					<div class='divNot '>
						<p style="font-family: 'Open-sans', sans-serif;">7 de abril de 2023</p>
						<h1 class="h3class ">Saludo del Jefe de la PFA, Crio. Gral. Juan Carlos HERNÁNDEZ; el Subjefe de la PFA, Crio. Gral. Osvaldo Rubén MATO y el Pbro. Diego de Campos con motivo de la festividad de las Pascuas.</h1>
						<iframe class="vidIframe" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F649081927028355%2F&show_text=false&width=560&t=0" width="100%" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
					<div class='divNot'>
						<p style="font-family: 'Open-sans', sans-serif;">2 de abril de 2023</p>
						<h1 class="h3class ">Día del Veterano y de los Caídos en la guerra de Malvinas</h1>
						<iframe id="video2abril23" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F905750773814576%2F&show_text=false&width=476&t=0" width="100%" height="685" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
					<div class='divNot'>
						<p style="font-family: 'Open-sans', sans-serif;">11 de marzo de 2023</p>
						<h1 class="h3class ">Ceremonia de inicio del ciclo lectivo 2023 de la Escuela de Cadetes "Crio. Gral Juan A. PIRKER", presidida por el Jefe de la PFA Crio. Gral. Juan C. HERNÁNDEZ, el Subjefe Crio. Gral. Osvaldo R. MATO y el Superintendente de Instrucción y Formación Académica, Crio. Gral. Gerardo R. ARES.</h1>
						<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F883718249509277%2F&show_text=false&width=560&t=0" width="100%" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
					<div class='divNot'>
						<p style="font-family: 'Open-sans', sans-serif;">7 de marzo de 2023</p>
				        <h1 class="h3class ">El Jefe de la PFA Crio. Gral. Juan C. HERNÁNDEZ, el Subjefe Crio. Gral. Osvaldo R. MATO y el Superintendente de Instrucción y Formación Académica Crio. Gral. Gerardo R. ARES, dieron inicio al ciclo lectivo en la Escuela Federal de Suboficiales y Agentes "Don Enrique O´GORMAN"</h1>
						<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F231306196029189%2F&show_text=false&width=560&t=0" width="100%" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
					<div class='divNot'>
						<p style="font-family: 'Open-sans', sans-serif;">26 de febrero de 2023</p>
				        <h1 class="h3class ">Premiación de la Brigada USAR por su notable participación en Turquía con el rescate de víctimas tras la catástrofe.</h1>
						<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F745858876948637%2F&show_text=false&width=560&t=0" width="100%" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
					<div class="divNot">
						<p style="font-family: 'Open-sans', sans-serif;">9 de febrero de 2023</p>
				        <h1 class="h3class">Despedida al equipo de la Brigada Especial Federal de Rescate de la Policía Federal Argentina que se sumará a las tareas de rescate en Turquía.</h1>
						<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F744104850341995%2F&show_text=false&width=560&t=0" width="100%" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
					</div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">5 de febrero de 2023</p>
				        <h1 class="h3class ">9° Aniversario de la tragedia de Barracas</h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/tragediaBarracas.jpg"/>
				    </div>
				   <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">3 de febrero de 2023</p>
				        <h1 class="h3class ">210° Aniversario de la Batalla de San Lorenzo</h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/3febrero.jpg"/>
				    </div>
				     <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">31 de diciembre de 2022</p>
				        <h1 class="h3class ">Le deseamos un Feliz Fin de Año 2022</h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/ano_nuevo23.jpg"/>
				    </div>
				    <div class="divNot">
				       <p style="font-family: 'Open-sans', sans-serif;">31 de diciembre de 2022</p> 
				          <h1 class="h3class ">Saludo de fin de año de la Policía Federal Argentina</h1>
				      <p class="parrafoStyle">Difundido por la Editorial Ambito Policial</p>
				       <span class="videosClass" id="spanvideoAñoNuevo">
    						<video controls="" id="videoAñoNuevo">				
    							<source src="imagenes/video_ano_2023.mp4" type="video/mp4">
    						</video>
    					</span>
				    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">17 de diciembre de 2022</p>
				        <h1 class="h3class ">Jornada de Puertas Abiertas</h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/jornada_puertas_abiertas.jpg"/>
				    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">14 de diciembre de 2022</p>
				        <h1 class="h3class ">Aniversario del accidente en el cual murieron 43 gendarmes.</h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/gendarmes2022.jpg"/>
				    </div>
				    <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">27 de noviembre de 2022</p>
				         <h1 class="h3class ">42°Peregrinacion de la PFA a Luján. Gracias a todos y a cada uno. Nuestra Madre y Patrona nos cuide y nos proteja con su manto. Lo hicimos juntos.</h1>
				        <iframe class='not291022' src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F891604042016942%2F&show_text=false&width=560&t=0" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" clipboard-write; encrypted-media; picture-in-picture; web-share allowFullScreen="true"></iframe>
				    </div>
				    <div class="divNot d-none">
				        
				        <iframe class="border-0 crslClass" width="100%" height="700" src="carousel_clero.html"></iframe> 
				     </div>
				     <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">16 de noviembre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/ara_sanjuan.jpg"/>
				     </div>
				     <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">16 de noviembre de 2022</p>
				     <h1 class="h3class ">LA POLICÍA FEDERAL ARGENTINA ACOMPAÑÓ CON SU PRESENCIA Y CON SU SERVICIO A LA IGLESIA Y A LA COMUNIDAD DE TUCUMÁN EN EL ÚLTIMO ADIÓS A MONSEÑOR ALFREDO HORACIO ZECCA, QUIEN FUERA ARZOBISPO DE ESA ARQUIDIÓCESIS ENTRE 2011 Y 2017</h1>

                    <p class="parrafoStyle">
                        Publicación Facebook Clero Policial PFA.
                     <a class="aNot" style="color:#2b8bd9 !important" href="https://m.facebook.com/story.php?story_fbid=pfbid0XQntacdFD8zZZRc5FXqTqQ7y6a2pGiE71pQmgBiLfJjyTxEUJxaJFPLgdLCbcoEwl&id=100064592296472" target="_blank">https://m.facebook.com/story.php?story_fbid=pfbid0XQntacdFD8zZZRc5FXqTqQ7y6a2pGiE71pQmgBiLfJjyTxEUJxaJFPLgdLCbcoEwl&id=100064592296472
			        	</a>
                    </p>
                    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">14 de noviembre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/virgen_lujan22.jpg"/>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/pereg1.jpg"/>
				          <img class="mb-3" height="auto" width="90%" src="imagenes/pereg2.jpg"/>
				    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">12 de noviembre de 2022</p>
				        <h1 class="h3class ft-blue">
				            BIENVENIDOS LOS NUEVOS NOMBRAMIENTOS DE LOS COMISARIOS GENERALES Y COMISARIOS MAYORES.
				        </h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/nombramientos.jpg"/>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/escalafon_seguridad.jpg"/>
				    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">4 de noviembre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/virgen_lujan22.jpg"/>
				    </div>
				    <div class="divNot">
				        <h1 class="h3class">Cierre de la Semana de la Policía Federal Argentina 2022</h1>
				        <video controls="" id="video4">					
						  <source src="imagenes/video_291022.mp4" type="video/mp4">
						</video>
				    </div>
				    <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">28 de octubre de 2022</p>
				        <iframe class='not291022' src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F5971472986210838%2F&show_text=false&width=267&t=0" width="60%" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0"   clipboard-write; encrypted-media; picture-in-picture; web-share allowFullScreen="true"></iframe>
				    </div>
				    <div class="divNot">
				        <p style="font-family: 'Open-sans', sans-serif;">28 de octubre de 2022</p>
				        <h1 class="h3class">
				        Misa por el 201° aniversario de la Policía Federal Argentina en la catedral porteña
				        </h1>
				        <img class="mb-3" height="auto" width="90%" src="imagenes/misa_gracias.jpg"/>
				         <p class="linkNoticia" style="font-family: 'Open-sans', sans-serif;">Nota completa: </p>
					     
						 <a class="aNot" style="color:#2b8bd9 !important" href="https://aica.org/noticia-misa-de-accion-de-gracias-por-el-206-aniversario-de-la-policia-federal-argentina" target="_blank">https://aica.org/noticia-misa-de-accion-de-gracias-por-el-206-aniversario-de-la-policia-federal-argentina
				
			        	</a>
				    </div>
				    <div class="divNot">
				        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F778863383203096%2F&show_text=false&width=560&t=0" width="100%" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0"   clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				    </div>
				    <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">25 de octubre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/semanapfa1.jpg"/>
				     </div>
				     <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">25 de octubre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/semanapfa2.jpg"/>
				     </div>
				     <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">25 de octubre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/semanapfa3.jpg"/>
				     </div>
				     <div class="divNot">
				         <p style="font-family: 'Open-sans', sans-serif;">16 de octubre de 2022</p>
				         <img class="mb-3" height="auto" width="90%" src="imagenes/dia_madre.jpg"/>
				     </div>
                    <div class="divNot">
                        <p style="font-family: 'Open-sans', sans-serif;">17 de septiembre de 2022</p>
                            <p class="parrafoStyle">
                           El día viernes 16 de septiembre, en el salón principal del CORPFA, se presentó la orquesta típica Héctor Varela, con sus cantores Diego Solís y Bernardo Bergé.
                         Durante su actuación y después, se lucieron los bailarines.
                         Fue otro espectáculo que el Centro ofreció a sus socios e invitados. A esta exitosa noche concurrieron más de cien personas que se fueron muy satisfechas y esperando la repetición de tan gratos eventos.
                        </p>
                        <iframe class="border-0 crslClass" width="100%" height="700" src="carousel_pfa.html"></iframe> 
                    </div>
				   
				    <div class="divNot">
				        
				        <p style="font-family: 'Open-sans', sans-serif;">13 de septiembre de 2022</p>
						<h1 class="claseH3">Interna en la Policía Federal: cuestionamientos contra el comisario preferido de Aníbal Fernández</h1>
						<p class="parrafoStyle">
						    El frustrado atentado contra Cristina Fernández de Kirchner y la ineficiencia en la investigación dejaron en evidencia la interna dentro de la cúpula de la Policía Federal. Pelea entre el jefe Hernández y el número dos Matto. El comisario preferido de Aníbal avanza pero genera cuestionamientos.
					    </p>
						<img class="mb-3" height="auto" width="90%" src="imagenes/fernandez_anibal.jpg"/>
					     <p class="linkNoticia" style="font-family: 'Open-sans', sans-serif;">Nota completa: </p>
					     <div class="">
						 <a class="aNot" style="color:#2b8bd9 !important" href="https://www.mdzol.com/politica/2022/9/13/interna-en-la-policia-federal-cuestionamientos-contra-el-comisario-preferido-de-anibal-fernandez-274048.html" target="_blank">	https://www.mdzol.com/politica/2022/9/13/interna-en-la-policia-federal-cuestionamientos-contra-el-comisario-preferido-de-anibal-fernandez-274048.html
				
			        	</a>
			        </div>
					</div>
					
				  <div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">11 de septiembre de 2022</p>
					<h1 class="h3class">
					Día del Maestro
					</h1>
					<img height="auto" width="90%" src="imagenes/dia_maestro.jpg"/>
				</div>
				    <div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">31 de agosto de 2022</p>
					
					<img height="auto" width="90%" src="imagenes/iupfa.jpg"/>
				</div>
				 <div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">9 de julio de 2022</p>
					<h1 class="h3class">
						Día de la Independencia
					</h1>
					<img height="auto" width="90%" src="imagenes/dia9dejulio.jpg"/>
				</div>
				 <div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">2 de julio de 2022</p>
					<h1 class="h3class">
						Día del Policía Federal Caído en Cumplimiento del Deber
					</h1>
					<img height="auto" width="90%" src="imagenes/diadelpfacaido.jpg"/>
				</div>
				<div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">1 de julio de 2022</p>
					<img height="auto" width="90%" src="imagenes/interpol.jpg"/>
				</div>
				<div class="divNot">
				    <img height="auto" width="90%" src="imagenes/pfa_jura.jpg"/>
				</div>
				<div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">8 de marzo de 2022</p>				
					<img height="auto" width="90%" src="imagenes/8marzo.jpg"/>
				</div>	
		  		<div class="divNot">
				  <p style="font-family: 'Open-sans', sans-serif;">1 de marzo de 2022</p>
					<h1 class="h3class">
						Día de la Cero Discriminación
					</h1>
					<img height="auto" width="90%" src="imagenes/cero_discriminacion.jpg"/>
				</div>
				<div class="divNot">
				<p style="font-family: 'Open-sans', sans-serif;">1 de marzo de 2022</p>
				<h1 class="h3class">
				Nuestro Cuerpo de Policía Montada extiende su saludo protocolar al paso de sus camaradas del Regimiento de Granaderos a Caballo.
				</h1>
				<iframe src="https://www.facebook.com/plugins/video.php?height=317&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F363436935413355%2F&show_text=false&width=560&t=0" width="100%" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>

				<div class="divNot">
				<p style="font-family: 'Open-sans', sans-serif;">1 de marzo de 2022</p>
				<h1 class="h3class">
				Se realizó el acto 140° de Apertura de Sesiones Ordinarias en el Congreso de la Nación y el Subjefe de la #PFA, Comisario General, Osvaldo R. MATO estuvo presente representando a la Institución, que también colaboró con la seguridad del evento junto con otras fuerzas.
				</h1>
				<iframe src="https://www.facebook.com/plugins/video.php?height=315&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F4879133045501419%2F&show_text=false&width=560&t=0" width="100%" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0"  allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
				</div>
		  		<div class="divNot">
				  <h1 class="h3class">
						Homenaje al Ex Jefe de la Policía Federal Argentina Comisario General Juan Ángel Pirker	
					</h1>
				  <a class="fb_video" target="_blank" href="https://fb.watch/bfSFyiJ3bX/">
					  <img height="auto" width="90%"  src="imagenes/pirker.jpg"/>
				  </a>
				</div>	  

				<div class="divNot">
					<p style="font-family: 'Open-sans', sans-serif;">13 de febrero de 2022</p>
					<h1 class="h3class">
						Día Mundial de la Radio 
					</h1>

					<div >
					<img height="auto" width="90%" src="imagenes/dia_radio.jpg" />
					</div>
				</div>	
				 <div class="divNot ">
					<h1 class="h3class">Ceremonia de Egreso del Curso de Formación Profesional Básica para Agentes: Promoción 235 </h1>
					<div class="row justify-content-center">
						<div class="col-xl-5 col-lg-5 col-sm-12 my-2">
							<iframe class="videoPortrait" src="https://www.facebook.com/plugins/video.php?&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F364097105221409%2F&show_text=false&width=267&t=0"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="false"></iframe>
						</div>
						<div class="col-xl-5 col-lg-5 col-sm-12 my-2">
							<iframe class="videoPortrait" src="https://www.facebook.com/plugins/video.php?&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F2165383116960031%2F&show_text=false&width=267&t=0"   style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" ></iframe>
						</div>
					</div>
						
				</div>
				<div class="divNot">
				<p style="font-family: 'Open-sans', sans-serif;">5 de febrero de 2022</p>
				  <h1 class="h3class">Acto conmemorativo en Barracas y toque de sirena en Cuarteles de todo el país, en memoria de los héroes que perdieron su vida en la tragedia.</h1>
				 <a class="fb_video" href="https://www.facebook.com/PFAOficial/videos/491899232540750" target="_blank">
					  <img src="imagenes/bomberos_barracas.png" height="auto" width="100%"/>
				</a>		  
				</div>			
				
<div class="divNot"><img height="auto" width="90%" src="imagenes/reyes.jpg" /></div>	
<div class="divNot">
<h1 class="h3class">41° Peregrinación a Pie de la Policía Federal Argentina y la Misa de Acción de Gracias en la Basílica Nuestra Señora de Luján</h1><iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F391874089397233%2F&show_text=false&width=560&t=0" width="100%" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow=" clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe></div>
<div class="divNot"><h1 class="h3class">17 de Noviembre de 1906. Aniversario de la Creación de la Escuela de Cadetes.</h1><img height="auto" width="90%" src="imagenes/cadetes_1906.jpg" class="mb-5"/> <img height="auto" width="90%" src="imagenes/foto_cadete.jpg" /></div>
<div class="divNot"><h1 class="h3class">Cronograma 41ª Peregrinación a Luján</h1>
<a href="imagenes/peregrinacion_lujan_2021.pdf"><p id="pLink">Click para ampliar</p><img id="imgLink" src="imagenes/Peregrinacion_2021.jpg" height="auto" width="90%" alt="image alt"/></a></div>

<div class="divNot"><img height="auto" width="90%" src="imagenes/lujan.jpg" /></div>
					<div class="divNot">
						<h1 class="h3class" style="text-align:left; width:90%;display:block; padding-bottom:10px;">Semana de 
							la Policía Federal Argentina</h1>
							
							<iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Flivikisol781%2Fvideos%2F400755215057185%2F&show_text=false&width=476&t=0&embedded=true" width="100% " height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allow="clipboard-write; encrypted-media; picture-in-picture; web-share" data-autoplay="false"; data-allowFullScreen="false"></iframe>
							
					</div>
				
					<div class="divNot">
						<h1 class="claseH3">INAUGURACIÓN Y BENDICIÓN DE LAS INSTALACIONES DE LA DIVISIÓN OPERATIVA FEDERAL
							GUALEGUAYCHÚ.</h1>
						<p class="parrafoStyle">Con la bendición de las Instalaciones y de su Personal, la entronización de
							la Imágen de la Virgen de Luján en su hall de ingreso, y con el corte de cinta por parte de las
							Autoridades presentes, quedó inaugurada el pasado martes 21 de Septiembre, la División Unidad
							Operativa Federal Gualeguaychú de la Policía Federal Argentina. La nueva Dependencia Policial
							está ubicada en San Martín 877 de esa Ciudad, y tiene jurisdicción en los Departamentos
							Gualeguaychú e Islas del Ibicuy.<br>
							Presidió la Ceremonia Inaugural el Superintendente de Agencias Federales de la PFA, Comisario
							General Sergio Gabriel Usai, a quien acompañaban el Secretario General de la Institución, el
							Director de la Agencia Regional Federal Santa Fe, y Oficiales Superiores y Jefes de la Agencia y
							de sus Dependencias Subordinadas. Se encontraban también presentes Autoridades del Gobierno de
							Entre Ríos, el Intendente de la Ciudad y Autoridades Judiciales de Gualeguachú, como así también
							el Subjefe de la Policía la Provincia de Entre Ríos y Autoridades locales de Gendarmería y de la
							Prefectura Naval Argentina, invitados especiales e integrantes de distintas Instituciones de
							Bien Público, y numerosos vecinos.<br>
							La Invocación Religiosa, que concluyó con la bendición de todos los presentes, estuvo a cargo
							del Capellán General de la Policía Federal Argentina, Pbro. Diego de Campos, quien se trasladó a
							la Ciudad Gualeguaychense junto con Personal de la División Clero Policial PFA para la Ceremonia
							de Inauguración.<br>
							Esta División Clero Policial PFA, sus Capellanes y su Personal, quieren felicitar muy
							especialmente y desearles todo lo mejor en sus tareas y responsabilidades, al Jefe de la DUOF
							Gualeguachú, Comisario Carlos Alberto Schoenknecht, al 2º Jefe de la misma, Principal Carlos
							López, y a los Oficiales, Suboficiales y Auxiliares de la Institución que cumplirán con su
							servicio de cuidar la seguridad del Estado y de sus semejantes, en esa nueva Unidad de la
							Policía Federal Argentina.</p>
							<iframe class="border-0 crslClass" width="100%" height="700" src="carousel1.html"></iframe>
					</div>
					<div class="divNot">
						<p style="font-family: 'Open-sans', sans-serif;"><small class="ft-color2">14 de septiembre de 2021</small></p>
						<h1 class="claseH3">14 de Septiembre Día del Agente Conscripto de la Policía Federal Argentina</h1>
						<img height="auto" src="imagenes/conscriptos.jpg" style=" padding:30px 0px 50px" width="90%">
					</div>
					<div class="divNot">

					<iframe class="not314" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F571797383944356%2F&show_text=false&width=560&t=0" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"  data-autoplay="false" data-allowfullscreen="false"></iframe>
					</div>
					<div class="divNot">
						<h1 class="claseH3">ASUMIÓ OFICIALMENTE SUS FUNCIONES EL NUEVO CAPELLÁN DE LA AGENCIA REGIONAL
							FEDERAL MAR DEL PLATA DE LA POLICÍA FEDERAL ARGENTINA, PRESBÍTERO LUIS DAMIÁN ALBÓNIGA.</h1>
						<p class="parrafoStyle">La celebración de la Santa Misa en la cual asumió oficial y públicamente sus
							funciones el Presbítero Luis Damián Albóniga como Capellán de la Agencia Regional Federal Mar
							del Plata de la Policía Federal Argentina y de todas sus Dependencias subordinadas, fue el
							momento central y el principal objetivo de la Visita Pastoral que el Capellán General de esa
							Institución, Pbro. Diego de Campos realizó junto a los sargentos Gastón Endara y Juan Pablo
							Moreno, de la División Clero Policial PFA, durante los días 18 al 21 de Agosto a esa Ciudad. El
							nuevo Capellán es Sacerdote perteneciente a la Diócesis de Mar del Plata, es Vicario General de
							la Diócesis y Párroco de la iglesia “Asunción de la Santísima Virgen”. La ceremonia religiosa
							estaba prevista para marzo del 2020, pero debió posponerse en dos oportunidades a causa de la
							Pandemia.<br>
							Fueron variados y muy positivos todas las actividades realizadas y los momentos compartidos
							durante esos días junto al padre Luis, tanto con miembros de la Iglesia local, con los hombres y
							mujeres de la Fuerza que cumplen con su servicio en esa región de nuestro país, como así también
							con las Autoridades e integrantes de la Filial Mar del Plata del Círculo de Suboficiales de la
							PFA y Personal Retirado.<br>
							En la mañana del jueves 19, según lo previsto, en la sede de la División Unidad Operativa
							Federal (DUOF) Mar del Plata, los presbíteros Diego de Campos y Luis Albóniga fueron recibidos
							por el Director de la Agencia, Comisario Mayor Ricardo Luis Ferreira, por el Jefe del
							Departamento de Investigaciones Federales (DIF) Mar del Plata, Comisario Fernando Marinas, y por
							el Jefe de la DUOF, Comisario Julio César Soria. Mantuvieron con ellos y con el Personal que
							presta servicios en la DUOF un muy cálido encuentro durante el cual también se bendijeron las
							Instalaciones y al Personal, y se entronizó en un lugar destacado junto a los retratos de los
							Policías de la región fallecidos en Cumplimiento del Deber o a Causa del Covid 19, una imagen de
							la Virgen de Luján, Patrona de la Argentina y de su Policía Federal. Al concluir el encuentro,
							los dos Capellanes se dirigieron al Obispado de Mar del Plata donde mantuvieron hasta el
							mediodía, una reunión con el Obispo local, Monseñor Gabriel Mestre.<br>
							Por la tarde del mismo jueves, a las 16.30 hs., comenzaron a congregarse en el atrio de la
							Catedral Basílica “de los Santos Pedro y Cecilia”, las representaciones de las distintas
							Dependencias que integran la ARF Mar del Plata, el presidente e integrantes de la Filial local
							del Círculo de Suboficiales, fieles de la comunidad y familiares del padre Luis. A las 17 hs.,
							con la procesión de entrada, comenzó la tan esperada Celebración de la Eucaristía presidida por
							Monseñor Mestre, y concelebrada por los padres Luis y Diego, por el Párroco de la Catedral, y
							por Sacerdotes y Diáconos invitados. Durante la celebración, en el momento propio, el Capellán
							General PFA, Pbro. Diego de Campos, leyó el decreto del Nombramiento del padre Luis Albóniga
							como Capellán de la Policía Federal para la ARF Mar del Plata, firmado por el Arzobispo de
							Buenos Aires y Primado de la Argentina, Cardenal Mario Aurelio Poli. Con la lectura Pública del
							Decreto frente al Obispo Local, al Personal de la Institución de la Región, y a la Comunidad de
							la Iglesia Catedral, en un clima de mucha emoción, el padre Luis Albóniga asumió oficial y
							públicamente sus nuevas funciones. La Homilía estuvo a cargo del Capellán General y antes de
							finalizar la Santa Misa, Monseñor Mestre y el Padre Luis dirigieron unas muy emotivas palabras a
							todos los presentes. Es importante mencionar dos gestos muy profundos y emotivos que se vivieron
							en distintos momentos durante la Celebración Litúrgica: el encendido de un Cirio, y la
							colocación del mismo por parte de Personal Policial junto a la imagen de la Virgen de Lujàn,
							como signo de oración por el eterno descanso de todos los Policías Federales fallecidos durante
							los últimos dos años a causa de la Pandemia, y también como luz de esperanza en la Resurrección.
							Y el segundo de los gestos, fue la bendición con el agua bendita realizada por el Obispo, de las
							manos de todo el Personal Policial presente, encomendándolos a Dios en el servicio que a diario
							ofrecen por la sociedad y por el prójimo. Esa misma noche, y para festejar el histórico y
							religioso momento institucional y eclesial que se acababa de vivir, las Autoridades de Policía
							Federal de la Región ofrecieron una muy cálida Cena de Camaradería en los salones de la
							Parroquia “Asunción de la Santísima Virgen”.<br>
							El viernes 20 tuvo lugar la Visita a la Sede de la ARF Mar del Plata ubicada junto al mar en la
							Escollera Norte. En ella se Bendijeron las Instalaciones y se compartió un desayuno con todo el
							Personal presente en el lugar. Durante el mismo, El Director de la Agencia, Comisario Mayor
							Ferreira, quien estaba acompañado por los Oficiales Superiores y Oficiales Jefes de las
							distintas Dependencias con asiento en el mismo edificio, dirigió unas muy sentidas palabras a
							todos los presentes, las cuales fueron muy bien recibidas y aplaudidas. Un especial momento de
							emoción, de silencio y oración se vivió junto al Monumento que, en la esplanada de ingreso al
							edificio, recuerda a los Policías Federales Caídos en Cumplimiento del Deber.<br>
							Damos gracias a Dios y a la Virgen de Luján por todo lo intensamente vivido y compartido durante
							esos días. Felicitamos de corazón al padre Luis y le deseamos un muy fructífero ministerio en su
							nueva misión pastoral con los hombres y mujeres de la Institución y sus familias. Agradecemos al
							señor Obispo de Mar del Plata por respaldar y acompañar tan de cerca desde sus inicios este
							proyecto, haciendo que hoy sea una realidad. Agradecemos también la hospitalidad, la
							cordialidad, la presencia y la cercanía constantes del Comisario Mayor Ferreira y en su persona,
							la de todos los hombres y mujeres que en sus distintas jerarquías y funciones integran la
							Agencia o dependen de ella. Agradecemos por último a todos los que de distintas maneras en sus
							variadas áreas y roles institucionales, hicieron posible la Visita Pastoral y la puesta en
							funciones del querido padre Luis como Capellán de la ARF Mar del Plata. No nos cabe la menor
							duda de que todo lo vivido ha sido, es y será una Bendición para este Clero Policial PFA que en
							este año está cumpliendo 75 años de existencia, y para todos los hombres y mujeres de la Policía
							Federal Argentina que en este año 2021 se encuentra celebrando los 200 años de su creación.</p>
							<iframe class="border-0 crslClass" width="100%" height="700" src="carousel2.html"></iframe>
					</div>
					<div class="divNot">
						<div >
							<iframe class="not328" frameborder="0" height="350" scrolling="no"
								src="https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F2994368564112120%2F&show_text=false&width=560&t=0"
								style="width:100%;border:none;overflow:hidden"></iframe>
						</div>
					</div>
					<div class="divNot">
					<h1 class="claseH3">14 de agosto, Día de la Mujer Policía.</h1><img height="auto"
						src="imagenes/mujerpolicia.jpeg"
						width="90%">
					</div>
					<div class="divNot">
						<h1 class="claseH3">Feliz Aniversario Sección Perros</h1><img class="imgStyle" height="auto"
						src="imagenes/seccionperros.jpg" width="90%">
					</div>		
					<div class="divNot">
						<h1 class="claseH3">Accidente vehicular en Ruta 151 con Oficial Jefe Superior lesionado y familiar
							fallecido.</h1>
						<p class="parrafoStyle">En la fecha 28JUL2021, horas 21:30 se toma conocimiento de accidente vial
							ocurrido en Ruta Nacional 151 altura km 62, zona de Barda del Medio (distante a 72 km) de la
							provincia de RIO NEGRO, estableciendo que recientemente ocurrió un autovuelco de un vehículo de
							la marca VW SURAN que circulaba con sentido norte – sur, teniendo el lamentable resultado de una
							persona fallecida de sexo femenino quien permanece en el automóvil siniestrado . Se tomo
							contacto con el Hospital de CINCO SALTOS donde fueron derivados el Comisario Mayor Daniel PALASI
							- Director General de Inteligencia Criminal de esta Institución quien presenta TRAUMATISMOS
							CERRADO DE CRANEO, Tomas PALASI ( hijo del Sr. Daniel) con diagnostico TRAUMA CERRADO DE TORAX y
							la Sra. Ornela BASO (nuera del Sr. Daniel) con LESIONES LEVES TRAUMATISMO EN DORSO. En tanto que
							desde el Htal. La Jefa de guardia Dra.. Laura MIKELOVICH confirmo el deceso de una persona
							Fallecida Carla de PALASI (esposa del Oficial Jefe superior) sin brindar mas información por el
							momento. En el lugar interviene el cuerpo de Seguridad Vial de BARDA DEL MEDIO de la Policía de
							Provincia de Rio Negro, el que se encuentra a cargo del Inspector Andrés Nahuelguer, Jefe
							destacamento especial de Seguridad Vial Barda del Medio quienes se encuentran trabajando en el
							lugar. SE AMPLIARA CON P.I.-<br></p><img height="auto" src="imagenes/palasi.jpg"
							style="padding:15px 0px" width="90%">
						<p style="font-size:13px;padding-bottom:25px; color: #909090; font-family:'Open-sans', sans-serif;">
							Comisario Mayor Daniel Palasi</p>
						<p
						class="pClass">
							Ampliando información, 29JUL21, horas 08.00 se procede a informar diagnóstico brindado por el
							Dr. Martín DIAZ, Médico de Guardia del Policlínico Modelo de Cipolletti, sito en calle San
							Martin 987 intersección con calle Libertad, de la ciudad de Cipolletti, (-38,941792, -67,988655)
							provincia de Río Negro, donde se encuentran internados el Comisario Mayor Daniel PALASI; Tomas
							Julián PALASI D.N.I. 40.207.820 (hijo del Crio. Mayor PALASI) presentando, y la Sra. Ornella
							Estefania BASSO D.N.I. 38.065.913 (nuera del Crio. Mayor) TODOS ESTABLES Y CONSCIENTES, EN LA
							UNIDAD DE TERAPIA INTENSIVA, EVOLUCIONANDO CON PRONÓSTICO RESERVADO. En otro orden de cosas,
							respecto al lugar del accidente fué en el km. 62 de la Ruta Nacional 151, siendo el vehículo
							donde se trasladaban una camioneta marca Toyota, modelo RAV 4x4, tipo todo terreno, dominio KPC
							558, con destino a la ciudad de SAN MARTÍN DE LOS ANDES, Pcía. De NEUQUÉN. Respecto a quien en
							vida fuera la señora Carla Marcela FERREYRO, D.N.I. 21.065.994 (fallecida y esposa del Crío.
							Mayor) aún no se posee resultado de la autopsia. Se ampliara.<br>
							Daniel Palasi que nunca perdió el conocimiento, está recuperándose lentamente y no tendría
							fractura de craneo, aunque muy conmocionado por el deceso de su esposa. Tal vez el estado del
							hijo, miembro del Cuerpo, sea el más comprometido por las múltiples fracturas de costillas que
							afectaron seriamente sus pulmones lo que obliga a tenerlo con respirador; la nuera tal vez
							superando más rápidamente sus lesiones. Es todo por el momento.</p>
					</div>
					<div class="divNot">
						<h1 class="claseH3 H3border"
							style="text-align:left; border-bottom: 1px solid rgba(208,141,24, 0.5); width:90%;display:block; padding-bottom:10px;">
							Homenaje a los Policías Federales Caídos en Cumplimiento del Deber.</h1><iframe
							data-allowfullscreen="false" frameborder="0" height="700" scrolling="no"
							src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FPFAOficial%2Fvideos%2F222083549628238%2F&show_text=false&width=267&t=0"
							style="border:none;overflow:hidden" width="60%"></iframe>
					</div>
					<div class="divNot">
						<h1 class="claseH3 H3border">2 de Julio, Día del Policía Federal caído en cumplimiento del deber
						</h1><img class="imgStyle" height="auto" src="imagenes/diaPoliciaCaido.jpg" width="90%"> <img
							class="imgStyle" height="auto" src="imagenes/diaPoliciaCaido2.jpg" width="90%">
					</div>
					<div class="divNot">
						<h1 class="claseH3 H3border">2021-Bicentenario de la Policía Federal Argentina</h1><img
							class="imgStyle" height="auto" src="imagenes/bicentenariopfa.jpg" width="90%"> <img
							class="imgStyle" height="auto" src="imagenes/oracionPatria.jpg" width="90%">
					</div>
					<div class="divNot">
					<h5 class="claseH3 H3border">25 de de mayo</h5>
					<h1 class="claseH3" style="width:90%;display:block; padding-bottom:10px;">Saludo a la patria</h1>
					<h3 class="claseH3">Este saludo transmite un mensaje de unión y esperanza hacia toda la Argentina, desde
						sus sitios históricos, y a través de su bien más preciado: su gente.</h3>
					<p class="pClass">
						Conmemoramos un origen, difundimos nuestro patrimonio y fortalecemos nuestros vínculos.<br>
						Éste video fue filmado, en la gran mayoría de los casos, con registros de teléfonos celulares.
						Buscando desde el presente una visual histórica o los cabildos existentes de cada provincia y que
						estuvieron ligados a los eventos de mayo de 1810.<br>
						En el caso que el cabildo hubiera sido demolido o damnificado por un accidente natural, se buscó una
						referencia histórica ligada a ese momento de la historia.<br>
						En los lugares que en 1810 se encontraban unidos al Virreynato y que hoy pertenecen al territorio
						argentino, se les pidió un saludo respetando los criterios anteriores.<br>
						Y en aquellos lugares donde no hubo presencia se respetó el criterio histórico pidiéndole un saludo
						a los representantes de los pueblos originarios.<br>
						En el caso de las islas Malvinas, el saludo proviene del Museo Malvinas.<br>
						Cabildos existentes: Buenos Aires, Candelaria, Córdoba, Jujuy, Luján, Salta, Santiago del
						Estero.<br>
						Cabildos demolidos o derrumbados: Catamarca, Concepción del Uruguay, Corrientes, La Rioja, Mendoza,
						San Luis, San Juan, Santa Fe, Tucumán.<br>
						Sin existencia de Cabildos en: Chaco, Formosa, La Pampa,Neuquén, Tierra del Fuego. Establecimientos
						existentes en el momento de la revolución de 1810 pero que no constituían un cabildo: Carmen de
						Patagones-Viedma, San Julián, Malvinas, Península Valdés.<br>
						De esta manera y gracias al esfuerzo de cada participante, pudimos construir un material que,
						partiendo de los antiguos Cabildos donde se proclamó nuestra autonomía, incorpora a otras
						instituciones y sitios históricos; así como también a las comunidades originarias de aquellos
						lugares donde se encontraban presentes y que incluye a las Islas Malvinas, siempre presentes en
						nuestro corazón, en nuestra memoria y en nuestro reclamo territorial.<br>
						<br>
						<iframe data-allowfullscreen="false" frameborder="0" height="441" src="https://www.youtube.com/embed/EDEtPeL8nk4"
							title="YouTube video player" width="100%"></iframe></p>
						</div>
						<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/virgenLujan2.jpg" width="90%"> 
						<img class="imgStyle" height="auto"
						src="imagenes/cleropolicial1.jpg" width="90%">
						<img class="imgStyle" height="auto"
						src="imagenes/cruzroja.jpg" width="90%">
					</div>	
					<div class="divNot">
						<h5 class="claseH5">8 de mayo, Día de La Virgen de Luján</h5>
						<h3 class="claseH3">Nuestro eterno agradecimiento a la Santa Patrona de la Policía Federal
							Argentina, la Virgencita de Luján.</h3><img class="imgStyle" height="auto"
							src="imagenes/virgenLujan.jpeg" width="90%">
					</div>
					<div class="divNot">
					<img class="imgStyle" height="auto" src="imagenes/diaMontada.jpg" width="90%">
					</div>
					<div class="divNot">
					    <img class="imgStyle" height="auto" src="imagenes/1mayo.jpg" width="90%">
					</div>	
					<div class="divNot">
						<img class="imgStyle" height="auto" src="imagenes/distanciamiento1.jpg" width="90%">
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/meoni.jpg" width="90%">
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/diadelpolicia1.jpeg" width="90%"> 
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/diadelpolicia2.jpeg" width="90%">
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/diadelpolicia3.jpg" width="90%">
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/poggetti.jpg" width="90%">
					</div>	
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/paccto.jpg" width="90%">
					</div>
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/pablomoreno.jpg" width="90%"> 
					</div>	
					<div class="divNot">
						<img class="imgStyle" height="auto"
						src="imagenes/bomberos.jpg" width="90%">
					</div>	
					<script type="text/javascript">
						function mostrarnot() {
							var noticia1 = document.getElementById("contenidonoticia1")
							noticia1.style.display = "block"
							var leermas = document.getElementById("leermas")
							leermas.style.display = "none"
						}

						function mostrarnot2() {
							var noticia = document.getElementById("contenidonoticia2")
							noticia.style.display = "block"
							var leermas = document.getElementById("leermas2")
							leermas.style.display = "none"

						}

						function mostrarnot4() {
							var noticia = document.getElementById("contenidonoticia4")
							noticia.style.display = "block"
							var leermas = document.getElementById("leermas4")
							leermas.style.display = "none"

						}

						function mostrarnot5() {
							var noticia = document.getElementById("contenidonoticia5")
							noticia.style.display = "block"
							var leermas = document.getElementById("leermas5")
							leermas.style.display = "none"

						}

						function mostrarnot6() {
							var noticia = document.getElementById("contenidonoticia6")
							noticia.style.display = "block"
							var leermas = document.getElementById("leermas6")
							leermas.style.display = "none"

						}
					</script>
					
					<div class="divNot">
				    	<img class="imgStyle" height="auto" src="imagenes/dianacional.jpg" width="90%"> 
					</div>
					<div class="divNot">
				    	<img class="imgStyle" height="auto" src="imagenes/diamujer.jpg" width="90%">
					</div>
					<div id="clearboth"></div>
					
					
					<div class="divNot">
    					<span class="videosClass" id="spanvideo4">
    						<video controls="" id="video4">					
    							<source src="imagenes/video4.mp4" type="video/mp4">
    						</video>
    					</span>
    			    </div>
    			    <div onclick='cargarMasContenido()' id="buttonMas" class="my-5">
    			      Cargar contenido anterior
    			    </div>
    			    
				</div>
				<div class="col-xl-3 col-sm-7">
					<div id="mas2">
						<h3>Información de utilidad</h3>
						<h5 class="text-left ft-color1" style="font-family:'Open-sans',sans-serif;margin-bottom:5px;">Superintendencia de Bienestar de
							la PFA</h5>
					</div><a href="revista_cel/demo/listacaba.html" target="_blank">
						<div class="cartillas p-2 ">
							<p>Cartilla médica y teléfonos útiles CABA</p>
						</div>
					</a><br>
					<a href="revista_cel/demo/listainterior.html" target="_blank">
						<div class="cartillas p-2 ">
							<p>Cartilla médica y teléfonos útiles Interior</p>
						</div>
					</a>
					<div id="mas">
						<h3>Publicaciones de la Editorial</h3>
					</div>
						<div class="costado">
							<a href="index.php?lib=9#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Marzo-Abril 2023</p>
								<img width="90%" src="imagenes9/tapa.jpg" />
							</a>
						</div>
				    	<div class="costado">
							<a href="index.php?lib=8#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Noviembre-Diciembre 2022</p>
								<img width="90%" src="imagenes8/tapa.jpeg" />
							</a>
						</div>
						<div class="costado">
							<a href="index.php?lib=7#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Julio-Agosto 2022</p>
								<img width="90%" src="imagenes7/tapa.jpg" />
							</a>
						</div>
						<div class="costado">
							<a href="index.php?lib=6#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Marzo 2022</p>
								<img width="90%" src="imagenes6/dcha/tapa.jpg" />
							</a>
						</div>
						<div class="costado">
							<a href="index.php?lib=5#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Noviembre 2021</p>
								<img width="90%" src="imagenes5/tapa.jpg" />
							</a>
						</div>
						<div class="costado">
							<a href="index.php?lib=4#contenedor2">
								<p class="ft-color1 ft-roboto">Edición Julio 2021</p>
								<img width="90%" src="imagenes4/tapa.jpg" />
							</a>
						</div>

					<div class="costado">
						<a href="index.php?lib=3#contenedor2">
							<p class="ft-color1 ft-roboto">Edición Marzo 2021</p>
							<img width="90%" src="imagenes3/dcha/ambito_MARZO2021-01.jpg" />
						</a>
					</div>

					<div class="costado">
						<a href="index.php?lib=2#contenedor2">
							<p class="ft-color1 ft-roboto">Edición Diciembre 2020</p>
							<img width="90%" src="imagenes2/tapa.jpg" />
						</a>
					</div>
					<div class="costado">
						<a href="index.php?lib=1#contenedor2">
							<p class="ft-color1 ft-roboto">Edición Julio 2020</p>
							<img width="90%" src="imagenes/tapa.jpg" />
						</a>
					</div>

					<div class="costado">
						<p class="ft-color1 ft-roboto">Guía útil para Padres. Hacia un mundo sin adicciones.</p>
						<img width="90%" src="imagenes/imglibro1.jpg" />
					</div>

					<div class="costado">
						<p class="ft-color1 ft-roboto">Guía útil para Líderes. Hacia un mundo sin adicciones</p>
						<img width="90%" src="imagenes/imglibro2.jpg" />
					</div>

					
				</div>

			</div>
		</div>
	</div>					
	<iframe src="suscripcion.php"
		id="<?php if(isset($_GET['susc'])){echo 'suscripcion';}else{echo 'nover';}?>"></iframe>

	<div id="clearboth"></div>


	<section id="contenidoprincipal">

		<div id="contenedor_cel">
			<div id="titulorevista">
				<h1>REVISTA<br>AMBITO POLICIAL</h1>
				<h5>Publicación Independiente y de Interés General<br>EDITADA POR</h5>
				<h4>EDITORIAL AMBITO POLICIAL<h4> <br>
						<h5>UNA EDITORIAL CON VOCACIÓN DE SERVICIO</h5><br>
						<p>AL SERVICIO DE LA FAMILIA POLICIAL DE LA REPUBLICA ARGENTINA</p>
			</div>
			<iframe id="versioncel" src="<?php if(isset($_GET['lib'])){
   	 switch ($_GET['lib']){
   	 	case '1': $libro2='revista_cel/demo/index1.php';
   	 	break;
   	 	case '2': $libro2='revista_cel/demo/index2.php';
   	 	break;
   	 	case '3': $libro2='revista_cel/demo/index3.php';
   	 	break;
        case '4': $libro2='revista_cel/demo/index4.php';
   	 	break;
		case '5': $libro2='revista_cel/demo/index5.php';
   	 	break;
		case '6': $libro2='revista_cel/demo/index6.php';
   	 	break;	
		case '7': $libro2='revista_cel/demo/index7.php';
   	 	break;
   	 	case '8': $libro2='revista_cel/demo/index8.php';
   	 	break;
		case '9': $libro2='revista_cel/demo/index9.php';
   	 	break;
   	 }
   	 }else{$libro2='revista_cel/demo/index9.php';

   	} echo $libro2; ?>"></iframe>
		</div>





		<!--EMPIEZA BOOKBLOCK  -->
		<iframe src="<?php if(isset($_GET['lib'])){
   	 switch ($_GET['lib']){
   	 	case '1': $libro='libro1.php';
   	 	break;
   	 	case '2': $libro='libro2.php';
   	 	break;
   	 	case '3': $libro='libro3.php';
   	 	break;
		case '4': $libro='libro4.php';
   	 	break;
	    case '5':$libro='libro5.php';
		break;	
		case '6':$libro='libro6.php';
		break;
		case '7':$libro='libro7.php';
		break;
		case '8':$libro='libro8.php';
		break;
		case '9':$libro='libro9.php';
		break;
   	 }
   	 }else{$libro='libro9.php';

   	} echo $libro; ?>" id="contenedor2"></iframe>


	<div id="sfcxq3s6e4nn59dlr9h1jkbkkqh8saf3d5m"></div>
<script type="text/javascript" src="https://counter10.optistats.ovh/private/counter.js?c=xq3s6e4nn59dlr9h1jkbkkqh8saf3d5m&down=async" async></script>
<noscript><a href="https://www.contadorvisitasgratis.com" title="contador para blogger"><img src="https://counter10.optistats.ovh/private/contadorvisitasgratis.php?c=xq3s6e4nn59dlr9h1jkbkkqh8saf3d5m" border="0" title="contador para blogger" alt="contador para blogger"></a></noscript>




	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('body').fadeIn();
      })
    </script>
	<script type="text/javascript">
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('a.scroll-top').fadeIn('slow');
		} else {
			$('a.scroll-top').fadeOut('slow');
		}
	});
	$('a.scroll-top').click(function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 600);
	});
</script>
<script src="dist/js/lightbox.js"></script>
<script type='text/javascript'>
    
   var allDivNot= document.getElementsByClassName('divNot')
   if(allDivNot!==undefined){
         for(var h=8; h<allDivNot.length;h++){
            allDivNot[h].style.display='none'
         }
   }
    
    function cargarMasContenido(){
        if(allDivNot!==undefined){
            var ultimoBlock=null
             for(var h=0; h<allDivNot.length;h++){
                if(allDivNot[h].style.display!=='none'){
                    ultimoBlock=h
                }
             }
             if(ultimoBlock!==null){
                g=ultimoBlock+1
                do{
                      allDivNot[g].style.display='block'
                        if(g==allDivNot.length-1){
                            var buttonMas=document.getElementById('buttonMas')
                            buttonMas.style.display='none'
                            break;
                         }
                         else{
                            g++
                        }
                 }
                 while(g<(ultimoBlock+11)&&(g<allDivNot.length))
             }
        }
    }
</script>
  </body>
  <footer>
		<nav id="navfooter">

			<ul id="secfooter">
				<a href="index.php">
					<li>Inicio</li>
				</a>
				<a href="index.php?lib=1#contenedor2">
					<li>Edición Julio 2020</li>
				</a>
				<a href="index.php?susc=1#suscripcion">
					<li>Suscripción</li>
				</a>
			</ul>
			<div id="escfooter"></div>
			<div id="clearboth"></div>
		</nav>
		<div id="pie">Editorial Ambito Policial</div>
	</footer>



</html>