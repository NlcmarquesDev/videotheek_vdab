<?php
include './src/Views/partials/header.php';
include './src/Views/partials/topbar.php';
include './src/Views/partials/offcanvas.php';
?>

<main>
    <!-- Hero Section -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Videotheek VDAB</h1>
            <h3 class="fw-normal text-muted mb-3">
                <b>Buy. Rent. Watch.</b> All inside the app. Welcome to the home of thousands of movies, including all the latest blockbusters.
            </h3>

            <a class="btn btn-outline-dark" href="/videotheek_app/allFilms.php">
                View All
                <svg class="arrow" width="15" height="15">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>

        </div>
        <div class="product-device shadow-sm d-none d-lg-block"></div>

    </div>
    <?php if (isset($_SESSION['alert'])) : ?>
        <div class="row container mx-auto w-100">
            <div class="alert alert-success m-4 p-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-circle mx-3" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                </svg>
                <?= $_SESSION['alert'] ?>
            </div>
        </div>
    <?php endif ?>


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mx-auto align-items-stretch g-4 py-5 container-fluid">
        <?php foreach ($allMovies as $movie) :
        ?>
            <div class="col">
                <a href="/videotheek_app/film.php?id=<?= $movie['movie_id'] ?>" class="text-decoration-none">
                    <div class="card card-cover h-100  text-bg-dark rounded-4 shadow-lg" style="background: url(<?= $movie['Poster_Link'] ?>) no-repeat;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $movie['Series_Title'] ?></h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small><?= $movie['Genre'] ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <small><?= $movie['IMDB_Rating'] ?></small>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning ms-2 ps-1" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</main>






<?php
unset($_SESSION['alert']);
include './src/Views/partials/footer.php';
?>