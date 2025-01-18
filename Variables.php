<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color:red;
        }
        p{
            color: blue;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Mukesh Kumar<br>";
        $num = 8543804393;
        echo "<h2>" . $name . "</h2>";
        echo "<p>"."Hello How are you : ". $name."</p>";
        echo $num;
    ?>
</body>
</html>