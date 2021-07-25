<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Custom Browse</title>
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
            padding-bottom: 5%;
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
    <style>
        #map {

            height: 400px;
            width: 100%;
        }
    </style>


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
                <div class="slidecontainer">
                    <p>Max Cost: <span id="demo"></span></p>
                    <input type="range" min="0" max="101" value="0" class="slider" id="costRange" name='costRange'>
                </div>
                <input type="checkbox" id="oLocation" name="oLocation" value="Outdoors">
                <label for="iLocation"> Outdoors</label><br>
                <input type="checkbox" id="iLocation" name="iLocation" value="Indoors">
                <label for="oLocation"> Indoors</label><br>
                <input type="checkbox" id="Campus" name="Campus" value="Campus">
                <label for="Campus"> Campus Event</label><br>
                <input type="checkbox" id="Covid" name="Covid" value="CovidSafe">
                <label for="Covid">Mask Required</label><br>

                <label for="Covid"> </label><br><br>
                <input type="text" id="SearchBar" name="SearchF" value="">
                <input id="SubmitData" type="submit" value="Submit">
            </div>

            <div id="DateFilter" class="col-lg-4  col-sm-6">
                <label for="Date">Start Date:</label>
                <input type="date" id="sdate" name="sdate">
                <label for="Date">End Date:</label>
                <input type="date" id="edate" name="edate">
            </div>
        </form>
        <script>
            var slider = document.getElementById("costRange");
            var output = document.getElementById("demo");
            output.innerHTML = '$' + slider.value;

            slider.oninput = function() {
                output.innerHTML = '$' + this.value;
                if (this.value == this.max) {
                    output.innerHTML = '>$100'
                }
            }
        </script>

        <div id="MapContainter" class="col-lg-4  col-sm-12">
            <div id="map">

                <h1>Location</h1>
                <script>
                    function initMap() {
                        //Map options
                        var options = {
                            zoom: 14,
                            center: {
                                lat: 26.3750,
                                lng: -80.1011
                            }
                        }

                        //Scripts are to set location and zoom of Google Maps
                        //New Map named X
                        var map = new google.maps.Map(document.getElementById('map'), options);
                        //Add marker
                        var marker = new google.maps.Marker({
                            position: {
                                lat: 26.3750,
                                lng: -80.1011
                            },
                            map: map //Adding marker to X map
                        });


                    }
                </script>

                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghzbEPTIoXqYI07JBsnIKqpWzRGV2I68&callback=initMap&libraries=&v=weekly"> </script>
            </div>
            <label for="distance">Max Distance:</label>
            <select style='color:black;' name="distance" id="distance">
                <option value=""></option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value=">20">>20</option>

            </select>
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
            // Every time search
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Grabs whatever is in search bar
                $item = $_POST['SearchF'];
                
                //Grabs all events from phpmyadmin
                $sql = "SELECT EN,EL,ESD,EED,ED  FROM Events";
                $resultA = $conn->query($sql);
                
                //Runs through each event if not empty
                if ($resultA->num_rows > 0) {
                    while ($row = $resultA->fetch_assoc()) {
                        //checks if start date is entered if not it allows any event before current date
                        if (!empty($_POST['sdate'])) {
                            $ESD = $_POST['sdate'];
                            $ESDBool = $ESD < $row['ESD'];
                        } else {
                            $ESDBool = true;
                        }
                        //checks if end date is entered if not it allows any event after current date
                        if (!empty($_POST['edate'])) {
                            $EED = $_POST['edate'];
                            $EEDBool = $EED > $row['EED'];
                        } else {
                            $EEDBool = true;
                        }
                        //checks if key word is entered then compares to event names and descriptions
                        if (!empty($_POST['SearchF'])) {
                            $SearchFBool = substr_count(strtolower($row["EN"]), strtolower($item)) || substr_count(strtolower($row["ED"]), strtolower($item));
                        } else {
                            $SearchFBool = true;
                        }

                        //echos all events matching criteria
                        if ($SearchFBool && $ESDBool && $EEDBool) {
                            echo "<div id='FilterResultsInner' class = 'row'>";
                            echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . "<div id='FilterR'>" . $row["EN"]  . "</div></div>";
                            echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> Event Location: " . "<div id='FilterR'>" . $row["EL"]  . "</div></div>";
                            echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> Start: " . $row["ESD"] . "<br> End: " . $row["EED"]  . "</div>";

                            echo "</div>";
                        }
                    }
                } else {
                    echo "0 results";
                }
                // }
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
<div class="g-signin2" style="visibility: hidden"></div>



</body>

</html>