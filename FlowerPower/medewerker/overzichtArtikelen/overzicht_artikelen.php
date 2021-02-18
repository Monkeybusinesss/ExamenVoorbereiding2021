<?php

include_once '../../database/database.php';

$DB = new database();

$artikels = $DB->getAllArticles();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="">

        <title>Overzicht artikelen</title>
    </head>
    <body>
        <div class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ArtikelCode</th>
                        <th scope="col">Artikel</th>
                        <th scope="col">prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($artikels as $artikel):?>
                        <tr>
                            <th scope="row"><?php echo $artikel["artikelcode"];?></th>
                            <td><?php echo $artikel["artikel"];?></td>
                            <td><?php echo $artikel["prijs"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>