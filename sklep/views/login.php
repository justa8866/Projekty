
<?php
if($_SESSION['logged_in']) {
    header("Location: index.php?url=checkout");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Justin</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/head.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/main_header.php');
?>
<style>

.form-control {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #CCCCCC;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
</style>

</head>

<body>
    <div class="super_container">
        <?php


require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/menu.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/zaloguj.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/script.php');
 ?>
</div>


</body>
</html> 