<?php

include "db_connect.php"; 
$jokeQuestion = $_GET["joke_question"]; 
$jokeAnswer = $_GET["joke_answer"]; 


//inserting new joke 
echo "<h2> Trying to add new joke $jokeQuestion and $jokeAnswer </h2>"; 

$jokeQuestion = addslashes($jokeQuestion); 
$jokeAnswer = addslashes($jokeAnswer); 

$sql = "INSERT INTO jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$jokeQuestion', '$jokeAnswer' )";



echo "<p> found the problem </p>"; 
$result = $mysqli->query($sql) or die('oops!');

include "list_all_jokes.php"; 
?> 

<a href="index.php">Return to main page</a> 