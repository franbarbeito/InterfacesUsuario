<?php

?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="utf-8">
    <title>UnLock | ReparamosTuIphone</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   

</head>
   
<body>
    <div id="topbar">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand" href="#">Un<b>Lock</b></a>
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
						<h2>Servicios</h2>
					</div>
				</div>
            </div>
        </section>
    </body>
        
    
        <div id=tabla1 class="table-box">

            <div class="table-row table-head">

                <div class="table-cell dispositivo">
                    <p> ¿Qué quieres reparar? </p>
                </div>
                <div class="table-cell reparacion">
                    <p> Tipos de reparación </p>
                </div>
                <div class="table-cell precio">
                    <p> Precio </p>
                </div>
                <!--
                <div class="table-cell carrito">
                    <p> Carrito </p>
                </div>
                -->
                
            </div>

</div>



            <!--Iphone 7 -->
            <div class="table-row">
                <div class="table-cell dispositivo">
                    <p>Iphone 7 </p>
                </div>
                <div class="table-cell reparacion">
                    <select id="iphone7" onChange="changeColor('iphone7', 'iphone7-price')">
                        <option value="None" selected> Tipo de Reparacion </option>
                        <option value="75,00 €">Reparacion de Pantalla</option>
                        <option value="49,00 €">Remplazo de Bateria</option>
                        <option value="62,00 €">Reparacion camara delantera</option>
                        <option value="85,00 €">Reparacion camara trasera</option>

                    </select>
                </div>
                <div class="table-cell precio">
                    <p id="iphone7-price">49,00€ – 220,00€</p>

                    <script>function changeColor(phone, price) {
                            const desplegable = document.getElementById(phone);
                            const valor = desplegable.options[desplegable.selectedIndex].value;
                            document.getElementById(price).innerHTML = valor;
                        }</script>
                   
                </div>
            </div>

            <!--Iphone 7 Plus  -->
            <div class="table-row">
                <div class="table-cell dispositivo">
                    <p>Iphone 7 Plus  </p>
                </div>
                <div class="table-cell reparacion">
                    <select id="iphone7plus" onChange="changeColor('iphone7plus', 'iphone7plus-price')">
                        <option value="None" selected> Tipo de Reparacion  </option>
                        <option value="80,00 €">Reparacion de Pantalla</option>
                        <option value="55,00 €">Remplazo de Bateria</option>
                        <option value="65,00 €">Reparacion camara delantera</option>
                        <option value="115,00 €">Reparacion camara trasera</option>

                    </select>
                </div>
                <div class="table-cell precio">
                    <p id="iphone7plus-price">50,00€ – 220,00€</p>

                    <script>function changeColor(phone, price) {
                            const desplegable = document.getElementById(phone);
                            const valor = desplegable.options[desplegable.selectedIndex].value;
                            document.getElementById(price).innerHTML = valor;
                        }</script>
                </div>

            </div>

            <!--Iphone 8-->
            <div class="table-row">
                <div class="table-cell dispositivo">
                    <p>Iphone 8 </p>
                </div>
                <div class="table-cell reparacion">
                    <select id="iphone8" onChange="changeColor('iphone8', 'iphone8-price')">
                        <option value="None" selected> Tipo de Reparacion </option>
                        <option value="85,00 €">Reparacion de Pantalla</option>
                        <option value="65,00 €">Remplazo de Bateria</option>
                        <option value="110,00 €">Reparacion camara delantera</option>
                        <option value="130,00 €">Reparacion camara trasera</option>

                    </select>
                </div>
                <div class="table-cell precio">
                    <p id="iphone8-price">50,00€ – 300,00€</p>

                    <script>function changeColor(phone, price) {
                            const desplegable = document.getElementById(phone);
                            const valor = desplegable.options[desplegable.selectedIndex].value;
                            document.getElementById(price).innerHTML = valor;
                        }</script>

                </div>

            </div>


            <!--Iphone 8 Plus-->
            <div class="table-row">
                <div class="table-cell dispositivo">
                    <p>Iphone 8 Plus </p>
                </div>
                <div class="table-cell reparacion">
                    <select id="iphone8plus" onChange="changeColor('iphone8plus', 'iphone8plus-price')">
                        <option value="None" selected> Tipo de Reparacion </option>
                        <option value="90,00 €">Reparacion de Pantalla</option>
                        <option value="65,00 €">Remplazo de Bateria</option>
                        <option value="85,00 €">Reparacion camara delantera</option>
                        <option value="170,00 €">Reparacion camara trasera</option>

                    </select>
                </div>
                <div class="table-cell precio">
                    <p id="iphone8plus-price">50,00€ – 300,00€</p>

                    <script>function changeColor(phone, price) {
                            const desplegable = document.getElementById(phone);
                            const valor = desplegable.options[desplegable.selectedIndex].value;
                            document.getElementById(price).innerHTML = valor;
                        }</script>

                </div>

            </div>


            <!--Iphone X-->
            <div class="table-row">
                <div class="table-cell dispositivo">
                    <p>Iphone X </p>
                </div>
                <div class="table-cell reparacion">
                    <select id="iphoneX" onChange="changeColor('iphoneX', 'iphoneX-price')">
                        <option value="None" selected> Tipo de Reparacion </option>
                        <option value="195,00 €">Reparacion de Pantalla</option>
                        <option value="90,00  €">Remplazo de Bateria</option>
                        <option value="160,00 €">Reparacion camara delantera</option>
                        <option value="160,00 €">Reparacion camara trasera</option>
                        

                    </select>
                </div>
                <div class="table-cell precio">
                    <p id="iphoneX-price">80,00€ – 400,00€</p>

                    <script>function changeColor(phone, price) {
                            const desplegable = document.getElementById(phone);
                            const valor = desplegable.options[desplegable.selectedIndex].value;
                            document.getElementById(price).innerHTML = valor;
                        }</script>

                </div>


            </div>


    
            <div id="cta">
 
     <h4>Remplazo de Bateria Iphone 7</h4>  &nbsp;&nbsp; 
        <a href="https://www.youtube.com/watch?v=e743HCkxfks" class="button-2">Tutorial</a>

                 </div>

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

 
                
    
  



            
        