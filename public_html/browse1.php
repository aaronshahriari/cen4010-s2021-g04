<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!-- <link rel="stylesheet" href="./css/browse.css" /> -->
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

        /*
#imagecontainer {
    
}*/
        #main1 {
            background-color: var(--bodyColor);
            ;
            height: 900px;
        }





        #maintext {
            color: #909090;
            font-size: 15px;
            font-family: 'Noto Sans', sans-serif;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
        }

        h1 {
            font-family: 'Noto Sans', sans-serif;
            font-size: 30px;
            font-weight: bolder;
            color: lime;
            text-align: center;
            padding-bottom:5%;
        }

        strong {
            color: var(--main_color);
        }

        .button {
            border-radius: 4px;
            background-color: var(--main_color);
            border: none;
            color: var(--button);
            text-align: center;
            font-size: 22px;
            padding: 10px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }
        
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }



        #foottext {
            text-align: left;
        }

        a {
            color: var(--main_color);
        }

        a:hover {
            color: var(--secondary_color);
        }

        a:visited {
            color: var(--main_color);
        }

        a:active {
            color: var(--main_color);
        }

        /*Button CSS source: David Connor from codepen.io/davidicus/*/
        /*Button CSS source: David Connor from codepen.io/davidicus/*/
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
            padding-bottom: 7%;
            text-align: left;
            font-family: Helvetica;
            letter-spacing: 0.2em;
            font-weight: 300;
            font-size: 32px;
            color: white;
            outline: 15px solid;
            outline-color: green;
            outline-offset: 10px;
        }

        #SubmitData {
            border-radius: 8px;
            color: #101010;
        }

        #DateFilter {
            margin-top: 7%;
            text-align: center;
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
            outline: 15px solid;
            outline-color: green;
            outline-offset: 10px;
            
        }
        #FilterResultsInner{

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
            outline: 15px solid;
            outline-color: #A0A0A0;
            outline-offset: 10px;

        }

        #FilterR {
            font-size: 35px;
            color: white;
            font-family: Helvetica;
        }

        #Info {
            padding-top: 15px;
        }

        #SearchBar {
            background-color: #A0A0A0;
        }
        #MapContainter{
           padding-top: 100px;
           
        }
        #map{
            outline: 10px solid;
            outline-color: #A0A0A0;
            outline-offset: 10px;
        }
        #CheckBoxFilter{
            margin-top: 7%;
        }
    </style>
    <script src="./js/browse.js"></script>
    <style> 
    
                #map{
                    
                    height:400px;
                    width:100%;
                }
            </style>


</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.html" id="passivelink"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="active"><a href="browse.html" id="activelink">Browse</a></li>
                    <li><a href="index.html" id="passivelink">Social</a></li>
                    <li><a href="members.html" id="passivelink">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">My <span class="glyphicon glyphicon-user"></span> Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <p id="pagetitle">Browse</p>
    </header>

    <h1>Filters</h1>

    <div id="FilterContainer" class="row">
        <div id="CheckBoxFilter" class="col-lg-4  col-sm-6">
            <form method="POST">
                <!--Link to data filter-->
                <input type="checkbox" id="Location" name="Location" value="Outdoors">
                <label for="Location"> Outdoors</label><br>
                <input type="checkbox" id="Free" name="Free" value="Free">
                <label for="Free"> No Cost</label><br>
                <input type="checkbox" id="Campus" name="Campus" value="Campus">
                <label for="Campus"> Campus Event</label><br>
                <input type="checkbox" id="Covid" name="Covid" value="CovidSafe">
                <label for="Covid"> Covid Safe</label><br>

                <label for="Covid"> </label><br><br>
                <input type="text" id="SearchBar" name="SearchF" value="">
                <input id="SubmitData" type="submit" value="Submit">
            </form>
        </div>
        <div id="DateFilter" class="col-lg-4  col-sm-6">
            <form action="">
                <label for="Date">Date:</label>
                <input type="date" id="date" name="date">
                <input id="SubmitData" type="submit" value="Submit">
            </form>
        </div>
        <div id="MapContainter" class= "col-lg-4  col-sm-12">
            <div id="map">
            
        <h1>Location</h1>
        <script>
            function initMap(){
                //Map options
                var options ={
                    zoom:14,
                    center:{lat:26.3750,lng:- 80.1011}
                }

                //Scripts are to set location and zoom of Google Maps
                //New Map named X
                var map = new google.maps.Map(document.getElementById('map'), options);
                //Add marker
                var marker = new google.maps.Marker({
                    position:{lat:26.3750,lng:- 80.1011},
                    map:map //Adding marker to X map
                });


            }

        </script>
        
        <script async defer
        
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghzbEPTIoXqYI07JBsnIKqpWzRGV2I68&callback=initMap&libraries=&v=weekly"
            
        > </script>
            </div>
        </div>
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

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (!empty($_POST['SearchF'])) {

                    $item = $_POST['SearchF'];

                    $sql = "SELECT EN,EL,ESD,EED  FROM Events";
                    $resultA = $conn->query($sql);

                    if ($resultA->num_rows > 0) {
                        while ($row = $resultA->fetch_assoc()) {

                            if (substr_count(strtolower($row["EN"]), strtolower($item))) {
                                echo "<div id='FilterResultsInner' class = 'row'>";
                                echo "<div id='FilterR' class = 'col-lg-3  col-sm-6'> Event Name: " . "<div id='FilterR'>" . $row["EN"]  . "</div></div>";
                                echo "<div id='FilterR' class = 'col-lg-3  col-sm-6'> Event Location: " . "<div id='FilterR'>" . $row["EL"]  . "</div></div>";
                                echo "<div id='FilterR' class = 'col-lg-3  col-sm-6'> Event Start: " . "<div id='FilterR'>" . $row["ESD"]  . "</div></div>";
                                echo "<div id='FilterR' class = 'col-lg-3  col-sm-6'> Event End: " . "<div id='FilterR'>" . $row["EED"]  . "</div></div>";
                                echo "</div>";
                            }
                        }
                    } else {
                        echo "0 results";
                    }
                }
            }
            //else{
            // echo "put some info in der";
            //}

            ?>
        </div>

    </div>

</body>


</div>
</div>
<!--Source: Original Button Design "David Connor" from codepen.io/davidicus/-->
<br />
<br />


</body>

</html>