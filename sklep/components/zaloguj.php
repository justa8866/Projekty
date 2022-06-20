<?php
include("config.php");

if($_SESSION['logged_in']) {
    echo '<script>window.location.href = "index.php?url=";</script>';
    exit;
}

if (!empty($_POST)) {
    $login = $_POST['email'];
    $password = $_POST['password'];
    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);

    if (!$login || empty($login)) {
        echo '<p class="alert">Wypełnij pole z loginem!</p>';
        exit;
    }

    if (!$password || empty($password)) {
        echo '<p class="alert">Wypełnij pole z hasłem!</p>';
        exit;
    }

    $stmt = $pdo->prepare("SELECT id FROM `login` WHERE email = ? and haslo = ? limit 1;");
    $stmt->execute([$login, md5($password)]);
    $user = $stmt->fetch();

    if(isset($user)) {
        if($user) {
            if($user['id']) {
                if(is_numeric($user['id'])) {
                    echo $_SESSION['user_id'] = $user['id'];
                    $_SESSION['logged_in'] = true;
                    echo '<script>window.location.href = "index.php?url=";</script>';
                    // header("Location: index.php?url=checkout");
                }
            }
        } else {
            echo 'nieprawidlowy login lub haslo';
            exit;
        }
    
    } else {
        echo 'nieprawidlowy login lub haslo';
        exit;
    }
}
?>
<br>
<br>
<br>
<br>
<br>
<br>





<div class="cart_details">
<div class="row justify-content-lg-center " > 
<div class="cart_total">
<form action="" method="post">
    <label>Zaloguj się</label>
    <br>
    <input type="email" name="email" placeholder="Email" class="form-control"  required />
    <br>
    <input type="password" name="password" placeholder="password" class="form-control"  required />
    <br>
    <button type="submit" class="btn btn-warning">Wyślij</button>
    <br>
    <label> Jeśli nie masz konta zarejestruj się </label>
    <a href="?url=register">Zarejestruj się </a>
</form>
</div> 
</div>
</div>  

<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/sklep/components/script.php');

?>