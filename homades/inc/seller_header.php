<header class="main-header-area mb-5">
    <?php
        $loginstatustext = 'login';
        if(isset($_SESSION['sellerid'])){
            $loginstatustext = 'logout';
        }
    ?>
        <!-- Main Header Area Start -->
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a class="h3" href="seller_homepage.php">
                                <span class="text-dark">Ho</span><span style="color: #e7246d;">Mades</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="seller_homepage.php">
                                        <span class="menu-text">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="products_info.php">
                                        <span class="menu-text">Products</span>
                                    </a>
                                </li>
                                <li>
                                    <?php
                                        if($loginstatustext=='logout')
                                        {
                                    ?>
                                    <a href="logout.php">
                                        <span class="menu-text"><?php echo $loginstatustext;?></span>
                                    </a>
                                    <?php
                                    }//end of if
                                    ?>
                                    <?php
                                        if($loginstatustext=='login'){
                                    ?>
                                    <a href="login.php">
                                        <span class="menu-text"><?php echo $loginstatustext;?></span>
                                    </a>
                                    <?php
                                    }//end of if
                                    ?>
                                </li>
                                <li>
                                    <a>
                                        <span class="menu-text">Pages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="signup.php">Signup</a></li>
                                        <li><a href="change_password_seller.php">Change Password</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-us-seller.php">
                                        <span class="menu-text">About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us-seller.php">
                                        <span class="menu-text">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    <a href="seller_cart.php" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <!--<span class="cart-item_count"></span>-->
                                    </a>
                                    <!--<div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/1.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Odio tortor consequat</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Integer eget augue</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="cart.html"><img src="assets/images/cart/3.jpg" alt=""></a>
                                            </div>
                                            <div class="cart-text">
                                                <h5 class="title"><a href="cart.html">Eleifend quam</a></h5>
                                                <div class="cart-text-btn">
                                                    <div class="cart-qty">
                                                        <span>1×</span>
                                                        <span class="cart-price">$98.00</span>
                                                    </div>
                                                    <button type="button"><i class="ion-trash-b"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-price-total d-flex justify-content-between">
                                            <h5>Total :</h5>
                                            <h5>$166.00</h5>
                                        </div>
                                        <div class="cart-links d-flex justify-content-between">
                                            <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.html">View cart</a>
                                            <a class="btn flosun-button secondary-btn rounded-0" href="checkout.html">Checkout</a>
                                        </div>
                                    </div>-->
                                </li>
                                <li class="sidemenu-wrap">
                                    <a href="#"><i class="fa fa-search"></i> </a>
                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                                        <li>
                                            <form action="#">
                                                <input type="search" name="search" id="search" placeholder="Search" >
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-btn d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="search" placeholder="Search product...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="seller_homepage.php">Home</a>
                                </li>
                                <li class="menu-item-has-children"><a href="products_info.php">Products</a>
                                </li>
                                <li class="menu-item-has-children "><a href="login.php">Login</a>
                                </li>
                                <li class="menu-item-has-children "><a>Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="signup.php">Signup</a></li>
                                        <li><a href="change_password_seller.php">Change Password</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us-seller.php">About-us</a></li>
                                <li><a href="contact-us-seller.php">Contact-us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>