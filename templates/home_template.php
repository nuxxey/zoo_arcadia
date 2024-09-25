<section style="background: url(../img/zoobg.jpg)" class="py-5 bg-cover bg-center">
    <div class="hero-overlay"></div>
    <div class="container py-5 px-0 text-white text-left">
        <h1 class="text-shadow hero-heading font-weight-normal">Système de Gestion de Zoo</h1>
    </div>
</section>

<!-- bienvenue au Système de Gestion de Zoo -->
<section class="pb-2 pt-5">
    <div class="container-fluid p-5 pb-2">
        <div class="row px-2">
            <div class="col-lg-6 col-sm-12">
                <h2>Bienvenue au <span class="font-weight-bold text-light-green">Système de Gestion de Zoo</span></h2>
                <div style="width: 8%">
                    <hr style="border-top: 10px solid #489A33;">
                </div>
                <p class="lead text-secondary">Bienvenue au Système de Gestion de Zoo, une solution complète et intuitive conçue pour simplifier la gestion quotidienne des zoos. Ce système permet de centraliser toutes les informations clés, telles que la gestion des animaux, des employés, des visiteurs et des ressources. En intégrant des fonctionnalités modernes et des outils de suivi, il optimise la prise de décision et améliore l'efficacité des opérations. Que vous soyez un gestionnaire expérimenté ou un membre du personnel, cette plateforme vous offre une vue d'ensemble claire pour garantir le bien-être des animaux et la satisfaction des visiteurs.</p>
                <a href="gallery" class="btn btn-primary btn-sm" style="border-radius: 50px;">Voir la galerie</a>
            </div>
            <div class="col-lg-6 col-sm-12 mt-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="../img/ausgeck.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Gecko Australien</h4>
                        <p class="text-small text-muted">Les geckos australiens n'ont pas de paupières. Leurs yeux sont protégés par une membrane transparente, qu'ils nettoient en les léchant.</p>
                    </div>
                    <div class="col">
                        <img src="../img/grizzlybear.jpg" alt="" class="img-fluid mb-4" width="200px">
                        <h4 class="h5 mb-2">Ours Grizzly</h4>
                        <p class="text-small text-muted">L'hybride ours polaire-grizzly est un croisement entre un ours polaire et un ours grizzly, nommé "pizzly bear".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- animal de la semaine -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Animal en vedette de la semaine <span class="font-weight-bold" style="color: #BE9D0D">Animal</span>
                    <img src="../img/number_1_hand.png" alt="" width="40px">
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div>
                    <img src="../img/animals/<?= $getImageName($currAnimal['animal_id']) ?>" alt="" style="border-radius: 20px">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-sm-4 pt-lg-2">
                <div class="row">
                    <div class="col">
                        <h3><span class="text-dark"><?= $currAnimal['an_given_name'] ?></h3>
                        <h6><span class="text-muted">Nom de l'espèce :</span>&ensp;<?= $currAnimal['an_species_name'] ?></h6>
                        <h6><span class="text-muted">Date de naissance :</span>&ensp;<?= $currAnimal['an_dob'] ?></h6>
                        <h6><span class="text-muted">Genre :</span>&ensp;<?= $currAnimal['an_gender'] == "m" ? "Mâle" : "Femelle" ?></h6>
                        <h6><span class="text-muted">Date d'arrivée au zoo :</span>&ensp;<?= $currAnimal['an_joindate'] ?></h6>
                        <?php if ($currAnimal['an_description'] != "") { ?>
                            <h6><span class="text-muted">Description :</span>&ensp;<?= $currAnimal['an_description'] ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray py-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 lined ml-5">Carte du Zoo</h2>
                <div class="row">
                    <div class="col-xs-10 col-lg-6">
                        <img src="../img/zoo_map.jpg" alt="" width="90%">
                    </div>
                    <div class="col-xs-10 col-lg-6 mt-xs-3 mt-3">
                        <img src="../img/zoo_areas.png" alt="" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
