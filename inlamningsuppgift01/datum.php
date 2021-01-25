<?php

 date_default_timezone_set('Europe/Stockholm');

$ar = date('Y');
$manad = array('januari', 'februari', 'mars', 'april', 'maj', 'juni',     'juli', 'augusti', 'september', 'oktober', 'november', 'december');
$vecka = date('W');
$veckodag = array('Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag');
$dag = date('j');
$tid = date('H:i');


echo "Vecka $vecka - " . $veckodag[date('w')] . " den " . $dag . " " . $manad[date('n')-1] . " " . $ar . " kl. " . $tid;

?>

