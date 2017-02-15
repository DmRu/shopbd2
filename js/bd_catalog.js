/**
 * Created by DReaM_One on 15.02.2017.
 */
function get_flower(){
    $.get( "../php/bd_catalog.php", function (data) {
        r = $.parseJSON(data);
        $('#result').html(r[0]);



        for (var i = 1; i < r[0]; i++){
            $('#cart h4:first').html(r[i]['name_title'] + ' - ' + r[i]['amount'] + 'шт.');
            $('#cart img:first').attr("src",r[i]['img_250x358_url']);
            $('#cart span:first').html('₽' + r[i]['price']);
            $('#cart a:first').attr("href",'../pages/product.php?id=' + r[i]['id']);
            $('#cart').attr('atribut',i);

            $("#cart").clone().appendTo("#content");
        }

        $('#cart h4:first').html(r[r[0]]['name_title'] + ' - ' + r[r[0]]['amount'] + 'шт.');
        $('#cart img:first').attr("src",r[r[0]]['img_250x358_url']);
        $('#cart span:first').html('₽' + r[r[0]]['price']);
        $('#cart a:first').attr("href",'../pages/product.php?id=' + r[r[0]]['id']);
        $('#cart').attr('atribut',i);


        //$('h4').html(r[0]);
    });
};

