
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "vani", "PBRS");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Filled where Bus_no = 'KA65640' order by Seat_no";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div><center><table id='report_table' border=1>";
            echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Route_no</th>";
                echo "<th>Bus_no</th>";
                
                //echo "<th>Reserved_status</th>";
                echo "<th>Seat_no</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['Route_no'] . "</td>";
                echo "<td>" . $row['Bus_no'] . "</td>";
                //echo "<td>" . $row['Reserved_status'] . "</td>";
                echo "<center><td>" . $row['Seat_no'] . "</td></center>";
            echo "</tr>";
        }
        echo "</table></center></div>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "<b>No records to generate Report.<b>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<html>
    <head>
        <style>
            #report_table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #report_table tr:hover {background-color: #ddd;}
            #report_table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            .Button {
                background-color: #ff661a; 
                border: none;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <br>
        <center>
        <div class='Button'>
            <a href="logout.php"><input type="button" class="Button" value="Logout"/></a>
        </div>
        </center>
    </body>
</html>