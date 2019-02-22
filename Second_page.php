<!DOCTYPE html>
<html>
<title>portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="styles/file7.css">
<!---for navbar
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
nav bar ending-->
<style>
body,h1,h5 {font-family: "Roboto", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/pesitsouth.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
    background-attachment: fixed
}

body {
    -webkit-font:antialiased;
    text-rendering:optimizelegibility;
    color:#6c6f73;
    background-color: white;
}

h1,h2,h3,h4,h5 {
    color:#333;
}

h6 {
    text-transform:uppercase;
    font-weight:bold;
    font-size:0.8rem;
    letter-spacing:0.1rem;
}
.blockquote {
    font-size:1.6rem;
    color:#333;;
    border:none;
    padding:0;
}
.blockquote-footer {
    margin:1rem 0 0;
}

#stage {
    background:url('S_img/plain.jpg') center center no-repeat;
    background-size:cover;
    color:white;
    height:100%;
    width:100%;
    display:flex;
    align-items:center;
}

#stage-caption {
    font-size:1.4rem;
    font-weight:200;
    max-width:60rem;
    margin:0 auto;
    text-align:center;
}

#stage-caption h1 {
    color:white;
    font-weight:bold;
    text-transform:uppercase;
}
#main-footer {
    background:bisque;
    color:black;
    padding:6rem 0;
    font-size:0.8rem;
}

#main-footer h6 {
    color:#718FA9;
    color:#6c6f73;
}



</style>
<body>

<div class="bgimg display-container text-black">
  <div class="w3-display-middle w3-jumbo">
    <p>welcome!</p>
  </div>
 <div class="w3-display-topleft w3-container w3-large">
    <p><button onclick="document.getElementById('Booking').style.display='block'" class="w3-button w3-grey">Booking</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-grey">Contact</button></p>
    <p><button onclick="document.getElementById('news').style.display='block'" class="w3-button w3-grey">News</button></p>
    <p><button onclick="document.getElementById('about').style.display='block'" class="w3-button w3-grey">About</button></p>
     <p><a href = "logout.php"><button onclick="document.getElementById('logout').style.display='block'" class="w3-button w3-grey">logout</button></a></p>
  </div>
    <div class="w3-display-bottomleft w3-container">
    <p class="w3-large col-sm-1"><h2>mon-fri | 3:30pm</h2></p>
    <p class="w3-large"><h1>PESIT campus bus stop</h1></p>
    <p class="w3-large"><h1>e-city,hosur road</h1></p>
  </div>
</div>

<!-- Menu Modal -->
<div id="Booking" class="w3-modal">
<div class="w3-modal-content w3-animate-zoom">
 <div class="w3-container w3-grey w3-display-container">
  <span onclick="document.getElementById('Booking').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
  <h1>Choose route:<h2>(for more reference see home page!!!)</h2></h1>
 </div>
 
  
 <div class="list-group list-group-root well">  
  <a href="#item-1" class="list-group-item" data-toggle="collapse">
  <i class="glyphicon glyphicon-chevron-right"></i>Route no.1</a>

  <div class="list-group collapse" id="item-1">
   <a href="#item-1-1" class="list-group-item" data-toggle="collapse">
   <i class="glyphicon glyphicon-chevron-right"></i>Buses available:</a>

    <div class="list-group collapse" id="item-1-1">
    <a href="insert_1.php" class="list-group-item">Bus no:KA00034</a>
    <a href="insert_2.php" class="list-group-item">Bus no:KA65640</a>
    <a href="insert_1.php" class="list-group-item">Bus no:KA84410</a>
    </div>
  
  </div>
  
  <a href="#item-2" class="list-group-item" data-toggle="collapse">
    <i class="glyphicon glyphicon-chevron-right"></i>Route no.2
  </a>
  <div class="list-group collapse" id="item-2">
    
    <a href="#item-2-1" class="list-group-item" data-toggle="collapse">
      <i class="glyphicon glyphicon-chevron-right"></i>Buses avalable:
    </a>
    <div class="list-group collapse" id="item-2-1">
      <a href="insert_1.php" class="list-group-item">Bus no:KA93233</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA56425</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA64676</a>
    </div>
    
  </div>
  
  
  <a href="#item-3" class="list-group-item" data-toggle="collapse">
    <i class="glyphicon glyphicon-chevron-right"></i>Route no.3
  </a>
  <div class="list-group collapse" id="item-3">
    
    <a href="#item-3-1" class="list-group-item" data-toggle="collapse">
      <i class="glyphicon glyphicon-chevron-right"></i>Buses available:
    </a>
    <div class="list-group collapse" id="item-3-1">
      <a href="insert_1.php" class="list-group-item">Bus no:KA763772</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA535677</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA653500</a>
    </div>

    </div>
    <a href="#item-4" class="list-group-item" data-toggle="collapse">
  <i class="glyphicon glyphicon-chevron-right"></i>Route no.4(amaatra campus)</a>

  <div class="list-group collapse" id="item-4">
   <a href="#item-4-1" class="list-group-item" data-toggle="collapse">
   <i class="glyphicon glyphicon-chevron-right"></i>Bmtc buses:</a>

    <div class="list-group collapse" id="item-4-1">
    <a href="insert_1.php" class="list-group-item">Bus no:KA000876(green)</a>
    <a href="insert_1.php" class="list-group-item">Bus no:KA887456(blue)</a>
    <a href="insert_1.php" class="list-group-item">Bus no:KA003653(red)</a>
    </div>
  
    <a href="#item-4-2" class="list-group-item" data-toggle="collapse">
    <i class="glyphicon glyphicon-chevron-right"></i>Regular buses: </a>
    <div class="list-group collapse" id="item-4-2">
      <a href="insert_1.php" class="list-group-item">Bus no:KA26968(big)</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA89762(small)</a>
      <a href="insert_1.php" class="list-group-item">Bus no:KA97458(small)</a>
    </div>

</div>
  
</div>

   



  </div>
</div>



<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact Us</h1>
    </div>
    <div class="w3-container">
                   <div class="w3-col m5">
                       <h3>Address</h3> 
                       <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  PESIT, India</p>
                       <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +88564623487</p>
                       <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> inayauzma828@gmail.com</p>
		       <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> vaninagesh@gmail.com</p>
                    </div>
    </div>
    <div class = "w3-container">
      <div id="map" style="width:100%;height:400px;background:yellow"></div>
      <script>
          function myMap() {
          var mapOptions = {
          center: new google.maps.LatLng(12.861451,77.664692),
          zoom:12,
          mapTypeId: google.maps.MapTypeId.HYBRID
        }
         var map = new google.maps.Map(document.getElementById("map"), mapOptions);
       }
    </script>
    <script src="styles/js"></script>
    </div>  
   </div>
</div>
</div>



    
<script>
     function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>


