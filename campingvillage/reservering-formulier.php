<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){
    
    $fieldnames = ['username', 'adres', 'date', 'duur', 'keuze_verblijf', 'aantal_personen'];
    $error = false;
    
    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->insertreservering($_POST['username'], $_POST['adres'], $_POST['date'], $_POST['duur'], $_POST['keuze_verblijf'], $_POST['aantal_personen'],);
        //yurr
    }else{
        //do something
    }
}    


?>
<!DOCTYPE html>
<head>
    <title>Camping Village</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg-img">
      <div class="container">
        <div class="navbar">
          <img class="logo" src="camping_village.png" alt="CV"/>
          <a href="inloggen-admin.php">Admin</a>
          <a class="active" href="reservering-formulier.php">Reserveren</a>
          <a href="activiteiten-formulier.php">Activiteiten</a>
          <a href="index.php">Home</a>
        </div>
      </div>
      <div class="contentR">
        <h3 class="text">Inschrijf formulier reserveren</h3>
        <form class="reserveren_form" method="post" action="reservering-formulier.php">
                <input type="text" name="username" placeholder="Naam" required/><br>
                <input type="text" name="adres" placeholder="Adres" required/><br>
                <input type="date" name="date" placeholder="Datum voor reservering" required/><br>
                <input type="number" name="duur" placeholder="Duur vakantie" required/><br>
                <select id="keuze_verblijf" name="keuze_verblijf" required>
                  <option value="">Kies verblijf</option>
                  <option value="Caravan">Caravan</option>
                  <option value="Tent">Tent</option>
                </select>
                <input type="number" name="aantal_personen" placeholder="Aantal personen" required/><br>
                <button type="submit" name="submit" class="btn">Reserveer</button><br>
        </form>
      </div>
      <div class="bottom-container">
          <div class="contacten">
            <img class="em" src="email.png" alt="EM"/>
            <h3 class="email">r.zomeren@campingvillage.nl</h3>
          </div>

          <div class="contacten">
            <img class="ad" src="adres.png" alt="AD"/>
            <h3 class="adres">Lange Heideweg 7, 6731 EG Otterlo</h3>
          </div>

          <div class="contacten">
            <img class="tl" src="telefoon.png" alt="TL"/>
            <h3 class="telefoon">+31318591794</h3>
          </div>

        </div>    
    </div> 
</body>
</html>      