<?php
include './src/Views/partials/header.php';
include './src/Views/partials/topbar.php';
?>

<main>
    <!-- Hero Section -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Videotheek VDAB</h1>
            <h3 class="fw-normal text-muted mb-3">
                <b>Buy. Rent. Watch.</b> All inside the app. Welcome to the home of thousands of movies, including all the latest blockbusters.
            </h3>

            <a class="btn btn-outline-dark" href="/videotheek_app/films.php">
                View All
                <svg class="arrow" width="15" height="15">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>

        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
    </div>

    <div class="row d-flex ">
        <?php foreach ($allMovies as $key => $movie) : ?>

            <?php if ($key === 0 || $key === 3 || $key === 4 || $key === 7 || $key === 8) : ?>
                <div class=" col-12 col-md-6  my-md-3 ps-md-3">
                    <div class=" bg-dark text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded rounded-xl">
                        <a href="/videotheek_app/film?id=<?= $movie['film_id'] ?>" class="text-decoration-none text-white ">
                            <div class="my-3 py-3">
                                <h2 class="display-5"><?= $movie['titel'] ?></h2>
                                <p class="lead"><?= $movie['category'] ?></p>
                            </div>
                            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0"></div>
                        </a>
                    </div>
                </div>
            <?php else : ?>
                <div class=" col-12 col-md-6  ps-md-3">
                    <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                        <a href="/videotheek_app/film?id=<?= $movie['film_id'] ?>" class="text-decoration-none text-dark ">
                            <div class="my-3 p-3">
                                <h2 class="display-5"><?= $movie['titel'] ?></h2>
                                <p class="lead"><?= $movie['category'] ?></p>
                            </div>
                            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0"></div>
                        </a>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</main>






<?php
include './src/Views/partials/footer.php';
?>