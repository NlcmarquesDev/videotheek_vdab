<?php
include './src/Views/partials/header.php';
include './src/Views/partials/topbar.php';
include './src/Views/partials/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">All Movies</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Movies in database
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Number(s)</th>
                                <th>In Store</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allData as $data) : ?>
                                <tr>
                                    <td><?= $data['titel'] ?></td>
                                    <td><?= checkFilmIsInStore($data['codes'], $filmNotReturn['codes_not_return']) ?></td>
                                    <td><?= numberFilmInStore($data['codes'], $filmNotReturn['codes_not_return']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php
    include './src/Views/partials/footer.php';
    ?>