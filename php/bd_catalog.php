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

$name = 'rose';
$amount = ' ';
$colour = ' ';





$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shopbd";

$connect = mysqli_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
mysqli_select_db($connect, $dbName) or die(mysql_error());

$query = 'SELECT * FROM flowers WHERE (avalebal = 1) and ';

if (!empty($_GET["colour"])) {
    $colour = $_GET["colour"];
};

if (!empty($_GET["price"])) {
    $price = $_GET["price"];
};

if (!empty($_GET["amount"])) {
    $amount = $_GET["amount"];
};

if ((!empty($_GET["colour"])) || (!empty($_GET["price"])) || (!empty($_GET["amount"]))){
    if (!empty($_GET["colour"])) {
        if ($query == 'SELECT * FROM flowers WHERE (avalebal = 1) and ') {
            $query = $query . $colour;
        }
        else {
            $query = $query . ' and ' . $colour;
        };
    };

    if (!empty($_GET["price"])) {
        if ($query == 'SELECT * FROM flowers WHERE (avalebal = 1) and ') {
            $query = $query . $price;
        }
        else {
            $query = $query . ' and ' . $price;
        };
    };

    if (!empty($_GET["amount"])) {
        if ($query == 'SELECT * FROM flowers WHERE (avalebal = 1) and ') {
            $query = $query . $amount;
        }
        else {
            $query = $query . ' and ' . $amount;
        };
    };

    $query = $query . " ORDER BY RAND()";
}
else {
    $query = "SELECT * FROM flowers WHERE (avalebal = 1) ORDER BY RAND()";
};
//echo $query;


$res = mysqli_query($connect ,$query) or die(mysqli_error());

$flower[] = mysqli_num_rows($res);

$i = 1;
while ($i <= mysqli_num_rows($res)){
    $flower[] = mysqli_fetch_assoc($res);
    $i++;
};

mysqli_close($connect);

echo json_encode($flower);


?>