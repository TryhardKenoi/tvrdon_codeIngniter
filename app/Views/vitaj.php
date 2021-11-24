<?=$this->extend("Layout/layout.php");?>

<?=$this->section("content");?>

<main>
        <div class="jumbotron">
            <h1>Fisrt</h1>
        </div>

        <div class="container">
            <p>Zdar</p>
            <p>
                <ol style="list-style-type:square;">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5<i class="far fa-laugh"></i> </li>
            </ol>
            </p>
            <div class="row">
                <div class="col-12 text-center">
                    <img class="japan img-fluid pt-5 pb-5" src="assets/images/gta.png" alt="">
                </div>
            </div>
        </div>
    </main>


<?=$this->endSection();?>