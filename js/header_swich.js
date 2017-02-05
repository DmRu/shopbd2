/**
 * Created by DReaM_One on 05.02.2017.
 */

$(document).ready(function() {
    $(function () {
        "use strict";
        if ($(".navbar-standart").length > 0) {
            $("#logo").addClass("logoblack_my");
            $("#topmeny").addClass("topmeny_li").removeClass("dropdown-toggle").removeClass("color-light");
            $('#vk_nav').addClass('vk_navbar_red').removeClass('vk_navbar_white');
        } else {
            $(window).scroll(function () {
                if ($(".navbar").offset().top > 10) {
                    $("#logo").addClass("logoblack_my");
                    $("#topmeny").addClass("topmeny_li").removeClass("dropdown-toggle").removeClass("color-light");
                    $('#vk_nav').addClass('vk_navbar_red').removeClass('vk_navbar_white');
                } else {
                    $("#logo").removeClass("logoblack_my");
                    $("#topmeny").removeClass("topmeny_li").addClass("dropdown-toggle").addClass("color-light");
                    $('#vk_nav').removeClass('vk_navbar_red').addClass('vk_navbar_white');
                }
            });
        };
    });
});
