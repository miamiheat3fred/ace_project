<?php

include '../includes/db.inc.html.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''

if (isset($_POST['myname']) && (empty($_POST['honeypot'])))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    $myname = $_POST['myname'];
    $myage = $_POST['myage'];
    $myrole = $_POST['myrole'];
    $myphone = $_POST['myphone'];
    $myemail = $_POST['myemail'];
    $myemergencycontact = $_POST['myemergencycontact'];
    $myemergencyphone = $_POST['myemergencyphone'];
    $mygender = $_POST['mygender'];
    $mysize = $_POST['mysize'];
    $mysatevent = $_POST['mysatevent'];
    $mysunevent = $_POST['mysunevent'];
    $myaccommodations = $_POST['myaccommodations'];
    
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registrations SET
          name = :name,
          age = :age,
          role = :role,
          phone = :phone,
          email = :email,
          emergencyName = :emergencyName,
          emergencyPhone = :emergencyPhone,
          gender = :gender,
          shirtSize = :shirtSize,
          saturdayEvent = :saturdayEvent,
          sundayEvent = :sundayEvent,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $myname);
      $s->bindValue(':age', $myage);
      $s->bindValue(':role', $myrole);
      $s->bindValue(':phone', $myphone);
      $s->bindValue(':email', $myemail);
      $s->bindValue(':emergencyName', $myemergencycontact);
      $s->bindValue(':emergencyPhone', $myemergencyphone);
      $s->bindValue(':gender', $mygender);
      $s->bindValue(':shirtSize', $mysize);
      $s->bindValue(':saturdayEvent', $mysatevent);
      $s->bindValue(':sundayEvent', $mysunevent);
      $s->bindValue(':accommodations', $myaccommodations);    
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error submitting content: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
    
    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false
    
    } else{

    include 'registrations.html.php'; //Modify this to include the initial file for this folder
    
    }