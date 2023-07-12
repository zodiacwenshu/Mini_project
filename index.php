<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Disaster Management  Utility</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            #map{
                height: 700px;
                width: 100%;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Disaster Management</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#Impcontacts">Imoportant Contacts</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Report">Report Disaster</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div id="map"></div>

        <section class="page-section" id="Impcontacts">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Important Contacts</h2>
                    <h3 class="section-subheading text-muted">Some useful contact numbers</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Police Station in your area</h4>
                        <p class="text-muted">100</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-ambulance fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Hospital Conmtact Number</h4>
                        <p class="text-muted">28932462</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-earth fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">NGO near You</h4>
                        <p class="text-muted">97699 86440</p>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Contact-->
        <section class="page-section" id="Report">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Report Disaster</h2>
                    <h3 class="section-subheading text-muted">Fill the below form to report the disaster immediately</h3>
                </div>
                <form id="ReportForm align-items-center" action = "submit.php" method="POST" enctype="multipart/form-data">
                    <div class="row align-items-STRETCH mb-10">
                        
                        <div class="col-md-6">
                                <div class="form-group ">
                                    <h3 class="section-subheading text-muted">Select image of disaster</h3>
                                    <input type="file" class="form-control-file" id="disaster_img" name="disaster_img" required>
                                    <div class="invisible">
                                        <textarea id='latitude' name='latitude'></textarea>
                                        <textarea id='longitude' name='longitude'></textarea>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <h3 class="section-subheading text-muted ", style="margin-left=4rem">Select disaster</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Fire" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <h7 class="section-heading ">Fire</h7>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Flood">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <h7 class="section-heading ">Flood</h7>           
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Earthquake">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        <h7 class="section-heading ">Earthquake</h7>           
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Riots">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        <h7 class="section-heading ">Riots</h7>           
                                    </label>
                                </div>
                                </br>
                                </br>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" name="submit">Report</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <script>
            function initMap(){
                function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(setLoaction);
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
                }
                var map;
                function setLoaction(position) {
                    
                    var lat = (position.coords.latitude);
                    document.getElementById("latitude").textContent = lat;
                    var lng = (position.coords.longitude);
                    document.getElementById("longitude").textContent = lng;
                    var location = {lat,lng};
                    var map = new google.maps.Map(document.getElementById("map"),{
                        zoom : 15,
                        center: location
                    });
                    // console.log(typeof(location)); 
                    // console.log(location); 
                     var marker_loc = new google.maps.Marker({
                          position: location,
                          map: map
                     })
                    var location1={lat:19.0763,lng:72.8654}
                    var marker_loc2 = new google.maps.Marker({
                          position: location1,
                          map: map
                     })

                     <?php
                    $con_example=mysqli_connect("localhost", "root", "" , "disastter_db");
                    $sel_query_example="SELECT Loc_Latitude,Loc_Longitude from disaster_details";
                    $query_example=mysqli_query($con_example,$sel_query_example);
                    $res_query = mysqli_fetch_array($query_example);
                    // echo $res_query['Loc_Latitude'];
                ?>
                var marker_lat= parseFloat(<?php echo $res_query['Loc_Latitude'];?>)
                var marker_lng= parseFloat(<?php echo $res_query['Loc_Longitude'];?>)
                var loc_marker= {lat:marker_lat, lng:marker_lng}
                console.log(loc_marker)
                console.log(typeof(loc_marker))
                var marker_loc1 = new google.maps.Marker({
                          position: marker_loc1,
                          map: map
                     })
                    <?php
                    $con=mysqli_connect("localhost", "root", "" , "disastter_db");
                    $sel_query="SELECT * from disaster_details";
                    $query=mysqli_query($con,$sel_query);
                    $num=mysqli_num_rows($query);
                    while($res=mysqli_fetch_array($query)){
                    ?>
                    var marker_lat= parseFloat(<?php echo $res['Loc_Latitude'];?>)
                    // console.log(typeof(marker_lat));
                    marker_lng = parseFloat(<?php echo $res['Loc_Longitude'];?>)
                    // console.log(typeof(marker_lng));
                    var loc_marker = {lat:marker_lat, lng:marker_lng};
                    // loc_marker = new google.maps.LatLng(marker_lat,marker_lng);
                    // console.log(typeof(loc_marker));
                    // console.log(loc_marker);
                    var marker = new google.maps.Marker({
                        position: loc_marker,
                        map: map
                    })
                    <?php
                    }
                    ?>
                    var marker = new google.maps.Marker({
                        position:loc_marker,
                        map: map
                    })
                    console.log(loc_marker);
                }
                // var marker_lat,marker_lng;
                // var loc_marker;
                // var marker;


                getLocation();
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=APIKEY&callback=initMap" >
        </script>
        <?php
        $con_notify=mysqli_connect("localhost", "root", "" , "disastter_db");

        $sel_query_notify="SELECT * from authorities";
        $query_notify= mysqli_query($con,$sel_query_notify);

        $sel_query_nos_fire="SELECT * from disaster_details where type='fire'";
        $query_nos_fire=mysqli_query($con,$sel_query_nos_fire);

        $query_nos=mysqli_query($con,$sel_query_nos_fire);
        $num_notify_fire=mysqli_num_rows($query_nos);

        

        if($num_notify_fire>=10){
            $sel_latitude_fire="SELECT Loc_Latitude from disaster_details where type='fire'";
            $sel_longitude_fire="SELECT Loc_Longitude from disaster_details where type='fire'";

            $query_latitude_fire=mysqli_query($con,$sel_latitude_fire);
            $query_longitude_fire=mysqli_query($con,$sel_longitude_fire);

            $lat_fire=mysqli_fetch_row($query_latitude_fire);
            $lng_fire=mysqli_fetch_row($query_longitude_fire);


            while($res_notify=mysqli_fetch_array($query_notify)){
                $to= $res_notify['Authority_Email'];
                // echo $to;
                // print_r($lat_fire);
                $subject= 'Fire Reported';
                $message= 'a disaster is reported at a latitude '. $lat_fire[0]. 'longitude '. $lng_fire[0];
                $headers= 'From:crce.9424.cs@gmail.com';
                //echo $message;
                mail($to, $subject, $message, $headers);
            }
            
        }

        $sel_query_nos_flood="SELECT * from disaster_details where type='flood'";
        $query_nos_flood=mysqli_query($con,$sel_query_nos_flood);

        $query_nos=mysqli_query($con,$sel_query_nos_flood);
        $num_notify_flood=mysqli_num_rows($query_nos);

        

        if($num_notify_flood>=10){
            $sel_latitude_flood="SELECT Loc_Latitude from disaster_details where type='flood'";
            $sel_longitude_flood="SELECT Loc_Longitude from disaster_details where type='flood'";

            $query_latitude_flood=mysqli_query($con,$sel_latitude_flood);
            $query_longitude_flood=mysqli_query($con,$sel_longitude_flood);

            $lat_flood=mysqli_fetch_row($query_latitude_flood);
            $lng_flood=mysqli_fetch_row($query_longitude_flood);


            while($res_notify=mysqli_fetch_array($query_notify)){
                $to= $res_notify['Authority_Email'];
                // echo $to;
                // print_r($lat_flood);
                $subject= 'flood Reported';
                $message= 'a disaster is reported at a latitude '. $lat_flood[0]. 'longitude '. $lng_flood[0];
                $headers= 'From:crce.9424.cs@gmail.com';
                //echo $message;
                //mail($to, $subject, $message, $headers);
            }
            
        }

        $sel_query_nos_earthquake="SELECT * from disaster_details where type='earthquake'";
        $query_nos_earthquake=mysqli_query($con,$sel_query_nos_earthquake);

        $query_nos=mysqli_query($con,$sel_query_nos_earthquake);
        $num_notify_earthquake=mysqli_num_rows($query_nos);

        

        if($num_notify_earthquake>=10){
            $sel_latitude_earthquake="SELECT Loc_Latitude from disaster_details where type='earthquake'";
            $sel_longitude_earthquake="SELECT Loc_Longitude from disaster_details where type='earthquake'";

            $query_latitude_earthquake=mysqli_query($con,$sel_latitude_earthquake);
            $query_longitude_earthquake=mysqli_query($con,$sel_longitude_earthquake);

            $lat_earthquake=mysqli_fetch_row($query_latitude_earthquake);
            $lng_earthquake=mysqli_fetch_row($query_longitude_earthquake);


            while($res_notify=mysqli_fetch_array($query_notify)){
                $to= $res_notify['Authority_Email'];
                // echo $to;
                // print_r($lat_earthquake);
                $subject= 'earthquake Reported';
                $message= 'a disaster is reported at a latitude '. $lat_earthquake[0]. 'longitude '. $lng_earthquake[0];
                $headers= 'From:crce.9424.cs@gmail.com';
                //echo $message;
                //mail($to, $subject, $message, $headers);
            }
            
        }

        $sel_query_nos_riots="SELECT * from disaster_details where type='riots'";
        $query_nos_riots=mysqli_query($con,$sel_query_nos_riots);

        $query_nos=mysqli_query($con,$sel_query_nos_riots);
        $num_notify_riots=mysqli_num_rows($query_nos);

        

        if($num_notify_riots>=10){
            $sel_latitude_riots="SELECT Loc_Latitude from disaster_details where type='riots'";
            $sel_longitude_riots="SELECT Loc_Longitude from disaster_details where type='riots'";

            $query_latitude_riots=mysqli_query($con,$sel_latitude_riots);
            $query_longitude_riots=mysqli_query($con,$sel_longitude_riots);

            $lat_riots=mysqli_fetch_row($query_latitude_riots);
            $lng_riots=mysqli_fetch_row($query_longitude_riots);


            while($res_notify=mysqli_fetch_array($query_notify)){
                $to= $res_notify['Authority_Email'];
                // echo $to;
                // print_r($lat_riots);
                $subject= 'riots Reported';
                $message= 'a disaster is reported at a latitude '. $lat_riots[0]. 'longitude '. $lng_riots[0];
                $headers= 'From:crce.9424.cs@gmail.com';
                //echo $message;
                //mail($to, $subject, $message, $headers);
            }
            
        }



        ?>
    </body>
</html>
