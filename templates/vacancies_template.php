<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="lined mb-4">Postes Vacants</h2> <!-- besoin d'une image 600x400 -->
        <p class="lead">Les emplois suivants sont disponibles au Zoo</p>
        <div class="row">
            <div class="col mt-3">
                <?php foreach ($vacancies as $key => $vacancy) { ?>
                    <div class="border bg-white p-4 mt-3">
                        <h3 class="font-weight-normal"><?= $vacancy['v_position'] ?></h3>
                        <p class="m-0 py-1"><i class="font-weight-bold">Description :</i>&ensp;<span class="font-weight-normal"><?= $vacancy['v_description'] ?></span></p>
                        <p class="m-0 py-1"><i class="font-weight-bold">Type de Poste :</i>&ensp;<span class="font-weight-normal text-capitalize"><?= $vacancy['v_type'] ?></span></p>
                        <p class="m-0 py-1"><i class="font-weight-bold">Date de Début :</i>&ensp;<span class="font-weight-normal text-capitalize"><?= $vacancy['v_start_date'] ?></span></p>
                        <?php if ($vacancy['v_type'] == 'temporary') { ?>
                            <p class="m-0 py-1"><i class="font-weight-bold">Date de Fin :</i>&ensp;<span class="font-weight-normal text-capitalize"><?= $vacancy['v_end_date'] ?></span></p>
                        <?php } ?>
                        <div class="text-right">
                            <a class="btn btn-primary" href="apply_vacancy?vac_id=<?= $vacancy['vacancy_id'] ?>">Postuler</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
