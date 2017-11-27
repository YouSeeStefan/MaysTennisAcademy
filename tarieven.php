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
    
    <title>Tarieven</title>

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

    <div class="wrapper">
        <section class="text_home">
            <h3>Tarieven &amp; beschikbaarheid</h3>
            <p class="p_text"><u><b>Zomer lessen</b></u></p>
            <p class="p_text">Deze zomer wordt er les gegeven op 2 locaties, tv geuzenveld en de Wildenhorst.</p><br>

            <p class="p_text"><u><b>Tv Geuzenveld</b></u></p>
            
            <?php
                 $sql_query="SELECT * FROM tarieven";
                 $result_set=mysqli_query($mysqli,$sql_query);
                 while($row=$result_set->fetch_assoc())
                 {
            ?>

            <table style="width:100%">
                <tr>
                    <th>Dag</th>
                    <th>Tijd</th>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_1']; ?></td>
                    <td><?php echo $row['tarieven_2']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_3']; ?></td>
                    <td><?php echo $row['tarieven_4']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_5']; ?></td>
                    <td><?php echo $row['tarieven_6']; ?></td>
                </tr>
            </table>

            <?php
                }
            ?> 

        </section>   
        <section class="text_home">
        <?php
                 $sql_query="SELECT * FROM tarieven_prijs";
                 $result_set=mysqli_query($mysqli,$sql_query);
                 while($row=$result_set->fetch_assoc())
                 {
            ?>
            <table style="width:100%">
                <tr>
                    <th>Aantal personen</th>
                    <th>Lid van geuzenveld</th>
                    <th>Niet lid van Geuzenveld</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $row['tarieven_prijs_1']; ?>
                    </td>
                    <td><?php echo $row['tarieven_prijs_2']; ?></td>
                    <td><?php echo $row['tarieven_prijs_3']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_prijs_4']; ?></td>
                    <td><?php echo $row['tarieven_prijs_5']; ?></td>
                    <td><?php echo $row['tarieven_prijs_6']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_prijs_7']; ?></td>
                    <td><?php echo $row['tarieven_prijs_8']; ?></td>
                    <td><?php echo $row['tarieven_prijs_9']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_prijs_10']; ?></td>
                    <td><?php echo $row['tarieven_prijs_11']; ?></td>
                    <td><?php echo $row['tarieven_prijs_12']; ?></td>
                </tr>
            </table>
            <?php
                }
            ?> 
        </section>  

        <section class="text_home">
            <p class="p_text"><u><b>De Wildenhorst</b></u></p>
            <?php
                 $sql_query="SELECT * FROM tarieven_twee";
                 $result_set=mysqli_query($mysqli,$sql_query);
                 while($row=$result_set->fetch_assoc())
                 {
            ?>
            <table style="width:100%">
                <tr>
                    <th>Dag</th>
                    <th>Tijd</th>
                    <th>Tarief</th>
                </tr>
                <tr>
                    <td><?php echo $row['tarieven_twee_2']; ?></td>
                    <td><?php echo $row['tarieven_twee_4']; ?></td>
                    <td><?php echo $row['tarieven_twee_6']; ?></td>
                </tr>
            </table>
            <?php
                }
            ?> 

            <p class="p_text">De tarieven zijn op basis van 16 lessen.</p>
            <p>Alle tarieven zijn inclusief baanhuur en BTW.</p>
        </section>
    
    </div>
    <footer>
        <p>Made by <a href="http://webstudiostefan.nl/" target="_blank">Stefan Stekelenburg</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
