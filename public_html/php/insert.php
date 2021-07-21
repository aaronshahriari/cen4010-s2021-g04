<?php
$server= "localhost";
$username = "cen4010_su21_g04";
$password = "Eg1gNbkNpe";
$dbname = "cen4010_su21_g04";

$conn = mysqli_connect($server, $username, $password, $dbname);

// if(isset($_POST['submit'])){
    
//     if(!empty($_POST['fname']) && !empty($_POST['act']))
//     {
        // $fname = $_POST['fname'];
        // $act = $_POST['act'];

        $EN = 'Women of Pop and Rock Brunch & Bingo';
        $EL = '6450 N Federal Hwy, Boca Raton, FL';
        $ESD = '0822 0800';
        $EED = '0822 1100';

        $query = "insert into Events(EN, EL, ESD, EED) values('$EN','$EL','$ESD', '$EED')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        if($run){
            // $sql = "SELECT ED,EN FROM Events";
            //$result = $conn->query($sql);
            echo "Data inserted";

            // if ($result->num_rows > 0) {
            //     while($row = $result->fetch_assoc()) {
            //     echo "Event Name: " . $row["EN"]. "<br>Event Name: " ."$row[ED]". "<br><br>";
            //     }
            // }
        }
//         else
//         {
//             echo "rip";
//         }
//     }
        
    
// }
// else{
//     echo "Put info in both categories";
// }

?>