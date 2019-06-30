<!-- Product In Page -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./media/css/all.min.css">
    <link rel="stylesheet" href="./media/css/bootstrap.min.css">
    <link rel="stylesheet" href="./media/slick/css/slick.css">
    <link rel="stylesheet" href="./media/slick/css/slick-theme.css">
    <link rel="stylesheet" href="./media/css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" href="./media/css/fontawesome.min.css">
    <link rel="stylesheet" href="./media/css/fonts.css">
    <link rel="stylesheet" href="./media/css/style.css">

    <title>Store</title>
</head>
<body>

<!--Header-->
<header>
    <div class="header">
        <div class="header_inner">
            <div class="header__left">
                <h1 class="text-uppercase">Left</h1>
            </div>
            <div class="header__center">
                <div class="glob__search">
                    <input type="text" name="glob__search" placeholder="Search">
                </div>
            </div>
            <div class="header__right">
                <ul class="no-select">
                    <li class="login__reg">
                        <span id="toggle-log__reg" data-event="toggle-log__reg"><i class="fa fa-user-plus"></i></span>
                    </li>
                    <li class="basket">
                        <span id="toggle-card" data-event="toggle-card"><i class="fa fa-shopping-basket"></i></span>
                    </li>
                </ul>

                <!-- Login and Registration -->
                <div class="log_reg" data-event="toggle-log__reg">
                    <span class="top_icon"></span>
                    <div class="login_reg__inner">
                        <div class="reg">
                            <h3>Registration</h3>
                            <form id="regForm">
                                <div class="reg_firstname">
                                    <input placeholder="firstname" type="text" id="firstname" name="firstname">
                                </div>
                                <div class="reg_lastname">
                                    <input placeholder="lastname" type="text" id="lastname" name="lastname">
                                </div>
                                <div class="reg_email">
                                    <input placeholder="email" type="text" id="reg_email" name="reg_email">
                                </div>
                                <div class="reg_password">
                                    <input placeholder="password" type="text" id="reg_password" name="reg_password">
                                </div>
                                <div class="reg_submit">
                                    <input type="submit" name="reg___submit" id="reg___submit" value="Registration  ">
                                </div>
                            </form>
                        </div>
                        <div class="log">
                            <h3>Login</h3>
                            <form action="" id="logForm" autocomplete="off">
                                <div class="log_username">
                                    <input placeholder="username" type="text" id="username" name="username">
                                </div>
                                <div class="log_password">
                                    <span class="password_eye"><i class="fa fa-eye"></i></span>
                                    <input placeholder="password" type="password" id="password" name="password">
                                    <a class="forget___password" href="">forget password or username ?</a>
                                </div>
                                <div class="log_submit">
                                    <input type="submit" id="login___submit" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login and Registration -->

                <!-- Card -->
                <div class="card" data-event="toggle-card">
                    <div class="card_header">
                       <h2 class="">Your Card</h2>
                    </div>
                    <div class="card_body">
                        <!-- thead -->
                        <div class="card_body__thead">
                            <div class="thead_item">
                                <h5>Name</h5>
                            </div>
                            <div class="thead_item">
                                <h5>Image</h5>
                            </div>
                             <div class="thead_item">
                                <h5>Count</h5>
                            </div>
                             <div class="thead_item">
                                <h5>Price</h5>
                            </div>
                            <div class="thead_item">
                                <h5>Total Price</h5>
                            </div>
                        </div>
                        <!-- /thead -->
                        <!-- items -->
                        <div class="card_body__items">
                            <!-- first item -->
                            <div class="item_row">
                                <div class="item_row__column">
                                    <h6>LTE NANO-300</h6>
                                </div>
                                <div class="item_row__column">
                                    <img class="img-responsive" src="./media/img/images/adv_1.png">
                                </div>
                                <div class="item_row__column">
                                    <span class="decrement_count"><i class="fa fa-minus"></i></span>
                                        <h3>3</h3>
                                    <span class="increment_count"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="item_row__column">
                                    <h3>$120</h3>
                                </div>
                                <div class="item_row__column">
                                    <h3>$360</h3>
                                </div>
                            </div>
                            <!-- /first item -->
                            <!-- second item -->
                            <div class="item_row">
                                <div class="item_row__column">
                                    <h6>LTE NANO-300</h6>
                                </div>
                                <div class="item_row__column">
                                    <img class="img-responsive" src="./media/img/images/adv_2.png">
                                </div>
                                <div class="item_row__column">
                                    <span class="decrement_count"><i class="fa fa-minus"></i></span>
                                        <h3>7</h3>
                                    <span class="increment_count"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="item_row__column">
                                    <h3>$10</h3>
                                </div>
                                <div class="item_row__column">
                                    <h3>$30</h3>
                                </div>
                            </div>
                            <!-- /second item -->
                        </div>
                        <!-- /items -->
                    </div>
                </div>
                <!-- /Card -->

            </div>
        </div>
        <div class="header_bottom">
            <div class="header_bottom__inner">
                <span
                    class="text-uppercase text-center header__category_span no-select"
                    data-event="toggle-cat"
                    id = "oc-event"
                >Category <i class="fa fa-list-alt" aria-hidden="true"></i></span>
                <div class="header__category" data-event="toggle-cat" id = "oc-selector">
                    <ul class="text-capitalize header__category_inner">
                        <li>
                            <a href="">All Categories</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Man<i class="fa fa-plus open-list"></i></a>
                            <ul>
                                <li>
                                    <a href="">Parfumers</a>
                                </li>
                                <li>
                                    <a href="">Clothes</a>
                                </li>
                                <li>
                                    <a href="">Shoes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="">Woman <i class="fa fa-plus open-list"></i></a>
                            <ul>
                                <li>
                                    <a href="">Blogs</a>
                                </li>
                                <li>
                                    <a href="">Shoes</a>
                                </li>
                                <li>
                                    <a href="">Parfumers</a>
                                </li>
                                <li>
                                    <a href="">Cosmetics</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="">Children <i class="fa fa-plus open-list"></i></a>
                            <ul>
                                <li>
                                    <a href="">Toys</a>
                                </li>
                                <li>
                                    <a href="">Clothes</a>
                                </li>
                                <li>
                                    <a href="">Optics</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="">Unisex <i class="fa fa-plus open-list"></i></a>
                            <ul>
                                <li>
                                    <a href="">Cars</a>
                                </li>
                                <li>
                                    <a href="">Eatings</a>
                                </li>
                                <li>
                                    <a href="">Tickets</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header-->
