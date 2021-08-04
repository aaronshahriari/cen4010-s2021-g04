<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Social</title>
    <!-- Google Signin -->
    <meta name='google-signin-client_id' content='1084043775881-4ls331bisg1gcnpb1uev003uhsm529rb.apps.googleusercontent.com'>
    <script src='https://apis.google.com/js/platform.js' async defer></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./css/social.css">

    <!-- Personal JS -->
    <script src="./js/index.js"></script>

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/browse1.css">


    <!-- Navbar JS -->
    <script src='./js/navbar.js'></script>
</head>

<style>
    .glow-pending {
        /* font-size: 80px; */
        color: #fff;
        text-align: center;
        animation: glow 1s ease-in-out infinite alternate;
        float: right;
        /* width: 300px; */
        border: 3px solid #73AD21;
        /* padding: 10px; */
    }

    @-webkit-keyframes glow {
        from {
            /* text-shadow: 0 0 5px green; */
            box-shadow: 0 0 1px green;
        }

        to {
            /* text-shadow: 0 0 10px lightgreen; */
            box-shadow: 0 0 5px lightgreen;
        }
    }

    .panel-default>.panel-heading {
        font-weight: 700;
        padding: 15px;
        color: lime;

        background-color: black;
        border-color: #ddd;
    }

    body {
        background-color: #101010;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        margin: 5px;

    }

    #SearchBar,
    input[type=text] {
        background-color: lightgreen;
        color: black;
    }

    ::placeholder,
    :-ms-input-placeholder,
    ::-ms-input-placeholder {
        color: white;
        opacity: 1;
        /* Firefox */
    }
</style>

<script>
    // windows.onsubmit = function()
    // {
    //     location.reload();
    // };
</script>

