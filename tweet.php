<?php
	session_start();
	$userID = $_SESSION["userID"];

	$tweets = file("tweet.csv", FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <img src="logo.png">
    <?php echo $userID . "さんでログイン中"; ?>
    <hr>
    <form action="tweet_controller.php" method="post">
        <input type="text" name="messege">
        <input type="submit" value="tweet">
    </form>
    <ul>
    	<?php
    	for($i = 0; $i < count($tweets);$i++){
    	echo "<li>".$tweets[$i]."</li>".PHP_EOL;
    }
    ?>
    </ul>

    <a href="menu.php">戻る</a>
</body>
</html>