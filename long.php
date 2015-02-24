<?php
// rand関数は乱数を生成します（この場合、1〜10までの数値が表示される）
$number = rand(1, 10);
if ($number % 2 === 0) { ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body style="background-color:red;color:white;">
    an even page.<?php echo $number; ?>
</body>
</html>

<?php } else { ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body style="background-color:blue;color:white;">
    an odd page.<?php echo $number; ?>
</body>
</html>
<?php } ?>