<body>
    <?php
    $server = "localhost";
    $username = "cen4010_su21_g04";
    $password = "Eg1gNbkNpe";
    $dbname = "cen4010_su21_g04";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    $collapseId = 2;
    ?>
    <div class='nav-copy'></div>
    <div class="g-signin2" style="visibility: hidden"></div>

    <div class="container">
        <h2>Friends List</h2>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Search <span class="glyphicon glyphicon-search"></span></a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <form method='POST'>
                            <a>
                                <input type='text' id='SearchF' name='SearchF' placeholder="Enter Name" required>
                                <button id='Submit' name='Submit' value='Submit'>Search</button>
                            </a>
                        </form>

                        <div>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                //Grabs whatever is in search bar
                                if (isset($_POST['Submit'])) {
                                    // echo "<script> alert('Submit');</script>";

                                    $item = $_POST['SearchF'];

                                    //Grabs all instances of friend request in order to not send request to already sent user
                                    $sql1 = "SELECT UID, UFN, ULN, UPP FROM Users";
                                    $resultB = $conn->query($sql1);
                                    $sql2 = "SELECT DISTINCT CONCAT(S.UFN, ' ', S.ULN) AS 'Sender', CONCAT(R.UFN, ' ', R.ULN) AS 'Reciever', Buddies.BSID, Buddies.BRID, Buddies.BRA
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
                                            // $SearchPending = $_COOKIE['UID'] == $row["BRID"];


                                            if ($SearchFBool && $SearchSelfBool && $SearchFriendBool) {
                                                echo "<div id='FilterResultsInner' class = 'row'>";
                                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . "<div id='FilterR'> <img src = " . $row['UPP'] . "> </div></div>";
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
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php


            // SELECT concat(Users.UFN, ' ', Users.ULN) AS 'BL', Buddies.BRA, Users.UID, Buddies.BSID, Buddies.BRID
            // FROM Buddies
            // JOIN Users
            // ON Users.UID = Buddies.BSID or Users.UID = Buddies.BRID
            // WHERE (100814555182490506298 = Buddies.BSID or Buddies.BRID = 100814555182490506298) 
            // AND Users.UID != 100814555182490506298

            $sql0 = "SELECT DISTINCT CONCAT(U.UFN, ' ', U.ULN) AS 'BL', B.BRA, U.UID, B.BRID, B.BSID, U.UPP, U.UD
                    FROM Buddies AS B 
                    JOIN Users AS U ON U.UID = B.BSID or U.UID = B.BRID
                    WHERE (B.BSID = '" . $_COOKIE['UID'] . "' OR B.BRID = '" . $_COOKIE['UID'] . "') 
                    AND U.UID != '" . $_COOKIE['UID'] . "'";
            $resultA = $conn->query($sql0);



            if ($resultA->num_rows > 0) {
                while ($row = $resultA->fetch_assoc()) {
                    if ($row["BRID"] == $_COOKIE['UID'] && !$row["BRA"]) {

                        echo '
                            <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $collapseId . '">' . $row["BL"]  . ' 
                                    <span class = "glow-pending">Pending</span>
                                    </a> 
                                </h4>
                            </div>
                            <div id="collapse' . $collapseId++ . '" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="POST">
                                    <input name = "BSID" value = "' . $row["BSID"] . '" type = "hidden">
                                        <button name = "Accept" value= "Accept">Accept</button><br> <button name = "Decline" value= "Decline">Decline</button>
                                    </form>
                                </div>
                            </div>
                            </div>';
                    }
                }
            }
            $resultA = $conn->query($sql0);

            if ($resultA->num_rows > 0) {
                while ($row = $resultA->fetch_assoc()) {
                    if ($row["BSID"] == $_COOKIE['UID'] && !$row["BRA"]) {

                        echo '
                            <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $collapseId . '">' . $row["BL"]  . ' 
                                    <span class = "glow-pending">Sent</span>
                                    </a> 
                                </h4>
                            </div>
                            <div id="collapse' . $collapseId++ . '" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="POST">
                                    <input name = "BSID" value = "' . $row["BRID"] . '" type = "hidden">
                                        <br> <button name = "Decline" value= "Decline">Cancel Request</button>
                                    </form>
                                </div>
                            </div>
                            </div>';
                    }
                }
            }

            $resultA = $conn->query($sql0);


            if ($resultA->num_rows > 0) {
                while ($row = $resultA->fetch_assoc()) {

                    if ($row["BRA"]) {
                        if ($row["BSID"] == $_COOKIE["UID"]) {
                            $id = $row["BRID"];
                        } else {
                            $id = $row["BSID"];
                        }

                        $sql4 = "SELECT DISTINCT U.UID, E.EID, E.EN, E.ED, E.ESD,E.EED, E.EL, E.EC 
                        FROM UserEvents as UE 
                        JOIN Users as U 
                        ON U.UID = UE.UID 
                        JOIN Events as E 
                        ON E.EID = UE.EID
                        WHERE U.UID = '" . $id . "'";
                        $resultD = $conn->query($sql4);
                        $innerHtml = '';
                        if ($resultD->num_rows > 0) {
                            while ($row1 = $resultD->fetch_assoc()) {

                                $innerHtml .= "
                            <div id='FilterResultsInner' class = 'row'>
                            <div id='FilterR' class = 'col-lg-4  col-sm-6'> <h1>" . $row1["EN"]  . "</h1></div>
                            <div id='FilterR' class = 'col-lg-4  col-sm-6'> <h1>Event Location:</h1> " . $row1["EL"] . " </div>
                            
                            <div id='FilterR' class = 'col-lg-4  col-sm-12'> <h1>Start-<br></h1> " . date_format(date_create($row1["ESD"]), "M d Y h:i A") . "<br> <h1>End-<br></h1> " . date_format(date_create($row1["EED"]), "M d Y h:i A")  . "</div>
                            <div id='Desc' class = 'col-sm-12'><h2>Cost: $" . $row1["EC"] . "</h2><br><h2> Description:</h2><br>" . $row1["ED"] . "</div>
                            <form method='POST'>
                            <input type='hidden' id='addEvent' name='EID' value='" . $row1["EID"] . "'>
                            <button name='Add' value = 'Add Event'>Add Event</button>
                            </form>
                            </div>";
                            }
                        }

                        echo '
                            <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $collapseId . '">' . $row["BL"]  . ' 
                                    <span class = "glow-pending" >Accepted</span>
                                    </a> 
                                </h4>
                            </div>
                            <div id="collapse' . $collapseId++ . '" class="panel-collapse collapse">
                                <div class="panel-body">
                                <div class = "col-sm-3">
                                    <image src = ' . $row['UPP'] . '>
                                </div>
                                <div class = "col-sm-9">
                                    <h3><strong>Description:</strong></h3><br>
                                    ' . $row['UD'] . '<br>

                                    
                                    </div><p>
                                    ' . $innerHtml . '
                                    </p>
                                <form method="POST">
                                <input name = "BSID" value = "' . $id . '" type = "hidden"><br>
                                    <button name = "Decline" value= "Decline">Delete Friend</button>
                                </form>
                                </div>
                            </div>
                            </div>';
                    }
                }
            }




            // Every time search
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                //Grabs whatever is in search bar


                if (isset($_POST['addBuddy'])) {
                    if (isset($_COOKIE['UID'])) {
                        // echo 'added';
                        $BSID = $_COOKIE['UID'];
                        $BRID = $_POST['BRID'];

                        $sql = "INSERT INTO Buddies(BSID, BRID) VALUES('$BSID','$BRID')";
                        if (mysqli_query($conn, $sql)) {
                            echo "<script>window.location.replace('https://lamp.cse.fau.edu/~cen4010_su21_g04/social.php')</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error . '</br>';
                        }
                    }
                }

                if (isset($_POST['Add'])) {

                    //Grabs all events from phpmyadmin
                    $sql = "INSERT INTO UserEvents(UID, EID) VALUES (" . $_COOKIE['UID'] . "," . $_POST['EID'] . ")";
                    if ($conn->query($sql)) {
                        echo "<script>alert('Event Added');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error . '</br>';
                    }
                }

                if (isset($_POST['Decline'])) {
                    if (isset($_COOKIE['UID'])) {
                        $sql = "DELETE FROM Buddies
                         WHERE (BSID = '" . $_POST['BSID'] . "' AND BRID = '" . $_COOKIE['UID'] . "')
                         OR (BRID = '" . $_POST['BSID'] . "' AND BSID = '" . $_COOKIE['UID'] . "')";
                        if (mysqli_query($conn, $sql)) {
                            echo "<script>window.location.replace('https://lamp.cse.fau.edu/~cen4010_su21_g04/social.php')</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error . '</br>';
                        }
                    }
                }


                if (isset($_POST['Accept'])) {
                    if (isset($_COOKIE['UID'])) {
                        $sql = "UPDATE Buddies SET BRA = 1 WHERE BSID = '" . $_POST['BSID'] . "' AND BRID = '" . $_COOKIE['UID'] . "'";
                        if (mysqli_query($conn, $sql)) {
                            echo "<script>window.location.replace('https://lamp.cse.fau.edu/~cen4010_su21_g04/social.php')</script>";
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

</html>