<?php
    //             // function of aragument
    // function testing(&$string){
    //     $string .= "And something extra.<br>";

    // }
    //     $str = "This Is String..";
    //         testing($str);
    //     echo $str;

    //             function first($num){
    //                 $num += 5;
    //             }
    //                 $number = 10;
    //             first($number);
    //             echo "First Function number Value.".$number."<br>";

    //         function secound(&$num) {
    //             $num += 20;
     
    //         }
    //         $number = 10;
    //         secound($number);
    //         echo "Second function number Values .".$number

        function rat($name , $class , $subject){
                $a = "Hello $name $class $subject";
                return $a;
        }
        $name = rat("Mukesh Kumar", 10 ,"English");
        echo $name;