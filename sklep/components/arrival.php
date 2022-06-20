<?php 
$configs = include('config.php');

$products_data = $configs->db_connection->query("SELECT * FROM produkty")->fetchAll();
?>

<div class="arrivals">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">Tylko najlepszy</div>
                    <div class="section_title">Nowe kolekcje</div>
                </div>
            </div>
        </div>
        <div class="row products_container">
            <?php
            foreach ($products_data as $row) {
                $productId = $row['produkt_id'];
                $nazwa = $row['nazwa'];
                $cena = $row['cena'];
                $obrazek = $row['obrazek'];

                echo "<div class='col-lg-4 product_col'>
                    <div class='product'>
                        <div class='product_image'>
                            <img src='$obrazek' alt=''>
                        </div>
                       
                        <div class='product_content clearfix'>
                            <div class='product_info'>
                                <div class='product_name'><a href='?url=product&id=$productId'>$nazwa</a></div>
                                <div class='product_price'>$$cena</div>
                            </div>
                            <div class='product_options'>
                                <div class='product_buy product_option' onclick='addToCart($productId);'><img src='images/shopping-bag-white.svg'
                                        alt=''></div>
                                <div class='product_fav product_option' onclick='addToCart($productId);'>+</div>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
</div>

<script>
    function addToCart(productId) {
        var cart = JSON.parse(getCookie("cart"));
        
        if(!cart) {
            cart = [productId];
        }

        cart.push(productId);

        setCookie("cart", JSON.stringify(cart), 7);
    }
</script>