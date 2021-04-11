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
        <div onclick="location.href='activiteiten-formulier.php';" style="cursor: pointer;" class="content">
          <h3 class="text">Activiteiten</h3>
          <ul class="list">
            <li class="icons"><img class="mbn" src="mountainbiken.png" alt="MB"/></li>
            <li class="acti"><a>Mountainbiken</a></li>
            <li class="icons"><img class="ktn" src="knutselen.png" alt="KN"/></li>
            <li class="acti"><a>Knutselen</a></li>
            <li class="icons"><img class="wd" src="wedstrijd.png" alt="WD"/></li>
            <li class="acti"><a>Jeu de Boele wedstijd</a></li>
            <li class="icons"><img class="zw" src="zwemmen.png" alt="ZW"/></li>
            <li class="acti"><a>Water Aerobics</a></li>
          </ul>
        </div>
        <div onclick="location.href='reservering-formulier.php';" style="cursor: pointer;" class="content2">
          <h3 class="text">Reservering</h3>
          <h2 class="text2">Beschikbaar</h2>
          <img class="reservering" src="reservering.png" alt="RG"/>
          <h2 class="text2">U kunt alvast inschrijven</h2>
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