/**
 * Created by DReaM_One on 15.02.2017.
 */

var col_flower = 0;
var class_rose = false;

var yellow = false;
var rad = false;
var pink = false;
var white = false;
var sand = false;
var cream = false;
var peach = false;

var colour_mas = [['yellow', 'false'],
    ['rad', 'false'],
    ['pink', 'false'],
    ['white', 'false'],
    ['sand', 'false'],
    ['cream', 'false'],
    ['peach', 'false']
];

var amount_mas = [
    ['25', 'false'],
    ['35', 'false'],
    ['51', 'false'],
    ['101', 'false'],
]


$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
        return null;
    }
    else{
        return results[1] || 0;
    }
};

console.log($.urlParam('colour'));
console.log($.urlParam('class'));
console.log($.urlParam('price'));



$('.shop-by-color.bgg-yellow').on('click', function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        yellow = false;
        colour_mas[0][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        yellow = true;
        colour_mas[0][1] = 'true';
    };
});

$('.shop-by-color.bgg-rad').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        rad = false;
        colour_mas[1][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        rad = true;
        colour_mas[1][1] = 'true';
    };
});

$('.shop-by-color.bgg-pink').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        pink = false;
        colour_mas[2][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        pink = true;
        colour_mas[2][1] = 'true';
    };
});

$('.shop-by-color.bgg-white').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        white = false;
        colour_mas[3][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        white = true;
        colour_mas[3][1] = 'true';
    };
});

$('.shop-by-color.bgg-sand').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        sand = false;
        colour_mas[4][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        sand = true;
        colour_mas[4][1] = 'true';
    };
});

$('.shop-by-color.bgg-cream').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        cream = false;
        colour_mas[5][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        cream = true;
        colour_mas[5][1] = 'true';
    };
});

$('.shop-by-color.bgg-peach').click(function () {
    if ($(this).hasClass('shop-by-color-hover')) {
        $(this).removeClass("shop-by-color-hover");
        peach = false;
        colour_mas[6][1] = 'false';
    }
    else {
        $(this).addClass("shop-by-color-hover");
        peach = true;
        colour_mas[6][1] = 'true';
    };
});


//------------ВЫБОР КО-ЛВА----------

$("#25").click(function () {
    if ($(this).hasClass('bg_rad')) {
        $(this).removeClass("bg_rad");
        amount_mas[0][1] = 'false';
    }
    else {
        $(this).addClass("bg_rad");
        amount_mas[0][1] = 'true';
    }
});

$("#35").click(function () {
    if ($(this).hasClass('bg_rad')) {
        $(this).removeClass("bg_rad");
        amount_mas[1][1] = 'false';
    }
    else {
        $(this).addClass("bg_rad");
        amount_mas[1][1] = 'true';
    }
});

$("#51").click(function () {
    if ($(this).hasClass('bg_rad')) {
        $(this).removeClass("bg_rad");
        amount_mas[2][1] = 'false';
    }
    else {
        $(this).addClass("bg_rad");
        amount_mas[2][1] = 'true';
    }
});

$("#101").click(function () {
    if ($(this).hasClass('bg_rad')) {
        $(this).removeClass("bg_rad");
        amount_mas[3][1] = 'false';
    }
    else {
        $(this).addClass("bg_rad");
        amount_mas[3][1] = 'true';
    }
});



function get_flower(){
        $.get( "../php/bd_catalog.php", function (data) {
        r = $.parseJSON(data);
        $('#result').html(r[0]);

        col_flower = r[0];


        for (var i = 1; i < r[0]; i++){
            $('#cart h4:first').html(r[i]['name_title'] + ' - ' + r[i]['amount'] + 'шт.');
            $('#cart img:first').attr("src",r[i]['img_250x358_url']);
            $('#cart span:first').html('₽' + r[i]['price']);
            $('#cart').attr("href",'../pages/product.php?id=' + r[i]['id']);
            $('#cart').attr('atribut',i);

            $("#cart").clone().appendTo("#content");
        }

        $('#cart h4:first').html(r[r[0]]['name_title'] + ' - ' + r[r[0]]['amount'] + 'шт.');
        $('#cart img:first').attr("src",r[r[0]]['img_250x358_url']);
        $('#cart span:first').html('₽' + r[r[0]]['price']);
        $('#cart').attr("href",'../pages/product.php?id=' + r[r[0]]['id']);
        $('#cart').attr('atribut',i);


        //$('h4').html(r[0]);
    });
};


var f_card = $('#content a:first');

function find(){
    //---------ОЧИЩАЕМ КАРТОЧКИ ЦВЕТОВ КРОМЕ ПЕРВОЙ----------
    $('#content').empty();


    //---------СОЗДАЕМ КОПИЮ МАСИВА ЦВЕТОВ----------
    var find = r.concat();
    //console.log(r);
    //console.log(find);


    //---------ФИЛЬТР ПО ЦВЕТУ----------
    var colour = '';

    for (var i = 0; i < colour_mas.length; i++){
        if (colour_mas[i][1] == 'true'){
            if (colour == ''){
                colour = colour + '(colour = "' + colour_mas[i][0] + '"';
            } else {
                colour = colour + ' or colour = "' + colour_mas[i][0] + '"';
            };
        };
    };
    if (colour != ''){
        colour = colour + ")";
    };


    //---------ФИЛЬТР ПО КОЛ-ВУ----------
    var amount = '';

    for (var i = 0; i < amount_mas.length; i++){
        if (amount_mas[i][1] == 'true'){
            if (amount == ''){
                amount = amount + '(amount = ' + amount_mas[i][0];
            } else {
                amount = amount + ' or amount = ' + amount_mas[i][0];
            };
        };
    };
    if (amount != ''){
        amount= amount + ")";
    };


    //---------ФИЛЬТР ПО ЦЕНЕ----------
    var price_val = $('#shop-range-price').val();
    var price_from = price_val.substring(0, price_val.indexOf(";"));
    var price_to = price_val.substring((price_val.indexOf(";") + 1), price_val.length);
    var price = '(price > ' + price_from + ' and price <= ' + price_to + ')';


    //---------Запрос к BD.php----------
     $.get( "../php/bd_catalog.php",{
         colour: colour,
         price: price,
         amount: amount
     }, function (data) {
            finde_r = $.parseJSON(data);

            console.log(finde_r);

            if (finde_r.length > 1){
                $('#content').append(f_card);
                console.log('вставили шаблон карточки');
            }

            for (var i = 1; i <= finde_r[0]; i++){


                $('#cart h4:first').html(finde_r[i]['name_title'] + ' - ' + finde_r[i]['amount'] + 'шт.');
                $('#cart img:first').attr("src",finde_r[i]['img_250x358_url']);
                $('#cart span:first').html('₽' + finde_r[i]['price']);
                $('#cart').attr("href",'../pages/product.php?id=' + finde_r[i]['id']);
                $('#cart').attr('atribut',i);

                if (i < finde_r[0]){
                    $("#cart").clone().appendTo("#content");
                };


            };
            /*
            $('#cart h4:first').html(finde_r[finde_r[0]]['name_title'] + ' - ' + finde_r[finde_r[0]]['amount'] + 'шт.');
            $('#cart img:first').attr("src",finde_r[find[0]]['img_250x358_url']);
            $('#cart span:first').html('₽' + finde_r[find[0]]['price']);
            $('#cart a:first').attr("href",'../pages/product.php?id=' + finde_r[finde_r[0]]['id']);
            $('#cart').attr('atribut',i);
            */
     });



};