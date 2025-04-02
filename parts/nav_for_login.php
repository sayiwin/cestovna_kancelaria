<?php
$menu = getMenuDataForLogin("header");
?>
<div class="container-fluid p-0">
    <nav class="navbar fixed-top navbar-expand-lg border-dark border-3 border-bottom border-body" style="background: rgb(216, 210, 194);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-brand">
            <img src="img/globe.svg" alt="">
            <a class="navbar-brand h1" href="registracia.php">MaxCesta</a>
        </div>
        <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle fs-5" id="navbarNav">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0 active">
                <?php printMenuForLogin($menu); ?>
            </ul>
        </div>
    </nav>
</div>