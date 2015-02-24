<?php
$members = ["Ishihara", "Kashiwabara", "Kawano", "Hiroishi", "Minami"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <ul>
        <?php
        for($i = 0;$i < count($members); $i++){
        	echo "<li>".$members[$i]."</li>".PHP_EOL;
        }
        	?>
    </ul>
</body>
</html>