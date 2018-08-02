<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>خادم الحج</title>
</head>
<body>
<body background="img/makkah-n-e2.jpg" style="background-position:  center 0;/* background-size: cover; *//* background-repeat: no-repeat; */">
    
    <?php 

include('header1.php');
     ?>
     <div class="container">
    <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="lng-title" href="#"><img src="img/sa-flag.png" alt="Arabic Langugae">  العربية</a>
                <a class="lng-title" href="#"><img src="img/en-flag.png" alt="English Language">  English</a>
                <a class="lng-title" href="#"><img src="img/ur-flag.png" alt="Urdu Language">  اردو</a>
                <a class="lng-title" href="#"><img src="img/fr-flag.png" alt="French Language">  Française</a>
    </div>
    <div class="menu-icon"> <p class="fas fa-globe-americas" onclick="openNav()"></p></div>
    <div class=" text-center main">
        <div class="row logo text-center">
            <div class="col-sm-4"></div>
           
            <div class="col-sm-4"></div>
        </div>
        <div class="row service-row">
            <div class="col-sm-4 service" id="medicalService">
                <a><h1 class="glyphicon glyphicon-plus service-logo"></h1></a>
                <h2 class="service-name">Medical Service</h2>
            </div>
            <div class="col-sm-4 service" id="lostService">
                <a><h1 class="fas fa-sad-tear service-logo"></h1></a>
                <h2 class="service-name">Lost People</h2>
            </div>
            <div class="col-sm-4 service" id="whereIam">
                <a><h1 class="fas fa-map-marker service-logo"></h1></a>
                <h2 class="service-name">Where I am?</h2>
            </div>
        </div>
        <div class="row service-row">
            <div class="col-sm-4 service" id="hajjGuide">
                <a><h1 class="fas fa-book service-logo"></h1></a>
                <h2 class="service-name">Hajj Guide</h2>
            </div>
            <div class="col-sm-4 service" id="duaa">
                <a><h1 class="fas fa-hand-holding service-logo"></h1></a>
                <h2 class="service-name">Duua</h2>
            </div>
            <div class="col-sm-4 service" id="busParking">
                <a><h1 class="fas fa-bus service-logo"></h1></a>
                <h2 class="service-name">Bus Parkings</h2>
            </div>
        </div>
        </div>
    
           
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="textEffect.js"></script>
    </div>
</body>
</html>