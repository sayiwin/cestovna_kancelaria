<?php
require_once __DIR__ . '/Recenzia.php';
class WebsiteHelper {

    public function validateMenuType(string $type): bool {
        $menuTypes = ['header', 'footer'];
        return in_array($type, $menuTypes);
    }

    public function getMenuDataForGeneral(string $type): array {
        $menu = [];
        if (self::validateMenuType($type)) {
            if ($type === "header") {
                $menu = [
                    'home' => ['name' => 'Domov', 'path' => 'home.php'],
                    'portfolio' => ['name' => 'Katalóg', 'path' => 'katalog.php'],
                    'zaevidovat' => ['name' => 'Cestovná registrácia', 'path' => 'zaevidovat.php'],
                ];
            }
        }
        return $menu;
    }

    public function printMenuForGeneral(array $menu) {
        $currentPage = basename($_SERVER['REQUEST_URI']);
        foreach ($menu as $menuName => $menuData) {
            $isactive = ($currentPage === $menuData['path']) ? 'active' : '';
            echo '<li class="nav-item">
                    <a class="nav-link ms-3 fw-medium ' . $isactive . '" href="' . htmlspecialchars($menuData['path']) . '">' . htmlspecialchars($menuData['name']) . '</a>
                  </li>';
        }
    }

    public function getMenuDataForLogin(string $type): array {
        $menu = [];
        if (self::validateMenuType($type)) {
            if ($type === "header") {
                $menu = [
                    'registracia' => ['name' => 'Registrácia', 'path' => 'registracia.php'],
                    'faq' => ['name' => 'O nás', 'path' => 'faq.php'],
                    'recenzie' => ['name' => 'Recenzie', 'path' => 'recenzie.php'],
                ];
            }
        }
        return $menu;
    }

    public function printMenuForLogin(array $menu) {
        $currentPage = basename($_SERVER['REQUEST_URI']);
        foreach ($menu as $menuName => $menuData) {
            $isactive = ($currentPage === $menuData['path']) ? 'active' : '';
            echo '<li class="nav-item">
                    <a class="nav-link ms-3 fw-medium ' . $isactive . '" href="' . htmlspecialchars($menuData['path']) . '">' . htmlspecialchars($menuData['name']) . '</a>
                  </li>';
        }
    }

    public function renderCarousel($page = 'others') {
        $data = json_decode(file_get_contents('db/datas.json'), true);

        $carousel = $data[$page];
        $carousel_id = "carousel_" . $page;
        $output = '<div id="' . $carousel_id . '" class="carousel slide" data-bs-ride="carousel">';

        if ($carousel['type'] === 'with-controls') {
            $output .= '<div class="carousel-indicators">';
            foreach ($carousel['slides'] as $i => $_) {
                $active = $i === 0 ? 'active' : '';
                $output .= "<button type='button' data-bs-target='#$carousel_id' data-bs-slide-to='$i' class='$active' aria-label='Slide " . ($i + 1) . "'></button>";
            }
            $output .= '</div>';
        }

        $output .= '<div class="carousel-inner border border-dark border-3">';
        foreach ($carousel['slides'] as $i => $slide) {
            $active = $i === 0 ? ' active' : '';
            $output .= "<div class='carousel-item$active'>";
            $output .= "<img src='" . htmlspecialchars($slide['img']) . "' class='d-block w-100' alt='...'>";
            $output .= "<div class='carousel-caption'>";
            $output .= "<div class='" . ($carousel['type'] === 'with-controls' ? 'logo' : 'logotwo mt-5 text-decoration-underline') . "'>";
            $output .= "<h1>" . htmlspecialchars($slide['title']) . "</h1>";
            $output .= "<h5 class='text-decoration-underline'>" . htmlspecialchars($slide['subtitle']) . "</h5>";
            if (!empty($slide['text'])) {
                $output .= "<div class='logotexton'><p>" . htmlspecialchars($slide['text']) . "</p></div>";
            }
            $output .= "</div></div></div>";
        }
        $output .= '</div>';

        if ($carousel['type'] === 'with-controls') {
            $output .= "
                <button class='carousel-control-prev' type='button' data-bs-target='#$carousel_id' data-bs-slide='prev'>
                  <span class='carousel-control-prev-icon'></span>
                  <span class='visually-hidden'>Previous</span>
                </button>
                <button class='carousel-control-next' type='button' data-bs-target='#$carousel_id' data-bs-slide='next'>
                  <span class='carousel-control-next-icon'></span>
                  <span class='visually-hidden'>Next</span>
                </button>";
        }

        $output .= '</div>';
        echo $output;
    }

