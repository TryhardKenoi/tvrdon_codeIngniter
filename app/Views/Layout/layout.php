
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css')?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome/all.min.css')?>">
    <link rel="icon" href="assets/images/profilovka.png">
    <title>Velká loupež auta: Pětečka</title>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark">
    <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarMenu">
        <a href="<?= base_url('/');?>" class="profilovkaa">
            <img class="img-fluid" src="assets/images/gtalogo.png" alt="">
        </a>
        <ul class="navbar-nav pl-2">
            <li class="nav-item">
                <a href="<?= base_url('/galery');?>" class="nav-link font-weight-bold ">Galery</a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/progres');?>" class="nav-link font-weight-bold ">Progres </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/kontakt');?>" class="nav-link font-weight-bold ">Kontakt </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/zbytek');?>" class="nav-link font-weight-bold ">Zbytek </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto pt-2">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN/CZ</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?lang=cz">čeština</a>
                    <a class="dropdown-item" href="?lang=en">angličtina</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/login');?>" class="nav-link font-weight-bold ">Přihlášení <i class="fas fa-sign-in-alt"></i></a>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/register');?>" class="nav-link font-weight-bold ">Register <i class="fas fa-user-plus"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main> 
<?= $this->renderSection("content"); ?> 
</main>

<footer class="text-center text-md-start mt-2">
    <div class="row p-2">
        <div class="col-md-6 col-12">
            <div class="text-sm-center text-md-left p-3 font-weight-bold">
                © 2021 Copyright:
                <a href="http://kenoi.jednoduse.cz/" class="text-light">Kenoi.jednoduse.cz</a>
            </div>
        </div>
    </div>
</footer>


<script src="assets/js/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
