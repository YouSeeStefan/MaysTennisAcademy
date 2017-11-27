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
    
    <title>Lesdata</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="https://goo.gl/WQbYxg"/>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>
    <script type="text/javascript">
        function printData()
            {
               var divToPrint = document.getElementById("printTable");
               newWin= window.open("");
               newWin.document.write(divToPrint.outerHTML);
               newWin.print();
               newWin.close();
            }

            $('button').on('click', function(){
                printData();
            })
    </script>

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
        <h3>Lesdata</h3>
            <p class="p_text">Op deze dagen is er een les: <button id="sheet" class="print" onclick="printData()">Print me</button></p><br class="MDWD">
                    <?php
 $sql_query="SELECT * FROM lesdata";
 $result_set=mysqli_query($mysqli,$sql_query);
 while($row=$result_set->fetch_assoc())
 {
  ?>
            <div class="MDWD">
                <select>
                    <option value="kies">- Kies -</option>
                    <option value="red" style="display:<?php echo $row['showmaandag']; ?>">Maandag</option>
                    <option value="green" style="display:<?php echo $row['showdinsdag']; ?>">Dinsdag</option>
                    <option value="blue"  style="display:<?php echo $row['showwoensdag']; ?>">Woensdag</option>
                    <option value="gray" style="display:<?php echo $row['showdonderdag']; ?>">Donderdag</option>

                    <option value="black" style="display:<?php echo $row['showvrijdag']; ?>">Vrijdag</option>
                    <option value="white" style="display:<?php echo $row['showzaterdag']; ?>">Zaterdag</option>
                    <option value="yellow" style="display:<?php echo $row['showzondag']; ?>">Zondag</option>
                </select>
            
                <div class="red box" style="display: block">
                    <table style="width:100%">
                            <tr>
                                <th></th>
                                <th>Maandag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['maandag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['maandag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['maandag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['maandag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['maandag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['maandag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['maandag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['maandag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['maandag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['maandag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['maandag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['maandag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['maandag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['maandag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['maandag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['maandag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['maandag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['maandag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['maandag_19']; ?></td>
                            </tr>
                        </table><br>
                </div>
                <div class="green box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Dinsdag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['dinsdag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['dinsdag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['dinsdag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['dinsdag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['dinsdag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['dinsdag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['dinsdag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['dinsdag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['dinsdag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['dinsdag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['dinsdag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['dinsdag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['dinsdag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['dinsdag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['dinsdag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['dinsdag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['dinsdag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['dinsdag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['dinsdag_19']; ?></td>
                            </tr>
                        </table><br>
                </div>
                <div class="blue box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Woensdag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['woensdag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['woensdag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['woensdag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['woensdag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['woensdag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['woensdag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['woensdag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['woensdag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['woensdag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['woensdag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['woensdag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['woensdag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['woensdag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['woensdag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['woensdag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['woensdag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['woensdag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['woensdag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['woensdag_19']; ?></td>
                            </tr>
                        </table><br>
                </div>
                <div class="gray box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Donderdag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['donderdag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['donderdag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['donderdag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['donderdag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['donderdag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['donderdag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['donderdag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['donderdag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['donderdag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['donderdag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['donderdag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['donderdag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['donderdag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['donderdag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['donderdag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['donderdag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['donderdag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['donderdag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['donderdag_19']; ?></td>
                            </tr>
                        </table><br>
                        </div>

                        <div class="black box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Vrijdag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['vrijdag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['vrijdag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['vrijdag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['vrijdag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['vrijdag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['vrijdag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['vrijdag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['vrijdag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['vrijdag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['vrijdag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['vrijdag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['vrijdag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['vrijdag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['vrijdag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['vrijdag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['vrijdag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['vrijdag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['vrijdag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['vrijdag_19']; ?></td>
                            </tr>
                        </table><br>
                        </div>
                        <div class="white box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Zaterdag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['zaterdag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['zaterdag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['zaterdag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['zaterdag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['zaterdag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['zaterdag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['zaterdag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['zaterdag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['zaterdag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['zaterdag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['zaterdag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['zaterdag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['zaterdag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['zaterdag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['zaterdag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['zaterdag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zaterdag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zaterdag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zaterdag_19']; ?></td>
                            </tr>
                        </table><br>
                        </div>
                        <div class="yellow box">
                    <table style="width:100%">

                            <tr>
                                <th></th>
                                <th>Zondag</th>
                            </tr>
                            <tr>
                                <td>Les 1</td>
                                <td><?php echo $row['zondag_1']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 2</td>
                                <td><?php echo $row['zondag_2']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 3</td>
                                <td><?php echo $row['zondag_3']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 4</td>
                                <td><?php echo $row['zondag_4']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 5</td>
                                <td><?php echo $row['zondag_5']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 6</td>
                                <td><?php echo $row['zondag_6']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 7</td>
                                <td><?php echo $row['zondag_7']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 8</td>
                                <td><?php echo $row['zondag_8']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 9</td>
                                <td><?php echo $row['zondag_9']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 10</td>
                                <td><?php echo $row['zondag_10']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 11</td>
                                <td><?php echo $row['zondag_11']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 12</td>
                                <td><?php echo $row['zondag_12']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 13</td>
                                <td><?php echo $row['zondag_13']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 14</td>
                                <td><?php echo $row['zondag_14']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 15</td>
                                <td><?php echo $row['zondag_15']; ?></td>
                            </tr>
                            <tr>
                                <td>Les 16</td>
                                <td><?php echo $row['zondag_16']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 17</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zondag_17']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 18</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zondag_18']; ?></td>
                            </tr>
                            <tr>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>">Les 19</td>
                                <td style="display:<?php echo $row['showwinterzomer']; ?>"><?php echo $row['zondag_19']; ?></td>
                            </tr>
                        </table><br>
                        
                        <?php
            }
        ?>
    </div>

            </div>

        <section class="text_home" id="sheet">
            <table style="width:100%;" border="1" cellpadding="3" id="printTable">
            <?php
 $sql_query="SELECT * FROM lesdata";
 $result_set=mysqli_query($mysqli,$sql_query);
 while($row=$result_set->fetch_assoc())
 {
  ?>

                <tr>
                    <th></th>
                    <th style="display:<?php echo $row['showmaandag']; ?>">Maandag</th>
                    <th style="display:<?php echo $row['showdinsdag']; ?>">Dinsdag</th>
                    <th style="display:<?php echo $row['showwoensdag']; ?>">Woensdag</th>
                    <th style="display:<?php echo $row['showdonderdag']; ?>">Donderdag</th>
                    <th style="display:<?php echo $row['showvrijdag']; ?>">Vrijdag</th>
                    <th style="display:<?php echo $row['showzaterdag']; ?>">Zaterdag</th>
                    <th style="display:<?php echo $row['showzondag']; ?>">Zondag</th>
                </tr>
                <tr>
                    <td>Les 1</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_1']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_1']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_1']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_1']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_1']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_1']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_1']; ?></td>
                </tr>
                <tr>
                    <td>Les 2</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_2']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_2']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_2']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_2']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_2']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_2']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_2']; ?></td>
                </tr>
                <tr>
                    <td>Les 3</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_3']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_3']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_3']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_3']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_3']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_3']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_3']; ?></td>
                </tr>
                <tr>
                    <td>Les 4</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_4']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_4']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_4']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_4']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_4']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_4']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_4']; ?></td>
                </tr>
                <tr>
                    <td>Les 5</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_5']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_5']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_5']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_5']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_5']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_5']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_5']; ?></td>
                </tr>
                <tr>
                    <td>Les 6</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_6']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_6']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_6']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_6']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_6']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_6']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_6']; ?></td>
                </tr>
                <tr>
                    <td>Les 7</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_7']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_7']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_6']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_6']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_7']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_7']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_7']; ?></td>
                </tr>
                <tr>
                    <td>Les 8</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_8']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_8']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_8']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_8']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_8']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_8']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_8']; ?></td>
                </tr>
                <tr>
                    <td>Les 9</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_9']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_9']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_9']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_9']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_9']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_9']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_9']; ?></td>
                </tr>
                <tr>
                    <td>Les 10</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_10']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_10']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_10']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_10']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_10']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_10']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_10']; ?></td>
                </tr>
                <tr>
                    <td>Les 11</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_11']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_11']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_11']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_11']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_11']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_11']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_11']; ?></td>
                </tr>
                <tr>
                    <td>Les 12</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_12']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_12']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_12']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_12']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_12']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_12']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_12']; ?></td>
                </tr>
                <tr>
                    <td>Les 13</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_13']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_13']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_13']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_13']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_13']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_13']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_13']; ?></td>
                </tr>
                <tr>
                    <td>Les 14</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_14']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_14']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_14']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_14']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_14']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_14']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_14']; ?></td>
                </tr>
                <tr>
                    <td>Les 15</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_15']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_15']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_15']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_15']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_15']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_15']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_15']; ?></td>
                </tr>
                <tr>
                    <td>Les 16</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_16']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_16']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_16']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_16']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_16']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_16']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_16']; ?></td>
                </tr>

                <tr style="display:<?php echo $row['showwinterzomer']; ?>">
                    <td>Les 17</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_17']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_17']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_17']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_17']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_17']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_17']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_17']; ?></td>
                </tr>
                <tr style="display:<?php echo $row['showwinterzomer']; ?>">
                    <td>Les 18</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_18']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_18']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_18']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_18']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_18']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_18']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_18']; ?></td>
                </tr>
                <tr style="display:<?php echo $row['showwinterzomer']; ?>">
                    <td>Les 19</td>
                    <td style="display:<?php echo $row['showmaandag']; ?>"><?php echo $row['maandag_19']; ?></td>
                    <td style="display:<?php echo $row['showdinsdag']; ?>"><?php echo $row['dinsdag_19']; ?></td>
                    <td style="display:<?php echo $row['showwoensdag']; ?>"><?php echo $row['woensdag_19']; ?></td>
                    <td style="display:<?php echo $row['showdonderdag']; ?>"><?php echo $row['donderdag_19']; ?></td>

                    <td style="display:<?php echo $row['showvrijdag']; ?>"><?php echo $row['vrijdag_19']; ?></td>
                    <td style="display:<?php echo $row['showzaterdag']; ?>"><?php echo $row['zaterdag_19']; ?></td>
                    <td style="display:<?php echo $row['showzondag']; ?>"><?php echo $row['zondag_19']; ?></td>
                </tr>

                 <?php
            }
        ?>
            </table><br>
           

        </section>

        <table style="width:100%">
                <tr>
                    <th>In de volgende weken is er geen les.</th>
                </tr>
                <tr>
                    <td>21 t/m 29 october (Week 43)</td>
                </tr>
                <tr>
                    <td>23 december t/m 7 januari (week 52 t/m week 1)</td>
                </tr>
            </table>

            <section class="text_home">
            <h3>Artikel 1 Inschrijving lessen</h3>

            <ul class="regelement">
                <li>Deelname aan de lessen zijn geheel voor eigen risico</li>
                <li>Een les duurt 60 minuten waarvan 10 minuten zelfstandig inspelen</li>
                <li>Verzuimde lessen zijn voor rekening van de leerling, lessen zijn in overleg overdraagbaar</li>
                <li>Restitutie van het lesgeld als gevolg van ziekte, blessures e.d. is niet mogelijk</li>
            </ul>
        </section>

    </div>
    <footer>
        <p>Made by <a href="http://webstudiostefan.nl/" target="_blank">Stefan Stekelenburg</a></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
