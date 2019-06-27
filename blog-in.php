<!-- Home Page -->

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
    <div class="container">
        <div class="main">
            <h1 class="text-uppercase section_title">Blog In Page</h1>
            <!-- Blog -->
            <div class="blog"> 
                <div class="row blog_in">
                    <div class="col-sm-5 blog_in__image">
                        <div class="item-helper p-15">
                            <img class="img-responsive" src="media/img/blogs/pic3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 blog_in__content">
                        <div class="item-helper">
                            <h2>Lorem Ipsum</h2>
                            <p>
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                            </p>
                            <p>
                                Zero night closure quadro rell pe technology promise closures.
                                Collapse or foreign prototype running quadro lorem ipsum, in 2000
                                th 90 perma link see from Nano.
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                                Zero night closure quadro rell pe technology promise closures.
                                Collapse or foreign prototype running quadro lorem ipsum, in 2000
                                th 90 perma link see from Nano.
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                            </p>
                            <h2>Main concept</h2>
                               <p>
                                Zero night closure quadro rell pe technology promise closures.
                                Collapse or foreign prototype running quadro lorem ipsum, in 2000
                                th 90 perma link see from Nano.
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                                Zero night closure quadro rell pe technology promise closures.
                                Collapse or foreign prototype running quadro lorem ipsum, in 2000
                                th 90 perma link see from Nano.
                                Lorem ipsum dolor sit amet, amet is queue eval nano technology.
                                Quadro perma lorem tue fixed running time.In 1998 th 20:20 closure
                                items rolling in the quadro.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Blog Comments -->
                <div class="comment_widget row">
                    <div class="col-sm-5 comment_writing">
                        <div class="item-helper">
                            <div class="row comment_list pb-15">
                                <!-- First Comment -->
                                <div class="comment_list__item">
                                    <div class="col-sm-3 user_image">
                                        <div class="item-helper">
                                            <img src="./media/img/users/pic1.jpg" class="img-responsive">
                                        </div>  
                                    </div>
                                    <div class="col-sm-9 user_comment">
                                        <div class="consist-icon item-helper"></div>
                                        <div class="item-helper">
                                            <div class="user_comment__content">
                                                <p>
                                                    Very helpfull blogs ! Thank u very much !
                                                    Are you other blogs look us? Please write me ...
                                                </p>
                                            </div>
                                            <!-- Comment of Comment -->
                                            <div class="comment_of__comment">
                                                <div class="comment_list row">
                                                    <!-- first comment to comment -->
                                                    <div class="comment_list__item">
                                                        <div class="col-sm-3 user_image">
                                                            <div class="item-helper">
                                                                <img src="./media/img/users/pic2.jpg" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 user_comment">
                                                            <div class="consist-icon item-helper"></div>
                                                            <div class="item-helper">
                                                                <p>
                                                                    Dont mention it, are your sure like this blog?
                                                                    Then like and share this blog, please !
                                                                     Dont mention it, are your sure like this blog?
                                                                    Then like and share this blog, please !
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /first comment to comment -->

                                                    <!-- second comment to comment -->
                                                    <div class="comment_list__item">
                                                        <div class="col-sm-3 user_image">
                                                            <div class="item-helper">
                                                                <img src="./media/img/users/pic1.jpg" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 user_comment">
                                                            <div class="consist-icon item-helper"></div>
                                                            <div class="item-helper">
                                                                <p>
                                                                    Yes of course ! I yet share this blog, 
                                                                    Bye Bye :)
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /second comment to comment -->
                                                </div>

                                                <!-- comment form -->
                                                <div class="comment_form row">
                                                    <div class="comment_form__inner">
                                                        <form action="" method="">
                                                            <div class="form-item">
                                                                <textarea class="txt-area" placeholder="Write comment ..."></textarea>
                                                            </div>
                                                            <input class="submit_btn btn btn-primary btn-sm btn-block" type="submit" name="" value="Send">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- comment form -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  /First Comment -->
                                <!-- Second Comment -->
                                <div class="comment_list__item">
                                    <div class="col-sm-3 user_image">
                                        <div class="item-helper">
                                            <img src="./media/img/users/pic3.jpg" class="img-responsive">
                                        </div>  
                                    </div>
                                    <div class="col-sm-9 user_comment">
                                        <div class="consist-icon item-helper"></div>
                                        <div class="item-helper">
                                            <div class="user_comment__content">
                                                <p>
                                                    This is the beautiful post.
                                                    Than you this good work ! Good luck .. :)
                                                </p>
                                            </div>
                                            <!-- Comment of Comment -->
                                            <div class="comment_of__comment">
                                                <div class="comment_list row">
                                                    <!-- first comment to comment -->
                                                    <div class="comment_list__item">
                                                        <div class="col-sm-3 user_image">
                                                            <div class="item-helper">
                                                                <img src="./media/img/users/pic4.jpg" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 user_comment">
                                                            <div class="consist-icon item-helper"></div>
                                                            <div class="item-helper">
                                                                <p>
                                                                    You also ! Nice to meet you.
                                                                    We must be share as this blog, because this post 
                                                                    very helpfull !
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /first comment to comment -->

                                                    <!-- second comment to comment -->
                                                    <div class="comment_list__item">
                                                        <div class="col-sm-3 user_image">
                                                            <div class="item-helper">
                                                                <img src="./media/img/users/pic5.jpg" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 user_comment">
                                                            <div class="consist-icon item-helper"></div>
                                                            <div class="item-helper">
                                                                <p>
                                                                    Okay, i shared this post.
                                                                    Than u again for this !
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /second comment to comment -->
                                                </div>
                                                <!-- comment form -->
                                                <div class="comment_form row">
                                                    <div class="comment_form__inner">
                                                        <form action="" method="">
                                                            <div class="form-item">
                                                                <textarea class="txt-area" placeholder="Write comment ..."></textarea>
                                                            </div>
                                                            <input class="submit_btn btn btn-primary btn-sm btn-block" type="submit" name="" value="Send">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- comment form -->
                                            </div>
                                            <!-- /Comment of Comment -->
                                        </div>
                                    </div>
                                </div>
                                <!--  /Second Comment -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 comment_form">
                        
                    </div>
                </div>
                <!-- /Blog Comments -->
            </div>
            <!-- /Blog -->
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


<script src="./media/js/jquery-2.1.0.min.js"></script>
<script src="./media/js/bootstrap.min.js"></script>
<script src="./media/slick/js/slick.js"></script>
<script src="./media/js/jquery.mCustomScrollbar.min.js"></script>
<script src="./media/js/fontawesome.min.js"></script>
<script src="./media/js/main.js"></script>
</body>
</html>