


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
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
   


    <script type="text/javascript">// Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".navbar-right .dropdown-menu", function (e) {
            e.stopPropagation();
        });</script>
<body>
    
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
                <li class="nav-item dropdown"></li>
                <li class="nav-item active"><a href="contact.php" class="nav-link">Contacto</a></li>
                <li class="nav-item active"><a href="#" class="nav-link">Blog</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right ml-auto">
                 
                <li class="nav-item">
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
<div class="form">
<p>Welcome <?php echo implode($_SESSION['username']) ?>!</p>
</div>
   
</body>
    
    <div id="hero-image">
    <div class="col-12 text-center">
        <h2><strong>Somos Especialistas</strong><br></h2>
        <a href="reparar.php" class="button-2">Reparar</a>
    </div>
        </div>    
</html>
