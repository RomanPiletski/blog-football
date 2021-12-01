
<?php
//С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.
function insertInArr($first,$last){
    $arr = [];
    for($first;$first<=$last;$first++):
        array_push($arr,$first);
    endfor;
    return $arr;
}
var_dump(insertInArr(1,99));

//С помощью готовой функции range заполните массив нечетными числами в промежутке от 1 до 99.
function insertOddNum($first,$last){
        $arr = range($first,$last,2);
    return $arr;
}
print_r(insertOddNum(1,99));