<!DOCTYPE html>

<!--
File Name: success.html.php
Date: 02/09/21
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
            
            <?php include '../includes/header.inc.html.php'; ?>
            
            <main>
                
                <h1>Thank you for your submission!</h1>
                
                <p class="successPage">
                  Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Participant: <?php echo htmlspecialchars($myType, ENT_QUOTES, 'UTF-8'); ?><br>
                  Question/Comment: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
                
            </main>
            
            <aside>
        
            <p>hello, this is an aside.</p>
            
            <!--Embedded social media feed. Sample feed used as a placeholder
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkatunews%2F&tabs=timeline&width=300&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->
          
            </aside>
            
            <?php include '../includes/footer.inc.html.php'; ?>
            
        </div>
        
    </body>
    
</html>