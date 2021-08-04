<?php

$server = "localhost";
$username = "cen4010_su21_g04";
$password = "Eg1gNbkNpe";
$dbname = "cen4010_su21_g04";

$conn = mysqli_connect($server, $username, $password, $dbname);
// echo 'Welcome ' . $_POST["fname"] . '</br>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //runs http request to get google info
    $url = 'https://oauth2.googleapis.com/tokeninfo?id_token=' . $_POST['idToken'];

    $result = json_decode(file_get_contents($url), true);
    if ($result === FALSE) {
    }

    // echo var_dump($result);
    // echo $result['sub'] + 0;
    // echo (int) $result['sub'];

    if ($result["email_verified"] == true) {
        // if (false) {

            // $sql = "SELECT EN,ED FROM USERS";
            // $result = $conn->query($sql);
            // echo var_dump($result);
            // if ($result->num_rows > 0) {
            //     while($row = $result->fetch_assoc()) {
            //         if($row["EN"] ==  $item ){
            //             echo "Event Name: " . $row["EN"]. "<br>Event Name: " ."$row[ED]". "<br><br>";
            //         }
                
            //     }
            // } else {
            //     echo "0 results";
            // }

        // $sql = "SELECT UID FROM USERS";
        // $result = mysqli_query($conn, $sql);
          
        $userCreated = false;
        // if ($userIds->num_rows > 0) {
        //     while ($row = mysqli_fetch_assoc($userIds)) {
        //         if ($row["UID"] == $result['sub']) {
        //             echo "User id: " . $row["EN"];
                    // $userCreated = true;
        //             break;
        //         }
        //     }
        // }

        if (!$userCreated) {

            $UID = $result['sub'];
            
            setcookie('UID', $UID, time() + (86400 * 30), "/");
            echo "<script>console.log(' New UID". $UID."');</script>";

            $UFN = $result["given_name"];

            $ULN = $result["family_name"];

            $UE = $result["email"];

            $UPP = $result["picture"];

            $sql2 = "INSERT INTO Users(UID, UFN, ULN, UE, UPP) VALUES('$UID','$UFN','$ULN','$UE','$UPP')";
            $sql3 = "UPDATE Users SET UPP = '$UPP' WHERE UID = $UID";
            if (mysqli_query($conn, $sql2)) {
                echo "New record created successfully";
            } else {
                mysqli_query($conn, $sql3);
                echo "Error: " . $sql2 . "<br>" . $conn->error . '</br>';
            }
        }
    }


    mysqli_close($conn);
    //Format of google verification
    // {
    //     "iss": "accounts.google.com",
    //     "azp": "1084043775881-4ls331bisg1gcnpb1uev003uhsm529rb.apps.googleusercontent.com",
    //     "aud": "1084043775881-4ls331bisg1gcnpb1uev003uhsm529rb.apps.googleusercontent.com",
    //     "sub": "100814555182490506298",
    //     "email": "mckendrethe1st@gmail.com",
    //     "email_verified": "true",
    //     "at_hash": "yBFJ8tpL0qXHqAnIqU96tA",
    //     "name": "Terrence Charitable",
    //     "picture": "https://lh3.googleusercontent.com/a/AATXAJyGUnEPeJCXwjRg8jA_0W0O1R7U1MlR7VVF5d7q=s96-c",
    //     "given_name": "Terrence",
    //     "family_name": "Charitable",
    //     "locale": "en",
    //     "iat": "1626658692",
    //     "exp": "1626662292",
    //     "jti": "f94cfa53917dbaefce4ea16a0112c78ef5e8b4ef",
    //     "alg": "RS256",
    //     "kid": "7f548f6708690c21120b0ab668caa079acbc2b2f",
    //     "typ": "JWT"
    //   }
}
