<?php require '../php/bd_product.php'; ?>
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
        <link rel="shortcut icon" href="../assets/img/favicon.png">
        <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-touch-icon-114x114.png">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WLN2WWL');</script>
        <!-- End Google Tag Manager -->

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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLN2WWL"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        
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
        <header class="bg-grad-stellar" style="margin-top: 90px;" >

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase"><?php echo $name;?><span style="font-weight: 200;"> <?php echo $class;?></span><small class="color-light alpha7">Лучшие букеты</small></h3>
                    </div>
                    <div class="col-md-6 pt35">
                        <ul class="breadcrumb text-right">
                            <li><a href="#">Главная</a></li>
                            <li><a href="../pages/catalog.php">Каталог</a></li>
                            <li><?php echo $name;?><span> <?php echo $class;?></span></li>
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
                            <img id="zoom_01" class="shop-item-detail-photo-active img-responsive" alt="photo item active" src="<?php echo $img_250x358_url; ?>" data-zoom-image="<?php echo $img_490x490_url; ?>"/>
                            <div class="shop-label bg-blue">Лучшие букеты</div>
                            <!--<div class="shop-label bg-green">Бесплатная доставка</div>
                            <div class="shop-label bg-red">-15%</div>-->
                            <!--<img id="zoom_01" class="shop-item-detail-photo-active img-responsive" alt="photo item active" src="assets/img/shop/img-shop-1.png" data-zoom-image="assets/img/shop/img-shop-1-large.jpg"/>-->

                            <div id="shop-item-detail-photo-gallery"> 
                                <a href="#" data-image="<?php echo $img_250x358_url ?>" data-zoom-image="<?php echo $img_490x490_url ?>">
                                    <img src="<?php echo $img_50x72_url ?>" class="shop-item-detail-photo-thumbnail" alt="item photo" />
                                </a> 
                                <a href="#" data-image="<?php echo $common_amount1_img_250x358_url ?>" data-zoom-image="<?php echo $common_amount1_img_490x490_url ?>">
                                    <img src="<?php echo $common_amount1_img_50x72_url ?>" class="shop-item-detail-photo-thumbnail" alt="item photo" />
                                </a> 
                                <a href="#" data-image="<?php echo $common_amount2_img_250x358_url ?>" data-zoom-image="<?php echo $common_amount2_img_490x490_url ?>">
                                    <img src="<?php echo $common_amount2_img_50x72_url ?>" class="shop-item-detail-photo-thumbnail" alt="item photo" />
                                </a> 
                                <a href="#" data-image="<?php echo $common_amount3_img_250x358_url ?>" data-zoom-image="<?php echo $common_amount3_img_490x490_url ?>">
                                    <img src="<?php echo $common_amount3_img_50x72_url ?>" class="shop-item-detail-photo-thumbnail" alt="item photo" />
                                </a> 
                            </div>

                        </div>                    
                    </div>

                    <!-- Products Summary
                    ===================================== -->
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="shop-item-detail-description">
                            <h3><?php echo $name;?><span style="font-weight: 200;">  - <?php echo $amount;?> шт.</span></h3>

                            <div class="shop-item-sku mt20 pt10 bt-dotted-1">
                                Номер букета: <span class="color-black strong">ABEF345</span>
                            </div>

                            <div class="shop-item-available mt5">
                                Наличие: <span class="color-green strong">Доступен</span>
                            </div>

                            <div class="row shop-item-detail-price mt10 bt-dotted-1">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <ins><span class="amount"><?php echo  $price;?> руб.</span></ins>
                                    <del><span class="amount"><?php echo  $price_before_sale;?> руб.</span></del>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="alert alert-info mt15" style="text-align: center;">
                                        <strong>Бесплатная доставка</strong> по Минску. <!--<a href="#">Подробнее</a>-->
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
                                173 Отзывов
                            </div>                

                            <div class="shop-item-detail-desc mt10 pt10 bt-dotted-1">
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                            
                            
                            <form class="ml15">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 pt10 bt-dotted-1">
                                        <!-- <div class="pull-left">
                                             <label>Колличестов:</label>
                                             <input type="number" min="0" class="form-control input-md input-rounded shop-item-quantity pull-left mr20" value="1">
                                        </div> -->
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
                                            <label>Доступные цвета:</label>
                                            <a href="#"><span class="shop-item-color rad"></span></a>
                                            <a href="#"><span class="shop-item-color peach"></span></a>
                                            <a href="#"><span class="shop-item-color white"></span></a>
                                            <a href="#"><span class="shop-item-color pink"></span></a>
                                            <!--<a href="#"><span class="shop-item-color green active"></span></a> active color --> 
                                            <a href="#"><span class="shop-item-color yellow"></span></a>
                                            <a href="#"><span class="shop-item-color cream"></span></a>
                                            <a href="#"><span class="shop-item-color sand"></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 xol-xs-12 mt10 pt10 bt-dotted-1">
                                        <a class="button button-md button-pasific hover-icon-wobble-horizontal ml-20" style="width: 250px;">Заказать<i class="fa fa-shopping-basket"></i></a>
                                       <!-- <a class="button-o button-md button-green hover-bounce-to-right">в избранное</a>
                                        <a class="button-o button-md button-cyan hover-bounce-to-left">Добавитть к сравнению</a>
                                        <a class="button-o button-md button-blue hover-bounce-to-left">Купить</a>-->
                                    </div>
                                </div>

                            </form>                            

                            <div class="shop-item-detail-cat mt10 pt10 bt-dotted-1">
                                Поделиться:
                                <a href="#"><i class="fa fa-facebook-official mr5"></i></a>
                                <a href="#"><i class="fa fa-twitter mr5"></i></a>
                                <a href="#"><i class="fa fa-pinterest mr5"></i></a>
                                <a href="#"><i class="fa fa-google-plus mr5"></i></a>
                            </div>

                        </div>                    
                    </div>

                </div><!-- row end -->





                <!-- Related Products
                ===================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="strong">Рекомендуем</h4>
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
                                    <a href="product.php?id=<?php echo $recommendations[0]['id'];?>">
                                        <div class="shop-item-container-in">
                                            <div class="shop-label">-50%</div>
                                            <img src="<?php echo $recommendations[0]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                            <h4 class="shop-item-title"><?php echo $recommendations[0]['name_title']; ?> - <?php echo $recommendations[0]['amount']; ?></h4>
                                            <span class="shop-item-price"><?php echo $recommendations[0]['price']; ?> руб.</span>
                                        </div>
                                    </a>
                                </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[1]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[1]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[1]['name_title']; ?> - <?php echo $recommendations[1]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[1]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[2]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[2]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[2]['name_title']; ?> - <?php echo $recommendations[2]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[2]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[3]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[3]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[3]['name_title']; ?> - <?php echo $recommendations[3]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[3]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[4]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[4]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[4]['name_title']; ?> - <?php echo $recommendations[4]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[4]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[5]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[5]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[0]['name_title']; ?> - <?php echo $recommendations[5]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[5]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[6]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[6]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[6]['name_title']; ?> - <?php echo $recommendations[6]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[6]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->

                            <!-- shop item start -->
                            <div class="shop-item-container-out">
                                <a href="product.php?id=<?php echo $recommendations[7]['id'];?>">
                                    <div class="shop-item-container-in">
                                        <div class="shop-label">-50%</div>
                                        <img src="<?php echo $recommendations[7]['img_490x490_url']; ?>" alt="shop item" class="img-responsive center-block">
                                        <h4 class="shop-item-title"><?php echo $recommendations[7]['name_title']; ?> - <?php echo $recommendations[7]['amount']; ?></h4>
                                        <span class="shop-item-price"><?php echo $recommendations[7]['price']; ?> руб.</span>
                                    </div>
                                </a>
                            </div>
                            <!-- shop item end -->



                        </div><!-- #owlShop end -->
                    </div><!-- col-md end -->
                </div><!-- row end -->
            </div>
        </div><!-- shop details end -->
                
        
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
        
        <!-- Bootstrap Progress Bar
        =====================================-->
        <script src="../assets/js/progress-bar/bootstrap-progressbar.min.js"></script>
        <script src="../assets/js/progress-bar/bootstrap-progressbar-main.js"></script>
        
        <!-- ElevateZoom
        =====================================-->
        <script src="../assets/js/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
        
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