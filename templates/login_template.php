<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="mb-4 text-center">Panneau de Connexion</h2> <!-- besoin d'une image 600x400 -->
        <?php
        if (isset($_GET['msg'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
        } ?>
        <div class="row justify-content-center">
            <div class="col-5">
                <form class="form-signin text-center" method="POST">
                    <!-- <img class="mb-4" src="../img/favicon.jpg" alt="" width="100"> -->
                    <!-- <h1 class="h3 mb-3 font-weight-normal my-3 text-center">Veuillez vous connecter</h1> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="visitor" checked>
                        <label class="form-check-label" for="inlineRadio1">Se connecter en tant que Visiteur</label>
                    </div>
                    <label for="inputEmail" class="sr-only">Adresse e-mail</label>
                    <input type="email" name="email" id="inputEmail" class="form-control my-3" placeholder="Adresse e-mail" required>
                    <label for="inputPassword" class="sr-only">Mot de passe</label>
                    <input type="password" name="password" id="inputPassword" class="form-control my-3" placeholder="Mot de passe" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</section>
