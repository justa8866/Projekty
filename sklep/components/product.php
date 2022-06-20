<?php 
$configs = include('config.php');
$stmt = $configs->db_connection->prepare("SELECT * FROM produkty where produkt_id = ? LIMIT 1"); 
$stmt->execute([$_GET['id']]); 
$product = $stmt->fetch();

$productId = $product['produkt_id'];
$nazwa = $product['nazwa'];
$cena = $product['cena'];
$obrazek = $product['obrazek'];
$opis = $product['opis'];
$ilosc = $product['ilosc'];
echo "
<div class='product'>
            <div class='container'>
            <br><br><br><br>  <br><br><br><br>
                <div class='row product_row'>
                
                    <div class='col-lg-7'>
                        <div class='product_image'>
                            <div class='product_image_large'><img src='$obrazek' alt=''></div>
                            <div
                                class='product_image_thumbnails d-flex flex-row align-items-start justify-content-start'>
                                <div class='product_image_thumbnail'
                                    style='background-image:url('images/product_image_1.jpg')'
                                    data-image='images/product_image_1.jpg'></div>
                                <div class='product_image_thumbnail'
                                    style='background-image:url('images/product_image_2.jpg')'
                                    data-image='images/product_image_2.jpg'></div>
                                <div class='product_image_thumbnail'
                                    style='background-image:url('images/product_image_4.jpg')'
                                    data-image='images/product_image_4.jpg'></div>
                            </div>
                        </div>
                    </div>

                    <div class='col-lg-5'>
                        <div class='product_content'>
                            <div class='product_name'>$nazwa</div>
                            <div class='product_price'>$cena</div>
                  

                            <div class='in_stock_container'>
                                <div class='in_stock in_stock_true'></div>
                                <span>Gwiazdki</span>
                            </div>
                            <div class='product_text'>
                                <p>$opis</p>
                            </div>

                            <div class='product_quantity_container'>
                                <span>Ilość</span>
                                <div class='product_quantity clearfix'>
                                    <input id='quantity_input' type='number' min=1 max=$ilosc value='1'>
                               <br> 
                                </div>
                            </div>

                            <div class='product_size_container'>
                            <br> 
                                <span>Rozmiar</span>
                                <div class='product_size'>
                                    <ul class='d-flex flex-row align-items-start justify-content-start'>
                                        <li>
                                            <input type='radio' id='radio_1' name='product_radio'
                                                class='regular_radio radio_1'>
                                            <label for='radio_1'>XS</label>
                                        </li>
                                        <li>
                                            <input type='radio' id='radio_2' name='product_radio'
                                                class='regular_radio radio_2' checked>
                                            <label for='radio_2'>S</label>
                                        </li>
                                        <li>
                                            <input type='radio' id='radio_3' name='product_radio'
                                                class='regular_radio radio_3'>
                                            <label for='radio_3'>M</label>
                                        </li>
                                        <li>
                                            <input type='radio' id='radio_4' name='product_radio'
                                                class='regular_radio radio_4'>
                                            <label for='radio_4'>L</label>
                                        </li>
                                        <li>
                                            <input type='radio' id='radio_5' name='product_radio'
                                                class='regular_radio radio_5'>
                                            <label for='radio_5'>XL</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class='button cart_button'><a href='product.html#'>Dodaj do koszyka</a></div>
                            </div>
                        </div>
                    </div>
                </div>
             </div> 
         </div>

"; ?>