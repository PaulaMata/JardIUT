<?php include("includes/data.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_TITLE; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include("includes/header.php"); ?>

    <!-- Navigation -->
    <?php include("includes/nav.php"); ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide_1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide_2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide_3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        Envie de tâter le terrain ?
                    </h2>
                    <h1 class="brand-name">Rendez-vous à l'IUT de Gradignan</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Une initiative
                        <strong>aux petits oignons</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/arduino.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum massa sed turpis congue, ut mollis turpis rhoncus. Aenean faucibus risus vitae vestibulum tempus.</p>
                    <p>Aenean volutpat vel nulla id maximus. Vivamus eu mi eu augue convallis malesuada ac nec neque. Curabitur sed quam nec odio interdum interdum.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum sagittis finibus. Duis sit amet dignissim odio. Aliquam in venenatis ligula. Cras ut nibh porta, auctor sapien vel, sollicitudin augue.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Un jardin
                        <strong>qu'en a dans le ciboulot</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/webservice.png" alt="">
                    <hr class="visible-xs">
                    <p>Vestibulum interdum mattis arcu sed venenatis. Aenean orci odio, vehicula nec placerat quis, pellentesque eu quam. Integer cursus tempus metus, eget eleifend metus dictum eu. Aliquam consectetur, ex eu euismod varius, tortor erat eleifend risus, sed pulvinar dolor nulla nec lorem. Cras vel risus eu nunc faucibus dapibus in vel dolor.</p>
                    <p>Pellentesque maximus sapien neque, sit amet dignissim nisi finibus nec. Ut ultrices, mi in posuere viverra, ipsum odio suscipit risus, vel sodales dui lectus at libero. Etiam tristique libero eget fermentum euismod. Curabitur accumsan metus massa, eget vestibulum dolor molestie sed. Suspendisse vel diam id augue porta elementum. Sed sagittis nulla nec felis faucibus pellentesque. Integer malesuada luctus dictum.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>sisi le footer inutile</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
