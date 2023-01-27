<?php

date_default_timezone_set('Europe/Paris');

$months = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre',
];

$dDays = [
    1 => 'lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche',
];

$chooseYears = (isset($_GET['years']) ? $_GET['years'] : date('y',time()));
$chooseMonths = (isset($_GET['months']) ? $_GET['months'] : date('n',time()));



if (isset($_GET['validate'])) {
    /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
    $monthsT = $_GET['months'];
    $yearsT = $_GET['years'];
}

$datestring = date($yearsT . "-" . $monthsT . "-" . 01);

$date = date_create($datestring);

$dayMonths = date_format($date, "t");

$dayOther = date_format($date, "w");


if ($dayOther == 0) {
    $totalOther = ($dayOther + 6);
} else {
    $totalOther = ($dayOther - 1);
}
$dDays = date('d');







