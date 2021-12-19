<?php
/*The switch-case statement is an alternative 
to the if-elseif-else statement, which does almost
the same thing. The switch-case statement tests a variable
against a series of values until it finds a match,
and then executes the block of code corresponding to that match.*/
$marks = 12;
switch ($marks) {
    case ($marks >=80 && $marks <=100):
        echo "You Got A+";    
        break;
        case ($marks >=80 && $marks <=100):
            echo "You Got A+";    
            break;
        case ($marks >=70 && $marks <=79):
            echo "You Got A";    
            break;
        case ($marks >=60 && $marks <=69):
            echo "You Got A-";    
            break;
        case ($marks >=50 && $marks <=69):
            echo "You Got B";    
            break;
        case ($marks >=40 && $marks <=49):
            echo "You Got C";    
            break;
        case ($marks >=33 && $marks <=39):
            echo "You Got D";    
            break; 
        case ($marks >=33 && $marks <=39):
            echo "You Got F";    
            break;         
        default:
            echo "Invalid Number";
            break;
}
?>