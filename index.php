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
                <ul>
                    <li class="login__reg">
                        <span><i class="fa fa-user-plus"></i></span>
                    </li>
                    <li class="basket">
                        <span><i class="fa fa-shopping-basket"></i></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header_bottom">
            <div class="header_bottom__inner">
                <span
                        class="text-uppercase text-center header__category_span no-select"
                        data-event="toggle-cat"
                >Category <i class="fa fa-list-alt" aria-hidden="true"></i></span>
                <div class="header__category" data-event="toggle-cat">
                    <ul class="text-capitalize header__category_inner">
                        <li>
                            <a href="">All Categories</a>
                        </li>
                        <li>
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
                        <li>
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
                        <li>
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
                        <li>
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
    <div class="container-fluid">
        <div class="main">
            <!-- Main Banner-->
            <h1 class="text-uppercase section_title">Main Page</h1>
            <div class="row main_child">
                <div class="col-xs-12 main_banner">
                    <div class="main__banner_slider">
                        <div class="row slider_item">
                            <div class="col-xs-4">
                                <a href="">
                                    <img src="media/img/images/new_3.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <h3>First item</h3>
                                <p>
                                    Lorem ipsum dolor sit amet. Ipsum meta ano delegate mention for website.
                                    Accept to reload animate through seo make propagation.Allow access true prepare,
                                    Role access control system.
                                </p>
                                <p class="price">$499</p>
                                <div class="btn_group">
                                    <a href="">more</a>
                                    <span>add to cart</span>
                                </div>
                            </div>
                        </div>
                        <div class="row slider_item">
                            <div class="col-xs-4">
                                <a href="">
                                    <img src="media/img/images/new_1.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <h3>Second item</h3>
                                <p>
                                    Lorem ipsum dolor sit amet. Ipsum meta ano delegate mention for website.
                                    Accept to reload animate through seo make propagation.Allow access true prepare,
                                    Role access control system.
                                </p>
                                <p class="price">$210</p>
                                <div class="btn_group">
                                    <a href="">more</a>
                                    <span>add to cart</span>
                                </div>
                            </div>
                        </div>
                        <div class="row slider_item">
                            <div class="col-xs-4">
                                <a href="">
                                    <img src="media/img/images/new_7.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <h3>Third item</h3>
                                <p>
                                    Lorem ipsum dolor sit amet. Ipsum meta ano delegate mention for website.
                                    Accept to reload animate through seo make propagation.Allow access true prepare,
                                    Role access control system.
                                </p>
                                <p class="price">$600</p>
                                <div class="btn_group">
                                    <a href="">more</a>
                                    <span>add to cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider_arrows">
                        <div class="slider_arrows_inner">
                            <span class="slide_left"><i class="fa fa-angle-left"></i></span>
                            <span class="slide_right"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Banner -->

            <div class="section_neytral"></div>

            <!-- Best Sales -->
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

            <!-- Offers -->
            <h1 class="text-uppercase section_title">Our Offers</h1>
            <div id="main_offers_inner" class="row main_best__inner" style="margin-bottom: 90px">
                <div class="slick_arrows">
                    <span class="left_arrow"><i class="fa fa-angle-left"></i></span>
                    <span class="right_arrow"><i class="fa fa-angle-right"></i></span>
                </div>
                <div id="main_offers" class="main_best">
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
            <!-- /Offers-->

            <div class="section_neytral"></div>

            <!-- Compaign-->
            <h1 class="text-uppercase section_title">Compaign</h1>
            <div class="compaign_area row">
                <div class="compaign">
                    <!--first compaign item-->
                    <div class="compaign_inner">
                        <div class="col-xs-4 compaign_inner__section">
                            <div class="compaign_inner__section___item">
                                <img src="./media/img/images/best_6.png" alt="">
                                <h4 class="text-uppercase text-center">$1200</h4>
                            </div>
                            <h3 class="text-uppercase text-center">Iphone X</h3>
                        </div>
                        <div class="col-xs-1 compaign_inner__section">
                            <h1 class="text-uppercase text-center plus">+</h1>
                        </div>
                        <div class="col-xs-4 compaign_inner__section">
                            <div class="compaign_inner__section___item">
                                <img src="./media/img/images/best_3.png" alt="">
                                <h4 class="text-uppercase text-center">$30</h4>
                            </div>
                            <h3 class="text-uppercase text-center">Lte-Mono</h3>
                        </div>
                        <div class="col-xs-1 compaign_inner__section">
                            <h1 class="text-uppercase text-center equal">=</h1>
                        </div>
                        <div class="col-xs-2 compaign_inner__section">
                            <div class="btn_group">
                                <a href="">More</a>
                                <span href="">Buy</span>
                            </div>
                            <h1 class="text-uppercase text-center old_price">$1230</h1>
                            <h1 class="text-uppercase text-center new_price">$1115</h1>
                        </div>
                    </div>
                    <!-- /first compaign item-->
                    <!--second compaign item-->
                    <div class="compaign_inner">
                        <div class="col-xs-2 compaign_inner__section">
                            <div class="compaign_inner__section___item">
                                <img src="./media/img/images/best_2.png" alt="">
                                <h4 class="text-uppercase text-center">$1000</h4>
                            </div>
                            <h3 class="text-uppercase text-center">Equalizer RT</h3>
                        </div>
                        <div class="col-xs-2 compaign_inner__section">
                            <h1 class="text-uppercase text-center plus">+</h1>
                        </div>
                        <div class="col-xs-2 compaign_inner__section">
                            <div class="compaign_inner__section___item">
                                <img src="./media/img/images/best_5.png" alt="">
                                <h4 class="text-uppercase text-center">$25</h4>
                            </div>
                            <h3 class="text-uppercase text-center">Branch</h3>
                        </div>
                        <div class="col-xs-2 compaign_inner__section">
                            <h1 class="text-uppercase text-center equal">=</h1>
                        </div>
                        <div class="col-xs-2 compaign_inner__section">
                            <div class="btn_group">
                                <a href="">More</a>
                                <span href="">Buy</span>
                            </div>
                            <h1 class="text-uppercase text-center old_price">$1010</h1>
                            <h1 class="text-uppercase text-center new_price">$1025</h1>
                        </div>
                    </div>
                    <!-- /second compaign item-->
                </div>
                <div class="slider_arrows" id="compaign_arrows">
                    <div class="slider_arrows_inner">
                        <span class="slide_left"><i class="fa fa-angle-left"></i></span>
                        <span class="slide_right"><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
            <!-- /Compaign-->
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
                                    <img src="media/img/images/featured_8.png" alt="">
                                    <h4>First item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_1.png" alt="">
                                    <h4>Second item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_3.png" alt="">
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
                                    <img src="media/img/images/featured_5.png" alt="">
                                    <h4>Five item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_6.png" alt="">
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
                                    <img src="media/img/images/featured_2.png" alt="">
                                    <h4>First item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_3.png" alt="">
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
                                    <img src="media/img/images/featured_1.png" alt="">
                                    <h4>Fourth item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_3.png" alt="">
                                    <h4>Five item</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <a href="">more</a>
                                </div>
                                <div class="item">
                                    <img src="media/img/images/featured_8.png" alt="">
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

            <!--Blogs-->
            <h1 class="text-uppercase section_title">Blogs </h1>
            <div class="blogs row" style="margin-bottom: 90px">
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic1.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Prototype</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">17</i>
                                    <i class="fa fa-heart">15</i>
                                    <i class="fa fa-comment">6</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic2.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Socket Io</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">24</i>
                                    <i class="fa fa-heart">9</i>
                                    <i class="fa fa-comment">2</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic3.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Read Me</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">19</i>
                                    <i class="fa fa-heart">10</i>
                                    <i class="fa fa-comment">8</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic4.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Lorem</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">32</i>
                                    <i class="fa fa-heart">19</i>
                                    <i class="fa fa-comment">20</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic5.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Redux</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">59</i>
                                    <i class="fa fa-heart">23</i>
                                    <i class="fa fa-comment">10</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic6.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Flux</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">30</i>
                                    <i class="fa fa-heart">21</i>
                                    <i class="fa fa-comment">17</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic7.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Context</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">11</i>
                                    <i class="fa fa-heart">1</i>
                                    <i class="fa fa-comment">2</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 blogs_item">
                    <div class="item-helper">
                        <a href="">
                            <img class="img-responsive" src="media/img/blogs/pic8.jpg" alt="">
                        </a>
                        <div class="blogs_item__foot">
                            <div class="blogs_item__foot___content">
                                <h3>Response</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="blogs_item_foot__icons">
                                <span class="point_view">
                                    <i class="fa fa-eye">290</i>
                                    <i class="fa fa-heart">157</i>
                                    <i class="fa fa-comment">188</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Blogs-->

            <div class="section_neytral"></div>

            <!-- Brands && Partners -->
            <h1 class="text-uppercase section_title">Brands && Partners</h1>
            <div class="brandpart row" style="margin-bottom: 90px">
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
                <div class="footer___component">
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
</footer>
<!-- /Footer ...-->


<script src="./media/js/jquery-2.1.0.min.js"></script>
<script src="./media/js/bootstrap.min.js"></script>
<script src="./media/slick/js/slick.js"></script>
<script src="./media/js/jquery.mCustomScrollbar.min.js"></script>
<script src="./media/js/fontawesome.min.js"></script>
<script src="./media/js/main.js"></script>
</body>
</html>