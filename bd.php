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
        $query = "SELECT name FROM flowers_name WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysql_query($query) or die(mysql_error());

//print($res, 0);

        $name = mysql_result($res, 0);
        //echo $query;
    }
    else header( 'Refresh: 0; url=/404.php' );


    if (!empty($_GET["am"])) {
        $am = $_GET["am"];
        $query = "SELECT class FROM amount WHERE amount=" . $am;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $class = mysql_query($query) or die(mysql_error());

        //print($res, 0);


        $class = mysql_result($class, 0);
        //echo $query;
    }
    else header( 'Refresh: 0; url=/404.php' );



    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT priсe FROM flowers_name WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysql_query($query) or die(mysql_error());

//print($res, 0);

        $price = mysql_result($res, 0) * $_GET["am"];
        $price_before_sale = round($price * 1.15, -1);

        //echo $query;
    }
    else header( 'Refresh: 0; url=/404.php' );

?>