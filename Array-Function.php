<?php
        // Array Function

        $colors = array("Red","Blue","Yellow",25, 25.55,"Array Type 2");  

        echo $colors[0]."<br>";
        echo $colors[1]."<br>";
        echo $colors[2]."<br>";
        echo $colors[3]."<br>";
        echo $colors[4]."<br>";
        echo $colors[5]."<br>";

        // Array Type 2

        $colors = ["Red","Blue","Yellow",25, 25.55];  

        echo $colors[0]."<br>";
        echo $colors[1]."<br>";
        echo $colors[2]."<br>";
        echo $colors[3]."<br>";
        echo $colors[4]."<br>";


        // Array Type 3

 $colors[0] = "Rad";
 $colors[1] = "Yeallow";
 $colors[2] = "Green";
 $colors[3] = "white";
 $colors[4] = "Black";


  echo "<pre>";

         print_r($colors);

         echo "</pre>";



        // Array ko kaise print karate hai 

       
         $colors = ["Red","Blue","Yellow",25, 25.55];  

          echo "<pre>";

         print_r($colors);

         echo "</pre>";


        //  Array ko  loop me kaise use karte hai 



        $colors = ["Array for loop","Blue","Yellow",25, 25.55,"Red"];  
        echo "<ul>";
        for($i = 0;$i <= 5; $i = $i+1){
            echo "<li>$colors[$i]</li>";
        }
        echo "</ul>";


                // Associative Arrays


         $age = [
            "bill" => 25,
            "steve" => 28,
            "elon" =>22
         ];

         echo $age["steve"]."<br>";
         echo $age["bill"]."<br>";
         echo $age["elon"]."<br>";


        //  Associative Array print_r()

        $age = [
            "bill" => 25,
            "steve" => 28,
            "elon" =>22
         ];

         $age["elon"] = 50;

            echo "<pre>";
        print_r($age);
        var_dump($age)."<br>";
        echo "</pre>";



        // test()

    $mukesh = [
        "test" => 25,
        "red" => 15,

    ];
        echo "<pre>";
        print_r($mukesh);
        echo "</pre>";  


        // Array For Each loop

        $name = [
            "Name" => "Mukesh Kumar",
            "Class" => 12,
            "Address" => "Katarupur Post Patti",
            "Mo"  => 8543804393,
            "Email Id" => "My6386887@gmail.com"
        ];

    foreach($name as $key =>$value){
        echo "$key = $value .<br>";

    }


        // Multidimensional Array
        echo "<br><br>";
        $emp = [
            [1,"Mukesh" , "Manager" , 50000,8543804393],
            [2,"Rakesh" , "Salesman" , 20000,9956400943],
            [3,"Mohan" , "Computer Operator" , 89990,8004842049],
            [4,"Rahul" , "Driver" , 6000,98674521356]

        ];
        //     echo "<pre>";
        // print_r($emp);
        // echo "</pre>";
        // echo $emp[0][0]. " ";
        // echo $emp[1][1]. " ";
        // echo $emp[2][2]. " ";
        // echo $emp[3][3]. " ";



        // Multidimensional Array for loop
            
        for($row = 0; $row < 4; $row = $row+1){
            for($col = 0; $col < 5; $col = $col+1){
                    echo $emp[$row][$col] ." "; 
            }
            echo "<br>";
        }
        

      // Multidimensional Array for loop

             echo "<br><br>";
             $emp = [
                [1,"Anita" , "Manager" , 50000,8543804393],
                [2,"Pooaj" , "Salesman" , 20000,9956400943],
                [3,"Kirti" , "Computer Operator" , 89990,8004842049],
                [4,"Kajal" , "Driver" , 6000,98674521356]
    
            ];
            echo "<table border ='2px' cellpadding='4px' cellspacing = '0'>";
                    echo "<h2>Table For php.</h2>";
                echo "<tr>
                        <th>Emp Id.</th>
                        <th>Emp Name.</th>
                        <th>Desiganation</th>
                        <th>Salary</th>
                        <th>Mo No.</th>
                </tr>";

            foreach($emp as $value1){
                echo "<tr>";
                foreach ($value1 as $value2 ){
                    echo "<td> $value2  </td> ";
                }
                echo "</tr>";
            }
            echo "</table>";
?>
