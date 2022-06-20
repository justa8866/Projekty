<header class="header">
            <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                <div class="logo"><a href="index.php?url=">Justin</a></div>
                <nav class="main_nav">
                    <ul>
                    <li><a href="index.php?url=">Strona główna</a></li>
                    <li><a href="index.php?url=checkout">Koszyk</a></li>
                    <li><a href="index.php?url=contact">Kontakt</a></li>
                    </ul>
                </nav>
                <div class="header_content ml-auto">
                    <div class="search header_search">
                        <form action="#">
                            <input type="search" class="search_input" required>
                            <button type="submit" id="search_button" class="search_button"><img
                                    src="images/magnifying-glass.svg" alt=""></button>
                        </form>
                    </div>
                    <div class="shopping">

                        <a href="index.php?url=checkout">
                            <div class="cart">
                                <img src="images/shopping-bag.svg" alt="">
                                <div class="cart_num_container">
                                    <div class="cart_num_inner">
                                        <div class="cart_num">1</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php

                        if($_SESSION['logged_in']) {
                            echo '<a href="index.php?url=logout">
                                <div class="fa fa-sign-out">
                                    <img src="" alt="">
                        
                                </div>
                            </a>';
                        } else {
                            echo '<a href="index.php?url=login">
                                <div class="avatar">
                                    <img src="images/avatar.svg" alt="">
                                </div>
                            </a>';
                        }

                        ?>
                    </div>
                </div>
                <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>