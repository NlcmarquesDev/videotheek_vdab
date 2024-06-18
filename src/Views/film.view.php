<?php
include './src/Views/partials/header.php';
include './src/Views/partials/topbar.php';
?>
<div class="container py-4">

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><?= $movie['titel'] ?></h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>

        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Titel from de movies</h2>
                <p> Description - Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                <p>Date realease</p>
                <p>rating</p>
                <p>run time</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <div>
                    <span>Instagram</span>
                    <span>x</span>
                    <span>messemger</span>
                </div>

                <button class="btn btn-outline-secondary" type="button">add Whishlist</button>
                <button class="btn btn-outline-secondary" type="button">Rent Movie</button>
            </div>
        </div>
    </div>
</div>
<?php
include './src/Views/partials/footer.php';
?>