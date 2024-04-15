<?php

$partite = array(
    array("Olimpia Milano", "Cantù", 55, 60),
    array("Virtus Bologna", "Fortitudo Bologna", 70, 65),
    array("EA7 Emporio Armani Milano", "Dinamo Sassari", 80, 75),
    array("Reggiana", "Vanoli Cremona", 68, 72),
    array("Pallacanestro Varese", "Orlandina Basket", 85, 78),
    array("Pallacanestro Trieste", "Pallacanestro Openjobmetis Varese", 63, 59),
);

foreach ($partite as $partita) {
    echo $partita[0] . " - " . $partita[1] . " | " . $partita[2] . "-" . $partita[3] . "<br>";
}
?>
