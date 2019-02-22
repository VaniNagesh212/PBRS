<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "vani", "PBRS");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Reserve order by Bus_no";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table id='status' border=1>";
            echo "<tr>";
                echo "<th>USN</th>";
                echo "<th>Bus_no</th>";
                echo "<th>Route_no</th>";
                //echo "<th>Reserved_status</th>";
                echo "<th>Seat_no</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['USN'] . "</td>";
                echo "<td>" . $row['Bus_no'] . "</td>";
                echo "<td>" . $row['Route_no'] . "</td>";
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
<html>
    <head>
       <style>
            #status {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #status tr:hover {background-color: #ddd;}
            #status th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
           .Button {
                background-color: #1188dd; 
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
           <br><br>
           <center>
           
        <div class='Button'>
        <a href="First_page.php"><input type="button" class="Button" value="Back"/></a>
        </div>
        </center>
           </body>
    
</html>
