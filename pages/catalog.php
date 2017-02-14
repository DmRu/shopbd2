<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pasific Multipage Template |  About Us One</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="../assets/img/favicon.png">
        <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="../assets/css/core/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="../assets/css/main/main.css">
        <link rel="stylesheet" href="../assets/css/main/setting.css">
        <link rel="stylesheet" href="../assets/css/main/hover.css">
        
        <link rel="stylesheet" href="../assets/css/range-slider/ion.rangeSlider.css">
        <link rel="stylesheet" href="../assets/css/range-slider/ion.rangeSlider.skinFlat.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="../assets/css/magnific/magic.min.css">
        <link rel="stylesheet" href="../assets/css/magnific/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="../assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="assets/css/color/blue.css">
        <link rel="stylesheet" href="assets/css/color/brown.css">
        <link rel="stylesheet" href="assets/css/color/cyan.css">
        <link rel="stylesheet" href="assets/css/color/dark.css">
        <link rel="stylesheet" href="assets/css/color/green.css">
        <link rel="stylesheet" href="assets/css/color/orange.css">
        <link rel="stylesheet" href="assets/css/color/purple.css">
        <link rel="stylesheet" href="assets/css/color/pink.css">
        <link rel="stylesheet" href="assets/css/color/red.css">
        <link rel="stylesheet" href="assets/css/color/yellow.css">-->
        <link rel="stylesheet" href="../assets/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="../assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="../assets/css/icon/et-line-font.css">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" style="display: none;">
			<div class="loader-item">
                <img src="../assets/img/other/puff.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <?php include '../section/header_white.php'; ?>
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar" style="margin-top: 80px; background: url(../images/bgfoto.jpg) -7px -733px;">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase"><?php echo $name;?><span> </span><?php echo $class;?><small class="color-light alpha7">Рекомендуем</small></h3>
                    </div>
                    <div class="col-md-6 pt35">
                        <ul class="breadcrumb text-right">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Каталог</a></li>
                            <li><?php echo $name;?><span> </span><?php echo $class;?></li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Shop Area
        ===================================== -->
        <section id="shop" class="bg-light pt25">
            <div class="container">
                
                <div class="row">
                    
                    <div id="sidebar" class="col-md-3 mt25 animated" data-animation="fadeInLeft" data-animation-delay="250">           
                        
                        <!-- Search
                        =====================================
                        <div class="mt75 pr25 pl25 clearfix">
                            <form>
                              <div class="form-group">
                                <label class="sr-only">Email address</label>
                                <input type="text" class="form-control" id="searchshop" placeholder="Search">
                              </div>
                              <button type="submit" class="button button-sm button-block button-dark mt-10">Search</button>
                            </form>
                        </div>
                        -->

                        <!-- Sidebar Cart
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Корзина
                                <span class="heading-divider mt10"></span>
                            </h5>
                            <div class="shop-sidebar-cart">
                                <div class="sidebar-cart-container">
                                    <img src="../assets/img/shop/img-shop-thumb-1.png" alt="" class="img-responsive pull-left">
                                    <h6><a href="#">Man Casual Jacket</a></h6>
                                    <span class="sidebar-cart-price text-gray">1 x $90.00</span>
                                    <span class="sidebar-cart-remove"><a href="#"><i class="fa fa-times-circle fa-fw"></i>Remove</a></span>
                                </div>
                                <div class="sidebar-cart-container">
                                    <img src="../assets/img/shop/img-shop-thumb-2.png" alt="" class="img-responsive pull-left">
                                    <h6><a href="#">Man Casual Jacket</a></h6>
                                    <span class="sidebar-cart-price text-gray">1 x $75.00</span>
                                    <span class="sidebar-cart-remove"><a href="#"><i class="fa fa-times-circle fa-fw"></i>Remove</a></span>
                                </div>
                                <div class="sidebar-cart-container">
                                    <img src="../assets/img/shop/img-shop-thumb-3.png" alt="" class="img-responsive pull-left">
                                    <h6><a href="#">Man Casual Jacket</a></h6>
                                    <span class="sidebar-cart-price text-gray">$59.00</span>
                                    <span class="sidebar-cart-remove"><a href="#"><i class="fa fa-times-circle fa-fw"></i>Remove</a></span>
                                </div>
                            </div>
                            <h5><span class="text-gray">Общая стоимость:</span> <span class="text-pasific">$224.00</span></h5>
                            <a class="button button-block button-pasific button-sm hover-ripple-out mt-30">Оформить<i class="fa fa-shopping-basket fa-fw fa-1x"></i></a>
                        </div>
                        
                        
                        <!-- Categories
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Категории
                                <span class="heading-divider mt10"></span>
                            </h5>                            
                            <ul class="shop-sidebar pl25">
                                <li class="active"><a href="#">Fashion<span class="badge badge-pasific pull-right">14</span></a></li>
                                <li><a href="#">Sport<span class="badge badge-pasific pull-right">125</span></a></li>
                                <li><a href="#">Electronic<span class="badge badge-pasific pull-right">350</span></a></li>
                                <li><a href="#">Jewellery<span class="badge badge-pasific pull-right">520</span></a></li>
                                <li><a href="#">Food<span class="badge badge-pasific pull-right">1,290</span></a></li>
                                <li><a href="#">Furniture<span class="badge badge-pasific pull-right">7</span></a></li>
                            </ul>
                           
                        </div>
                        
                        
                        <!-- Filter by Price
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Фильтр по цене
                                <span class="heading-divider mt10"></span>
                            </h5>             
                            <input type="text" id="shop-range-price" name="shop-range-price" value="" />
                            <button type="submit" class="button button-block button-sm button-pasific mt10 hover-ripple-out">Подобрать</button>
                        </div>
                        
                        
                        <!-- Tags
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Popular Tags
                                <span class="heading-divider mt10"></span>
                            </h5>
                            <ul class="tag">
                                <li><a href="#">Розы</a></li>
                                <li><a href="#">Коробки</a></li>
                                <li><a href="#">Тюльпаны</a></li>
                                <li><a href="#">Сборные букеты</a></li>
                                <li><a href="#">Акции</a></li>
                                <li><a href="#">Macbook</a></li>
                                <li><a href="#">Apple</a></li>
                            </ul>
                           
                        </div>
                        
                        
                        <!-- Shop by Color
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Shop By Color
                                <span class="heading-divider mt10"></span>
                            </h5>                            
                            <a href="#" class="shop-by-color bg-orange" data-toggle="tooltip" title="Orange" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-blue" data-toggle="tooltip" title="Blue" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-cyan" data-toggle="tooltip" title="Cyan" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-purple" data-toggle="tooltip" title="Purple" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-red" data-toggle="tooltip" title="Red" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-yellow" data-toggle="tooltip" title="Yellow" data-placement="bottom">&nbsp;</a>
                            <a href="#" class="shop-by-color bg-dark" data-toggle="tooltip" title="Black" data-placement="bottom">&nbsp;</a>
                        </div>
                        
                        
                        <!-- Shop by Brand
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Shop By Brand
                                <span class="heading-divider mt10"></span>
                            </h5>                            
                            <div class="shop-sidebar-checkbox">
                                <input id="check1" type="checkbox" name="check" value="check1">
                                <label for="check1">Victoria's Secret</label>
                                <br>
                                <input id="check2" type="checkbox" name="check" value="check2">
                                <label for="check2">Dolce &amp; Gabbana</label>
                                <br>
                                <input id="check3" type="checkbox" name="check" value="check3">
                                <label for="check3">Tiffany &amp; Co</label>
                                <br>
                                <input id="check4" type="checkbox" name="check" value="check4">
                                <label for="check4">Gucci</label>
                                <br>
                                <input id="check5" type="checkbox" name="check" value="check5">
                                <label for="check5">Armani</label>
                                <br>
                                <input id="check6" type="checkbox" name="check" value="check6">
                                <label for="check6">Chanel</label>
                                <br>
                                <input id="check7" type="checkbox" name="check" value="check7">
                                <label for="check7">Louis Vuitton</label>
                            </div>
                        </div>
                        
                        
                        <!-- Popular Products
                        ===================================== -->
                        <div class="pr25 pl25 clearfix">
                            <h5 class="mt25">
                                Popular Products
                                <span class="heading-divider mt10"></span>
                            </h5>
                            <div class="shop-sidebar-cart">
                                <div class="sidebar-cart-container">
                                    <img src="../assets/img/shop/img-shop-thumb-1.png" alt="" class="img-responsive pull-left">
                                    <h6>Букет роз</h6>
                                    <span class="sidebar-cart-price text-gray">$4950</span>
                                    <span class="sidebar-cart-remove">
                                        <a href="#">
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star-half-o text-orange"></i>
                                        </a>
                                    </span>
                                </div>
                                
                                <div class="sidebar-cart-container">
                                    <img src="../assets/img/shop/img-shop-thumb-2.png" alt="" class="img-responsive pull-left">
                                    <h6>Man Casual Jacket</h6>
                                    <span class="sidebar-cart-price text-gray">$90.00</span>
                                    <span class="sidebar-cart-remove">
                                        <a href="#">
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star-half-o text-orange"></i>
                                        </a>
                                    </span>
                                </div>
                                
                                <div class="sidebar-cart-container">
                                    <img src="assets/img/shop/img-shop-thumb-3.png" alt="" class="img-responsive pull-left">
                                    <h6>Man Casual Jacket</h6>
                                    <span class="sidebar-cart-price text-gray">$90.00</span>
                                    <span class="sidebar-cart-remove">
                                        <a href="#">
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star text-orange"></i>
                                            <i class="fa fa-star-half-o text-orange"></i>
                                        </a>
                                    </span>
                                </div>
                                
                            </div>
                        </div>
                             
                        
                    </div>                    
                    
                    <div class="col-md-9 text-center">
                     
                        <div class="row mt25 mb25 animated" data-animation="fadeInDown" data-animation-delay="100">                            
                            <div class="col-md-2 col-sm-2 col-xs-2 pull-left">
                                <ul class="list-inline">
                                    <li><a href="#" class="shop-layout pull-left"><i class="fa fa-th"></i></a></li>
                                    <li><a href="#" class="shop-layout pull-left"><i class="fa fa-align-justify"></i></a></li>
                                </ul>
                            </div>                            
                            <div class="col-md-7 col-sm-10 col-xs-10 pull-right">
                                <form class="form-inline pull-left">
                                        <label>Short By:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Name A - Z</option>
                                            <option>Name Z - A</option>
                                            <option>Model A - Z</option>
                                            <option>Model Z - A</option>
                                            <option>Highest Price</option>
                                            <option>Lowest Price</option>
                                            <option>Highest Rating</option>
                                            <option>Lowest Rating</option>
                                        </select>
                                    </form>       
                                <form class="form-inline pull-left ml25">
                                    <label>Show:</label>
                                    <select class="form-control" id="sel2">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                        <option>60</option>
                                        <option>70</option>
                                        <option>80</option>
                                        <option>90</option>
                                        <option>100</option>
                                    </select>
                                    <label>Items Per Page</label>
                                </form>
                            </div>                            
                        </div>
                      
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-15%</div>
                                    <img src="../images/recomend/b-35-red.jpg" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Букет роз</h4>
                                    <span class="shop-item-price">₽4950</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Подробнее
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-blue">promo</div>
                                    <div class="shop-label bg-pasific">-30%</div>
                                    <img src="../images/recomend/b-51-pink.jpg" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-50%</div>
                                    <img src="assets/img/shop/img-shop-2.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-green">new</div>
                                    <img src="assets/img/shop/img-shop-4.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-50%</div>
                                    <img src="assets/img/shop/img-shop-1.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-cyan">popular</div>
                                    <img src="assets/img/shop/img-shop-2.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-50%</div>
                                    <img src="assets/img/shop/img-shop-3.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-purple">Best Seller</div>
                                    <img src="assets/img/shop/img-shop-4.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                   <div class="shop-label bg-blue">Promo</div>
                                    <img src="assets/img/shop/img-shop-1.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-purple">Best Seller</div>
                                    <img src="assets/img/shop/img-shop-2.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-75%</div>
                                    <img src="assets/img/shop/img-shop-3.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="shop-item-container-in">
                                    <div class="shop-label bg-pasific">-25%</div>
                                    <img src="assets/img/shop/img-shop-4.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Cool Man Jacket</h4>
                                    <span class="shop-item-price">$90.00</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="add-to-wishlist" data-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <a href="#" class="add-to-cart">
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="#" class="send-to-friend" data-toggle="tooltip" title="Send to friend">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row mb25 animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="col-md-12 text-center">
                                <ul class="pagination pagination-pasific">
                                    <li><a href="#"><i class="fa fa-angle-double-left"></i> First</a></li>
                                    <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Last <i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>                    
                             
                </div> 
                
            </div>
        </section>
                
        
        <!-- Shopping Method
        ===================================== -->
        <?php include '../section/advantage.php'; ?>


        <!-- Footer Area
        =====================================-->
        <?php include '../section/fotter.php'; ?>
        

        <!-- JQuery Core
        =====================================-->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="../assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="../assets/js/main/jquery.appear.js"></script>
        <script src="../assets/js/main/isotope.pkgd.min.js"></script>
        <script src="../assets/js/main/parallax.min.js"></script>
        <script src="../assets/js/main/jquery.countTo.js"></script>
        <script src="../assets/js/main/owl.carousel.min.js"></script>
        <script src="../assets/js/main/jquery.sticky.js"></script>
        <script src="../assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="../assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/js/main/main.js"></script>
        
    </body>
</html>