<!--Main-->
<section>
    <div class="container-fluid category-in grid-fixed">
        <div class="grid-fixed-left">

            <!-- Filter Widget -->
            <div class="filter-widget item-helper no-select" id="fixed-box">
                <!-- by review -->
                <div class="review-filter">
                    <h4>Review</h4>
                    <ul class="review-list">
                        <!-- four -->
                        <li>
                            <span>
                                <a href="">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>& up</span>
                                </a>
                            </span>
                        </li>
                        <!-- four -->
                        <!-- three -->
                        <li>
                            <span>
                                <a href="">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>& up</span>
                                </a>
                            </span>
                        </li>
                        <!-- three -->
                        <!-- two -->
                        <li>
                            <span>
                                <a href="">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>& up</span>
                                </a>
                            </span>
                        </li>
                        <!-- two -->
                        <!-- one -->
                        <li>
                            <span>
                                <a href="">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>& up</span>
                                </a>
                            </span>
                        </li>
                        <!-- one -->
                    </ul>
                </div>
                <!-- /by review -->

                <!-- by brands -->
                <div class="brands-filter mt-15">
                    <h4>Featured Brands</h4>
                    <ul class="brands-list">
                        <!-- list-item -->
                        <li>
                            <label for="lcwaikiki">
                                <i class="fa fa-check"></i>
                            </label>
                            <a href="" data-label="lcwaikiki">
                                <input class="csm-check" type="checkbox" id="lcwaikiki" value="lcwaikiki" name="lcwaikiki">
                                LC Waikiki
                            </a>
                        </li>
                        <!-- /list-item -->
                        <!-- list-item -->
                        <li>
                            <label for="roland">
                                <i class="fa fa-check"></i>
                            </label>
                            <a href="" data-label="roland">
                                <input class="csm-check" checked="" type="checkbox" id="roland" value="roland" name="roland">
                                Roland
                            </a>
                        </li>
                        <!-- /list-item -->
                        <!-- list-item -->
                        <li>
                            <label for="nike">
                                <i class="fa fa-check"></i>
                            </label>
                            <a href="" data-label="nike">
                                <input class="csm-check" type="checkbox" id="nike" value="nike" name="nike">
                                Nike
                            </a>
                        </li>
                        <!-- /list-item -->
                        <!-- list-item -->
                        <li>
                            <label for="pullbear">
                                <i class="fa fa-check"></i>
                            </label>
                            <a href="" data-label="pullbear">
                                <input class="csm-check" type="checkbox" id="pullbear" value="pullbear" checked="" name="pullbear">
                                Pull && Bear
                            </a>
                        </li>
                        <!-- /list-item -->
                        <!-- list-item -->
                        <li>
                            <label for="polo">
                                <i class="fa fa-check"></i>
                            </label>
                            <a href="" data-label="polo">
                                <input class="csm-check" type="checkbox" id="polo" value="polo" name="polo">
                                Polo
                            </a>
                        </li>
                        <!-- /list-item -->
                        <a href="">See more</a>
                    </ul>
                </div>
                <!-- /by brands -->

                <!-- by price -->
                <div class="price-filter mt-15">
                    <h4>Price</h4>
                    <ul class="price-list">
                        <li><a href="">Under $25</a></li>
                        <li><a href="">25$ - 50$</a></li>
                        <li><a href="">50$ - 100$</a></li>                        
                    </ul>
                    <div class="price-inputs">
                        <input type="text" name="min" name="price_min" placeholder="Min">
                        <input type="text" name="max" name="price_max" placeholder="Max">
                        <input type="button" value="Go">
                    </div>
                </div>
                <!-- /by price -->

            </div>
            <!-- /Filter Widget -->

        </div>
        <div class="grid-fixed-right">
            <div class="main">
                <h1 class="text-uppercase section_title">Man Category</h1>

                <!-- Products -->
                <div class="products">
                    <div class="products_in row">
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">LTE Crauser S768</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_1.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Nano Technology M20</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_2.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Phone Closer A23</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_3.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Velo Speed M90</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_4.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Micro PM</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_5.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Watch Clock (ZonePro)</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_6.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">TV LG (Regular 1024*1024)</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_7.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">TV LG (Large 2680*2680)</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_8.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">LTE Crauser S768</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_1.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Nano Technology M20</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_2.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Phone Closer A23</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_3.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                        <!-- item -->
                        <div class="col-sm-3 product_in__item">
                            <div class="item-helper item-helper-hover-blue">
                                <div class="item_header">
                                    <h3><a href="">Velo Speed M90</a></h3>
                                </div>
                                <a href="">
                                    <img src="./media/img/images/new_4.jpg" class="img-responsive">               
                                </a>    
                            </div>
                        </div>
                        <!-- /item -->
                    </div>
                    <div class="pagination item-helper">
                        <div class="pagination_in">
                            <a href="" class="prev">Previous Page</a>
                            <div class="paginations_num">
                                <a href="">14</a>
                                <a href="">15</a>
                                <a href="">16</a>
                                <a href="">17</a>
                                <a href="">18</a>
                                <a href="">19</a>
                            </div>
                            <a href="" class="next">Pext Page</a>
                        </div>
                    </div>
                </div>
                <!-- /Products -->
 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="main">
                           <!-- Best Sales -->
                <div class="section_neytral"></div>
                <h1 class="text-uppercase section_title">Best Sales</h1>
                <div id="main_best__inner" class="row main_best__inner" style="margin-bottom: 90px">
                    <div class="slick_arrows">
                        <span class="left_arrow"><i class="fa fa-angle-left"></i></span>
                        <span class="right_arrow"><i class="fa fa-angle-right"></i></span>
                    </div>
                    <div id="main_best" class="main_best">
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_3.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_3.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_3.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_3.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_2.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_1.png" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/adv_3.png" alt="">
                            <a href="">More</a>
                        </div>
                    </div>
                </div>
                <!-- /Best Sales -->

                <div class="section_neytral"></div>

                <!-- New Products -->
                <h1 class="text-uppercase section_title">New</h1>
                <div id="main_new__inner" class="row main_best__inner" style="margin-bottom: 90px">
                    <span class="left_arrow"><i class="fa fa-angle-left"></i></span>
                    <span class="right_arrow"><i class="fa fa-angle-right"></i></span>
                    <div id="main_new" class="main_best">
                        <div class="main_best_item">
                            <img src="./media/img/images/new_1.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_2.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_3.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_4.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_5.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_6.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_7.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_8.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_9.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_10.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_4.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_4.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_8.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_1.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_5.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_9.jpg" alt="">
                            <a href="">More</a>
                        </div>
                        <div class="main_best_item">
                            <img src="./media/img/images/new_6.jpg" alt="">
                            <a href="">More</a>
                        </div>
                    </div>
                </div>
                <!-- /New Products-->

                <div class="section_neytral"></div>

            <!-- Purchased by your friends [pbf]-->
            <h1 class="text-uppercase section_title">Purchased by your friends </h1>
            <div class="pbf row" style="margin-bottom: 90px">
                <span class="friend-left"><i class="fa fa-angle-left"></i></span>
                <span class="friend-right"><i class="fa fa-angle-right"></i></span>
                <div class="pbf_inner">

                    <!--first friend-->
                    <div class="friend">
                        <div class="col-xs-3 col-sm-2 pbf_firend__profile">
                            <img src="media/img/images/user.svg" alt="">
                            <h4 class="text-capitalize"><a href="">Jack Taylor</a></h4>
                        </div>
                        <div class="col-xs-9 col-sm-10 pbf_firend__fav">
                            <h3 class="text-capitalize fav__header">Purchased by Jack Taylor</h3>
                            <div class="pbf_firend__fav___products">
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>First item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Second item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Third item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Fourth item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Five item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Six item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /first friend-->
                    <!-- second friend-->
                    <div class="friend">
                        <div class="col-xs-3 col-sm-2 pbf_firend__profile">
                            <img src="media/img/images/user.svg" alt="">
                            <h4 class="text-capitalize"><a href="">Kylie Bre</a></h4>
                        </div>
                        <div class="col-xs-9 col-sm-10 pbf_firend__fav">
                            <h3 class="text-capitalize fav__header">Purchased by Kylie Bre</h3>
                            <div class="pbf_firend__fav___products">
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>First item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Second item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Third item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Fourth item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Five item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_4.png" alt="">
                                    <h4>Six item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /second friend-->
                </div>
                <div class="slider_arrows">
                    <div class="slider_arrows_inner">
                        <span class="slide_left"><i class="fa fa-angle-left"></i></span>
                        <span class="slide_right"><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
            <!-- /Purchased by your friends-->

                <div class="section_neytral"></div>

                <!-- Brands && Partners -->
                <h1 class="text-uppercase section_title">Brands && Partners</h1>
                <div class="brandpart row">
                    <!--Brands-->
                    <div class="col-sm-6">
                        <h3>Brands</h3>
                        <div class="row brands">
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 brands_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Brands-->
                    <!--Partners-->
                    <div class="col-sm-6">
                        <h3>Partners</h3>
                        <div class="row partners">
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 partners_item">
                                <div class="item-helper">
                                    <a href="">
                                        <img class="img-responsive" src="media/img/images/brands_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Partners-->
                </div>
                <!-- /Brands && Partners-->

        </div>
    </div>
