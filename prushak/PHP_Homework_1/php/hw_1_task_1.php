<?php
$secInMin = 60;
$minInHour = 60;
$secInHour = $secInMin*$minInHour;
$secInDay = 24*$secInHour; // #Task 1 (Topic: "Amount of seconds")
$secIn30day = 30*(24*$secInHour); // #Task 2 (Topic: "Amount of seconds")
$secInYear = (12*(30*24))*$secInHour; // #Task 3 (Topic: "Amount of seconds")
$minInDay = 24*$minInHour; // #Task 4 (Topic: "Amount of seconds")
$minInYear = (12*(30*24))*$minInHour; // #Task 5 (Topic: "Amount of seconds")
echo "Amount of seconds in a day: ".$secInDay."<br>"."Amount of seconds in 30 days: "."$secIn30day"."<br>"."Amount of seconds in a year: "."$secInYear"."<br>"."Amount of minutes in a day: "."$minInDay"."<br>"."Amount of minutes in a year: "."$minInYear"."<br><br>";
?>
