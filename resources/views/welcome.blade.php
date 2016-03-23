<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добирання</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/animate.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/style.css">
</head>

<body>

    <!-- TOP LINE -->
    <div id="top" class="top">
        <div class="container">

            <div class="row">
                <div class="col-sm-5 col-xs-12 logo">
                    <a href="/index">
                        <img src="{{ URL::asset('/') }}img/logo.png" alt="Назва сайту" title="Назва">
                    </a>
                </div>

                <div class="col-sm-7 col-xs-12 info">
                    <h2>Погода Оголошення, бу бу бу Скотобаза Срачки дупи</h2>
                    <p>тут короче дати погоду або якесь останнє оголошення, щось отаке</p>

                </div>
            </div>
        </div>
    </div>
    <!-- END TOP LINE -->
    
        <div class="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav mybar-nav nav-justified">
                    <!-- class="active" for active punkt-->
                    <li><a href="/index"><i class="fa fa-home"></i></a></li>

                    <li><a href="/">Маршрути</a></li>

                    <li><a href="/">Маршрути</a></li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Оголошення <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Щось там</a></li>
                            <li><a href="">Щось там ще</a></li>
                            <li><a href="">Іще щось там</a></li>
                            <li><a href="/">На останок</a></li>
                           
                        </ul>
                    </li>


                    
                    <li><a href="">Контакти</a></li>
                </ul>
            </div>
            <!--/.nav-collapse-->
        </div>
    </div>


    <!-- SLIDER -->
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://spoolphotography.files.wordpress.com/2010/09/highlightblowfalls_blog2.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://azwhitemountains.net/wp-content/uploads/2014/11/nativeculture.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://www.louoates.com/images/landscapes/SuperstitionMtnStormyLightBeam-1200.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://www.louoates.com/images/superstitions/SuperstitionMtSnowPan-1200.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>...</h3>
                        <p>...</p>
                    </div>
                </div>



            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="/#carousel-example-generic" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="/#carousel-example-generic" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
    
    
    <section id="main">
        <div class="container">
            <div class="section-main-head">
            <h2 class="section-title text-center fadeInDown">Я. М. Шляхта. Топіарне мистецтво та живоплоти</h2>
            <p class="text-center fadeInDown">Львів: Видавництво Львівської політехніки, 2015</p>
            <h3 class="text-center  fadeInDown">Ціна 60 грн.</h3>
        </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
</body>

</html>