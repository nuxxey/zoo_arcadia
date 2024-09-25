<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="lined mb-4">Postuler à une offre d'emploi</h2> <!-- besoin d'une image 600x400 -->
        <div class="row">
            <div class="col-8 pt-3">
                <?php
                if (isset($_GET['msg'])) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-4 field-required">
                        <label for="fullname">Nom complet</label>
                        <input type="text" class="form-control" id="fullname" name="a_fullname" placeholder="" value="" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="email">Email</label>
                        <input type="email" value="" class="form-control" name="a_email" id="email" required>
                    </div>
                    <div class="mb-4 field-required">
                        <label for="phone">Téléphone</label>
                        <input type="number" value="" class="form-control" name="a_phone" id="phone" required>
                    </div>
                    <div class="form-group mb-4 field-required">
                        <label for="file">Télécharger le CV</label><br />
                        <input type="file" name="cv" class="form-control-file" id="file" required />
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Postuler</button>
                </form>
            </div>
        </div>
    </div>
</section>
