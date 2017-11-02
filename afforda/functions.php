<?php
    //require_once 'inc-walker/afforda-walker.php';
    require_once 'inc-walker/wp_bootstrap_navwalker.php';
    register_nav_menus(array(
        'primary'   => 'Primary Menu',
        'secondary' => 'Secondary Menu',
        'footer'    => 'Footer Menu'
    ));


?>