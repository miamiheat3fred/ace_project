<!DOCTYPE html>

<!--
File Name: courseDetails.html.php
Date: 03/03/21
Programmer: Fredy Chavez
-->

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: Course Details</title>
    
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
        
            <div>
                
                <!--Weather widget-->
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Weather" data-label_2="Portland, Oregon" data-font="Fira Sans" data-theme="mountains" >Weather Portland, Oregon</a>
                
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>

            </div>
        
        <main>

            <section>

                <h1>Heading</h1>
                
                <h2 id ="h2center">Start Times</h2>
        
                    <table>

                        <tr>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        <tr>
                            <td>Long Course Triathlon - 7:00 AM</td>
                            <td>Sprint Triathlon - 8:00 AM</td>
                        </tr>
                        <tr>
                            <td>10K - 7:15 AM</td>
                            <td>Try-a-Tri - 8:20 AM</td>
                        </tr>
                        <tr>
                        
                            <td>Half Marathon - 7:15 AM</td>
                            <td>Splash n Dash - 12:00 PM</td>
                        </tr>
                        <tr>
                            
                            <td>Olympic Triathlon - 7:30 AM</td>
                            <td></td>
                        </tr>


                    </table><br>
                
                    <dl>
                        
                        <h2>Essential Information to Know</h2>
                        
                        <dt>Packet Pickup</dt>
                            <dd>
                                <p>
                                    All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
                                </p>
                            </dd>

                        <dt>Course Water Temperature</dt>
                            <dd>
                                <p>
                                    WATER TEMPERATURE is expected to be between 62 & 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.
                                </p>
                            </dd><br>
                        
                        <h2>Courses</h2>
                        
                        <dt>Long SWIM - 1.2 miles</dt>
                            <dd>
                                <p>
                                    Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
                                </p>
                            </dd>
                        
                        <dt>Long BIKE - 58 miles</dt>
                            <dd>
                                <p>
                                    A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.
                                </p>
                            </dd>
                        
                        <dt>Long RUN - 13.1 miles</dt>
                            <dd>
                                <p>
                                    A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).
                                </p>
                            </dd>
                        
                        <dt>Olympic SWIM - 1,500 meters</dt>
                            <dd>
                                <p>
                                    Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
                                </p>
                            </dd>
                        
                        <dt>Olympic BIKE - 28 miles</dt>
                            <dd>
                                <p>
                                    A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.
                                </p>
                            </dd>
                        
                        <dt>Olympic RUN - 10K</dt>
                            <dd>
                                <p>
                                    A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).
                                </p>
                            </dd>
                        
                        <dt>Sprint</dt>
                            <dd>
                                <p>
                                    Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.
                                </p>
                            </dd>
                        
                        <dt>Try-A-Tri</dt>
                            <dd>
                                <p>
                                    This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).
                                </p>
                            </dd>
                        
                        <dt>Half Marathon</dt>
                            <dd>
                                <p>
                                    Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.
                                </p>
                            </dd>
                        
                        <dt>10K</dt>
                            <dd>
                                <p>
                                    The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.
                                </p>
                            </dd>
                        
                        <dt>Splash n' Dash</dt>
                            <dd>
                                <p>
                                    Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.
                                </p>
                            </dd>

                    </dl>
                
            </section>

        </main>
        
        <aside>
            
            <!--Embed social media feed-->
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=295&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </aside>

        <?php
        
             include "../includes/footer.inc.html.php"; 
        
        ?>
        
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts/courseDetails.js"></script>

</body>

</html>