<?php

session_start();
$userID = $_SESSION["userID"];
$tweets = $_POST["messege"];
$tweet_time = date("Y-m-d H:i:s");

function entry_tw($tweets, $tweet_time, $userID){
    $lines = $tweets.",".$userID.",".$tweet_time.PHP_EOL;
    file_put_contents("tweet.csv", $lines, FILE_APPEND);

}

if($tweets != ""){
    entry_tw($tweets, $tweet_time, $userID);
    header("Location:./tweet.php");
}else{
    header("Location:./tweet.php");
}

?>