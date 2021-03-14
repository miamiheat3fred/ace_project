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
    

    <title>Ace in the Hole Multisport Events</title>
    
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
        
        <main>
            
            <div>
                
                <!--Weather widget-->
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="Weather" data-label_2="Portland, Oregon" data-font="Fira Sans" data-theme="mountains" >Weather Portland, Oregon</a>
                
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>

            </div>

            <section>

                <h2>About</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

            </section>

            <section>

                <h2>List</h2>

                <ol>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Et magnis dis parturient montes nascetur ridiculus mus.</li>
                    <li>Suscipit adipiscing bibendum est ultricies integer.</li>
                    <li>Orci eu lobortis elementum nibh.</li>
                    <li>Ut aliquam purus sit amet luctus venenatis lectus magna. Nulla facilisi morbi tempus iaculis urna id.</li>
                    <li>Elementum curabitur vitae nunc sed velit dignissim sodales.</li>
                    <li>Ipsum faucibus vitae aliquet nec ullamcorper sit amet.</li>
                    <li>Adipiscing enim eu turpis egestas pretium.</li>
                    <li>Diam in arcu cursus euismod. Nisl pretium fusce id velit.</li>
                </ol>

            </section>

            <h2 class="more-content">More content</h2>

            <section class="grid">

                <div class="item1">
                    
                    <img src="images/" alt="" />
                    <h3>Header 3</h3>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porttitor leo a diam sollicitudin tempor id eu nisl nunc. Volutpat lacus laoreet non curabitur gravida arcu ac. Placerat vestibulum lectus mauris ultrices eros in. Ac turpis egestas integer eget. Enim praesent elementum facilisis leo. Parturient montes nascetur ridiculus mus mauris vitae. Augue interdum velit euismod in pellentesque massa.
                    </p>
                    
                </div>

                <div class="item2">
                    
                    <img src="images/" alt="" />
                    <h3>Header 3</h3>
                    
                    <p>
                        Non curabitur gravida arcu ac tortor dignissim convallis. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Eget nullam non nisi est. Urna cursus eget nunc scelerisque. Sit amet consectetur adipiscing elit. Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis. Sem integer vitae justo eget magna fermentum.
                    </p>
                    
                </div>

            </section>

        </main>
        
        <aside>
        
            <p>hello, this is an aside.</p>
            
            <!--Embedded social media feed. Sample feed used as a placeholder
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkatunews%2F&tabs=timeline&width=300&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->
          
        </aside>

        <?php
        
             include "includes/footer.inc.html.php"; 
        
        ?>
        
    </div>

</body>

</html>