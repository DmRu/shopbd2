/**
 * Created by DReaM_One on 20.02.2017.
 */
var price_one = 1.2;


$("#21").click(function () {
    $("#21").addClass("amount_rad");
    $("#35").removeClass("amount_rad");
    $("#51").removeClass("amount_rad");

    $("#21_count").addClass('select_count');
    $("#35_count").removeClass('select_count');
    $("#51_count").removeClass('select_count');

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

    var price = Math.round((51*price_one),0);
    $("#price").animateNumber({ number: price });
});



$("#rad").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#rad").addClass("chose_colour_click");
});

$("#yellow").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#yellow").addClass("chose_colour_click");
});

$("#purple").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#purple").addClass("chose_colour_click");
});

$("#pink").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#pink").addClass("chose_colour_click");
});

$("#white").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#white").addClass("chose_colour_click");
});

$("#vinous").click(function () {
    if ($(this).hasClass('chose_colour_click')) {
        $(this).removeClass("chose_colour_click");
    } else $("#vinous").addClass("chose_colour_click");
});




























