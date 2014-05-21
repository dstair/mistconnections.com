<?php

/*
 * Mist Connections - Daniel Stair
 * view_posts.php
 *
 * Takes Facebook provided input and passes it to a form that allows users to 
 * create a new post
 *
 */
 
    // configuration
    require("./includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["firstname"]))
        {
            apologize("Facebook first name did not load properly.");
        }
        if (empty($_POST["lastname"]))
        {
            apologize("Facebook last name did not load properly.");
        }
        if (empty($_POST["userid"]))
        {
            apologize("Facebook user id did not load properly.");
        }
        
        // point user to form
        require("new_post_temp.html");
    }
    
    else
    {
        // otherwise point user to login page
        require("fbphplogin.php");
    }

?>
