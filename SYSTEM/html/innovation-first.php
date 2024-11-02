<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation - Innovation Building</title>
    <link rel="stylesheet" href="../css/innovation-first.css">
</head>
<body>
<br><br><br><br><br><br>
<div class="container">
    <header>
        <h1>Innovation Building (First Floor) </h1>
        <div class="search-bar">
            <input type="text" placeholder="Search here..." />
        </div>
    </header>
    
    <div class="map">
        <div class="color-code">
            <h3>Color Code:</h3>
            <ul>
                <li><span class="vacant"></span> Vacant</li>
                <li><span class="occupied"></span> Occupied</li>
                <li><span class="waiting"></span> Waiting</li>
                <li><span class="na"></span> N/A</li>
            </ul>
        </div>

        <div class="floor-plan">
            <div class="room vacant" id="ICE104">Office of the Vice President</div>
            <div class="room waiting" id="ICE105">ICE104</div>
            <div class="room vacant" id="ICE106">ICE105</div>
            <div class="room occupied" id="ICE101">ICE106</div>
            <div class="room occupied" id="ICE102">Comfort Room</div>
                <div class="floor-plan2">
                    <div class="room na" id="office">CMU i-Connect</div>
                    <div class="room na" id="connect">ICE101</div>
                    <div class="room na" id="qaia">ICE102</div>
                    <div class="room na" id="clinic">Quality Assurance & Internal Office</div>
                    <div class="room na" id="cr1">H&M Clinic</div>
                    <div class="room na" id="cr2">Comfort Room</div>
                </div>
        </div>
    </div>
    
    <div class="pagination">
        <button disabled>1</button>
        <a href="../html/innovation-second.php"><button class="active">2</button></a>
    </div>
    <div class="back-button">
        <a href="../html/landing-page.php"><button class="active">Back</button></a>
    </div>
</div>
</body>
</html>