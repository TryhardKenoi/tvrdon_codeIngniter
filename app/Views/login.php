<?=$this->extend("Layout/layout.php");?>
<?=$this->section("content");?>


<main>
        <div class="jumbotron">
            <h1>Login</h1>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Zadejte email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Heslo</label>
                            <input type="password" class="form-control" placeholder="Zadejte heslo" id="pwd">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">Zapamatovat
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?=$this-> endSection();?>    