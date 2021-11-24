<?=$this->extend("Layout/layout.php");?>
<?=$this->section("content");?>

<main>
        <div class="jumbotron">
            <h1>Kontakt</h1>
        </div>

        <div class="container">
            <div class="row m-4">
                <div class="col-md-6 col-12">
                    <img src="assets/images/kon.jpg"  alt="" class="img rounded w-100">
                </div>
                <div class="col-md-6 col-12 bg-secondary rounded">
                        <h3 class="pl-3 pt-3 text-left font-weight-bold">Informace</h3>
                        <div class="p-1">
                            <p>Jmeno</p>
                            <p>Vek : 16</p>
                            <p><i class="fab fa-discord"></i> Discord: Kenoi #6721</p>
                            <p><i class="fas fa-phone"></i> Mobil: +420 776 762 ###</p>
                            <p><i class="far fa-id-card"></i> Kreditní kartka: 4161611003/0800</p>
                            <p><i class="fas fa-money-bill-wave-alt"></i> Paypal: kenoicz@gmail.com</p>
                        </div>

                </div>
            </div>
        </div>
    </main>

<?=$this->endSection();?>