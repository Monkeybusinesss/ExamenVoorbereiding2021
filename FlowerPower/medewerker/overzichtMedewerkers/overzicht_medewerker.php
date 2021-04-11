<?php

include_once '../../database/database.php';

$DB = new database();

$medewerkers = $DB->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="">

        <title>Overzicht medewerker</title>
    </head>
    <body>
        <div class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">MedewerkersCode</th>
                        <th scope="col">Voorletters</th>
                        <th scope="col">tussenvoegsel</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Gebruikersnaam</th>
                        <th scope="col" colspan="1">Action</th>
                        <th scope="col" colspan="2">Neww</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($medewerkers as $medewerker):?>
                        <tr>
                            <th scope="row"><?php echo $medewerker["medewerkerscode"];?></th>
                            <td><?php echo $medewerker["voorletters"];?></td>
                            <td><?php echo $medewerker["tussenvoegsels"];?></td>
                            <td><?php echo $medewerker["achternaam"];?></td>
                            <td><?php echo $medewerker["gebruikersnaam"];?></td>
                            <td><a href="delete_medewerker.php?id=<?php echo $medewerker['medewerkerscode']?>">Delete</a></td>
                            <td><a href="update_medewerker.php?id=<?php echo $medewerker['medewerkerscode']?>">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>