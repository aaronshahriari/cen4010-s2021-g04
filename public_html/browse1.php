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
    <link rel="stylesheet" href="./css/browse1.css">

    <!-- Navbar JS -->
    <script src='./js/navbar.js'></script>
    <script src="./js/browse.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function geocode(LOC, mapID) {

            console.log(mapID);
            axios.get("https://maps.googleapis.com/maps/api/geocode/json", {
                    params: {
                        address: LOC,
                        key: "AIzaSyDmNoJWyzQgxnVBK06VxqUMS_6mTQ8beNA"
                    }
                })
                .then(function(response) {
                    //log full response
                    console.log(response);
                    //formatted address
                    var formattedAddress = response.data.results[0].formatted_address;
                    console.log(formattedAddress)
                    var formattedAddressOutput = `
                                    <ul class = "list-group">
                                        <li class= "list-group-item">${formattedAddress}</li>
                                    </ul>
                                    `;

                    var addressComponents = response.data.results[0].address_components;
                    var addressComponentsOutput = '<ul class = "list-group">';

                    for (var i = 0; i < addressComponents.length; i++) {
                        addressComponentsOutput += `
                                        <li 
                                        class="list-grout-item><strong>${addressComponents[i].types[0]}
                                        </strong>:${addressComponents[i].long_name}</li>
                                        `;
                    }
                    addressComponentsOutput += '</ul>'

                    //Geometry
                    var lat = response.data.results[0].geometry.location.lat;
                    var lng = response.data.results[0].geometry.location.lng;

                    // for (var x of response.data.results) {
                    //     console.log(response.data.results[x].geometry.location.lat);
                    // }
                    initMap(lat, lng, mapID);
                    // return({lat,lng});




                    //document.getElementById("Resultsmap").innerHTML= 
                    //src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghzbEPTIoXqYI07JBsnIKqpWzRGV2I68&callback=ResultsMap";



                    //var geometryOutput =  `
                    //<ul class = "list-group">
                    //    <li class= "list-group-item"><strong>Latitude</strong>:${lat}</li>
                    //    <li class= "list-group-item"><strong>Longitude</strong>:${lng}</li>
                    //</ul>
                    //`;

                    //Output to app
                    //document.getElementById("formatted-address").innerHTML= 
                    //formattedAddressOutput;
                    //document.getElementById("address-components").innerHTML= 
                    //addressComponentsOutput;
                    //document.getElementById("geometry").innerHTML= 
                    //geometryOutput;
                })
                .catch(function(error) {
                    console.log(error);
                });

        }

        //var latitude = 26.3750;
        //var long = -80.1011;
        var latArray = [];
        var lngArray = [];
        var mapArray = [];
        // var loca = {};

        function initMap(lat = 26.3750, lng = -80.1011, mapId = 'map0') {
            // var lat = 26.3750;
            // var lng = -80.1011;
            //Scripts are to set location and zoom of Google Maps
            //New Map named X
            // loca[loc] = {
            //     lat: lat,
            //     lng: lng
            // };
            // console.log(x);
            latArray.push(lat);
            lngArray.push(lng);
            mapArray.push(mapId);

            // console.log(lngArray);
            // console.log(loca);

            for (var i = 0; i < mapArray.length; i++) {
                // console.log(div);
                // console.log('initMap ' + i.innerHTML);
                //     var Coords = geocode(i.innerHTML);
                //     console.log('Coords ' + Coords);

                var options = {
                    zoom: 14,
                    center: {
                        lat: latArray[i],
                        lng: lngArray[i]
                    },
                    scaleControl: false,
                    mapTypeControl:false,
                    streetViewControl:false,
                    overviewMapControl:true,
                    rotateControl:false,
                    //disableDefaultUI: true
                }
                var mapDiv = document.getElementById(mapArray[i]);

                var map = new google.maps.Map(mapDiv, options);

                // console.log(lat);
                // Map options

                //Add marker
                var marker = new google.maps.Marker({
                    position: {
                        lat: latArray[i],
                        lng: lngArray[i]
                    },
                    map: map //Adding marker to X map
                });
            }
            console.log(lngArray);
            console.log(latArray);
            console.log(mapArray);


        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCghzbEPTIoXqYI07JBsnIKqpWzRGV2I68&callback=initMap"></script> 


    <style>


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
                    <h1>Max Cost: <span id="demo"></span></h1>
                    <input type="range" min="0" max="101" value="0" class="slider" id="costRange" name='costRange'>
                </div>
                <input type="checkbox" id="oLocation" name="Outdoors" value="Outdoors">
                <label for="oLocation"> Outdoors</label><br>
                <input type="checkbox" id="iLocation" name="Indoors" value="Indoors">
                <label for="iLocation"> Indoors</label><br>
                <input type="checkbox" id="Campus" name="Campus" value="Campus">
                <label for="Campus"> Campus Event</label><br>
                <input type="checkbox" id="Covid" name="Covid" value="Mask Required">
                <label for="Covid">Mask Required</label><br>
                <label for="SearchF"> </label><br><br>
                <input type="text" id="SearchBar" name="SearchF" value="">
            </div>
            <div id="DateFilter" class="col-lg-4  col-sm-6">
                <label for="Date"><h1>Start Date:</h1></label>
                <input type="date" id="sdate" name="sdate">
                <br><br>
                <label for="Date"><h1>End Date:</h1></label>
                <input type="date" id="edate" name="edate">
                <br><br><br>
                <label for="mDistance"><h1>Max Distance:</h1></label>
                <select style='color:black;' name="mDistance" id="mDistance">
                    <option value=""></option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="-1">>30</option>

                </select>
            </div>

            <div id="MapContainter" class="col-lg-4  col-sm-12">
                <div class="ResultsMap" id="map0">

                </div>
                <label for="SearchF"><h1>Current Location:</h1></label>
                <label for="SearchF"> </label>
                <input type="text" id="searchLoc" name="searchLoc" value="" placeholder="Enter city or zip code">
                <input type="hidden" id='latCoor' name="latCoor" onload="" value="">
                <input type="hidden" id='latCoor' name="latCoor" value="">

                <button type="button" onclick="geocode(document.getElementById('searchLoc').value);">Set Location</button>
            </div>
            <input name='Search' id="SubmitData" type="submit" value="Search"></input>

        </form>
        <script>
            var slider = document.getElementById("costRange");
            var output = document.getElementById("demo");
            output.innerHTML = '$' + slider.value;

            slider.oninput = function() {
                output.innerHTML = '$' + this.value;
                if (this.value == this.max) {
                    output.innerHTML = '>$100';
                }
            }
        </script>


    </div>
    <div id="FilterResults" class="row">

        <h1>Results</h1>
        <div id="Info" class="col-lg-12">
            <?php

            // function deg2rad($deg)
            // {
            //     return $deg * (pi() / 180);
            // }

            function distFromCoord($lat1, $lon1, $lat2, $lon2)
            {
                $rad = 3959; // Radius of the earth in km
                $dLat = ($lat2 - $lat1) * (pi() / 180);  
                $dLon = ($lon2 - $lon1) * (pi() / 180);
                $a =
                    sin($dLat / 2) * sin($dLat / 2) +
                    cos(($lat1) * (pi() / 180)) * cos(($lat2) * (pi() / 180)) *
                    sin($dLon / 2) * sin($dLon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                $dist = $rad * $c; 
                return $dist;
            }
            


            $server = "localhost";
            $username = "cen4010_su21_g04";
            $password = "Eg1gNbkNpe";
            $dbname = "cen4010_su21_g04";

            $conn = mysqli_connect($server, $username, $password, $dbname);
            // Every time search
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['Search'])) {


                    //Grabs whatever is in search bar
                    $item = $_POST['SearchF'];

                    //Grabs all events from phpmyadmin
                    $sql = "SELECT EID,EN,EL,ESD,EED,ED,EC  FROM Events";
                    $resultA = $conn->query($sql);


                    //Runs through each event if not empty
                    if ($resultA->num_rows > 0) {
                        $mapID = 0;
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

                            if (!empty($_POST['costRange'])) {
                                $CostBool = $row["EC"] < $_POST['costRange'] || $_POST['costRange'] == 101;
                            } else {
                                $CostBool = $row["EC"] == 0;
                            }

                            if (!empty($_POST['Outdoors'])) {
                                $Checkbox = substr_count(strtolower($row["ED"]), strtolower($_POST['Outdoors']));
                            } else {
                                $Checkbox = true;
                            }
                            if (!empty($_POST['Indoors'])) {
                                $Checkbox1 = substr_count(strtolower($row["ED"]), strtolower($_POST['Indoors']));
                            } else {
                                $Checkbox1 = true;
                            }
                            if (!empty($_POST['Campus'])) {
                                $Checkbox2 = substr_count(strtolower($row["ED"]), strtolower($_POST['Campus']));
                            } else {
                                $Checkbox2 = true;
                            }
                            if (!empty($_POST['Covid'])) {
                                $Checkbox3 = substr_count(strtolower($row["ED"]), strtolower($_POST['Covid']));
                            } else {
                                $Checkbox3 = true;
                            }
                            $distance = "";
                            if (!empty($_POST['searchLoc'])) {


                                $origin = str_replace(" ", "", $_POST['searchLoc']);
                                $apiO = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . $origin . "&key=AIzaSyDmNoJWyzQgxnVBK06VxqUMS_6mTQ8beNA");
                                $dataO = json_decode($apiO);
                                $latO  = $dataO->results[0]->geometry->location->lat;
                                $lonO = $dataO->results[0]->geometry->location->lng;

                                $destination =  str_replace(" ", "", $row['EL']);;
                                $apiD = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . $destination . "&key=AIzaSyDmNoJWyzQgxnVBK06VxqUMS_6mTQ8beNA");
                                $dataD = json_decode($apiD);
                                $latD  = $dataD->results[0]->geometry->location->lat;
                                $lonD = $dataD->results[0]->geometry->location->lng;

                                $distance = round(distFromCoord($latO, $lonO, $latD, $lonD));
                                $distanceBool = (!empty($_POST['mDistance']) && $_POST['mDistance'] > $distance) || (empty($_POST['mDistance']));
                            } else {
                                // $distance = '';
                                $distanceBool = true;
                            }


                            //echos all events matching criteria
                            if ($SearchFBool && $CostBool && $ESDBool && $EEDBool && $Checkbox && $Checkbox1 && $Checkbox2 && $Checkbox3 && $distanceBool) {
                                $mapID++;





                                // array_push($LOC, $row["EL"]);
                                echo "<div id='FilterResultsInner' class = 'row'>";
                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> " . "<div id='FilterR'><div id='NameE'><h1>" . $row["EN"]  . "</h1></div></div></div>";
                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-6'> <h1>Event Location:</h1>  
                                <div class='ResultsMap' id='map" . $mapID . "'></div>
                                Distance:
                                " . $distance . " mi
                                </div>

                                <script>
                                geocode('" . $row['EL'] . "', 'map" . $mapID  . "'); 
                                </script>";

                                echo "<div id='FilterR' class = 'col-lg-4  col-sm-12'><div id ='date'> <h1>Start-<br></h1> " . date_format(date_create($row["ESD"]), "M d Y h:i A") . "<br> <h1>End-<br></h1></div> " . date_format(date_create($row["EED"]), "M d Y h:i A")  . "</div>";
                                echo "<div id='Desc' class = 'col-sm-12'>Cost: $". $row["EC"] ."<br><h2> Description:</h2><br>" . $row["ED"] . "</div>";
                                echo "<form method='POST'>
                                <input type='hidden' id='addEvent' name='EID' value='" . $row["EID"] . "'>
                                <button name='Add' value = 'Add Event'>Add Event</button>
                                </form>";
                                echo "</div>";
                            }
                        }
                        // echo "<script> geocode();</script>";
                    } else {
                        echo "0 results";
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