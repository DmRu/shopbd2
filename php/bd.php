<?php
/**
 * Created by PhpStorm.
 * User: DReaM_One
 * Date: 06.02.2017
 * Time: 16:44
 */


/**
ПЕРЕМЕННЫЕ OUTPUT
 * $name
 * $class
 * $price
 * $price_before_sale
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shopbd";

mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysql_select_db($dbName) or die(mysql_error());



    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM flowers WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysql_query($query) or die(mysql_error());
        $flower = mysql_fetch_assoc($res);

        //$name = mysql_result($res, 0);

        //$name = mysql_fetch_row($res);

    }
    else header( 'Refresh: 0; url=../pages/404.php' );

$name = $flower['name_title'];
$class = $flower['class'];
$price = $flower['price'];
$price_before_sale = $flower['price'] * 1.15;
$img_250x358_url = $flower['img_250x358_url'];

?>