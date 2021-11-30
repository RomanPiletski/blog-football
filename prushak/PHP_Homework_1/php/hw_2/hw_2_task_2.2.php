<?php
// #Task 2.2
    $month = random_int(1,12);
    switch (true):
        case ($month === 12 || $month<=2): echo $month." is winter!!!";break;
        case ($month>2 and $month<=5): echo $month." is spring!!!";break;
        case ($month>5 and $month<=8): echo $month." is summer!!!";break;
        case ($month>8 and $month<=11): echo $month." is autumn!!!";break;
    endswitch;
?>
