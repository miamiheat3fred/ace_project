<!DOCTYPE html>

<!--
File Name: registrations.html.php
Date: 02/10/21
Programmer: Fredy Chavez
-->

<html lang="en">
    
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Fredy Chavez">
    <base target="_blank"><!-- opens all links not marked "_self" in a new tab -->
    

    <title>Ace in the Hole Multisport Events: Register</title>
    
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
        
      <h1>Register Today!</h1>
        
            <table>
        
                <tr>
                    <th>Course Name</th>
                    <th>Cost</th>
                </tr>
                <tr>
                    <td>Olympic</td>
                    <td>$110</td>
                </tr>
                <tr>
                    <td>10K</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>Half Marathon</td>
                    <td>$75</td>
                </tr>
                <tr>
                    <td>Sprint</td>
                    <td>$90</td>
                </tr>
                <tr>
                    <td>Try-a-Tri</td>
                    <td>$65</td>
                </tr>
        
        
            </table>
        
        <div id="costs">
            
            <p>Costs Include:</p>
        
                <ul class="body_ul">

                    <li>Food &amp; Beer</li>
                    <li>Access to the weekend's live entertainment &amp; Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                    <li>Post-event party &amp; entertainment</li>

                </ul>
            
        </div>
        
        <div id="required">Required fields are marked with an asterisk (*).</div>
      
        <div id="registrations">
        
            <form method="post" action=" ">
                
            <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                
            <label for="myname">*Name:</label>
              <input type="text" name="myname" id="myname" required>
                
            <label for="myage">*Age:</label>
              <input type="number" min="0" max="120" name="myage" id="myage" required>
                
            <label for="mygender">*Gender:</label>
                <select size="1" name="mygender" id="mygender" required>
                    <option hidden>Choose your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="nonbinary">Non-Binary/Other</option>
                </select>
                
            <label for="myrole">*Role:</label>
                <select size="1" name="myrole" id="myrole" required>
                    <option hidden>Choose your role</option><!--use hidden attribute to hide default option-->
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select>
            
            <label for="myphone">*Phone:</label>
              <input type="tel" name="myphone" id="myphone" required>    
                
            <label for="myemail">*Email:</label>
              <input type="email" name="myemail" id="myemail" required>
                
            <label for="myemergencycontact">*Emergency Contact:</label>
              <input type="text" name="myemergencycontact" id="myemergencycontact" required>
                
            <label for="myemergencyphone">*Emergency Contact Phone:</label>
              <input type="tel" name="myemergencyphone" id="myemergencyphone" required>
                
            <label for="mysize">*Shirt Size:</label>
                <select size="1" name="mysize" id="mysize" required>
                    <option hidden>Choose your shirt size</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="extralarge">XL</option>
                </select>
                
            <label for="mysatevent">*Saturday Event:</label>
                <select size="1" name="mysatevent" id="mysatevent" required>
                    <option hidden>Choose an event</option>
                    <option value="longcoursetriathlon">Long Course Triathlon (7:00am)</option>
                    <option value="olympictriathlon">Olympic Triathlon (7:30am)</option>
                    <option value="10k">10K (7:15am)</option>
                    <option value="halfmarathon">Half Marathon (7:15am)</option>
                </select>
                
            <label for="mysunevent">*Sunday Event:</label>
                <select size="1" name="mysunevent" id="mysunevent" required>
                    <option hidden>Choose an event</option>
                    <option value="sprinttriathlon">Sprint Triathlon (8:00am)</option>
                    <option value="tryatri">Try-a-Tri (8:20am)</option>
                    <option value="splashndash">Splash n Dash (12:00pm)</option>
                </select>
                
            <label for="myaccommodations">Do you need any accommodations?</label>
              <textarea name="myaccommodations" id="myaccommodations" rows="7" cols="28"></textarea>
                
              <input id="mySubmit" type="submit" value="Submit">
                
            </form>
            
        </div>
        
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