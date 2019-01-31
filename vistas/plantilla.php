<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

		session_start();

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();
	?>


  <!--=====================================
 CSS PROPIOS
  ======================================-->
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/session-style.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/menu-style.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slider-style.css">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/dscountdown.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/Magnific.css">
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/demo.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/custom.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slicebox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

  <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
  <script src="<?php echo $url; ?>vistas/js/modernizr.custom.46884.js"></script>
  <script src="<?php echo $url; ?>vistas/js/jquery.slicebox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="<?php echo $url; ?>vistas/js/jquery-magnic.js"></script>
  

	<!--=====================================
	CAPTCHA
	======================================-->

	<script src='https:www.google.com/recaptcha/api.js'></script>

    <!--=====================================
  SCRIPT PROPIOS
  ======================================-->
    <script src="<?php echo $url; ?>vistas/js/menu.js"></script>
    <script src="<?php echo $url; ?>vistas/js/slider.js"></script>


</head>

<body>
<?php
 

 /* ========================================
  Menu
  ========================================
  */
 include "Modulos/menu.php";


  /*
  ========================================
  Contenido
  ========================================
  */
  /*creando el permiso de entrar a los modulos*/
   if(isset($_GET["ruta"])){
     if($_GET["ruta"] == "Home"){
       include 'Modulos/slider.php';
       include "Modulos/home.php";

     }elseif ($_GET["ruta"] =="Imagenes" ||$_GET["ruta"] =="Videos" ||$_GET["ruta"] =="Paquetes" ) {
       include "Modulos/".$_GET["ruta"].".php";
     }else{
   
       include "Modulos/error404.php";
     }
   }else{
  include 'modulos/slider.php';
  include "Modulos/home.php";
   }
  
  /*
  ========================================
  Footer
  ========================================
  */
   include "Modulos/Footer.php";
 


?>
</body>
</html>