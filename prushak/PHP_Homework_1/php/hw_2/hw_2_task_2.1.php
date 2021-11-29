<?php
// #Task 2.1
    $min=25;
    $firstQuater=15;$secondQuater= 30;$threethQuater= 45;$fourthQuater= 60;
    if($min<=$firstQuater):
        echo "these minutes is placing on: first quater";
    elseif($min<=$secondQuater):
        echo "these minutes is placing on: second quater";
    elseif($min<=$threethQuater):
        echo "these minutes is placing on: threeth quater";
    elseif($min<=$fourthQuater):
        echo "these minutes is placing on: fourth quater";
    endif;
?>
