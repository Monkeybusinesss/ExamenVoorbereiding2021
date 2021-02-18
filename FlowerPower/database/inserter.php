<?php
try{
    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=flowerpower', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     
    
    //Insert the data
    // $sql = "INSERT INTO medewerker
    // VALUES(:medewerkerscode, :voorletters, :voorvoegsels, :achternaam, :gebruikersnaam, :wachtwoord);";

    // $stmt = $pdo->prepare($sql);

    // $stmt->execute([
    //     'medewerkerscode' => null,
    //     'voorletters' => 'john',
    //     'voorvoegsels' => '',
    //     'achternaam' => 'doe',
    //     'gebruikersnaam' => 'johndoe',
    //     'wachtwoord' => password_hash('123', PASSWORD_DEFAULT)
    // ]);

    // echo '<h1>Data inserted, dont refresh again or change the values in <code>db/data_inserter.php</code></h1>';
    $sql = "INSERT INTO klant
    VALUES(:klantcode, :voorletters, :tussenvoegsels, :achternaam, :adres, :postcode, :woonplaats, :geboortedatum, :gebruikersnaam, :wachtwoord);";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'klantcode' => null,
        'voorletters' => 'j.e',
        'tussenvoegsels' => 'van ',
        'achternaam' => 'doe',
        'adres' => 'teststraat 11',
        'postcode' => '1020 EG',
        'woonplaats' => 'Amsterdam',
        'geboortedatum' => '06-11-2002',
        'gebruikersnaam' => 'johndoe',
        'wachtwoord' => password_hash('123', PASSWORD_DEFAULT)
    ]);

    echo '<h1>Data inserted, dont refresh again or change the values in <code>db/data_inserter.php</code></h1>';
    }catch(Exception $e){
    echo '<pre>';print($e);echo '</pre>';exit;
}
?>