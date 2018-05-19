<?php
//$db = mysql_connect ("localhost", "u202372135_qwer ", "paparazi1533714");
//mysql_select_db ("u202372135_qwer", $db);
//mysql_query("set names utf8"); //Передаем базе данных в какой кодировке будем передавать данные
$mysqli = new mysqli("localhost", "sanga6666-0", "EvuYBbPO", "sanga6666-0_randomcago");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("SET NAMES 'utf8'");

//echo $mysqli->host_info . "\n";

//echo "аза данных создана. Для пользователя u202372135_qwer установлен пароль paparazi1533714";
?>

