<?php
if(!$_SESSION['logged_in']) {
    header("Location: index.php?url=login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produkt</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/head.php'); ?>
<link rel="stylesheet" type="text/css"
    href="styles/checkout.css" />
</head>

<body>
    <div class="super_container">
    <?php
     require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/header_contact.php');
     require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/menu.php');
     //require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/home_product.php');
     require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/checkout.php');
     require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/footer.php');
     require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/script.php');
      ?>
    </div>
</body>