<!DOCTYPE html>
<html lang="en" class="no-js demo-1">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
        <link href="librosStyle.css" rel="stylesheet" />
		<title>Editorial Ambito Policial</title>
		<meta name="description" content="Bookblock: A Content Flip Plugin - Demo 1" />
		<meta name="keywords" content="javascript, jquery, plugin, css3, flip, page, 3d, booklet, book, perspective" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<!-- custom demo style -->
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
		<link rel="icon" href="imagenes/logo_titulo.ico">
		<script src="js/modernizr.custom.js"></script>
			
<body>
	<div id="contenedor3">
			<div id="titulorevista"><h1>REVISTA<br/>
AMBITO POLICIAL</h1><h5>Publicación Independiente y de Interés General<br>
				EDITADA POR</h5> <h4>EDITORIAL AMBITO POLICIAL<h4> <br><h5>UNA EDITORIAL CON VOCACIÓN DE SERVICIO</h5><br>
					<p>AL SERVICIO DE LA FAMILIA POLICIAL DE LA REPUBLICA ARGENTINA</p></div>
			<div class="container">
				  	
     
			<!-- Top Navigation -->
			<div class="main clearfix">
				<div class="bb-custom-wrapper">
						
				<div id="revista">
					<nav id="pasadorpag">
						<a id="bb-nav-first" href="#" ><!--First page--><img height="30" title="Primera página" width="30" src="imagenes/flechaprimera.png"/></a>
						<a id="bb-nav-prev" href="#" ><img height="30" title="Página anterior" width="30" src="imagenes/flechaizq.png"/><!--Previous--></a>
						<a id="bb-nav-next" href="#" ><img height="30" title="Página siguiente" width="30" src="imagenes/flechader.png"/><!--Next--></a>
						<a id="bb-nav-last" href="#" ><img height="30" title="Última página" width="30" src="imagenes/flechaultimo.png"/><!--Last page--></a>
					</nav>
					<div id="bb-bookblock" class="bb-bookblock">
						<div class="bb-item">
							<div class="Pagina">
				              
					        
					       <img src="imagenes4/retiracion2.jpg" id="imagenesizq" alt="image02"/>
				             </div>
				             <div class="Pagina">
				              
					          <img src="imagenes6/dcha/tapa.jpg" width="685" height="1000" id="imagenesder" alt="image02"/>
				             
				             </div>  
							</div>
							
						<?php
						for($num=2;$num<51; $num=$num+2){
                            if($num<50){
                                echo '<div class=" bb-item tmb">
							<div class="Pagina">                                    
								<img src="imagenes6/izq/pagina'.$num.'.jpg" id="imagenesizq" width="481" height="658" alt="image02"/>
							</div>
							<div class="Pagina">
								<img src="imagenes6/dcha/pagina'.($num+1).'.jpg" id="imagenesder" width="685" height="1000" id="imagenesder" alt="image02"/>
							</div>  
						</div>';
                            }
							else{
                                echo '<div class=" bb-item tmb">
                                <div class="Pagina">                                    
                                    <img src="imagenes6/izq/pagina'.$num.'.jpg" id="imagenesizq" width="481" height="658" alt="image02"/>
                                </div>'; 
                            }	
						 
						}
					?>

						
							
						
						
					</div>
				</div> <!--Fin div Revista-->	
							 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                        
				</div>
			</div>
		</div><!-- /container -->
	</div><!--fin contenedor-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 800,
							shadowSides : 0.8,
							shadowFlip : 0.7
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
		
	</body>
</html>