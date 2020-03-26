<?php


include "connectAD.php";

$login = $_GET['login'];

$password = $_GET['password'];

$sql = "SELECT login, password FROM nom_table_GSB WHERE login = $login,password = $password";

$result = executeSQL($sql);

?>