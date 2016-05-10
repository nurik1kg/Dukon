@extends('layouts.app')

@section('content')
<div class="container" style="width: 100%; margin: 0px; padding: 0px">

    <div class="row carousel-container">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- <img src="http://lorempixel.com/1920/800/city/9" alt="City" /> -->
                    <img src="images/slider/city-night-2.jpg" alt="City" />
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to <strong>Photo</strong>Shop</span>
                            </h2>
                            <div class="hidden-xs">
                                <h3>
                                    <span>Find the perfect photo that suits you the best!</span>
                                </h3>
                                <a class="btn btn-theme btn-lg btn-min-block" href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Search among over 6 985 245 images!</a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>

                <div class="item">
                    <img src="http://lorempixel.com/1920/800/food" alt="food" />
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span style="background: #ff3300">Always in good taste!</span>
                            </h2>
                            <div class="hidden-xs">
                                <h3>
                                    <span>Fresh &amp; mouthwatering food images...</span>
                                </h3>
                                <a class="btn btn-theme btn-lg btn-min-block" href="#">Find out our Food &amp; Drink collection...</a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>

                <div class="item">
                    <img src="http://lorempixel.com/1920/800/cats" alt="Cats" />
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span style="background: #cc33ff">Cats are awesome!</span>
                            </h2>
                            <div class="hidden-xs">
                                <h3>
                                    <span>All the people like cats!</span>
                                </h3>
                                <a class="btn btn-theme btn-lg btn-min-block" href="#">Buy something from Cat's Lightbox!</a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
        </div>
    </div>
</div>

<!--
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center">Мы сделали мебель доступнее</h1>
            </div>
        </div>
    </div>
</div>
-->
<br>
<br>
<div class="container">
    <div class="row text-center">
        <div class="col-xs-12">
            <h2 class="text-center">
                Мы сделали мебель доступнее
            </h2>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row text-center">
        <div class="col-xs-12">
            <h2 class="text-center">
                Распродажа
            </h2>
        </div>
    </div>
</div>
<hr>
</div>
@stop