</section>
<!-- /Main-->

<!--Footer ...-->
<footer>
    <div class="footer container-fluid">
        <div class="row footer_inner">
            <button class="back-to-top">back to top</button>
            <div class="footer_inner__base">
                <div class="footer___component container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 footer__base_item">
                            <h4>Get to Know Us</h4>
                            <p><a href="">Careers</a></p>
                            <p><a href="">Blog</a></p>
                            <p><a href="">About Store</a></p>
                            <p><a href="">Investor Relations</a></p>
                            <p><a href="">Store Devices</a></p>
                            <p><a href="">Tour an Store Fulfillment Center</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer__base_item">
                            <h4>Make Money with Us</h4>
                            <p><a href="">Sell on Store</a></p>
                            <p><a href="">Sell Your Services on Store</a></p>
                            <p><a href="">Sell on Store Business</a></p>
                            <p><a href="">Sell Your Apps on Store</a></p>
                            <p><a href="">Become an Affiliate</a></p>
                            <p><a href="">Advertise Your Products</a></p>
                            <p><a href="">Self-Publish with Us</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer__base_item">
                            <h4>Store Payment Products</h4>
                            <p><a href="">Store Business Card</a></p>
                            <p><a href="">Shop with Points</a></p>
                            <p><a href="">Reload Your Balance</a></p>
                            <p><a href="">Store Currency Converter</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer__base_item">
                            <h4>Let Us Help You</h4>
                            <p><a href="">Your Account</a></p>
                            <p><a href="">Your Orders</a></p>
                            <p><a href="">Shipping Rates & Policies</a></p>
                            <p><a href="">Returns & Replacements</a></p>
                            <p><a href="">Manage Your Content and Devices</a></p>
                            <p><a href="">Store Assistant</a></p>
                            <p><a href="">Help</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer ...-->
<script src="./media/js/jquery-3.3.1.min.js"></script>
<script src="./media/js/bootstrap.min.js"></script>
<script src="./media/slick/js/slick.js"></script>
<script src="./media/js/jquery.mCustomScrollbar.min.js"></script>
<script src="./media/js/fontawesome.min.js"></script>
<script src="./media/js/jquery.sticky.js"></script>
<script src="./media/js/main.js"></script>
</body>
</html>