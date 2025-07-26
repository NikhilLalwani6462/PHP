<?php
    $articles = [
        [
            $name = "Nikhil",
            $surname = "Lalwani"
        ],
        [
            $name = "Rachana",
            $surname = "Parmar"
        ],
        
    ];
    foreach ($articles as $key => $article) {
        echo $key . "<br>";
        foreach($article as $art){
            echo $art . "<br>";
        }
    }
?>