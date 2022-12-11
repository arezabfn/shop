<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="../../shop/index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"> Hafez Shop </i>
            </h3>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMerkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="../../shop/php/cart.php" class="nav-item nav-link  active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i>cart
                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                $count = count($_SESSION['cart']);
                                echo "<span id='cart_count' class='text-warning bg-light'>$count</span>";
                            }
                            else{
                                echo "<span id='cart_count' class='text-warning bg-light'>0</span>";

                            }
                        ?>
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</header>