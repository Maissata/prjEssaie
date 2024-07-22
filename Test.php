<?php

require('animal.php');
require('mammifere.php');
require('oiseau.php');

$M = new mammifere("Chienne","1an","berge","12kg","noir-blanc");
$O = new oiseau("Aigle","2ans","sauvage","3kg","dddd");

$M -> afficheDetails();
$O -> afficheDetails();



?>