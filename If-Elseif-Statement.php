    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            h3{
                color:blue;

            }

            h2{
                color:red;
            }
        </style>
    </head>
    <body>
        
<?php
        $per = 99;

        if($per >= 80 && $per <=100){
            echo "<h3>You Are in Merit.</h3>";

        }elseif($per >=60  && $per < 80){
            echo "<h3>You Are in First Devision.</h3>";

        }elseif($per >=45  && $per < 60){
            echo "<h3>You Are in IInd Devision.</h3>";
        
        }elseif($per >=33  && $per < 45){
            echo "<h3>You Are in IIInd Devision.</h3>";
        
        }elseif($per < 33){
                echo "<h2>You are Fail.</h2>";
        }
            else{
                echo "Please Enter Vaid Percentage";
            }


?>
</body>
</html>