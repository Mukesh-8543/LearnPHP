<?php
        for($a = 1; $a <= 100; $a = $a+10){
            for($b = $a; $b < $a +10; $b =$b+1){
                echo $b . " ";
            }
           echo "<br>";

        }


        for($a = 1; $a <= 10; $a++){
            if($a ==4){
                continue;
            }
                echo $a ."<br>" ;
            }

            for($a = 1; $a <= 10; $a++){
                if($a ==4){
                    break;
                }
                    echo $a ."," ;
                }
?>