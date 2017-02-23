/**
 * Created by DReaM_One on 20.02.2017.
 */
var price_one = 1.2;
var amount


$("#21").click(function () {
    $("#21").addClass("amount_rad");
    $("#35").removeClass("amount_rad");
    $("#51").removeClass("amount_rad");

    $("#21_count").addClass('select_count');
    $("#35_count").removeClass('select_count');
    $("#51_count").removeClass('select_count');

    amount = 21;

    var price = Math.round((21*price_one),0);
    $("#price").animateNumber({ number: price });
});

$("#35").click(function () {
    $("#35").addClass("amount_rad");
    $("#21").removeClass("amount_rad");
    $("#51").removeClass("amount_rad");

    $("#35_count").addClass('select_count');
    $("#51_count").removeClass('select_count');
    $("#21_count").removeClass('select_count');

    amount = 35;

    var price = Math.round((35*price_one),0);
    $("#price").animateNumber({ number: price });
});

$("#51").click(function () {
    $("#51").addClass("amount_rad");
    $("#21").removeClass("amount_rad");
    $("#35").removeClass("amount_rad");

    $("#51_count").addClass('select_count');
    $("#35_count").removeClass('select_count');
    $("#21_count").removeClass('select_count');

    amount = 51;

    var price = Math.round((51*price_one),0);
    $("#price").animateNumber({ number: price });
});



$("#rad").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        rad = false;
    } else {
        $("#rad").addClass("chose_colour_click");
        rad = true;
    }
});

$("#yellow").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        yellow = false;
    } else {
        $("#yellow").addClass("chose_colour_click");
        yellow = true;
    }
});

$("#purple").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        purple = false;
    } else {
        $("#purple").addClass("chose_colour_click");
        purple = true;
    }
});

$("#pink").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        pink = false;
    } else {
        $("#pink").addClass("chose_colour_click");
        pink = true;
    }
});

$("#white").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        white = false;
    } else {
        $("#white").addClass("chose_colour_click");
        white = true;
    }
});

$("#vinous").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
        vinous = false;
    } else {
        $("#vinous").addClass("chose_colour_click");
        vinous = true;
    }
});


function send_order_tulips() {
    var colour = '';
        if (rad == true) {colour = colour + ' Красные; '};
        if (yellow == true) {colour = colour + ' Желтые; '};
        if (purple == true) {colour = colour + ' Фиолетовые; '};
        if (pink == true) {colour = colour + ' Розовые; '};
        if (white == true) {colour = colour + ' Белые; '};
        if (vinous == true) {colour = colour + ' Бордовые; '};
    if (colour == '') {colour = 'Не указаны; '};
        if ((amount != 21) && (amount != 35) && (amount != 51)) {amount = "Не указано; "}

    var phone = $('#phone_from_modal').val();


    $.get( "../php/telegram_tulips.php", { colour: colour, phone: phone, amount: amount });


    $('#successMessage_modal').show(200).delay(4000);


    // $('#dialog').show(200);
    // $("#dialog").dialog('open');
};

























