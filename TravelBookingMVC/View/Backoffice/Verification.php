<?php

include('../../Model/TravelOffer.php');
include('../../Controller/TravelOfferController.php');



$titre = $_POST['title'];
$destination = $_POST['destination'];
$date_depart = $_POST['departure'];
$date_retour = $_POST['return'];
$prix = $_POST['price'];
$disponible = isset($_POST['available'])? true : false;
$categorie = $_POST['category'];

$offre1 = new TravelOffer($titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie);

var_dump($offre1);
$controller = new TravelOfferController();
$controller->showTravelOffer($offre1);

?>
