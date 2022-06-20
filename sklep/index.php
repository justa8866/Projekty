<?php
 session_start();
 error_reporting(E_ALL ^ E_WARNING);

switch ($_GET['url']) {
    case '':
        # strona glowna
        require __DIR__ . '/views/index.php';
        break;
    
    case 'product':
        # strona produktu
        require __DIR__ . '/views/product.php';
        break;
    case 'success':
        # strona produktu
        require __DIR__ . '/views/success.php';
        break;

    case 'checkout':
        # strona produktu
        require __DIR__ . '/views/checkout.php';
        break;

    case 'contact':
        # strona kontaktowa
        require __DIR__ . '/views/contact.php';
        break;

    case 'login':
        # strona kontaktowa
        require __DIR__ . '/views/login.php';
        break;

    case 'register':
        # strona kontaktowa
        require __DIR__ . '/views/register.php';
        break;

    case 'logout':
        # strona kontaktowa
        require __DIR__ . '/views/logout.php';
        break;
    
    default:
        # code...
        echo 'nie znaleziono';
        break;
}