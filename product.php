<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Букеты | Дотсавка букетов</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/core/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/main/main.css">
        <link rel="stylesheet" href="assets/css/main/setting.css">
        <link rel="stylesheet" href="assets/css/main/hover.css">
        
        <link rel="stylesheet" href="assets/css/range-slider/ion.rangeSlider.css">
        <link rel="stylesheet" href="assets/css/range-slider/ion.rangeSlider.skinFlat.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">
        
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
        <link rel="stylesheet" href="assets/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="assets/css/icon/et-line-font.css">
        
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
                <img src="assets/img/other/puff.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>

        <?php require 'bd.php'; ?>
        <!-- Navigation Area
        ===================================== -->
        <?php include 'header_white.php'; ?>
        
        
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
        <header class="bg-grad-stellar" style="margin-top: 80px; background: url(images/bgfoto.jpg) -7px -733px;">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase"><?php name();?><span> </span><?php f_class();?><small class="color-light alpha7">Рекомендуем</small></h3>
                    </div>
                    <div class="col-md-6 pt35">
                        <ul class="breadcrumb text-right">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Каталог</a></li>
                            <li><?php name();?><span> </span><?php f_class();?></li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Shop Area
        ===================================== -->
        <div id="shop" class="bg-light pt75 pb75">            
            <div id="shop-item-details" class="container">
                <div class="row">

                    <!-- Item Photo
                    ===================================== -->
                    <div class="col-md-4 col-sm-6 col-xs-12">                    
                        <div class="shop-item-detail-photo center-block mb25">
                            <img id="zoom_01" class="shop-item-detail-photo-active img-responsive" alt="photo item active" src="images/101-roze.jpg" data-zoom-image="assets/img/shop/img-shop-1-large.jpg"/>
                            <div class="shop-label bg-blue">Лучшие букеты</div>
                            <div class="shop-label bg-green">Бесплатная доставка</div>
                            <div class="shop-label bg-red">-15%</div>
                            <!--<img id="zoom_01" class="shop-item-detail-photo-active img-responsive" alt="photo item active" src="assets/img/shop/img-shop-1.png" data-zoom-image="assets/img/shop/img-shop-1-large.jpg"/>-->

                            <div id="shop-item-detail-photo-gallery"> 
                                <a href="#" data-image="assets/img/shop/img-shop-1.png" data-zoom-image="assets/img/shop/img-shop-1-large.jpg"> 
                                    <img src="assets/img/shop/img-shop-thumb-1.png" class="shop-item-detail-photo-thumbnail" alt="item photo" /> 
                                </a> 
                                <a href="#" data-image="assets/img/shop/img-shop-2.png" data-zoom-image="assets/img/shop/img-shop-2-large.jpg"> 
                                    <img src="assets/img/shop/img-shop-thumb-2.png" class="shop-item-detail-photo-thumbnail" alt="item photo" /> 
                                </a> 
                                <a href="#" data-image="assets/img/shop/img-shop-3.png" data-zoom-image="assets/img/shop/img-shop-3-large.jpg"> 
                                    <img src="assets/img/shop/img-shop-thumb-3.png" class="shop-item-detail-photo-thumbnail" alt="item photo" /> 
                                </a> 
                                <a href="#" data-image="assets/img/shop/img-shop-4.png" data-zoom-image="assets/img/shop/img-shop-4-large.jpg"> 
                                    <img src="assets/img/shop/img-shop-thumb-4.png" class="shop-item-detail-photo-thumbnail" alt="item photo" /> 
                                </a> 
                            </div>

                        </div>                    
                    </div>

                    <!-- Products Summary
                    ===================================== -->
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="shop-item-detail-description">
                            <h3>Букет Роз Classic</h3>

                            <div class="shop-item-sku mt20 pt10 bt-dotted-1">
                                Номер букета: <span class="color-black strong">ABCDEF345</span>
                            </div>

                            <div class="shop-item-available mt5">
                                Доступность: <span class="color-green strong">Доступен</span>
                            </div>

                            <div class="row shop-item-detail-price mt10 bt-dotted-1">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <ins><span class="amount">₽<?php price('price');?></span></ins>
                                    <del><span class="amount">₽<?php price('price_full');?></span></del>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="alert alert-info mt15">
                                        <strong>Бесплатная доставка</strong> по Москве. <a href="#">Подробнее</a>
                                    </div>
                                </div>
                            </div>

                            <div class="shop-item-review mt10 pt10 bt-dotted-1">
                                Оценка букета:
                                <a href="#" class="mr10">
                                    <i class="fa fa-star color-yellow"></i>
                                    <i class="fa fa-star color-yellow"></i>
                                    <i class="fa fa-star color-yellow"></i>
                                    <i class="fa fa-star color-yellow"></i>
                                    <i class="fa fa-star-half-o color-yellow"></i>
                                </a>
                                275 Отзывов <a href="#" class="ml10"><i class="fa fa-pencil mr5"></i>Написать отзыв</a>
                            </div>                

                            <div class="shop-item-detail-desc mt10 pt10 bt-dotted-1">
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                            
                            
                            <form class="ml15">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt10 bt-dotted-1">
                                        <div class="pull-left">
                                            <label>Колличестов:</label>
                                            <input type="number" min="0" class="form-control input-md input-rounded shop-item-quantity pull-left mr20" value="1">
                                        </div>
                                        <!--
                                        <div class="pull-left">
                                            <label>Size:</label>
                                            <select class="form-control shop-item-size pull-left mr20">
                                                <option value="S" selected>S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                        </div>
                                        -->
                                        <div class="pull-left">
                                            <label>Color:</label>
                                            <a href="#"><span class="shop-item-color blue"></span></a>
                                            <a href="#"><span class="shop-item-color brown"></span></a>
                                            <a href="#"><span class="shop-item-color cyan"></span></a>
                                            <a href="#"><span class="shop-item-color green"></span></a>
                                            <!--<a href="#"><span class="shop-item-color green active"></span></a> active color --> 
                                            <a href="#"><span class="shop-item-color orange"></span></a>
                                            <a href="#"><span class="shop-item-color purple"></span></a>
                                            <a href="#"><span class="shop-item-color red"></span></a>
                                            <a href="#"><span class="shop-item-color yellow"></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 xol-xs-12 mt10 pt10 bt-dotted-1">
                                        <a class="button button-md button-pasific hover-icon-wobble-horizontal ml-20">в корзину<i class="fa fa-shopping-basket"></i></a>
                                        <a class="button-o button-md button-green hover-bounce-to-right">в избранное</a>
                                        <a class="button-o button-md button-cyan hover-bounce-to-left">Добавитть к сравнению</a>
                                        <a class="button-o button-md button-blue hover-bounce-to-left">Купить</a>
                                    </div>
                                </div>

                            </form>                            

                            <div class="shop-item-detail-cat mt10 pt10 bt-dotted-1">
                                Shares: 
                                <a href="#"><i class="fa fa-facebook-official mr5"></i></a>
                                <a href="#"><i class="fa fa-twitter mr5"></i></a>
                                <a href="#"><i class="fa fa-linkedin mr5"></i></a>
                                <a href="#"><i class="fa fa-pinterest mr5"></i></a>
                                <a href="#"><i class="fa fa-google-plus mr5"></i></a>
                            </div>

                        </div>                    
                    </div>

                </div><!-- row end -->

                <!-- Tab Content
                ===================================== -->
                <div class="row mt25">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#item_description" class="text-uppercase">Item Description</a></li>
                          <li><a data-toggle="tab" href="#shop_item_additional_information" class="text-uppercase">Additional Information</a></li>
                          <li><a data-toggle="tab" href="#shop_item_reviews" class="text-uppercase">Reviews</a></li>
                          <li><a data-toggle="tab" href="#shop_item_others" class="text-uppercase">Other</a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- tab content item description start -->
                            <div id="shop_item_description" class="tab-pane fade in active">
                                <h4>Sample Lorem Ipsum Text</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl.                                    
                                </p>

                                <ul class="icon-list">
                                        <li><i class="fa fa-check color-green"></i>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed at ante. Mauris eleifend</li>
                                        <li><i class="fa fa-check color-green"></i>Quam a vulputate dictum, massa quam dapibus leo</li>
                                        <li><i class="fa fa-check color-green"></i>Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem</li> 
                                    </ul>

                                <h5>Sample Lorem Ipsum Text</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl.
                                </p>
                            </div>
                            <!-- tab content item description end -->

                            <!-- tab content additional information start -->
                            <div id="shop_item_additional_information" class="tab-pane fade">
                                <div class="row">
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Collection:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Collection Title</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Fabrication:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Awesome Fabrication</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Style:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Jeans Jacket</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Neckline:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Round</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Collar:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Shirt</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Sleeves:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Short</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Cuffs:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Button</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Pockets:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">	Button flap chest front seam</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Hemline:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Straight</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Body Length:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Approx. 22-1/2"L</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Size Choices:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">Small, Medium, Large, and Extra Large</strong></div>
                                    <!-- Spec End -->
                                    <!-- Spec Start -->
                                    <div class="col-md-2 col-sm-2 col-xs-4 bb-solid-1 pb10 pt10"><span class="pull-right">Content:</span></div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 bb-solid-1 pb10 pt10"><strong class="pull-left">55% cotton, 45% polyester</strong></div>
                                    <!-- Spec End -->
                                </div>


                            </div>
                            <!-- tab content additional information end -->

                            <!-- tab content reviews start -->
                            <div id="shop_item_reviews" class="tab-pane fade">
                                <div class="row bb-solid-1 mb25">
                                    <div class="col-md-8 col-sm-6 col-xs-6">
                                        <h4 class="pb10">Customers Reviews<small>750 Reviews</small></h4>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6 text-right pt25">
                                        <a href="#" class="mr10">
                                            <i class="fa fa-star fa-2x color-yellow"></i>
                                            <i class="fa fa-star fa-2x color-yellow"></i>
                                            <i class="fa fa-star fa-2x color-yellow"></i>
                                            <i class="fa fa-star fa-2x color-yellow"></i>
                                            <i class="fa fa-star-half-o fa-2x color-yellow"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Rating Start -->
                                <div id="progressBar1" class="row">
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <h5>5 Star <span class="color-black alpha5">(570)</span></h5>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" data-transitiongoal="90"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <h5>4 Star <span class="color-black alpha5">(70)</span></h5>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" data-transitiongoal="80"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <h5>3 Star <span class="color-black alpha5">(50)</span></h5>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" data-transitiongoal="50"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <h5>2 Star <span class="color-black alpha5">(30)</span></h5>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" data-transitiongoal="30"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <h5>1 Star <span class="color-black alpha5">(5)</span></h5>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" data-transitiongoal="10"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 mt5">
                                        <a class="button button-md button-blue hover-icon-wobble-horizontal ml-20 pull-right">Add Your Review</a>
                                    </div>

                                </div>
                                <!-- Rating End -->

                                <div class="row mt25">

                                    <!-- Review Start -->
                                    <div class="col-md-12 col-sm-12 col-xs-12 bb-dotted-1 pt25">
                                        <img src="assets/img/other/photo-2.jpg" class="img-thumbnail pull-left mr20" alt="image">
                                        <a href="#" class="mr10 mb10">
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star-half-o color-yellow"></i>
                                        </a>
                                        <br>
                                        <div class="strong mt10">John Boo</div> Jan. 20 2016, 10:00 PM
                                        <div class="">&nbsp;</div>
                                        <p>
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, libero, temporibus quam eaque numquam debitis excepturi assumenda necessitatibus dolore dolorum vero enim distinctio ipsa. Quod, dolorum, quidem eum quisquam facilis nam molestias et voluptas omnis quibusdam dignissimos illum ullam. 
                                        </p>      
                                    </div>
                                    <!-- Review End -->

                                    <!-- Review Start -->
                                    <div class="col-md-12 col-sm-12 col-xs-12 bb-dotted-1 pt25">
                                        <img src="assets/img/other/photo-1.jpg" class="img-thumbnail pull-left mr20" alt="image">
                                        <a href="#" class="mr10 mb10">
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star-half-o color-yellow"></i>
                                        </a>
                                        <br>
                                        <div class="strong mt10">John Boo</div> Jan. 20 2016, 10:00 PM
                                        <div class="">&nbsp;</div>
                                        <p>
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, libero, temporibus quam eaque numquam debitis excepturi assumenda necessitatibus dolore dolorum vero enim distinctio ipsa. Quod, dolorum, quidem eum quisquam facilis nam molestias et voluptas omnis quibusdam dignissimos illum ullam. 
                                        </p>      
                                    </div>
                                    <!-- Review End -->

                                    <!-- Review Start -->
                                    <div class="col-md-12 col-sm-12 col-xs-12 bb-dotted-1 pt25">
                                        <img src="assets/img/other/photo-4.jpg" class="img-thumbnail pull-left mr20" alt="image">
                                        <a href="#" class="mr10 mb10">
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star-half-o color-yellow"></i>
                                        </a>
                                        <br>
                                        <div class="strong mt10">John Boo</div> Jan. 20 2016, 10:00 PM
                                        <div class="">&nbsp;</div>
                                        <p>
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, libero, temporibus quam eaque numquam debitis excepturi assumenda necessitatibus dolore dolorum vero enim distinctio ipsa. Quod, dolorum, quidem eum quisquam facilis nam molestias et voluptas omnis quibusdam dignissimos illum ullam. 
                                        </p>      
                                    </div>
                                    <!-- Review End -->

                                    <!-- Review Start -->
                                    <div class="col-md-12 col-sm-12 col-xs-12 bb-dotted-1 pt25">
                                        <img src="assets/img/other/photo-2.jpg" class="img-thumbnail pull-left mr20" alt="image">
                                        <a href="#" class="mr10 mb10">
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star color-yellow"></i>
                                            <i class="fa fa-star-half-o color-yellow"></i>
                                        </a>
                                        <br>
                                        <div class="strong mt10">John Boo</div> Jan. 20 2016, 10:00 PM
                                        <div class="">&nbsp;</div>
                                        <p>
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, libero, temporibus quam eaque numquam debitis excepturi assumenda necessitatibus dolore dolorum vero enim distinctio ipsa. Quod, dolorum, quidem eum quisquam facilis nam molestias et voluptas omnis quibusdam dignissimos illum ullam. 
                                        </p>      
                                    </div>
                                    <!-- Review End -->

                                </div>                                

                            </div>
                            <!-- tab content reviews end -->

                            <!-- tab content other start -->
                            <div id="shop_item_others" class="tab-pane fade">
                                <h5>Other Tab Content</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, libero, temporibus quam eaque numquam debitis excepturi assumenda necessitatibus dolore dolorum vero enim distinctio ipsa. Quod, dolorum, quidem eum quisquam facilis nam molestias et voluptas omnis quibusdam dignissimos illum ullam. 
                                </p>
                            </div>
                            <!-- tab content other end -->

                        </div><!-- tab content end-->
                    </div><!-- col-md end -->
                </div><!-- row end -->

                <!-- Related Products
                ===================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="strong">Похожие Буеты</h4>
                    </div>
                    <div class="col-md-2 text-center">                    
                        <i class="fa fa-angle-left shop-control-prev"></i>
                        <i class="fa fa-angle-right shop-control-next"></i>                    
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">                    
                        <div id="owlShop">

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">-50%</div>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <img src="assets/img/shop/img-shop-2.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Casual Jacket</h4>
                                    <span class="shop-item-price">$79.00</span>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">Sale</div>
                                    <img src="assets/img/shop/img-shop-3.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Summer Jacket</h4>
                                    <span class="shop-item-price">$85.00</span>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <img src="assets/img/shop/img-shop-4.png" alt="shop item" class="img-responsive center-block">
                                    <h4 class="shop-item-title">Man Jacket</h4>
                                    <span class="shop-item-price">$57.00</span>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">-50%</div>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">-50%</div>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">-50%</div>
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
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <div class="shop-item-container-in">
                                    <div class="shop-label">-50%</div>
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
                            <!-- shop item end -->

                        </div><!-- #owlShop end -->
                    </div><!-- col-md end -->
                </div><!-- row end -->
                
            </div>
        </div><!-- shop details end -->
                
        
        <!-- Shopping Method
        ===================================== -->
        <?php include 'advantage.php'; ?>
         
        
        <!-- Footer Area
        =====================================-->
        <?php include 'fotter.php'; ?>
        

        <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        
        <!-- Bootstrap Progress Bar
        =====================================-->
        <script src="assets/js/progress-bar/bootstrap-progressbar.min.js"></script>
        <script src="assets/js/progress-bar/bootstrap-progressbar-main.js"></script>
        
        <!-- ElevateZoom
        =====================================-->
        <script src="assets/js/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="assets/js/main/jquery.appear.js"></script>
        <script src="assets/js/main/isotope.pkgd.min.js"></script>
        <script src="assets/js/main/parallax.min.js"></script>
        <script src="assets/js/main/jquery.countTo.js"></script>
        <script src="assets/js/main/owl.carousel.min.js"></script>
        <script src="assets/js/main/jquery.sticky.js"></script>
        <script src="assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main/main.js"></script>
        
        <!-- Custom Script for This Page Only
        =====================================-->
        <script>            
            $("#zoom_01").elevateZoom({gallery:'shop-item-detail-photo-gallery', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: '#'});             
            $("#zoom_01").elevateZoom({ 
                zoomType    : "inner", 
                cursor      : "crosshair" 
            });
        </script>
        
    </body>
</html>