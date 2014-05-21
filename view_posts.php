<?php

/*
 * Mist Connections - Daniel Stair
 * view_posts.php
 *
 * Takes a user-provided location and shows nearby posts
 *
 */
 
    // configuration
    require("./includes/config.php"); 


    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["latitude"]) || empty($_POST["longitude"]))
        {
            printf("You must provide a valid location.");
        }
        
        // pull posts - either by category or all posts, depending on user input
        // create temporary table. Use only necessary variables to increase performance

        if (empty($_POST["Category"]) || $_POST["Category"] == "All")
        {
            query("CREATE TABLE temp AS SELECT lat, lng, id FROM Posts" );
        }
        else 
        {
            query("CREATE TABLE temp AS SELECT lat, lng, id, category FROM Posts WHERE category = ?", $_POST["Category"]);
        }
        
        // add decimals to values we are about to use to avoid truncation
        query("ALTER TABLE temp ADD latdist DECIMAL( 33, 30 ) NOT NULL" );   
        query("ALTER TABLE temp ADD lngdist DECIMAL( 33, 30 ) NOT NULL" );  
        query("ALTER TABLE temp ADD dist DECIMAL( 33, 30 ) NOT NULL" );  
        
        // calculate distance between user's location and each post's location
        query("UPDATE temp SET latdist = (lat - ?)*(lat - ?)", $_POST["latitude"], $_POST["latitude"] );
        query("UPDATE temp SET lngdist = (lng - ?)*(lng - ?)", $_POST["longitude"], $_POST["longitude"] );
        query("UPDATE temp SET dist = sqrt(latdist + lngdist)*69 "); // distance in miles. Approximation for now
        
        // take 10 closest posts; pull all post fields from original (not temporary) table
        $closeposts = query("SELECT B.*, A.dist FROM temp AS A INNER JOIN Posts AS B ON A.id = B.id ORDER BY A.dist LIMIT 10");
        
        // need to remove table temp for the next time this function is called
        query("DROP TABLE temp");  
        
        // render form with posts - this form can use $closeposts
        require("view_posts.html");
    }
    else
    {
        // if no submission received, point user back to view posts form
        require("req_view_posts.html");
    }

?>
