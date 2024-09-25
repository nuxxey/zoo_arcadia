<?php
$images2 = $images->fetchAll();
?>
<section class="bg-gris p-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 mt-4">
                <h2 class="lined"><?= $animal['an_given_name'] ?></h2>

                <div class="animal-carousel mt-5" style="max-width: 50vw">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach ($images2 as $key => $row) { ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" <?= $key == 0 ? 'class="active"' : "" ?>></li>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php foreach ($images2 as $key => $image) { ?>
                                <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                                    <img src="../img/animals/<?= $image['image_name'] ?>" class="d-block w-50 m-auto" alt="...">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev carousel-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next carousel-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>

                <div class="mt-5">
                    <h4 class="text-secondary">Détails</h4>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Nom attribué :</span>&ensp;<?= $animal['an_given_name'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Nom de l'espèce :</span>&ensp;<?= $animal['an_species_name'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Date de naissance :</span>&ensp;<?= $animal['an_dob'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Genre :</span>&ensp;<?= $animal['an_gender'] == "m" ? "Mâle" : "Femelle" ?></h6>
                            <h6 class="my-2"><span class="text-muted">Espérance de vie moyenne :</span>&ensp;<?= $animal['an_avg_lifespan'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Localisation :</span>&ensp;<?= $getLocationName($animal['location_id']) ?></h6>
                            <h6 class="my-2"><span class="text-muted">Besoins alimentaires :</span>&ensp;<?= $animal['an_dietary_req'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Habitat naturel :</span>&ensp;<?= $animal['an_natural_habitat'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Répartition de la population :</span>&ensp;<?= $animal['an_pop_dist'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Date d'arrivée au zoo :</span>&ensp;<?= $animal['an_joindate'] ?></h6>
                        </div>
                        <div class="col-6">
                            <h6 class="my-2"><span class="text-muted">Taille :</span>&ensp;<?= $animal['an_height'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Poids :</span>&ensp;<?= $animal['an_weight'] ?></h6>
                            <h6 class="my-2"><span class="text-muted">Classification :</span>&ensp;<?= $getClassName($animal['class_id']) ?></h6>
                            <?php if ($class['class_table_name'] == "mammals") { ?>
                                <h6 class="my-2"><span class="text-muted">Période de gestation :</span>&ensp;<?= $childDetails['m_gest_period'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Catégorie de mammifère :</span>&ensp;<?= $childDetails['m_category'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Température corporelle moyenne :</span>&ensp;<?= $childDetails['m_avg_body_temp'] ?></h6>
                            <?php } ?>
                            <?php if ($class['class_table_name'] == "birds") { ?>
                                <h6 class="my-2"><span class="text-muted">Méthode de construction du nid :</span>&ensp;<?= $childDetails['b_nest_const'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Taille de la couvée :</span>&ensp;<?= $childDetails['b_clutch_size'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Envergure :</span>&ensp;<?= $childDetails['b_wingspan'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Capacité de vol :</span>&ensp;<?= $childDetails['b_ability_fly'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Variation de couleur du plumage :</span>&ensp;<?= $childDetails['b_color_variant'] ?></h6>
                            <?php } ?>
                            <?php if ($class['class_table_name'] == "fish") { ?>
                                <h6 class="my-2"><span class="text-muted">Température corporelle moyenne :</span>&ensp;<?= $childDetails['f_body_temp'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Type d'eau :</span>&ensp;<?= $childDetails['f_water_type'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Variantes de couleur :</span>&ensp;<?= $childDetails['f_color_variant'] ?></h6>
                            <?php } ?>

                            <?php if ($class['class_table_name'] == "reptiles" || $class['class_table_name'] == "amphibians") { ?>
                                <h6 class="my-2"><span class="text-muted">Type de reproduction :</span>&ensp;<?= isset($childDetails['r_rep_type']) ? $childDetails['r_rep_type'] :  $childDetails['am_rep_type'] ?></h6>
                                <h6 class="my-2"><span class="text-muted">Taille moyenne de la couvée :</span>&ensp;<?= isset($childDetails['r_clutch_size']) ? $childDetails['r_clutch_size'] :  $childDetails['am_clutch_size']  ?></h6>
                                <h6 class="my-2"><span class="text-muted">Nombre moyen de petits :</span>&ensp;<?= isset($childDetails['r_num_offspring']) ? $childDetails['r_num_offspring'] :  $childDetails['am_num_offspring'] ?></h6>
                            <?php } ?>

                            <?php if ($animal['an_description'] != "") { ?>
                                <h6 class="my-2"><span class="text-muted">Description :</span>&ensp;<?= $animal['an_description'] ?></h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="w-50 mx-auto mt-5">
                    <?php if ($sponsored == false) { ?>
                        <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "sponsor") { ?>
                            <h5 class="text-center font-weight-light">Animal disponible pour parrainage</h5>
                            <a href="sponsor_animal?an_id=<?= $animal['animal_id'] ?>" class="btn btn-block btn-primary">Parrainer l'animal</a>
                        <?php } else { ?>
                            <h5 class="text-center font-weight-light">Animal disponible pour parrainage</h5>
                            <button class="btn btn-block btn-outline-danger" disabled>Compte de sponsor requis</button>
                        <?php } ?>
                    <?php } else { ?>
                        <div>
                            <h2 class="text-center font-weight-light mb-3">Animal parrainé par</h2>
                            <a href="https://<?=$sponsorDetails['s_url']?>" target="_blank">
                                <img src="../img/sponsor_image/<?= $sponsorDetails['signage_photo'] ?>" alt="" width="600">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
