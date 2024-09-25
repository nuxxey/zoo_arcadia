<section class="py-5 bg-gris">
    <div class="container py-5">
        <h2 class="lined mb-4">Galerie d'Images</h2> <!-- besoin d'une image 600x400 -->
        <p class="lead">Photos des animaux dans leur habitat.</p>
        <div class="row">
            <?php foreach ($galleryImage as $img) { ?>
                <a href="../img/gallery/image/<?= $img['g_file_name'] ?>" data-lightbox="gallery" data-title="Description du Projet No.1" class="col-lg-4 col-sm-6 p-0">
                    <img src="../img/gallery/image/<?= $img['g_file_name'] ?>" alt="" class="img-fluid">
                </a>
            <?php } ?>
        </div>
        <h2 class="lined mb-4 mt-5">Galerie de Vidéos</h2> <!-- besoin d'une image 600x400 -->
        <p class="lead">Vidéos des animaux dans leur habitat.</p>
        <div class="row justify-content-center">
            <?php foreach ($galleryVideo as $video) { ?>
                <div class="col-12 text-center">
                    <video src="../img/gallery/video/<?= $video['g_file_name'] ?>" poster="" width="480" controls>
                    </video>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
