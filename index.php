<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function scegliColore($inizialeColore) {
            switch ($inizialeColore) {
                case "g":
                    return "green";
                    break;
                case "r":
                    return "red";
                    break;
                case "b":
                    return "blue";
                    break;
                case "y":
                    return "yellow";
                    break;
                default:
                    return "black";
                    break;
            }
        }
        $color = scegliColore("g");
        echo "<p style='color: $color;'>Questo paragrafo ha la proprietà color con valore $color</p>";   
    ?>
</body>
</html>