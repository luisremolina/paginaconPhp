<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
            *{
    padding:0;
    margin:0;
    -webkit-transition: 1s;
    transition: 1s;
}
.clrd-font{
    background: #FF512F;
    background: -webkit-linear-gradient(to right, #F09819, #FF512F);
    background: linear-gradient(to right, #F09819, #FF512F);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.btn-primary {
    background-color:transparent;
    color: #fff;
    border: 2px solid #fff;
    font-size:20px;
    text-transform: uppercase;
    border-radius: 0px; 
}
.btn-primary:hover {
    background-color:transparent;
    border-color: #d6962c;
    color: #d6962c;
    border-radius: 20px;
}

.single_portfolio_text{
    display:inline-block;
    padding:0;
    position:relative;
    overflow:hidden;
}
.single_portfolio_text img{
    width:100%;
}

.single_portfolio_text:hover .portfolio_images_overlay{
    top:5%;
    left: 5%;
}

.portfolio_images_overlay{
    width: 90%;
    height: 90%;
    background: rgba(0, 0, 0, 0.8);
    padding: 20px;
    margin: 0 auto;
    top: -100%;
    left: 5%;
    position: absolute;
    transition:.6s;
    
}
.portfolio_images_overlay h6{
    text-transform: uppercase;
    color: #fff;
    font-size: 30px;
    font-weight: 900;
    border: 2px solid #fff;
    padding-top: 10px;
    padding-bottom: 10px;
}

.portfolio_images_overlay .product_price{
    font-size: 35px;
    color: #fff;
    font-weight:800;
    line-height:30px;
}
.portfolio_images_overlay .product_price i{
    margin-right: -10px;
}
.zoom{
    width: 200px;
    height: 200px;
    position: absolute;
    bottom: -100px;
    right: -100px;
    border-radius: 50%;

    background: #FF512F;
    background: -webkit-linear-gradient(to right, #F09819, #FF512F);
    background: linear-gradient(to right, #F09819, #FF512F);
    box-shadow:0px 0px 0px 10px rgba(0,0,0,0.5);
    opacity:0.9;
}
.zoom:before {
    content: "\f00e";
    font-family: FontAwesome;
    color: rgba(255, 255, 255, 0.5);
    font-size: 70px;
    padding-right: 20px;
    position: absolute;
    top: 10px;
    left: 30px;
}
@media (min-width:769px) and (max-width:991px) {
    .portfolio_images_overlay {
        padding: 0px;
    }
}
@media (max-width:768px) {
    .portfolio_images_overlay{
        padding: 170px 20px;
    }
}
@media (max-width:580px) {
    .portfolio_images_overlay{
        padding: 100px 20px;
    }
}
@media (max-width:480px) {
    .portfolio_images_overlay{
        padding: 40px 20px;
    }
}
@media (max-width:320px) {
    .portfolio_images_overlay{
        padding: 20px;
    }
}

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Merka Todo</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="main.php">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Productos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="main-marketplace.php">MarketPlace</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="TABLAPRODUCTOS.php">Tabla Registrados</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid my-5">
        <div class="row">
                <?php include("BASEDEDATOS.php"); ?>

                 <?php  

                        $CONSULTA="select * from registro_producto ";
                        $RESULTADO=mysqli_query($coneccion,$CONSULTA);

                        while ( $columna=mysqli_fetch_assoc($RESULTADO)) {

                        ?>
                    <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                            <img src="Imagenes/<?php echo $columna['IMAGEN_PRODUCTO'] ?>" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6 class="clrd-font"><?php echo $columna['NOMBRE_DEL_PRODUCTO'] ?></h6>
                                <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> $.<?php echo $columna['PRECIO'] ?></p>
                                <a href="#" class="btn btn-primary">Click here</a>
                            </div>
                            <a class="fancybox" rel="ligthbox" href="http://i.imgur.com/PUeaHfC.png">
                                <div class="zoom"></div>
                            </a>
                    </div>
                <?php } ?>
                  

        </div>
    </div>
    
   


        <!-- footer -->
         <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Autores 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
        </script>
    </body>
</html>