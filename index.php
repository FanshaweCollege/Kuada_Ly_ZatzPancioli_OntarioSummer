<?php

require_once('/admin/config.php');

if(isset($_POST['subscribe'])){
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);
    if(empty($email) || empty($fname)){
        $message = 'Please fill the required fields';
    }else{
    $result = sendForm($fname,$lname,$email,$country);
    $message = $result;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ontario Summer</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.2/vue-router.min.js"></script>
    <link rel="stylesheet" href="css/foundation.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

    <main>
        <div id="app">

        <section class="hero-section_beer">
                <div class="nav row">
                        <div class="nav-header">
                          <div class="nav-title large-4 medium-4  columns">
                          <router-link :to="{name:'homepage'}"><img src="images/mainLogo.png"></router-link>
                          </div>
                        </div>
                        <div class="nav-btn">
                          <label for="nav-check">
                            <span></span>
                            <span></span>
                            <span></span>
                          </label>
                        </div>
                        <input type="checkbox" id="nav-check">
                        <div class="nav-links large-8 medium-8 columns">
                          <a href="#video" id="info">INFORMATION</a>
                          <a href="#things">THINGS TO DO</a>
                          <a href="#events">EVENTS</a>
                          <a href="#plan">PLAN YOUR TRIP</a>
                        </div>
                      </div>
        </section>

        <div>
        <router-view></router-view>
        </div>

        <footer>
          <section class="small-12 medium-12 large-12 columns footer">
          <div class="footerBox">
          <div class="small-12 medium-12 large-12 columns footerBox">
              <div class="logos large-4 medium-4 small-12 columns">
              <p>FIND US ON</p>
              <a href="#"><i class="fab fa-facebook-f" style="font-size:30px;color:white"></i></a>
              <a href="#"><i class="fab fa-instagram" style="font-size:30px;color:white"></i></a>
              <a href="#"><i class="fab fa-twitter" style="font-size:30px;color:white"></i></a>
              <a href="#"><i class="fab fa-youtube 3x" style="font-size:30px;color:white"></i></a>
              </div>

              <div class="textLogo large-push-4 medium-4 small-12 columns"><router-link :to="{name:'homepage'}"><img src="images/textLogo.png"></router-link></div>

              <div class="copyrights large-pull-4 medium-4 small-12 columns"><p>© Copyright 2019 Ontario Summer. All Rights Reserved.</p></div>

          </div>
          </section>
          </footer>

        </div>
    </main>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
 	<script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="module" src="js/main.js"></script>
</body>
</html>