<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/scss/klant.css">

        <title>klant</title>
    </head>
    <body>
        <div id="mySidebar" class="sidebar">
            <div class="img-navbar">
                <img src="./assets/images/pexels-boeket.png">
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="../bestellen/artikel_bestellen.php">Artikelen Bestellen</a>
            <a href="../register/register.php">Klantgegevens Wijzigen</a>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>  
            <h2>FlowerPower</h2>
            <p>Click on menu icon to open the sidebar, and push this content to the right.</p>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="./assets/js/nav.js"></script>
    </body>
</html>