<?php
echo "Conditional 1:\n\n";
function evenCheck($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}

evenCheck(10);
echo "\n";
evenCheck(9);

function modEvenCheck($number){
    if($number % 2 == 0 && $number > 0){
        echo "even and postive";
    }
    elseif($number % 2 == 0 && $number < 0){
        echo "even and negative";
    }
    elseif($number % 2 !== 0 && $number > 0){
        echo "not even and postive";
    }
    elseif($number % 2 !== 0 && $number < 0){
        echo "not even and negative";
    }
    elseif($number == 0){
        echo "Zero";
    }
    else{
        echo "Zero";
    }
}
echo "\n\nConditional 2:\n\n";
modEvenCheck(20);
echo "\n";
modEvenCheck(-9);
echo "\n";
modEvenCheck(0);
?>