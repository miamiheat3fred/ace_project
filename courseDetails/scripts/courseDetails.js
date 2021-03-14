/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: courseDetails.js
Date: 03/03/21
Programmer: Fredy Chavez
*/

// The line below will test the link to the dropdown.js file. Comment it out when it works.
//alert("the link to the .js file is correct!");

// The line below will test the link to jquery.min.js . Comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

$(document).ready(function() {
 
    //alert("the jQuery is running!");
    
    $("h1").text("Course Details");
    
    $("h1").css("color", "#FF0000");
    
    //$("h1, h2").addClass("headings");
    
    //$(".headings").css("font-family", "Arial, Helvitica, sans-serif");
    
    
    
    $("dd").hide();
    
    $("dt").on("click", function() {
        
        //alert("You clicked a question!");
        
        //$(this).next().show();
        
        //$(this).next().toggle();
        
        //$(this).next().slideToggle();
        
        //$(this).addClass("open");
        
        //$(this).toggleClass("open");
        
        $(this).toggleClass("open").next().slideToggle();
        
    });
    
});
