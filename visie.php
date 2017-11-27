<?php
include_once('cms/connect.php');
?>

<!DOCTYPE HTML>
<html lang="nl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <meta name="robots" content="index, follow">
    <meta name="keywords" content="may serne">
    <meta name="description" content="may serne">

    <title>Visie</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="https://goo.gl/WQbYxg"/>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>

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

	<div class="wrapper_visie">
<?php
 $sql_query="SELECT * FROM visie";
 $result_set=mysqli_query($mysqli,$sql_query);
 while($row=$result_set->fetch_assoc())
 {
  ?>

	    <h2><?php echo $row['title_visie']; ?></h2>
	    <p class="p_text"><?php echo $row['visie']; ?></p>

	    <p class="p_text"><?php echo $row['visie_1']; ?></p>

	    <p class="p_text"><?php echo $row['visie_2']; ?></p>

	    <p class="p_text"><?php echo $row['visie_3']; ?></p>

		<p class="p_text"><?php echo $row['visie_4']; ?></p>

        <?php
            }
        ?>

        <section class="text_home">
            <h3>Tennis</h3>
            <p class="p_text">Linkjes naar verschillende websites:</p><br>

            <table style="width:100%">
                <tr>
                    <th>Weblink <a href="counter_1.php?href=https://www.facebook.com/maystennisacademy.tennis" target="_blank">Facebook May's Tennis Academy</a></th>
                    <td>
                        <p><?php include 'counter_1.txt'; ?></p>
                    </td>
                </tr>
                <tr>
                    <th>Weblink <a href="counter_2.php?href=http://www.tenniskids.nl/" target="_blank">Tennis kids</a></th>
                    <td>
                        <p><?php include 'counter_2.txt'; ?></p>
                    </td>
                </tr>
                <tr>
                    <th>Weblink <a href="counter_3.php?href=http://www.knltb.nl/" target="_blank">Tennis blessures</a></th>
                    <td>
                        <p><?php include 'counter_3.txt'; ?></p>
                    </td>
                </tr>
                <tr>
                    <th>Weblink <a href="counter_4.php?href=https://nl.wikipedia.org/wiki/Tennis" target="_blank">Tennis regels</a></th>
                    <td>
                        <p><?php include 'counter_4.txt'; ?></p>
                    </td>
                </tr>
            </table>

        </section>

		<!-- <img class="img_visie" src="images/visie.jpg" alt=""> -->
	    
    </div>
    <footer>
        <p>Made by <a href="http://webstudiostefan.nl/" target="_blank">Stefan Stekelenburg</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
