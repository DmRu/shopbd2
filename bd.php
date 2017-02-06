<?php
/**
 * Created by PhpStorm.
 * User: DReaM_One
 * Date: 06.02.2017
 * Time: 16:44
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shopbd";

mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysql_select_db($dbName) or die(mysql_error());



function name()
{
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT name FROM flowers_name WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysql_query($query) or die(mysql_error());

//print($res, 0);

        echo mysql_result($res, 0);
        //echo $query;
    };
};

function f_class()
{
    if (!empty($_GET["am"])) {
        $am = $_GET["am"];
        $query = "SELECT class FROM amount WHERE amount=" . $am;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $class = mysql_query($query) or die(mysql_error());

//print($res, 0);

        echo mysql_result($class, 0);
        //echo $query;
    };
};

function price($flag)
{
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT priсe FROM flowers_name WHERE id=" . $id;
        /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
        $res = mysql_query($query) or die(mysql_error());

//print($res, 0);

        $price = mysql_result($res, 0) * $_GET["am"];
        $price_before_sale = $price * 1.15;
        $price_arr = array($price, $price_before_sale);
        if ($flag == 'price')
        echo $price_arr[0];
        else echo round($price_arr[1]);
        //echo $query;
    };
};

?>
