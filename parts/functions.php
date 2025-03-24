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
                ]
            ];
        }
    }
    return $menu;
}

function printMenu(array $menu) {
    $currentPage = basename($_SERVER['REQUEST_URI']);

    foreach ($menu as $menuName => $menuData) {
        $isActive = ($currentPage === basename($menuData['path'])) ? 'active' : '';
        
        echo '<li class="nav-item">
                <a class="nav-link ms-3 fw-medium ' . $isActive . '" href="' . $menuData['path'] . '">' . $menuData['name'] . '</a>
              </li>';
    }
}

?>