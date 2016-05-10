<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dukon!</title>
    <!-- Bootstrap -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,300,200,200italic,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--Include the SimpleCart(js) script-->
    <script src="js/simpleCart.js" type="text/javascript" charset="utf-8"></script>
    <!--Make a new cart instance with your paypal login email-->
    <script type="text/javascript">
        simpleCart = new cart("admin@photoshop.com");
    </script>
    <!--CSS for the Cart. -->
    <link rel="stylesheet" href="css/cart.css" type="text/css" media="screen" charset="utf-8" />




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Menu script -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown").hover(
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        });
        $(document).ready(function () {
            //Events that reset and restart the timer animation when the slides change
            $("#transition-timer-carousel").on("slide.bs.carousel", function (event) {
                //The animate class gets removed so that it jumps straight back to 0%
                $(".transition-timer-carousel-progress-bar", this)
                        .removeClass("animate").css("width", "0%");
            }).on("slid.bs.carousel", function (event) {
                //The slide transition finished, so re-add the animate class so that
                //the timer bar takes time to fill up
                $(".transition-timer-carousel-progress-bar", this)
                        .addClass("animate").css("width", "100%");
            });
            //Kick off the initial slide animation when the document is ready
            $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
                    .css("width", "100%");
        });

    </script>
</head>

<body>
<nav class="navbar navbar-default navbar-main" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-camera"></span>&nbsp;<b>Dukon</b>.xyz </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Каталог<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container">
                            <div class="tab-content">
                                <div class="tab-pane active" id="men">
                                    <ul class="nav-list list-inline">
                                        <li><a href="category-nature.html"><img src="images/categories/nature.jpg" alt="Nature" /><span>Все Товары</span></a></li>
                                        <li><a href="#"><img src="images/categories/lifestyle.jpg" alt="Lifestyle" /><span>Lifestyle</span></a></li>
                                        <li><a href="#"><img src="images/categories/backgrounds.jpg" alt="Backgrounds" /><span>Backgrounds</span></a></li>
                                        <li><a href="#"><img src="images/categories/technology.jpg" alt="Technology" /><span>Technology</span></a></li>
                                        <li><a href="#"><img src="images/categories/food.jpg" alt="Food & Drink" /><span>Food & Drink</span></a></li>
                                        <li><a href="#"><img src="images/categories/architecture.jpg" alt="Architecture" /><span>Architecture</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="/map">Наши магазины</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="/dostavka-i-oplata">Доставка и оплата</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="/o-kompanii">О компании</a>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>

            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Корзина&nbsp;<span class="badge"><span class="simpleCart_quantity"></span></span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <li>
                            <a class="text-center" style="padding: 10px 0px" href="show-cart.html"><strong>Total value: <span class="simpleCart_total"></span></strong></a>
                        </li>
                        <li class="divider"></li>
                        <li><a class="text-center" href="show-cart.html">View Cart</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


@yield('content')

<!-- FOOTER -->
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
                    <h3> Member profile </h3>
                    <ul>
                        <li> <a href="profile.html"> Your account </a> </li>
                        <li> <a href="#"> Bought &amp; saved photos </a> </li>
                        <li> <a href="#"> Recipes &amp; invoices </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
                    <h3> Useful resources </h3>
                    <ul>
                        <li> <a href="#"> Terms &amp; conditions </a> </li>
                        <li> <a href="#"> Help &amp; FAQ </a> </li>
                        <li> <a href="contact.html"> Contact </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
                    <h3> Keep me updated! </h3>
                    <ul>
                        <li>
                            <form action="" method="post">

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                    <input type="text" class="form-control" placeholder="your@email.com" aria-describedby="basic-addon1" required />
                                </div>
                                <input type="submit" value="Subscribe Now!" class="btn btn-default btn-block" style="margin-top: 5px; background: #ddd" />
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Let's stay in touch! </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Dukon © Бишкек 2016. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>



</body>
</html>