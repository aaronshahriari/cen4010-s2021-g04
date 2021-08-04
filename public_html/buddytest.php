<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Friend Search</title>
    <meta name='google-signin-client_id' content='1084043775881-4ls331bisg1gcnpb1uev003uhsm529rb.apps.googleusercontent.com'>
    <script src='https://apis.google.com/js/platform.js' async defer></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/login.css">

    <!-- Navbar JS -->
    <script src='./js/navbar.js'></script>

    <style>
        :root {
            --bodyColor: #101010;
            --main_color: green;
            --secondary_color: lightgreen;
            --button: #FFFFFF;
            --background: #909090;
            --footerColor: #202020;
        }


        html {
            overflow-x: hidden;
            margin: auto;
        }

        body {
            background-color: var(--bodyColor);
            text-align: center;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        #activelink {
            color: var(--main_color);
            font-weight: bolder;
            font-family: 'Noto Sans', sans-serif;
        }

        #passivelink {
            font-family: 'Noto Sans', sans-serif;
        }

        header {
            background-image: url("./slideimgs/windmill.jpg");
            background-attachment: fixed;
            background-repeat: repeat-x;
            height: 50vh;
            background-attachment: fixed;
            background-size: 100% 70%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width: 479px) {
            header {
                background-size: 100% 15%;

            }
        }

        #pagetitle {
            font-family: 'Noto Sans', sans-serif;
            font-size: 75px;
            font-weight: 900;
            color: white;
            text-align: center;
        }

        @media (max-width: 479px) {
            #pagetitle {
                font-size: 30px;
            }
        }


        .container {

            padding: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .animated-word {
            font-family: Helvetica;
            letter-spacing: 0.2em;
            font-weight: 600;
            font-size: 50px;
            text-align: center;
            color: green;
            cursor: pointer;
            max-width: 300px;
            width: 130%;
            outline: 3px solid;
            outline-color: #A0A0A0;
            outline-offset: 50px;
            transition: all 600ms cubic-bezier(0.2, 0, 0, 0.8);
        }

        .animated-word:hover {
            color: lime;
            outline-color: rgba(71, 126, 232, 0);
            outline-offset: 100px;
        }

        /* Testing for Browse 1 */

        #FilterContainer {
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 2%;
            padding: 25px;
            text-align: left;
            background-color: #A0A0A0;
            text-align: left;
            font-family: Helvetica;
            letter-spacing: 0.1em;
            font-weight: 300;
            font-size: 35px;
            color: white;
            border-radius: 10px;
            box-shadow: 20px 20px 2px green;
            /*outline: 15px solid;
            outline-color: green;
            outline-offset: 10px;*/
        }

        #SubmitData {
            border-radius: 8px;
            color: #101010;
        }

        #DateFilter {
            margin-top: 7%;
            text-align: center;
        }

        #DateFilter input {
            color: black;
        }

        #SubmitData:hover {
            background-color: lime;
            color: #101010;
            border-radius: 8px;
            box-shadow: 0 12px 16px 0 rgb(24, 65, 24), 0 17px 50px 0 rgb(24, 65, 24);
        }

        #FilterResults {

            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 3%;
            margin-top: 5%;
            text-align: left;
            font-family: Helvetica;
            letter-spacing: 0.2em;
            font-weight: 300;
            font-size: 35px;
            color: white;
            /*outline: 15px solid;
            outline-color: green;
            outline-offset: 10px;*/

        }

        #FilterResultsInner {

            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 3%;
            margin-top: 3%;
            padding: 25px;
            /*padding-top:5px;
            padding-bottom:5px;*/
            background-color: #A0A0A0;
            text-align: left;
            font-family: Helvetica;
            letter-spacing: 0.1em;
            font-weight: 300;
            font-size: 35px;
            color: white;
            border-radius: 10px;
            box-shadow: 10px 5px 2px green;
            /*outline: 7px solid;
            outline-color: green;
            outline-offset: 8px;
            outline-: 10px;*/

        }

        #FilterR {
            font-size: 35px;
            color: white;
            font-family: 'Noto Sans', sans-serif;
        }

        #Info {
            padding-top: 15px;
        }

        #SearchBar {
            background-color: white;
            color: black;
        }

        #MapContainter {
            padding-top: 100px;

        }

        #map {
            /*outline: 10px solid;
            outline-color: #A0A0A0;
            outline-offset: 10px;*/
            border-radius: 10px;
        }

        #CheckBoxFilter {
            margin-top: 7%;
        }


        .slidecontainer {
            width: 100%;
            /* Width of the outside container */
        }

        /* The slider itself */
        .slider {
            -webkit-appearance: none;
            /* Override default CSS styles */
            appearance: none;
            width: 100%;
            /* Full-width */
            height: 25px;
            /* Specified height */
            background: #d3d3d3;
            /* Grey background */
            outline: none;
            /* Remove outline */
            opacity: 0.7;
            /* Set transparency (for mouse-over effects on hover) */
            -webkit-transition: .2s;
            /* 0.2 seconds transition on hover */
            transition: opacity .2s;
        }

        /* Mouse-over effects */
        .slider:hover {
            opacity: 1;
            /* Fully shown on mouse-over */
        }

        /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            /* Override default look */
            appearance: none;
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: var(--main_color);
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }

        .slider::-moz-range-thumb {
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: var(--main_color);
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }
    </style>
    <script src="./js/browse.js"></script>



</head>

