            <!-- Logical Opareter...
            
                     &&   Logical AND
                    ||      Logical OR
                    !         Logical NOT
                     and      Logical AND
                     or        Logical OR
                    Xor        exclusive OR -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            color:red;
        }
    </style>
</head>
<body>
        <?php 

            // $age = 18;
            // if($age >= 18 && $age <= 21){
            //     echo  "<h3>You Are Eligibal.</h3>";

            // }else{
            //     echo "<h3>You Are Not Eligibal.</h3>";
            // }



            $name = "Mukesh Kumar Yadav.";
            $gender = "Female";

        

            if($gender == "Male"){
                echo "<h3>Hello Mr : "."$name</h3>";

            }else{
                echo "<h3>Hello Miss: "." Poonam Yadav...</h3>";
            }


        ?>
</body>
</html>