<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="lined mb-4">Ajouter un Témoignage</h2> <!-- besoin d'une image 600x400 -->
        <div class="row">
            <div class="col-8 pt-3">
                <?php
                if (isset($_GET['msg'])) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-4 field-required">
                        <label for="testimonial">Message du Témoignage</label>
                        <textarea name="test_message" class="form-control" placeholder="..." id="testimonial" cols="30" rows="5" required></textarea>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</section>
