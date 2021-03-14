/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: gallery.js
Date: 02/24/21
Programmer: Fredy Chavez 
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line first).

$(document).ready(function() {

    //alert("the jQuery is running");
    
    var imageFolder = "../images/ace_images/";
    
    var imageSource;
    
    var photoCaption;
    
    $("h1").text("Ace Multisport Events Gallery");
    
    $("#bigPhoto").attr("src", "../images/ace_images/" + "ace5.jpg");
    
    var thumbNames = ["ace1.jpg", "ace2.jpg", "ace3.jpg", "ace4.jpg", "ace5.jpg", "ace6.jpg", "ace7.jpg", "ace8.jpg", "ace9.jpg", "ace10.jpg", "ace11.jpg", "ace12.jpg", "ace13.jpg", "ace14.jpg", "ace15.jpg", "ace16.jpg", "ace17.jpg", "ace18.jpg"];
    
    //$.each(thumbNames, function(i) {
        //alert(thumbNames[i]);
    //});
    
    $(".thumbnail-inner").each(function(i) {
        
        (this).src = imageFolder + thumbNames[i];
        
    });
        
    $(".thumbnail-inner").on("click", function() {
    
        //alert("You clicked an image!");
        
        $("img").css("opacity", "1");
        
        $(this).css("opacity", ".5");
        
        var imageSource = $(this).attr("src");
        
        //alert(imageSource);
        
        $("#bigPhoto").attr("src", imageSource);
        
        photoCaption = imageSource.replace(".jpg", "");
        
        photoCaption = photoCaption.replace("../images/ace_images/", "");
        
        $("#caption").text(photoCaption);
        
    });
    
});