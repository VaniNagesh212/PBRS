<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> seat booking</title>
</head>
<body>
<center>
<div>
    <img src="images/seatplan.gif" alt="Seat booked" width="500" height="200">
</div>
<div>
  <!-- <a href="status.php"><input type="button" value="Selected_seats"/></a>-->
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
                echo "<th>Seats already booked</th>";
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
</div>
<form action="insert.php" method="post">
    <p>
        <label for="firstName">USN:</label>
        <input type="text" name="usn" id="firstName">
    </p>
    <p>
        <label for="lastName">Seat-no:</label>
        <input type="text" name="seat_num" id="lastName">
    </p>
   <!-- <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>-->
    <input type="submit" value="Submit">
</form>
    </center>
</body>
</html>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "vani", "PBRS");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$usn = mysqli_real_escape_string($link, $_REQUEST['usn']);
$seat_num = mysqli_real_escape_string($link, $_REQUEST['seat_num']);
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO Reserve(USN,Bus_no, Route_no, Reserved_status, Seat_no) VALUES ('$usn','1','1','Y', '$seat_num')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:Second_page.php");
} /*else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}*/
 
// close connection
mysqli_close($link);
?>