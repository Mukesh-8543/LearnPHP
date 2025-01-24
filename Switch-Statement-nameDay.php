<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            h2{
                color:lightcoral;
            }
            h3{
                color:red;
            }
    </style>
</head>
<body>
    <?php
  $weekday = 6;

  switch($weekday){
    case 1:
        echo "<h2>Today Is Manday</h2>";
    break;

    case 2:
        echo "<h2>Today Is Tuesday</h2>";
    break;

    case 3:
        echo "<h2>Today Is wednesday</h2>";
    break;

    case 4:
        echo "<h2>Today Is Thursday</h2>";
    break;

    case 5:
        echo "<h2>Today Is Friday</h2>";
    break;

    case 6:
        echo "<h2>Today Is Starday</h2>";
    break;

    case 7:
        echo "<h2><br>Today Is Sunday<br></h2>";
        echo "Holiday.";
    break;

    default:
    echo "<h3>Enter th valid week Day...</h3>";
  }



?>
          

</body>
</html>