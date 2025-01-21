<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Constant Variables -->

           <!-- difine(num,500);
            define (_num,500);
        can't use $ sign with Constant variable name.

        Constant Variables are Global Varables.*/ -->

    <?php 
        define ("test",50,); 
    // define ("test",50,);
        echo test . "<br>";

        $sum = test +20;
        echo $sum;

?>
</body>
</html>