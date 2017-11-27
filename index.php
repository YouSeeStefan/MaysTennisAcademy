<?php
include_once('cms/connect.php');
?>

<!DOCTYPE HTML>
<html lang="nl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <meta name="robots" content="index, follow">
    <meta name="keywords" content="tennis, tennisschool, badhoevedorp, tennisles, may, academy, les, indoor, serne">
    <meta name="description" content="Welkom op MaysTennisAcademy!" />

    <title>May's Tennis Academy</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="https://goo.gl/WQbYxg"/>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slideshow.js"></script>

    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
</head>

<body>
    <a href="index" style="text-decoration: none">
        <div class="it">
            <h1 class="title">Mays Tennis Academy</h1>
        </div>
    </a>
    <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu">☰ &nbsp; Mays Tennis Academy</a>
        </div>
        <nav>
        <ul>
            <li><a class="active" href="index">Home</a></li>
            <!-- <li><a href="#">Tennisschool</a></li> -->

            <li class="submenu">
                <a href="#">Tennisschool<b class="icon">▾</b></a>
                <ul class="children">
                <li><a href="visie">Visie </a></li>
                    <li><a href="trainers">Trainers </a></li>
                </ul>
            </li>

            <!-- <li><a href="inschrijven.html">Inschrijving</a></li> -->
            
            <li class="submenu">
                <a href="#">Inschrijving<b class="icon">▾</b></a>
                <ul class="children">
                <li><a href="inschrijven">Inschrijving </a></li>
                    <li><a href="lesdata">Lesdata </a></li>
                    <li><a href="tarieven">Tarieven </a></li>
                    <li><a href="lesreglement">Lesreglement </a></li>
                </ul>
            </li>

            <li><a href="locatie">Locatie</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </nav>
    </header>


    <div class="wrapper_home">

        <div id="slideshow">
            <img class="mySlides slideImages" src="images/slide_foto_1.jpg" alt="">
            <img class="mySlides slideImages" src="images/slide_foto_2.jpg" alt="">
            <img class="mySlides slideImages" src="images/slide_foto_3.jpg" alt="">
        </div>
        
        

        <?php
             $sql_query="SELECT * FROM home";
             $result_set=mysqli_query($mysqli,$sql_query);
             while($row=$result_set->fetch_assoc())
             {
        ?>
        <section class="text_home">
            <h1><?php echo $row['title']; ?></h1>
            <p class="p_text"><?php echo $row['content']; ?></p>
            <p class="p_text"><?php echo $row['content_1']; ?></p>
            <p class="p_text"><?php echo $row['content_2']; ?></p>
            <p class="p_text"><?php echo $row['content_3']; ?></p>
            <p class="p_text"><?php echo $row['content_4']; ?></p>
            <p class="p_text"><?php echo $row['content_5']; ?></p>
            <p class="p_text"><?php echo $row['content_6']; ?></p>
            <p class="p_text"><?php echo $row['content_7']; ?></p>
            <p class="p_text"><?php echo $row['content_8']; ?></p>
        </section>
        <?php
            }
        ?>

    </div>
    
    <br>

    <footer>
        <p>Made by <a href="http://webstudiostefan.nl/" target="_blank">Stefan Stekelenburg</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    
</body>

</html>
