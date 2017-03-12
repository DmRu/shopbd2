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
    <link rel="stylesheet" href="../assets/css/lp-tulips.css">

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



    <script src="../js/bd_catalog.js"></script>

</head>
<body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLN2WWL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<a href="#page-top" class="go-to-top">
    <i class="fa fa-long-arrow-up"></i>
</a>


<div id="searchModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title text-center"><i class="fa fa-phone fa-fw"></i>Заказать букет</h5>

            </div>
            <div class="modal-body">
                <div action="#" class="inline-form">
                    <input id="phone_from_modal" type="text" class="modal-search-input" placeholder=" ваш контактный номер" autofocus>
                </div>

            </div>

            <!--<div style="width: 100%; padding-top: 110px; height: 100px; margin-bottom: 65px;">-->
                <div id="sendingMessage_modal" class="statusMessage sending-message"><p>Отправляем сообщение! Пожалуста подождите...</p></div>
                <div id="successMessage_modal" class="statusMessage success-message"><p>Заказ успешно передан в обработку. Мы свяжемся с вами в бижайшее время для его подтверждения.</p></div>
                <div id="failureMessage_modal" class="statusMessage failure-message"><p>Упс... Что-то пошло не так. Пожалуста попробуйте ще раз.</p></div>
                <div id="incompleteMessage_modal" class="statusMessage"><p>Пожалуста заполните все поля перед отправкой</p></div>
            <!--</div>-->

            <div class="modal-footer bg-gray">
                <div style="width: 100%; margin-bottom: 15px;">
                    <button class="button button-sm button-pasific hover-ripple-out" onclick="send_order_tulips()" >Отправить</button>
                </div>
                <div style="width: 20%; margin-left: 40%"><img src="../assets/img/logo/logo-gray2.svg" alt=""></div>
                <span class="text-center"><a href="#" class="color-dark"></a></span>
            </div>
        </div>

    </div>
</div>




<!-- Navigation Area
      ===================================== -->
<?php include '../section/header_white.php'; ?>


<!-- Превый экран  -->

<div id='first_section' class="container-fluid first_section">
    <div class="container">
        <div class="row">
            <div class="offer col-lg-5 col-md-5 col-sm-5">
                <div style="font-size: 15px; font-weight: 400;"><img style="padding-right: 3px;" src="../images/lp-tolips/hachtag.png" alt="">ДариВесну</div>
                <div style="margin-bottom: 5px;">ДОСТАВКА БУКЕТОВ</div>
                <div class="offer_3">ТЮЛЬПАНОВ</div>

            </div>
            <div class="bouket_tolips col-lg-7 col-md-7 col-sm-7">

            </div>

        </div>

    </div>

    <div class="intro-direction">
        <a href="#welcome">
            <div class="mouse-icon"><div class="wheel"></div></div>
        </a>
    </div>

</div>

<!-- Преимущества  -->

<?php include '../section/advantage.php'; ?>


<!-- Ваш персональный менеджер  -->

