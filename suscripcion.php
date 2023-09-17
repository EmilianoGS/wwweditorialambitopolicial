<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Monofett&family=Strait&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  a{
    text-decoration: none !important;
  }
  .suscripcionContainer{
      background-color: #e9effa;
      border-radius: .7rem;
  }
  #textoctro{
  font-family: 'Heebo', sans-serif;
   font-size: 20px;   
   box-sizing: border-box;
   padding:10px;
   height: auto;
   width: 490px;
  margin-top: 140px;
  margin-left: auto;
  margin-right: auto;
  background-color: rgba(208,141,24,1);
  text-decoration: none;
  }
#gratuito p{
  
    font-family: 'Heebo', sans-serif;
text-align: center;
margin: 0 auto;
font-weight:500;
font-size:1.8rem;
color: #4d5c9b;
}
 #textoctro p{
  text-align: center;
  margin-top:0;
  margin-right:auto;
  margin-left: auto;
  height: auto;
   width: 450px;
   box-sizing: border-box;
} 
  #ctro{
  height: 120px;
   width: 490px;
    color: #ffffff;
  text-decoration: none;
 }
 #textoctro:hover{
  width:500px;
  
  background-color: rgba(208,141,24,0.6);
}
#suscripcion{
margin-top: 30px;
margin-left: auto;
margin-right:auto;
border: 2px solid #ffffff;
border-radius:5px;
height:auto;
box-sizing: border-box;
padding: 20px 20px 40px 20px;
 font-family: 'Open-sans', sans-serif;
}
#suscripcion p{
  font-size: 1.3rem;

}


#suscripcion input[type=submit]{

  margin-top: 20px;
  background-color: #333333;
    border:none;
 font-family: 'Heebo', sans-serif;
    font-size: 18px;
  color:#fafafa ;
  width: 300px;
  height: 45px;
  padding: 8px 5px;
  box-sizing: border-box;
}
.btnVolver{
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  margin-top: 20px;
  background-color: #333333;
  border:none;
  font-family: 'Heebo', sans-serif;
  font-size: 18px;
  color:#fafafa ;
  width: 200px;
  height: 45px;
  padding: 8px 5px;
  box-sizing: border-box;
}
#suscripcion input[type=submit]:hover{
  background-color: #b5b5b5;
}
#sushidden{
  display:none;
}
#datos_ingresados{
  
  width: 500px;
  margin: 40px auto 50px auto;
}
#datos_ingresados h2{
padding: 30px;
border: 1px solid #ffffff;
border-radius: 5px;
  font-family: 'Heebo', sans-serif;
  text-align:center;

}
#datos_ingresados2{
  width: 390px;
  margin: 40px auto 50px auto;
}
#datos_ingresados2 h2{
padding: 10px;
border: 1px solid #dedede;
  font-family: 'Heebo', sans-serif;
  text-align:center;
}
#ocultar{
  display: none;
}
@media all and (max-width: 599px) { 

#suscripcion{
padding:20px;
width: 90%;

}
#suscripcion input[type=submit]{
font-size: 13px;
width:100%;
  height: 45px;
  margin: 0 auto;
  padding: 8px 5px;
  box-sizing: border-box;
}
#suscripcion input{
margin-left: 0;
width: 100%;

  }
  #datos_ingresados{
    width:100%;

  }
#gratuito p{
  font-size: 1.3rem;
}  
#suscripcion p{
  width: 100%;
  
}
}
</style>
</head>
<body class="my-3">
    <div class="py-5 container suscripcionContainer">
	   <div id="gratuito">
       <p>Suscripción gratuita para el personal de la PFA, en servicio y retirado.</p>
      </div>
	     <form class="col-xl-7" id="<?php if(isset($_GET['suscr'])){if(($_GET['suscr'])==1){echo 'ocultar';}else{echo 'suscripcion';}}else{echo 'suscripcion';}?>" action="mailer2.php" method="post"><!--#textoctro-->
          <p>Por favor complete el siguiente formulario: </p>
          <input class="form-control" type="text" name="nombre" placeholder="Nombre*" required><br/>
          
          <input class="form-control" type="email" name="email" placeholder="E-mail*" required><br/>
          <input  type="submit" value="Suscribirse">
       </form>
       <?php 
       
      ?>

       <div id="<?php if(isset($_GET['suscr'])){
           if(($_GET['suscr'])==1){
           echo "datos_ingresados";}
           elseif(($_GET['suscr'])==2){
               echo "ocultar";}
            else{
                echo "ocultar";
            }
        }
           else{echo "ocultar";} ?>"><h2>Suscripción realizada con éxito. Recibirá un e-mail en su casilla
del correo <?php echo $_GET['email']; ?><br/>Recuerde comprobar los e-mails en la carpeta de spam de su correo.</h2></div>
           
           <div id="<?php if(isset($_GET['suscr'])){
                       if(($_GET['suscr'])==0){
                        echo "datos_ingresados";}
                        elseif(($_GET['suscr'])==2){
                            echo "ocultar";}
                         else{
                             echo "ocultar";
                         }
           }else{echo "ocultar";}?>">
             <h2>Ud. ya se suscribió anteriormente.</h2>
       
           </div>
           <div id="<?php if(isset($_GET['suscr'])){if(($_GET['suscr'])==2){echo "datos_ingresados2";}else{echo "ocultar";}}else{echo "ocultar";} ?>"><h2 style="color:#eb4034";>Ingrese un e-mail válido.</h2></div>

           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          </div>
  </body>
  </html>