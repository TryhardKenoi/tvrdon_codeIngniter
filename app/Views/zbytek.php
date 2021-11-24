<?=$this->extend("Layout/layout.php");?>
<?=$this->section("content");?>

<main>
        <div class="jumbotron">
            <h1>Zbytek <i class="fas fa-poop"></i></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper mt-4 mb-5">
                        <div id="myCarousel" class="carousel">
                            <div class="carousel-inner">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <div class="container possition">
                                        <img src="assets/images/1.png" alt="" style="width:1280px;height:720px">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container possition">
                                        <img src="assets/images/2.png" alt="" style="width:1280px;height:720px">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container possition">
                                        <img src="assets/images/3.png" alt="" style="width:1280px;height:720px">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container possition">
                                        <img src="assets/images/4.png" alt="" style="width:1280px;height:720px">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container possition">
                                        <img src="assets/images/5.png" alt="" style="width:1280px;height:720px">
                                    </div>
                                </div>
                            </div>
                            <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                                <span class="sr-only">Previous</span>
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="sr-only">Previous</span>
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="sr-only">Previous</span>
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="sr-only">Previous</span>
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>

                    <button class="accordion">Dortík</button>
                    <div class="panel">
                        <p>Dortík s jahodovou polevou</p>
                    </div>

                    <button class="accordion">Dortík</button>
                    <div class="panel">
                        <p>Dortík s čokoládovou polevou</p>
                    </div>
                    <button class="accordion">Dortík</button>
                    <div class="panel">
                        <p>Dortík s vanilkovou polevou</p>
                    </div>
                    <button class="accordion">Dortík</button>
                    <div class="panel">
                        <p>Dortík s pistáciovou polevou</p>
                    </div>


                    <div class="col-12 p-3">
                        <div class="card" style="width:400px; margin: 0 auto;">
                            <img class="bootstrap" src="assets/images/rs.png" alt="Card image" class="img-fluid">
                            <div class="card-body">
                                <h4 class="card-title">Rockstar games account</h4>
                                <a href="https://socialclub.rockstargames.com/member/TryhardJacob/" target="_blank" class="btn">See profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

<?=$this -> endSection();?>