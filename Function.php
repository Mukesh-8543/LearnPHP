
                        <!-- Fuynction php...... -->
<?php

                          // Function Calling
        function hello(){
            echo "Hello Everbody.<br>";
        }
    function mukesh(){
        echo "<h3>Mukesh  is Function definition && function Calling...</h3><br>";
    }
            hello();
            hello();
            echo "Hey this is an exmapale.";
            hello();
 mukesh();



                // Function with paramiter calling...

        function paramiter($name ,$class){
            echo "Hello $name $class.<br>";

        }
        paramiter("Mukesh Kumar Yadav","11th");

        paramiter("Rakesh Kumar Yadav","10th");

        function sum($a,$b){
            echo $a + $b."<br> ";
        }

        sum(10,20.24);


                    // Return Function

        function ret($fname ,$lname){
            $v = "Hello $fname $lname .<br>";

            return $v;

        }
           $name =  ret("Vikash","Yadav..");

            echo $name;

                     // return math function

            function subject($hindi,$math,$eng,$home,$phy){
                $s = $hindi+$math+$eng+$home+$phy;
                return $s;

            }
            function  precentage($st){
                $sum = $st / 5;
                echo $sum .  "%";
            
            }
        $total = subject(35,45,35,89,89);

            precentage($total);
        
?>