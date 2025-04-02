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
?>