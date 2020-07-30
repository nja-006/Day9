<?php
    require_once 'animal.php';
    $sheep = new Animal("shaun");

    echo $sheep->get_name().'<br>';
    echo $sheep->get_legs().'<br>';
    echo $sheep->get_cold_blooded();


?>