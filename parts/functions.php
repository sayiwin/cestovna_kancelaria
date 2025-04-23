<?php
function validateMenuType(string $type): bool{
    $menuTypes = [
        'header',
        'footer'
    ];
    if(in_array($type, $menuTypes)) {
        return true;
    } else {
        return false;
    }
}

function getMenuDataForGeneral(string $type): array{
    $menu = [];
    if(validateMenuType($type)) {
        if($type === "header") {
            $menu = [
                'home' => [
                    'name' => 'Domov',
                    'path' => 'home.php',
                ],
                'portfolio' => [
                    'name' => 'Katalóg',
                    'path' => 'katalog.php',
                ],
                'registration' => [
                    'name' => 'Cestovná registrácia',
                    'path' => 'zaevidovat.php',
                ]
            ];
        }
    }
    return $menu;
}

function printMenuForGeneral(array $menu) {
    $currentPage = basename($_SERVER['REQUEST_URI']);

    foreach ($menu as $menuName => $menuData) {
        $isactive = ($currentPage === $menuData['path']) ? 'active' : '';
        echo '<li class="nav-item">
                <a class="nav-link ms-3 fw-medium ' . $isactive . '" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a>
              </li>';
    }
}

function getMenuDataForLogin(string $type): array{
    $menu = [];
    if(validateMenuType($type)) {
        if($type === "header") {
            $menu = [
                'home' => [
                    'name' => 'Registrácia',
                    'path' => 'registracia.php',
                ],
                'faq' => [
                    'name' => 'O nás',
                    'path' => 'faq.php',
                ],
                'portfolio' => [
                    'name' => 'Otázky',
                    'path' => 'otazky.php',
                ]
            ];
        }
    }
    return $menu;
}

function printMenuForLogin(array $menu) {
    $currentPage = basename($_SERVER['REQUEST_URI']);

    foreach ($menu as $menuName => $menuData) {
        $isactive = ($currentPage === $menuData['path']) ? 'active' : '';
        echo '<li class="nav-item">
                <a class="nav-link ms-3 fw-medium ' . $isactive . '" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a>
              </li>';
    }
}

function render_carousel($page = 'others') {
    $data = json_decode(file_get_contents('db\datas.json'), true);

    if (!isset($data[$page])) return;

    $carousel = $data[$page];
    $carousel_id = "carousel_" . $page;
    $output = '<div id="' . $carousel_id . '" class="carousel slide" data-bs-ride="carousel">';

    if ($carousel['type'] === 'with-controls') {
        $output .= '<div class="carousel-indicators">';
        foreach ($carousel['slides'] as $i => $_) {
            $active = $i === 0 ? 'active' : '';
            $output .= "<button type='button' data-bs-target='#$carousel_id' data-bs-slide-to='$i' class='$active' aria-label='Slide " . ($i+1) . "'></button>";
        }
        $output .= '</div>';
    }

    $output .= '<div class="carousel-inner border border-dark border-3">';
    foreach ($carousel['slides'] as $i => $slide) {
        $active = $i === 0 ? ' active' : '';
        $output .= "<div class='carousel-item$active'>";
        $output .= "<img src='{$slide['img']}' class='d-block w-100' alt='...'>";
        $output .= "<div class='carousel-caption'>";
        $output .= "<div class='" . ($carousel['type'] === 'with-controls' ? 'logo' : 'logotwo mt-5 text-decoration-underline') . "'>";
        $output .= "<h1>{$slide['title']}</h1>";
        $output .= "<h5 class='text-decoration-underline'>{$slide['subtitle']}</h5>";
        if (!empty($slide['text'])) {
            $output .= "<div class='logotexton'><p>{$slide['text']}</p></div>";
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
?>