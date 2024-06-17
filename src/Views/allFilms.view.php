<?php
include './src/Views/partials/header.php';
include './src/Views/partials/topbar.php';
?>
<div class="b-example-divider"></div>

<div class="container-fluid px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">All Movies</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 align-items-stretch g-4 py-5">
        <?php foreach ($allMovies as $movie) : ?>
            <div class="col">
                <a href="/videotheek_app/film?id=<?= $movie['film_id'] ?>" class="text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $movie['titel'] ?></h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small><?= $movie['category'] ?></small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>3d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
include './src/Views/partials/footer.php';
?>