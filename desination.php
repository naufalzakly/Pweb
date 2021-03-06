<?php
session_start(); 
if(!isset($_SESSION["login"])){
    header("Location: formlogin.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Desination</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info_wisata</title>
    <link rel="stylesheet" href="desination.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script language="javascript" type="text/javascript">
        var timerid = 0;
        var images = new Array("image/AirTerjunTanjak.jpg",
                    "image/AirTerjunTanjak2.jpg",
                    "image/AirTerjunTanjak3.jpg");
        var images2 = new Array("image/TelukLove.jpg",
                    "image/TelukLove2.jpg",
                    "image/TelukLove3.jpg");
        var images3 = new Array("image/TamanBotani.jpg",
                    "image/TamanBotani2.jpg",
                    "image/TamanBotani3.jpg");                    
        var countimages = 0;
        function startTime()
        {
            if(timerid)
            {
                timerid = 0;
            }
            var tDate = new Date();
            
            if(countimages == images.length)
            {
                countimages = 0;
            }
            if(tDate.getSeconds() % 5 == 0)
            {
                document.getElementById("img1").src = images[countimages];
                document.getElementById("img2").src = images2[countimages];
                document.getElementById("img3").src = images3[countimages];
            }
            countimages++;
            
            timerid = setTimeout("startTime()", 1000);
        }
        </script>
</head>

<body onload="startTime();">
	<div>
		<img class="background" id="goldring" src="image/goldring.svg">
        <img class="background" id="greenshape" src="image/greenshape.svg">
    </div>
    <header id="header">
        <a href="#" class="logo"></i> NUANSA.CO</a>
        <ul>
            <li><a href="index.php"><i class="fa fa-fw fa-home"></i> HOME</a></li>
            <li><a href="desination.php"><i class="fa fa-fw fa-plane"></i> DESTINATION</a></li>
            <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a></li>
            <li><a href="formlogin.php"><i class="fas fa-sign-in-alt"></i> JOIN US</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </header>


    <!--
    <div class="navbar">
        <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
        <a class="active" href="desination.html"><i class="fa fa-fw fa-search"></i> Desination</a>
        <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>

    </div>
    <div class="search">
        <input type="text" placeholder="Search.." name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
    </div>
    
    <div class="foto">
        <a href="wisata.html"><img src="image/Teluklove.jpg" id="gambar1"></a>
        <a href="wisata.html"><img src="image/AirTerjunTanjak.jpg" id="gambar2"></a>
        <a href="wisata.html"><img src="image/TamanBotani.jpg" id="gambar3"></a>
    </div>
    -->
    <div class="teamBx">
        <div class="member">
            <div class="imgBx">
                <img id="img2" src="image/Teluklove.jpg">
            </div>
            <div class=details>
                <div>
                    <a href="wisata.php"><h2>Teluk Love</h2></a>
                </div>
            </div>    
        </div>
        <div class="member">
            <div class="imgBx" >
                <img id="img1" src="image/AirTerjunTanjak.jpg" >
            </div>
            <div class=details>
                <div>
                    <a href="wisata.php"><h2>Air Terjun Tancak</h2></a>
                </div>
            </div>
        </div>
        <div class="member">
            <div class="imgBx">
                <img id="img3" src="image/TamanBotani.jpg">
            </div>
            <div class=details>
                <div>
                    <a href="wisata.php"><h2>Taman Botani</h2></a>
                </div>
            </div>  
        </div>
    </div>
</body>



</html>