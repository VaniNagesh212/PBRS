<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "vani", "PBRS");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Reserve where Reserved_status='Y'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table>";
            echo "<tr>";
               // echo "<th>USN</th>";
                //echo "<th>Bus_no</th>";
                //echo "<th>Route_no</th>";
                //echo "<th>Reserved_status</th>";
                echo "<th>Seat_no</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                //echo "<td>" . $row['USN'] . "</td>";
                //echo "<td>" . $row['Bus_no'] . "</td>";
                //echo "<td>" . $row['Route_no'] . "</td>";
                //echo "<td>" . $row['Reserved_status'] . "</td>";
                echo "<center><td>" . $row['Seat_no'] . "</td></center>";
            echo "</tr>";
        }
        echo "</table></center>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>