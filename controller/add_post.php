<?php

/*
 * Mist Connections - Daniel Stair
 * add_post.php
 *
 * Takes a user's form input and adds it to SQL database 
 *
 */

    // configuration
    require("./includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["New_post"]))
        {
            apologize("You must provide a post.");
        }
        else if (empty($_POST["Category"]))
        {
            apologize("You must provide a category.");
        }
        else if (empty($_POST["latitude"]) || empty($_POST["longitude"]))
        {
            apologize("You must provide a latitude and longitude.");
        }
        
        // add post to SQL database
        query("INSERT INTO Posts (user_id, first_name, last_name, post, lat, lng, category) VALUES(?, ?, ?, ?, ?, ?, ?)", $_POST["userid"], $_POST["firstname"], $_POST["lastname"], $_POST["New_post"], $_POST["latitude"], $_POST["longitude"], $_POST["Category"] );
        
        // else render form
        require("successful_post.html");
    }
    else
    {
        // else render form
        require("fbphplogin.php");
    }

?>
