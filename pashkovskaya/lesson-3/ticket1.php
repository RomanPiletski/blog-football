<?php
$min = 5;
if ((0 < $min) && ($min <= 15)) {
    echo "First quarter";
} else if ((15 < $min) && ($min <= 30)) {
    echo "Second quarter";
} else if ((30 < $min) && ($min <= 45)) {
    echo "Third quarter";
} else if ((45 < $min) && ($min <= 60)) {
    echo "Fourth quarter";
}