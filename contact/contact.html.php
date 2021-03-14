<!DOCTYPE html>

<!--
File Name: contact.html.php
Date: 02/09/21
Programmer: Fredy Chavez
-->

<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: Contact Us</title>
    
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
        
      <h1>Questions or Comments?</h1>
        
      <form method="post" action=" " id="inquiryForm">
          
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your    email will not be sent"/>
          
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
          
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
          
        <label for="myType">Participant:</label>
            <select size="1" name="myType" id="myType">
                <option hidden value="participant">Choose Participant Type</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
                <option value="interestedParty">Interested Party</option>
            </select>
        
        <label for="myQuestion">Question/<br>Comment:</label>
          <textarea form="inquiryForm" rows="7" cols="28" name="myQuestion" id="myQuestion"></textarea>
          
        <input id="mySubmit" type="submit" value="Submit">
          
      </form>
        
    </main>
      
    <aside>
            
            <!--Embed social media feed-->
            <iframe class="social" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=295&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

    </aside>
    
    <?php
      
        include "../includes/footer.inc.html.php";
          
    ?>
      
  </div>
</body>
</html>