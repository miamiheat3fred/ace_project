<!DOCTYPE html>

<!--
File Name: faq.html.php
Date: 03/03/21
Programmer: Fredy Chavez
-->

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: FAQ</title>
    
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

                    <dl>

                        <dt>What are the Rules?</dt>
                            <dd>
                                <p>
                                    We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.
                                </p>
                            </dd>

                        <dt>Can I use a personal music device while cycling?</dt>
                            <dd>
                                <p>
                                    Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.
                                </p>
                            </dd>

                        <dt>Can I use a personal music device while running?</dt>
                            <dd>
                                <p>
                                    During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.
                                </p>
                                    <ol>
                                        <li>
                                            If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.
                                        </li> 
                                        <li>
                                            If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                                        </li>
                                        <li>

                                            We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.

                                        </li>
                                    </ol> 
                            </dd>

                        <dt>Do I need to wear a wetsuit?</dt>
                            <dd>
                                <p>
                                    No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.
                                </p>
                            </dd>

                        <dt>Do I have to use a road or racing bike?</dt>
                            <dd>
                                <p>
                                    No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.
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
    <script src="scripts/faq.js"></script>

</body>

</html>