<div class="personat_mg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="img_mg"></div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 personal_text" style="padding-left: 40px;">
                <div style="font-size: 20px; color: #454545; font-weight: 200;">ЗНАКОМЬТЕСЬ, ВАШ ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР</div>
                <div style="font-size: 20px; color: #454545; margin-top: 10px; font-weight: 600;">Елена Орлова</div>
                <div class="send_massege">Написать сообщение</div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background: url(../images/lp-tolips/tolips-pattern3.svg); background-attachment: fixed;">

    <div class="container" style="border-left: 1px solid #e5dfd9; border-right: 1px solid #e5dfd9; background: white;">
        <div style="background: url(../images/lp-tolips/rectangular.svg) white no-repeat center; height: 20px;"></div>
    </div>


    <div class="container border" style="padding-top: 70px; background-color: white; border-top: none; border-radius: 0px 0px 5px 5px;">
        <div class="row">
            <div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-7 select_colour">
                <div style="font-size: 22px; font-weight: 300;">
                    <h4 class="text-center text-uppercase font-montserrat color-dark mb50" style="text-align: left;">
                        Цвета тюльпанов
                        <small class="heading-desc text-lowercase">
                            Выберите цвета каоторые вам нравятся и мы добавим их в букет
                        </small>
                        <small class="heading heading-solid right-block"> </small>
                </div>

                <div id="rad" class="chose_colour">
                    <div style="width: 50%; float: left;">Красный</div>
                    <div class="bg_colour_rad" style="float: right;"></div>
                </div>

                <div id="purple" class="chose_colour">
                    <div style="width: 50%; float: left;">Фиолетовый</div>
                    <div class="bg_colour_purple" style="float: right;"></div>
                </div>

                <div id="yellow" class="chose_colour">
                    <div style="width: 50%; float: left;">Желтый</div>
                    <div class="bg_colour_yellow" style="float: right;"></div>
                </div>

                <div id="pink" class="chose_colour">
                    <div style="width: 50%; float: left;">Розовый</div>
                    <div class="bg_colour_pink" style="float: right;"></div>
                </div>

                <div id="white" class="chose_colour">
                    <div style="width: 50%; float: left;">Белый</div>
                    <div class="bg_colour_white" style="float: right;"></div>
                </div>

                <div id="vinous" class="chose_colour">
                    <div style="width: 50%; float: left;">Бордовый</div>
                    <div class="bg_colour_vinous" style="float: right;"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 first_question" style="height: 300px;">
                <div style="width: 100%; height: 100%; background: url(../images/lp-tolips/1_question.jpg) 0px 13px no-repeat;"></div>
            </div>
        </div>
    </div>

   <div class="container" style="height: 25px;">
    </div>


    <div class="container border" style="background-color: white; padding-top: 50px">
        <div class="col-lg-5 col-lg-offset-1 col-md-7 col-sm-7 second_question"></div>

        <div class="col-lg-5 col-md-4 col-sm-4">
             <div class='text_size' style="">
                 <h4 class="text-center text-uppercase font-montserrat color-dark mb50" style="text-align: right;">
                     Размер букета
                     <small class="heading-desc text-lowercase">
                         Выберите один из популятрых размеров или сообшите нам нужное количество цветов для букета
                     </small>
                     <small class="heading heading-solid" style="float: right;"> </small>
             </div>
        </div>

        <div class="col-lg-10 col-md-12 col-sm-8 col-md-offset-0 col-lg-offset-1 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="margin-top: 50px; margin-bottom: 60px;">
            <div class="col_div">
                <div class="amount" id="21">
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_gray.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_gray.svg" alt=""></div>
                    <div id="21_count" class="count_bouket">21</div>
                </div>
            </div>
            <div class="col_div">
                <div class="amount" id="35">
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_gray.svg" alt=""></div>
                    <div id="35_count" class="count_bouket">35</div>
                </div>
            </div>
            <div class="col_div">
                <div class="amount" id="51">
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div style="width: 30px; float: left; margin: 5px;"><img src="../images/lp-tolips/flower_rad.svg" alt=""></div>
                    <div id="51_count" class="count_bouket">51</div>
                </div>
            </div>
        </div>
    </div>



   <!-- <div class="container-fluid" style="background: url(../images/lp-tolips/rectangular_line.svg) 100% 100% no-repeat; height: 20px; margin-bottom: 50px;">
    </div> -->

    <div class="container" style="height: 50px;">
    </div>

    <div class="container">
        <div class="" style="background: rgba(255, 255, 255, 0.5); margin: auto auto; max-width: 475px; border: 2px solid #3a9e34; border-radius: 5px; height: 165px; margin-bottom: 100px; padding: 20px;">
            <div>
                <div style="width: 70%; float: left; font-size: 20px; font-weight: 200; margin-top: 15px; color: #363636;">БУКЕТ ТЮЛЬПАНОВ</div>
                <div style="width: 30%; float: right; font-size: 35px; font-weight: 200; color: #0b0b0b;"><span id="price">~</span> руб.</div>
                <div style="width: 100%; height: 65px;"></div>
                <div style="width: 70%; float: left;">
                    <div style="width: 20px; float: left; margin-right: 5px;"><img src="../images/lp-tolips/chek.svg" alt=""></div>
                    <div style="float: left; color: #292929;">Упаковка: Лента или крафт бумага</div>
                    <div style="width: 100%; height: 5px; float: right;"></div>
                    <div style="width: 20px; float: left; margin-right: 5px;"><img src="../images/lp-tolips/chek.svg" alt=""></div>
                    <div style="float: left; color: #292929;">Доставка: Бесплатно</div>
                </div>
                <div style="width: 30%;  float: left;">
                    <a href="#" data-toggle="modal" data-target="#searchModal"><div id="order" class="order">ЗАКАЗАТЬ</div></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../section/form_contacts.php'; ?>
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

<!-- Progress Bars
=====================================-->
<script src="../assets/js/progress-bar/bootstrap-progressbar.min.js"></script>
<script src="../assets/js/progress-bar/bootstrap-progressbar-main.js"></script>

<!-- JQuery Main
=====================================-->
<script src="../assets/js/main/jquery.appear.js"></script>
<script src="../assets/js/main/isotope.pkgd.min.js"></script>
<script src="../assets/js/main/parallax.min.js"></script>
<script src="../assets/js/main/jquery.countTo.js"></script>
<script src="../assets/js/main/owl.carousel.min.js"></script>
<script src="../assets/js/main/jquery.sticky.js"></script>
<script src="../assets/js/main/imagesloaded.pkgd.min.js"></script>
<script src="../assets/js/main/main.js"></script>
<!-- Print
================================-->


<script src="../js/telegram.js"></script>
<script src="../js/typed.js"></script>
<script src="../js/headerswich.js"></script>
<script src="../js/link_index.js"></script>
<script src="../js/amount_tulips.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>


<script src="js/typed.js"></script>
<script>

    $(function(){
        $('#typed').typed({
            strings: ["Доставка букетов в день рожденье"],
            typeSpeed: 50
        });
    });

    // setTimeout(tipe(), 1);
</script>


</body>
</html>