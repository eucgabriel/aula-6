<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $a = 2;
            $b = 5;
            $c = $a + $b;
            echo "A = $a B = $b C = $c<br>";
            $a += 2;
            $b += 3;
            $c ++;
            echo "A = $a B = $b C = $c<br>";
            $a *= 2;
            $b /= 2;
            $c %= $b;
            echo "A = $a B = $b C = $c<br>";

        ?>
    </div>
</body>
</html>