<?php
include 'ConnectAD.php';

$statut = connexionMYSQL();


$id = $_GET['identifiant'];

$name = $_GET['Nom'];

$surname = $_GET['Surname'];

$adress = $_GET['adress'];

$city =$_GET['city'];

$cp = $_GET['cp'];

$date = $_GET['Date'];

$login = $_GET['login'];

$password = $_GET['password'];

$sql = "INSERT INTO `nom_de_la_table` (`Identifiant`, `Prenom`, `Nom`, `Adresse`, `Ville`, `Code_Postal`, `Date_embauche`, `Login`, `Mdp`) VALUES ('$id', '$name', '$surname', '$adress', '$city', '$cp', '$date', '$login', '$password');";

$result = executeSQL($sql);

?>