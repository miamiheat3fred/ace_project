<!DOCTYPE html>

<!--
File Name: index.html
Date: 01/27/21
Programmer: Fredy Chavez
-->

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: Home</title>
    
    <!--Link to google fonts--> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.less" rel="stylesheet/less" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <!--This link was added to insert the social media icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--script for LESS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

</head>

<body>

    <div id="container">

        <?php 
            include "includes/header.inc.html.php";
        ?>
        
            <div>
                
                <!--Weather widget-->
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Weather" data-label_2="Portland, Oregon" data-font="Fira Sans" data-theme="mountains" >Weather Portland, Oregon</a>
                
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>

            </div>
        
        <main>

            <section>

                <h2>The Ace Way</h2>

                <p>
                    Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.
                </p>
                
                <h2>About the Event</h2>
                
                <p>
                
                    The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.<br><br>

                    There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
                
                </p>
                
                <section class="grid">
                
                    <div class="item1">

                        <img src="/cas222/ace_project/images/ace_images/ace10.jpg" alt="birds eye view of marathon"> 

                    </div>
                    
                    <div class="item2">
                    
                    <h3>Half Marathon (2019)</h3>
                    
                    <p>
                        The crowd cheers on marathon participant and 2019 first place winner, Michael Johnson.
                    </p>
                    
                    </div>

                    
                </section>
        
            </section>

        </main>
        
        <aside>
            
            <!--Embed social media feed-->
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=295&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </aside>

        <?php
        
             include "includes/footer.inc.html.php"; 
        
        ?>
        
    </div>

</body>

</html>