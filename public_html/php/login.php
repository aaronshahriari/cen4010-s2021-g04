<?php
$server= "localhost";
$username = "cen4010_su21_g04";
$password = "Eg1gNbkNpe";
$dbname = "cen4010_su21_g04";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
    
    if(!empty($_POST['item']))
    {
        $item = $_POST['item'];

        $sql = "SELECT ED,EN FROM Info";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["EN"] ==  $item ){
                    echo "Event Name: " . $row["EN"]. "<br>Event Name: " ."$row[ED]". "<br><br>";
                }
            
            }
        } else {
            echo "0 results";
        }


    }
        
    
}
else{
    echo "put some info in der";
}

?>