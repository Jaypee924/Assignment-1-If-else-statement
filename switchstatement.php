<?php
//Miranda, Jaypee N.
$score = 90;

switch (true) {
    case ($score >= 85):
        echo "Grade: A";
        break;
    case ($score >= 65):
        echo "Grade: B";
        break;
    case ($score >= 55):
        echo "Grade: C";
        break;
    default:
        echo "Grade: F";
        break;
}
?>
