<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Apparel prices:</h1>
    <ul>
        <?php
            foreach (json_decode(file_get_contents('http://prices')) as $priceItem) {
                echo "<li>$priceItem->name: $priceItem->price</li>";
            }
        ?>
    </ul>
</body>
</html>