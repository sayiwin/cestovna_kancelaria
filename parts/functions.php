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

function getMenuData(string $type): array{
    $menu = [];
    if(validateMenuType($type)) {
        if($type === "header") {
            $menu = [
                'home' => [
                    'name' => 'Domov',
                    'path' => 'index.php',
                ],
                'faq' => [
                    'name' => 'O nás',
                    'path' => 'faq.php',
                ],
                'portfolio' => [
                    'name' => 'Katalóg',
                    'path' => 'katalog.php',
                ],
                'registration' => [
                    'name' => 'Cestovná registrácia',
                    'path' => 'zaevidovat.php',
                ],
                'login' => [
                    'name' => 'Prihlásiť',
                    'path' => 'login.php',
                ]
            ];
        }
    }
    return $menu;
}

function printMenu(array $menu) {
    $currentPage = basename($_SERVER['REQUEST_URI']);

    foreach ($menu as $menuName => $menuData) {
        $isactive = ($currentPage === $menuData['path']) ? 'active' : '';
        $extraclass = ($menuData['path'] == 'login.php') ? 'fw-bold' : '';
        echo '<li class="nav-item">
                <a class="nav-link ms-3 fw-medium ' . $isactive . $extraclass . '" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a>
              </li>';
    }
}

?>