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
                            <div class="hidden-xs">
                                <!--
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <a class="btn btn-theme btn-lg btn-min-block" href="#"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Search among over 6 985 245 images!</a>
                                -->
                            </div>
                        </div>
                    </div><!-- /header-text -->
                </div>

                <div class="item">
                    <img src="http://lorempixel.com/1920/800/food" alt="food" />
                    <div class="header-text">
                        <div class="col-md-12 text-center">

                        </div>
                    </div><!-- /header-text -->
                </div>

                <div class="item">
                    <img src="http://lorempixel.com/1920/800/cats" alt="Cats" />
                    <div class="header-text">
                        <div class="col-md-12 text-center">

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
<div class="slogan">
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
<a>
    <img src="http://www.homeme.ru/upload/imgbd/711/711fd60ee5980891ad6295a05070b83a.png" width="767" height="330">
</a>
</div>
<div class="slogan">
    <div class="row text-center">
        <div class="col-xs-12">
            <h2 class="text-center">
                Распродажа
            </h2>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: -20px">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" >
                    <img src="http://lorempixel.com/650/400/nature/4/" class="img-responsive product-list-img" alt="Autumn" />
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-7 col-xs-8">
                                <h3>Autumn</h3>
                            </div>
                            <div class="col-md-5 col-xs-4 price">
                                <h3 class="text-right">
                                    <label>$14,99</label>
                                </h3>
                            </div>
                        </div>
                        <p>Size: 2400x1800 px. Author: PixStock</p>
                        <div class="row product-buttons">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-zoom-in"></span>
                                    &nbsp;More info
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" onclick="simpleCart.add('name=Autumn','price=14.99','image=http://lorempixel.com/65/40/nature/4/');return false;" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>
                                    &nbsp;Add to cart!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" >
                    <img src="http://lorempixel.com/650/400/nature/4/" class="img-responsive product-list-img" alt="Autumn" />
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-7 col-xs-8">
                                <h3>Autumn</h3>
                            </div>
                            <div class="col-md-5 col-xs-4 price">
                                <h3 class="text-right">
                                    <label>$14,99</label>
                                </h3>
                            </div>
                        </div>
                        <p>Size: 2400x1800 px. Author: PixStock</p>
                        <div class="row product-buttons">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-zoom-in"></span>
                                    &nbsp;More info
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" onclick="simpleCart.add('name=Autumn','price=14.99','image=http://lorempixel.com/65/40/nature/4/');return false;" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>
                                    &nbsp;Add to cart!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" >
                    <img src="http://lorempixel.com/650/400/cats/1/" class="img-responsive product-list-img" alt="Cat" />
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-7 col-xs-8">
                                <h3>Cat</h3>
                            </div>
                            <div class="col-md-5 col-xs-4 price">
                                <h3 class="text-right">
                                    <label>$99,99</label>
                                </h3>
                            </div>
                        </div>
                        <p>Size: 3555x2444 px. Author: Catwoman</p>
                        <div class="row product-buttons">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-zoom-in"></span>
                                    &nbsp;More info
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" onclick="simpleCart.add('name=Cat','price=99.99','image=http://lorempixel.com/65/40/cats/1/');return false;" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>
                                    &nbsp;Add to cart!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
