<?php

include 'database.php';

$DB = new database();

$activiteiten = $DB->getAllActivities();
$reservering = $DB->getAllReseveringen();


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
          <a href="reservering-formulier.php">Reserveren</a>
          <a href="activiteiten-formulier.php">Activiteiten</a>
          <a class="active" href="index.php">Home</a>
        </div>
      </div>

        <div class="contentO">
          <h3 class="text">Activiteiten overzicht</h3>
          <table class="table-activiteiten">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Activiteit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($activiteiten as $activiteit):?>
                        <tr>
                            <th scope="row"><?php echo $activiteit["ID"];?></th>
                            <td><?php echo $activiteit["naam"];?></td>
                            <td><?php echo $activiteit["keuzeactiviteit"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="contentOR">
          <h3 class="text">Reservering overzicht</h3>
          <table class="table-reservering">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Duur(Dagen)</th>
                        <th scope="col">Verblijf</th>
                        <th scope="col">Aantal personen</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reservering as $reserveren):?>
                        <tr>
                            <th scope="row"><?php echo $reserveren["ID"];?></th>
                            <td><?php echo $reserveren["naam"];?></td>
                            <td><?php echo $reserveren["adres"];?></td>
                            <td><?php echo $reserveren["datum"];?></td>
                            <td><?php echo $reserveren["duur"];?></td>
                            <td><?php echo $reserveren["keuze_verblijf"];?></td>
                            <td><?php echo $reserveren["aantal_personen"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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