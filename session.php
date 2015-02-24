<?php
session_start();

$count = 0;
if (isset($_SESSION["cnt"])) {
    $count = $_SESSION["cnt"];
}
$count++;
$_SESSION["cnt"] = $count;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <h1><?= $count ?></h1>
    <form action="">
        <input type="submit" value="count up">
    </form>
</body>
</html>