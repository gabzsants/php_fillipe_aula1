<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <?php $colors = array("red", "green", "blue", "yellow"); ?>
    <h1>As cores primárias são:</h1>
    <ul>
        <?php foreach ($colors as $cor) {
            echo "<li> $cor </li>";
        }
           ?>
        
</body>
</html>