<?php
    $server = "localhost";
    $username = "cen4010_su21_g04";
    $password = "Eg1gNbkNpe";
    $dbname = "cen4010_su21_g04";

    $conn = mysqli_connect($server, $username, $password, $dbname);
    echo 'Welcome ' . $_POST["fname"] . '</br>';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo 'Check 1' . '</br>';

        $fname = $_POST["fname"];

        $lname = $_POST["lname"];

        $email = $_POST["email"];

        $pnumber = $_POST["pnumber"];

        $uname = $_POST["uname"];

        $psw = $_POST["psw"];

        $sql = "SELECT UID FROM Users";
        $result = mysqli_query($conn, $sql);

        $userid = $result->num_rows;
        echo $userid . '</br>';
        $sql1 = "INSERT INTO Users(UID ,UFN, ULN, UE, UUN, UPW, UPN) VALUES('$userid','$fname','$lname','$email','$uname','$psw',$pnumber)";
        if ($conn->query($sql1) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error . '</br>';
        }
        echo 'Check 2' . '</br>';
    }
    mysqli_close($conn);
?>
