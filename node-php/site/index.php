<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Docker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
</head>
<body>
    <h1>Team:</h1>
    <ul>
        <?php
            $json = file_get_contents('http://players');
            $players = json_decode($json)->players;

            foreach ($players as $player) {
                echo "<li>$player</li>";
            }
        ?>
    </ul>
</body>
</html>