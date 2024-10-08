<?php

include '../../Model/TravelOffer.php';

  $offre1= new TravelOffer('Offre de voyage','Beyrouth','11/08/2023','20/09/2023','500','1','Voyageur');
  

  $offre1->show();
  var_dump($offre1);
  
?>