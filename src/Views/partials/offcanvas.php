<div class=" fixed-top mt-2 mx-4  d-flex justify-content-end">



    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
        </svg>
    </button>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Your List of Movies</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h4 class="mb-3">Rent Movies</h4>
            <div class="d-flex flex-column gap-3 ">

                <?php if (isset($_SESSION['basket'])) : ?>
                    <?php foreach ($_SESSION['basket'] as $movie) :  ?>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex gap-2 align-items-center ">
                                <img src="<?= $movie['image'] ?>" width="80" height="80">
                                <div class="d-flex flex-column">
                                    <p class=""><b><?= $movie['title'] ?></b></p>
                                    <p class=""><?= $movie['code'] ?></p>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-danger">delete</button>

                        </div>
                    <?php endforeach ?>
                <?php endif ?>

                <button class="btn btn-primary">Rent</button>
            </div>
        </div>
    </div>
</div>