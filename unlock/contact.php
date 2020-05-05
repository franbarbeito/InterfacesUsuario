<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UnLock | ReparamosTuIphone</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<body>
    <!--Navbar superior  -->
    <div id="topbar">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand">Un<b>Lock</b></a>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="test.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="reparar.php" class="nav-link">Reparar Telefono</a></li>
                <li class="nav-item dropdown">
                <li class="nav-item active"><a href="contact.php" class="nav-link">Contacto</a></li>
                

            </ul>
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a  href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a href="registration.php" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    
    <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contacto</h2>
					</div>
				</div>
            </div>
        </section>
    <div class="container">
        
        
    <div class="col2 column1 first">
        	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.357192, -3.904038),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.357192, -3.904038)});infowindow = new google.maps.InfoWindow({content:'<strong>UnLock</strong><br>Tienda de reparacion movil<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
            </script>
  				</div>
        &nbsp;&nbsp; 

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">  
                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name"></label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Nombre" required="required" data-error="Nombre  necesario.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname"></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Apellidos" data-error="Apellido necesario.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email"></label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" data-error="Email necesario.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone"></label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Telefono" placeholder="Telefono necesario">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message"></label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje..." rows="4" required="required" data-error="Por favor, introduzca un mensaje"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Enviar">&nbsp;&nbsp; 
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Mensaje enviado correctamente.Gracias')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
        </body>
    
    
    
     <footer class="footer-distributed">
    			<div class="footer-left">
    				<p class="footer-links">
              <a href="test.php">Inicio</a>
    					<a href="reparar.php">Repara Tu Iphone</a>
    				</p>
    				<p>UnLock | ReparaTuIphone &copy; 2020. All rights reserved</p>
        <a href="polprivacidad.php">Política de privacidad</a>
    			</div>
    		</footer>

  </html>

