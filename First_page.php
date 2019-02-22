<!DOCTYPE html>
<html>
    <title>Bus reservation system</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/file1.css">
    <link rel="stylesheet" href="styles/file2.css">
    <link rel="stylesheet" href="styles/file3.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <link href="" rel="styles/file5.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {
        font-family: "Lato", sans-serif
    }
    .w3-bar,h1,button {
        font-family: "Montserrat", sans-serif
    }
    .fa-anchor,.fa-bus,.fa-email {
        font-size:200px
    }
    #holder{    
        height:200px;    
        width:550px;
        background-color:#F5F5F5;
        border:1px solid #A4A4A4;
        margin-left:10px;   
        }
    #place {
        position:relative;
        margin:7px;
        }
    #place a{
        font-size:0.6em;
    }
    #place li {
         list-style: none outside none;
         position: absolute;   
    }    
    #place li:hover {
        background-color:yellow;      
    } 
    #place .seat {
        background:url("images/available_seat_img.gif") no-repeat scroll 0 0 transparent;
        height:33px;
        width:33px;
        display:block;   
    }
    #place .selectedSeat { 
        background-image:url("images/booked_seat_img.gif");          
    }
    #place .selectingSeat
    { 
        background-image:url("images/selected_seat_img.gif");        
    }
    #place .row-3, #place .row-4 {
        margin-top:10px;
    }
    #seatDescription li {
        vertical-align:middle;    
        list-style: none outside none;
        padding-left:35px;
        height:35px;
        float:left;
    }
    </style>
        <body>

        <!-- Navbar -->
        <div class="w3-top">
          <div class="w3-bar w3-grey w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
            <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signup</a>
            <a href="#route" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Routes</a>
            <a href="#our team" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Team</a>
            <a href="authentication.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
          </div>

          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
          </div>
        </div>

        <!-- Header -->
        <header class="w3-container w3-black w3-center" style="padding:128px 16px" id = "top">
          <h1 class="w3-margin w3-jumbo">LET'S GO!</h1>
        </header>

        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
          <div class="w3-content">
            <div class="w3-twothird">
              <h2>welcome to our pride!</h2>
              <h5 class="w3-padding-32"> Pes Bus Reservation System is developed for  reserving bus seats in 
        different route buses from college to their respective destination.</h5>

              <p class="w3-text-grey"><ul>
                <li><h5>students specially from hostels would be able to get seat on the basis of booking than  
                    not getting because of two or more seats are reserved by one person manually.</h5></li>
                <li><h5>for different routes,student could be able to book front seat or seat of their choice.</h5></li></ul>
              </p>

            </div>

            <div class="w3-third w3-center"> 
              <i class="fa fa-bus w3-padding-64 w3-text-black"></i>
            </div>
          </div>
        </div>

        <!-- Second Grid -->
        <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container" id = "route">
          <div class="w3-content" id = "route">
           <div class="w3-twothird" id= "route">
            <h2>Route description:</h2>
             <!--<h5 class="w3-padding-32"></h5>-->
             <p class="w3-text-grey"> 

             <ul><ol><h5>


        <p><button onclick="document.getElementById('route no.1').style.display='block'" class="w3-button w3-grey">Route no.1</button>
        </p>
        <p><button onclick="document.getElementById('route no.2').style.display='block'" class="w3-button w3-grey">Route no.2</button>
        </p>
        <p><button onclick="document.getElementById('route no.3').style.display='block'" class="w3-button w3-grey">Route no.3</button>
        </p>
        <p><button onclick="document.getElementById('route no.4(hostel buses)').style.display='block'" class="w3-button w3-grey">Route no.4</button>
        </p>
         </h5></ol></ul>


         </p>
            </div>
          </div>
        </div>

        <div class="w3-container w3-black w3-center w3-opacity w3-padding-64" id = "our team">
              <div class="w3-container w3-padding-64 w3-center" id="team">
              <h2>OUR TEAM</h2>
              <p>Meet the team:</p>

            <div class="w3-row"><br>

            <div class="w3-half">
              <img src="/images/uzmapic.jpg" style="width:45%" class="w3-circle w3-hover-opacity"> 
              <h2>Uzma Aftab</h2>
              <h4>Frontend developer</h4>
            </div>

            <div class="w3-half">
              <img src="/w3images/avatar.jpg" style="width:45%" class="w3-circle w3-hover-opacity">
              <h2>Vani N</h2>
              <h4>Backend developer</h4>
            </div>
	    <center>
	    <div class="w3-half">
              <img src="/images/uzmapic.jpg" style="width:45%" class="w3-circle w3-hover-opacity"> 
              <h2>Srujana K</h2>
              <h4>Frontend developer</h4>
            </div>
	    </center>


        </div>
        </div>
        </div>


        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">

          <a class="w3-button w3-large w3-black" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
          <a class="w3-button w3-large w3-black" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
          <a class="w3-button w3-large w3-black w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

          <div style="position:relative;bottom:10px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
            <a class="w3-button w3-theme" href="#top"><span class="w3-xlarge">
            <i class="fa fa-chevron-circle-up"></i></span></a>
          </div>
        </footer>




        <div id="route no.1" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
              <span onclick="document.getElementById('route no.1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
              <h3>Route and driver details:</h3>
            </div>
            <div class="w3-container">
                           <div class="w3-col m5">
                               <h3>Driver contact no</h3> 
                               <p>Bus no:KA0034
                            <li>Driver name:jamie</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7645490487</li>
                    </p>
                    <p>Bus no:KA65640
                            <li>Driver name:larry</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7498778487</li>
                    </p>
                    <p>Bus no:KA84410
                            <li>Driver name:anna</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +8221623487</li>
                    </p>

                            </div>
            </div>
            <div class = "w3-container">
            <div id="map" style="width:100%;height:300px;background:yellow"></div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDpcXxcOmKRElBGR4iXSCLRe1DBJYkHxFI&callback=myMap"></script>
            </div>  
           </div>
        </div>
        </div>




        <div id="route no.2" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
              <span onclick="document.getElementById('route no.2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
              <h3>Route and driver details:</h3>
            </div>
            <div class="w3-container">
                           <div class="w3-col m5">
                               <h3>Driver contact no</h3> 
                               <p>Bus no:KA93233
                            <li>Driver name:tipton</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +8400123487</li>
                    </p>
                    <p>Bus no:KA56425
                            <li>Driver name:lara</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +6563540487</li>
                    </p>
                    <p>Bus no:KA64676
                            <li>Driver name:ahana</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +9849999487</li>
                    </p>

                            </div>
            </div>
            <div class = "w3-container">
            <div id="map" style="width:100%;height:300px;background:yellow"></div>
                <script>
                  function myMap() {
                  var mapOptions = {
                  center: new google.maps.LatLng(15.861451,75.664692),
                  zoom:12,
                  mapTypeId: google.maps.MapTypeId.HYBRID
                }
                 var map = new google.maps.Map(document.getElementById("map"), mapOptions);

             var marker=new google.maps.Marker({
             position:myCenter,
                 icon : 'http://demo.crackerworld.in/images/map-blues.png',
               });

             marker.setMap(map);
               }
              </script>
        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDpcXxcOmKRElBGR4iXSCLRe1DBJYkHxFI&callback=myMap"></script>
            </div>  

        </div>
        </div>




        <div id="route no.3" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
              <span onclick="document.getElementById('route no.3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
              <h3>Route and driver details:</h3>
            </div>
            <div class="w3-container">
                           <div class="w3-col m5">
                               <h3>Driver contact no</h3> 
                               <p>Bus no:763772
                            <li>Driver name:austin</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +9005490487</li>
                    </p>
                    <p>Bus no:KA525677
                            <li>Driver name:lannister</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7445478487</li>
                    </p>
                    <p>Bus no:KA653500
                            <li>Driver name:yuri</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +8221623487</li>
                    </p>

                            </div>
            </div>
            <div class = "w3-container">
            <div id="map" style="width:100%;height:300px;background:yellow"></div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDpcXxcOmKRElBGR4iXSCLRe1DBJYkHxFI&callback=myMap"></script>
            </div>  
           </div>
        </div>
        </div>





        <div id="route no.4(hostel buses)" class="w3-modal">
          <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
              <span onclick="document.getElementById('route no.4(hostel buses)').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
              <h3>Route and driver details:</h3>
            </div>
            <div class="w3-container">
                           <div class="w3-col m5">
                               <h3>Driver contact no</h3> 
                               <p>Bus no:KA000876(bmtc)
                            <li>Driver name:manju</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7475490487</li>
                    </p>
                    <p>Bus no:KA887456(bmtc)
                            <li>Driver name:disha</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7403778487</li>
                    </p>
                    <p>Bus no:KA26968(regular)
                            <li>Driver name:jerry</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +9990623487</li>
                    </p>
                    <p>Bus no:KA89762(regular)
                            <li>Driver name:yara</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +0234323487</li>
                    </p>
                    <p>Bus no:KA97458(regular)
                            <li>Driver name:tom</li>
                                    <li><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +7647388786</li>
                    </p>

                            </div>
            </div>
            <div class = "w3-container">
            <div id="map" style="width:100%;height:300px;background:grey"></div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDpcXxcOmKRElBGR4iXSCLRe1DBJYkHxFI&callback=myMap"></script>
            </div>  
           </div>
        </div>
        </div>








        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script>

        </body>
        </html>

