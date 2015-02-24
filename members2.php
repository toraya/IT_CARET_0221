<?php
$members = [
            ["Ishihara", 22, "Motion", "image1.png"],
            ["Kashiwabara", 22, "Boat", "image2.png"],
            ["Kawano", 21, "KnightScoop", "image3.png"],
            ["Hiroishi", 22, "Youtube", "image4.png"],
            ["Minami", 23, "WordPress", "image5.png"]
            ];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <table>
        <th>name</th>
        <th>age</th>
        <th>fav</th>
        <th>image</th>
        <?php
        for($i = 0; $i < count($members);$i++){
            echo "<tr>";
            for($j = 0; $j < count($members);$j++){
                echo "<td>".$members[$i][$j].PHP_EOL."</td>";
            }
            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>