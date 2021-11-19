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

$kilobyteInByte=$megabyteInKilobyte=$gigabyteInMegabyte=$terabyteInGigabyte=1024;
$byteInMegabyte = $megabyteInKilobyte*$kilobyteInByte; // #Task 6 (Topic: "Translate in byte and reverse")
$byteInGigabyte = $gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 7 (Topic: "Translate in byte and reverse")
$byteIn10gigabyte = 10*$gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 8 (Topic: "Translate in byte and reverse")
$byteInTerabyte = $terabyteInGigabyte*$gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 9 (Topic: "Translate in byte and reverse")
$kilobyteInTerabyte = $terabyteInGigabyte*$gigabyteInMegabyte*$megabyteInKilobyte; // #Task 10 (Topic: "Translate in byte and reverse")
echo "<div style='background: lightgrey;width: 500px'>"."Amount of bytes in megabytes: ".$byteInMegabyte."<br>"."Amount of bytes in gigabytes: "."$byteInGigabyte"."<br>"."Amount of bytes in 10 gigabytes: "."$byteIn10gigabyte"."<br>"."Amount of bytes in terabytes: "."$byteInTerabyte"."<br>"."Amount of kilobytes in terabytes: "."$kilobyteInTerabyte"."<br><br></div>";

// #Task 11 (Topic: "Area of figure")
$r = 100;
$s = 2*pi()*$r;
echo "Area of circle: ".$s."<br><br>";

// #Task 12 (Topic: "Area of figure")
$a = 100;
$s = $a**2;
echo "Area of a square: ".$s."<br><br>";

// #Task 13 (Topic: "Area of figure")
$a = 100;
$b = 200;
$s = $a*$b;
echo "<div style='background: lightgrey;width: 500px'>"."Area of a rectangle: ".$s."<br><br></div>";

// #Task 14 (Topic: "Area of figure")
$a = 100;
$b = 200;
$s = $a*2+$b*2;
echo "<div style='background: lightgrey;width: 500px'>"."Perimeter of a rectangle: ".$s."<br><br></div>";

// #Task 15 (Topic: "Celsius in fahrenheit and reverse")
$tc = 10; // degrees in celsius
$f = 275 + $tc;
echo "Celsius in fahrenheit: ".$f." in fahrenheit<br><br>";

// #Task 16 (Topic: "Celsius in fahrenheit and reverse")
$f = 300; // degrees in celsius
$tc = $f-275;
echo "Fahrenheit in celsius : ".$tc." degree <br><br>";

                                    //Work with HTML tags in PHP

echo "Cursive text: "."<i>"."Ilya Prushak"."</i><br>"; // #Task 1

// #Task 2
for($i = 1;$i<10;$i++){
    echo "<div style='background: lightgrey;width: 500px'>".$i."<br></div>";
}

// #Task 3
$imgSrc = "dog.png";
echo "<img src=$imgSrc width='500px'><br><br>";

// #Task 4
echo "<input type='button' value='Just click' style='padding: 20px;border-radius: 5px;background:lightgrey'><br>";

// #Task 5
echo "<textarea style='width: 400px;height: 200px'>It's so simple</textarea>";
?>
