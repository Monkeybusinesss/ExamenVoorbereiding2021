<?php

include_once '../../database/database.php';

$DB = new database();


if(isset($_GET['id'])){
    $artikelcode =  $_GET['id'];

    // :code = named placeholder
    $sql = "DELETE FROM artikel WHERE artikelcode=:code";

    // dit zorgt ervoor dat de :code op regel 12 vervangen wordt met id uit de url
    $placeholder = ['code'=>$artikelcode];

    $DB->delete($sql, $placeholder, 'overzicht_artikelen.php');
    // header(' location: overzicht_artikelen.php');

}


?>