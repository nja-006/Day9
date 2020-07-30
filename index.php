<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';

    $sheep = new Animal("shaun");

    echo $sheep->get_name().'<br>';
    echo $sheep->get_legs().'<br>';
    echo $sheep->get_cold_blooded() . '<br><br>';

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"

?>