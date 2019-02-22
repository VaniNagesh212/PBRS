<html>
    <head>
        <title>Authentication of admin</title>
        <style>
            #admin {
                text-decoration-color: white;
            }
            .wrapper{ 
            width: 500px; 
            padding: 20px; 
            align-content: center; 
            background: white;
            margin:0 auto;
            margin-top: 100px;
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
    
    <body bgcolor="black">
      <div class="wrapper">
          
    <form action="authentication.php" method="post">
        <center>
            <div id="admin">
              <br><br><br><br><br>
               <b><label>Admin password:<sup>*</sup></label></b><br><br>
               <input type="text" name="Admin_password"><br><br>
                <input type="submit" class="Button" value="Submit">
                <a href="First_page.php"><input type="Button" class="Button" value="Back"></a>
            </div>
        </center>
        </form>
        </div>
    </body>
</html>
<?php
    $password = "vani";
    if($password === $_POST["Admin_password"]) {
        header("location:admin.php");
    }
    /*else{
        echo "<script type='text/javascript'>alert('sWrong password')</script>";
        header("location:First_page.php");
    }*/
?>