<?php
            // Varibal Funcrion 
function wow($name)
{
    echo "Hello.. $name";
}
    $func = "wow"; 

    $func("Mukesh Kumar <br>");



            // Recursive Function

                function display($number){
                    if($number <= 5){
                        echo "$number <br>";
                        display($number + 1);
                    }
                }
                display(1);





                // Golobal Function
 
            function test(){
                global $x;
                echo "Varibal X inside function : $x <br>";
            }
            test();
            echo "Varibal X outside function : $x";
?>
