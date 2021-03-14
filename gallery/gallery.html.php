<!DOCTYPE html>

<!--
File Name: gallery.html.php
Date: 02/24/21
Programmer: Fredy Chavez
-->

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: Gallery</title>
    
    <!--Link to google fonts--> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <!--This link was added to insert the social media icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--script for LESS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

</head>

<body>
    
  <div id="container">
    
         <?php 

            include "../includes/header.inc.html.php";

          ?>

        <main>
            
            <h1><!--heading from js file--></h1>
            
            <div class="gallery-photos">

                    <div class="thumbnail" id="imgNames">

                        <div><img class="thumbnail-inner" src="" alt="Athletes running into water."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participants enjoying the marathon."></div>
                        <div><img class="thumbnail-inner" src="" alt="Bike riders crossing the finish line."></div>
                        <div><img class="thumbnail-inner" src="" alt="Athletes commencing the swim course."></div>
                        <div><img class="thumbnail-inner" src="" alt="Ground view of bike riders"></div>
                        <div><img class="thumbnail-inner" src="" alt="Participants embracing eachother after marathon."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participant high fiving audience."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participant enjoying the run course."></div>
                        <div><img class="thumbnail-inner" src="" alt="Wheelchair marathon participants finishing strong."></div>
                        <div><img class="thumbnail-inner" src="" alt="Marathon winner crossing the finish line."></div>
                        <div><img class="thumbnail-inner" src="" alt="Camera angle of participant numbers."></div>
                        <div><img class="thumbnail-inner" src="" alt="Bike riders competing."></div>
                        <div><img class="thumbnail-inner" src="" alt="Marathon participants focused"></div>
                        <div><img class="thumbnail-inner" src="" alt="Sprint partiicpants in the middle of a lap."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participants enjoying the marathon."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participants running along side eachother."></div>
                        <div><img class="thumbnail-inner" src="" alt="Participants running along side eachother."></div>
                        <div><img class="thumbnail-inner" src="" alt="Overview of partipants running towards finish line."></div>

                    </div> <!-- thumbnail -->
                
                    <div class="bigPhoto">
                    
                        <img id="bigPhoto" src="" alt="larger image of thumbnail">
                        <br />

                        <div id="caption"></div>
                    
                    </div> <!-- bigPhoto -->

            </div> <!-- gallery-photos -->

        </main>
      
      
      <aside>
            
            <!--Embed social media feed-->
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=295&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

      </aside>

        <?php

            include "../includes/footer.inc.html.php"; 

        ?>
    <!--Javascript/Jquery links-->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/gallery.js"></script>

</div>

</body>

</html>