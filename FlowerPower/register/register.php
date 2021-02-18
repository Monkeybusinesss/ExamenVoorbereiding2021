<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="./assets/scss/register.css">

      <title>registreren</title>
  </head>
  <body>
    <div class="align">
      <img class="logo" src="./assets/images/register.svg">
      <div class="card">
        <div class="head">
          <div></div>
          <a  class="selected" href="#Registreren">Registreren</a>
          <!-- <a id="register" href="#register">Register</a> -->
          <div></div>
        </div>
        <div class="tabs">
          <form action="" method="POST" autocomplete="off">
            <div class="form-row inputs">
              <div class="form-group col-md-4 input">
                <!-- <label >Voorletters</label> -->
                <input placeholder="Voorletters" name="voorletters" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label >Tussenvoegsel</label> -->
                <input placeholder="Tussenvoegsel" name="tussenvoegsel" type="text" class="form-control" >
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label>Achternaam</label> -->
                <input placeholder="Achternaam" name="achternaam" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label>Adres</label> -->
                <input placeholder="Adres" name="adres" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label >postcode</label> -->
                <input placeholder="Postcode" name="postcode" type="text" class="form-control" required>
              </div>            
              <div class="form-group col-md-6 input">
                <!-- <label>woonplaats</label> -->
                <input placeholder="Woonplaats" name="woonplaats" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-row inputs">
              <div class="form-group col-md-4 input">
                <!-- <label>geboortedatum</label> -->
                <input class="form-control" name="geboortedatum" type="date" required>
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label>Gebruikersnaam</label> -->
                <input placeholder="Gebruikersnaam" name="gebruikersnaam" type="text" class="form-control"required>
              </div>
              <div class="form-group col-md-4 input">
                <label></label>
                <input placeholder="Wachtwoord" name="wachtwoord" type="password" class="form-control" required>
              </div>
              <div class="form-group col-md-4 input">
                <!-- <label>Herhaal wachtwoord</label> -->
                <input placeholder="Herhaal Wachtwoord" name="herhaal-wachtwoord" type="password" class="form-control" required>
              </div>
            </div>
            <button type="submit">Registreren</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>