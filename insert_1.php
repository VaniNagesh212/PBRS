<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
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
//$sql = "SELECT * FROM Reserve where Reserved_status='Y' and Bus_no = 'KA00034' ";
$sql = "call get_seat()";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table>";
            echo "<tr>";
                //echo "<th>USN</th>";
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
        echo "None of the seats are Booked yet .";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>
<form action="insert_1a.php" method="post">
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
    <a href="First_page.php"><input type="button" class="Button" value="Back"/></a>

</form>
    </center>
</body>
</html>


<!--<?php
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
//$Bus_no =  'KA00034';
// attempt insert query execution
$sql = "INSERT INTO Reserve(USN,Bus_no, Seat_no, Route_no, Reserved_status ) VALUES ('$usn','KA00034','$seat_num','1','Y' )";
$sql1 = "INSERT INTO Filled(Username, Route_no, Bus_no, Seat_no) VALUES ('$usn','1','KA00034','$seat_num')";
if(mysqli_query($link,$sql)) {
	echo "seats reserved";
}
if(mysqli_query($link, $sql1)){
    echo "Records added successfully.";
    header("location:report_1.php");
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    //echo "<center>Seat not booked...!<br>Enter valid credentials to Book your seat</center>";
    //echo "<script>alert('Seat not booked...!<br>Enter valid credentials to Book your seat')</script>";
    
}
 
// close connection
mysqli_close($link);
?>-->
