<?php
$kilobyteInByte=$megabyteInKilobyte=$gigabyteInMegabyte=$terabyteInGigabyte=1024;
$byteInMegabyte = $megabyteInKilobyte*$kilobyteInByte; // #Task 6 (Topic: "Translate in byte and reverse")
$byteInGigabyte = $gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 7 (Topic: "Translate in byte and reverse")
$byteIn10gigabyte = 10*$gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 8 (Topic: "Translate in byte and reverse")
$byteInTerabyte = $terabyteInGigabyte*$gigabyteInMegabyte*$megabyteInKilobyte*$kilobyteInByte; // #Task 9 (Topic: "Translate in byte and reverse")
$kilobyteInTerabyte = $terabyteInGigabyte*$gigabyteInMegabyte*$megabyteInKilobyte; // #Task 10 (Topic: "Translate in byte and reverse")
echo "<div style='background: lightgrey;width: 500px'>"."Amount of bytes in megabytes: ".$byteInMegabyte."<br>"."Amount of bytes in gigabytes: "."$byteInGigabyte"."<br>"."Amount of bytes in 10 gigabytes: "."$byteIn10gigabyte"."<br>"."Amount of bytes in terabytes: "."$byteInTerabyte"."<br>"."Amount of kilobytes in terabytes: "."$kilobyteInTerabyte"."<br><br></div>";
?>