<body>
    <div class='nav-copy'></div>

    <header>
        <p id="pagetitle">Browse</p>
    </header>

    <h1>Filters</h1>

    <div id="FilterContainer" class="row">
        <form method="POST">
            <!--Link to data filter-->
            <div id="CheckBoxFilter" class="col-lg-4  col-sm-6">

                <input type="text" id="SearchBar" name="SearchF" value="">
                <input id="SubmitData" name='Submit' type="submit" value="Submit">
            </div>

        </form>

    </div>
    <div id="FilterResults" class="row">

        <h1>Results</h1>
        <div id="Info" class="col-lg-12">
            <?php
            $server = "localhost";
            $username = "cen4010_su21_g04";
            $password = "Eg1gNbkNpe";
            $dbname = "cen4010_su21_g04";

            $conn = mysqli_connect($server, $username, $password, $dbname);

            // SELECT concat(Users.UFN, ' ', Users.ULN) AS 'BL', Buddies.BRA, Users.UID, Buddies.BSID, Buddies.BRID
            // FROM Buddies
            // JOIN Users
            // ON Users.UID = Buddies.BSID or Users.UID = Buddies.BRID
            // WHERE (100814555182490506298 = Buddies.BSID or Buddies.BRID = 100814555182490506298) 
            // AND Users.UID != 100814555182490506298

            $sql0 = "SELECT CONCAT(U.UFN, ' ', U.ULN) AS 'BL', B.BRA, U.UID 
            FROM Buddies AS B 
            JOIN Users AS U ON U.UID = B.BSID or U.UID = B.BRID
            WHERE (B.BSID = '" . $_COOKIE['UID'] . "' OR B.BRID = '" . $_COOKIE['UID'] . "') 
            AND U.UID != '" . $_COOKIE['UID'] . "'";
            $resultA = $conn->query($sql0);

            if ($resultA->num_rows > 0) {
                while ($row = $resultA->fetch_assoc()) {
                    echo "<div id='FilterResultsInner' class = 'row'>";
                    echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . "<div id='FilterR'> <img src = 'https://place-hold.it/100x100'> </div></div>";
                    echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . $row["BL"]  . "<div id='FilterR'>" . $row["BRA"]  . "</div></div>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            // Every time search
            if ($_SERVER["REQUEST_METHOD"] == "POST") {





                //Grabs whatever is in search bar
                if (isset($_POST['Submit'])) {

                    $item = $_POST['SearchF'];

                    //Grabs all events from phpmyadmin
                    $sql1 = "SELECT UID, UFN, ULN  FROM Users";
                    $resultB = $conn->query($sql1);
                    $sql2 = "SELECT CONCAT(S.UFN, ' ', S.ULN) AS 'Sender', CONCAT(R.UFN, ' ', R.ULN) AS 'Reciever', Buddies.BSID, Buddies.BRID, Buddies.BRA
                    FROM Users AS S
                    JOIN Buddies
                    ON S.UID = Buddies.BSID
                    JOIN Users as R
                    ON R.UID = Buddies.BRID";
                    $resultC = mysqli_query($conn, $sql2);
                    $BIDArray = array();
                    if ($resultC->num_rows > 0) {
                        // output data of each row
                        while ($row = $resultC->fetch_assoc()) {
                            if ($row['BSID'] == $_COOKIE['UID']) {
                                array_push($BIDArray, $row['BRID']);
                            } elseif ($row['BRID'] == $_COOKIE['UID']) {
                                array_push($BIDArray, $row['BSID']);
                            }
                        }
                    }

                    //Runs through each event if not empty
                    if ($resultB->num_rows > 0) {
                        while ($row = $resultB->fetch_assoc()) {

                            $SearchFriendBool = !(in_array($row['UID'], $BIDArray));
                            $SearchFBool = (substr_count(strtolower($row["UFN"]), strtolower($item)) || substr_count(strtolower($row["ULN"]), strtolower($item)));
                            $SearchSelfBool = $_COOKIE['UID'] != $row["UID"];


                            if ($SearchFBool && $SearchSelfBool && $SearchFriendBool) {
                                echo "<div id='FilterResultsInner' class = 'row'>";
                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . "<div id='FilterR'> <img src = 'https://place-hold.it/100x100'> </div></div>";
                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . $row["UFN"]  . "<div id='FilterR'>" . $row["ULN"]  . "</div></div>";
                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> Add Buddy
                                <form method='POST'>
                                <div id='CheckBoxFilter'>                    
                                    <input type='hidden' id='addFriend' name='BRID' value='" . $row["UID"] . "'>
                                    <input id='SubmitData' type='submit' name = 'addBuddy' style='border-radius: 50%;height: 50px;width: 50px;' value='+'>
                                </div>
                    
                            </form>
                                </div>";

                                echo "</div>";
                            }
                        }
                    } else {
                        echo "0 results";
                    }
                }

                if (isset($_POST['addBuddy'])) {
                    if (isset($_COOKIE['UID'])) {
                        // echo 'added';
                        $BSID = $_COOKIE['UID'];
                        $BRID = $_POST['BRID'];


                        // $sql = "SELECT CONCAT(S.UFN, \' \', S.ULN) AS \'Sender\',CONCAT(R.UFN, \' \', R.ULN) AS \'Reciever\', Buddies.BSID, Buddies.BRID, Buddies.BRA\n"
                        // . "FROM  Users AS S\n"                    
                        // . "JOIN Buddies\n"                    
                        // . "ON S.UID = Buddies.BSID\n"                    
                        // . " JOIN Users AS R\n"                    
                        // . "ON R.UID = Buddies.BRID";



                        $sql = "INSERT INTO Buddies(BSID, BRID) VALUES('$BSID','$BRID')";
                        if (mysqli_query($conn, $sql)) {
                            echo "Buddy request sent";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error . '</br>';
                        }
                    }
                }
            }


            ?>
        </div>

    </div>

</body>


</div>
</div>
<br />
<br />
<div class="g-signin2" style="visibility: hidden"></div>



</body>

</html>