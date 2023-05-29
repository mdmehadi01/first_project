<?php
$marks=75; 
switch($marks){
    case($marks >= 80 && $marks <=100):
        echo "You got A+";
        break;
        case($marks >= 70 && $marks <=79):
            echo "You got A";
            break;
            case($marks >= 60 && $marks <=69):
                echo "You got A-";
                break;
                case($marks >= 50 && $marks <=59):
                    echo "You got B";
                    break;
                    case($marks >= 40 && $marks <=49):
                        echo "You got C";
                        break;
                        case($marks >= 33 && $marks <=40):
                            echo "You got D";
                            break;
                            case($marks >= 0 && $marks <=32):
                                echo "You got F";
                                break;
                               default:
                                    echo "Invalid Marks";
                                    break;
}
?>