    public function pozdrav() {
        $login = htmlspecialchars($_SESSION['Login']);
        $hour = date('H');
        if ($hour < 12) {
            $greeting = "Dobré ráno";
        } elseif ($hour < 18) {
            $greeting = "Dobrý deň";
        } else {
            $greeting = "Dobrý večer";
        }

        echo "<h3 class='logolist mt-0'>$greeting, $login!</h3>";
    }

    public function renderNavbarGeneral() {
        $menu = self::getMenuDataForGeneral('header');
        echo '<div class="container-fluid p-0">
            <nav class="navbar fixed-top navbar-expand-lg border-dark border-3 border-bottom border-body" style="background: rgb(216, 210, 194);">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-brand">
                        <img src="img/globe.svg" alt="">
                        <a class="navbar-brand h1" href="home.php">MaxCesta</a>
                    </div>
                    <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle fs-5" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-3 mb-lg-0 active">';
                            self::printMenuForGeneral($menu);
        echo '          </ul>
                    </div>
                </div>
            </nav>
        </div>';
    }

    public function renderNavbarLogin() {
        $menu = self::getMenuDataForLogin('header');
        echo '<div class="container-fluid p-0">
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
                        <ul class="navbar-nav me-auto mb-3 mb-lg-0 active">';
                            self::printMenuForLogin($menu);
        echo '          </ul>
                    </div>
                </div>
            </nav>
        </div>';
    }

    public function printKatalog() {
        include './tours/rodinny.php';
        include './tours/kulturny.php';
        include './tours/relax.php';
        include './tours/dobrodruzny.php';
        include './tours/exspresny.php';
    }

    public static function renderFooter() {
        echo '<footer class="bg-dark text-white py-3">
            <script src="js/app.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-2">MaxCesta</h5>
                        <p class="mb-0">Cestovná kancelária</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-1">Kontaktné číslo: <a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="index.php">+421 111 111 111</a></p>
                        <p class="mb-0">Emailová adresa: <a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="index.php">maxcesta@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </footer>';
    }

    public static function renderHead() {
        $currentPage = basename($_SERVER['REQUEST_URI'], ".php");
        echo "<!DOCTYPE html>
<html lang='sk'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>MaxCesta - $currentPage</title>
    <link rel='stylesheet' href='css/style.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>";
    }

    public static function renderReview(int $limit = 5): void {
        $recenzia = new Recenzia();
        $review = $recenzia->zobrazRecenziu($limit);

        echo '<div class="container mt-4 mb-5">';
        echo '<h4 class="logolist">Posledné recenzie od používateľov:</h4>';

        if (!empty($review)) {
            foreach ($review as $r) {
                echo '<div class="card my-3 border-dark shadow-sm">';
                echo '<div class="card-body" style="background: rgb(248, 245, 237);">';
                echo '<h5 class="card-title">'. 'Dňa ' . htmlspecialchars($r['dates']). ' ' . htmlspecialchars($r['names']) . ' hovorí:</h5>';
                echo '<p class="card-text">' . nl2br(htmlspecialchars($r['review'])) . '</p>';
                echo '</div></div>';
            }
        } else {
            echo '<p>Žiadne otázky zatiaľ neboli pridané.</p>';
        }
        echo '</div>';
    }

    public static function sessionControl() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['Login'])) {
            echo "<script>window.location.href = 'registracia.php';</script>";
            exit;
        }
    }

}
?>
