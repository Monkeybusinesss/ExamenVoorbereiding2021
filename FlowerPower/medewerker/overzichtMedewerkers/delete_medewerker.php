<?php

include_once '../../database/database.php';

$DB = new database();


if(isset($_GET['id'])){
    $medewerkerscode =  $_GET['id'];

    // :code = named placeholder
    $sql = "DELETE FROM medewerker WHERE medewerkerscode=:code";

    // dit zorgt ervoor dat de :code op regel 12 vervangen wordt met id uit de url
    $placeholder = ['code'=>$medewerkerscode];

    $DB->deleteMedewerker($sql, $placeholder, 'overzicht_medewerker.php');
    // header(' location: overzicht_medewerkeren.php');

}


?>