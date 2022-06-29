<?php


    $tweets = file_get_contents('tweets.json');

    $arraytweets = json_decode($tweets, true);



    

    include "template.php";
