<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="lined mb-4">Réserver des Billets</h2> <!-- besoin d'une image 600x400 -->
        <div class="row">
            <div class="col-8">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Groupe de Billets</th>
                            <th scope="col">Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Régulier</td>
                            <td>6,00 $</td>
                        </tr>
                        <tr>
                            <td>Étudiant</td>
                            <td>3,00 $</td>
                        </tr>
                        <tr>
                            <td>Enfant</td>
                            <td>2,00 $</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-5">
                    <h5>Choisissez le Nombre de Billets</h5>
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '<div class="alert alert-' . $_GET['type'] . ' alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         </div>';
                    } ?>
                    <form method="POST">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nom :</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="name" name="book_name" placeholder="Nom de la personne qui réserve les billets" value="<?= (isset($_SESSION['v_firstname']) && isset($_SESSION['v_lastname'])) ? $_SESSION['v_firstname'] . ' ' . $_SESSION['v_lastname'] : "" ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regular" class="col-sm-2 col-form-label">Régulier :</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="regular" value="0" name="regular_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="student" class="col-sm-2 col-form-label">Étudiant :</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="student" value="0" name="student_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="child" class="col-sm-2 col-form-label">Enfant :</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="child" value="0" name="child_num">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Date :</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="date" value="0" name="t_date" required>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-10">
                                <?php if (isset($_SESSION['authenticated'])) { ?>
                                    <button type="submit" class="btn btn-primary" name="submit">Réserver le Billet</button>
                                <?php } else { ?>
                                    <button class="btn btn-danger" disabled>Vous devez être connecté pour réserver des billets</button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- début de paypal -->

                        <!-- fin de paypal -->
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
