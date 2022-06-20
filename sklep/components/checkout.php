<?php 
$configs = include('config.php');

$sum = 0;

if(!$_SESSION['logged_in']) {
    echo '<script>window.location.href = "index.php?url=login";</script>';
    exit;
}

if(!isset($_COOKIE['cart'])) {
    echo '<script>window.location.href = "index.php?url=";</script>';
   exit;
}

$cart = json_decode($_COOKIE['cart'], true);

if(count($cart) == 0) {
    echo '<script>window.location.href = "index.php?url=";</script>';
   exit;
}

if (!array_product(array_map('is_numeric', $cart))) {
    exit;
}

$products = $configs->db_connection->query("SELECT * FROM `produkty` WHERE `produkt_id` in (". join(', ', array_unique($cart))  .");")->fetchAll();

if (!empty($_POST)) {
    $statement = $pdo->prepare("INSERT INTO `zamowienia` (`produkty`, `id_klienta`) VALUES (?, ?);");
    try
    {
        $statement->execute([$_COOKIE['cart'], $_SESSION['user_id']]);
        unset($_COOKIE['cart']); 
        setcookie('cart', null, -1, '/'); 
        echo "<script>window.location.href = 'index.php?url=success'; setCookie('cart', '[]', 7);</script>" ; 
        exit;
    }
    catch(Exception $e)
    {
        echo '<p class="alert">Nieudalo sie wstawić komentarza</p>';
        exit;
    }
}

?>

<div class="checkout">
            <div class="container">
                <div class="row">



            <div class="col-lg-12">
                <div class="cart_details">
                    <div class="checkout_title">Zapłata</div>
                    <div class="cart_total">
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Produkt</div>
                                <div class="cart_total_price ml-auto">Razem</div>
                            </li>

                            <?php
                            foreach($cart as $value) {
                                $key = array_search($value, array_column($products, 'produkt_id'));
                                $currentProduct = $products[$key];

                                $nazwa = $currentProduct['nazwa'];
                                $cena = $currentProduct['cena'];

                                $sum += $cena;

                                echo "<li class='d-flex flex-row align-items-center justify-content-start'>
                                <div class='cart_total_title'>$nazwa</div>
                                <div class='cart_total_price ml-auto'>$$cena</div>
                            </li>";
                            }
                            ?>
                            
                            <li class="d-flex flex-row align-items-start justify-content-start total_row">
                                <div class="cart_total_title">Całość</div>
                                <div class="cart_total_price ml-auto">$<?php echo $sum; ?></div>
                            </li>
                        </ul>
                    </div>
                    <div class="payment_options">
                        <div>
                            <input type="radio" id="radio_payment_1" name="regular_radio" class="regular_radio" checked>
                            <label for="radio_payment_1">Zapłać przy odbiorze</label>
                        </div>
                        <form action="" method="post">
                           <button type="submit" name="submit" class="cart_total_button">Umieść zamówienie</button>
                        </form>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
