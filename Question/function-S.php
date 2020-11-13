<?php
$data = file('options.txt') or die("Không thể đọc file"); //đọc dữ liệu từ file.
array_shift($data); //data -> array.
$arrOption = array();
foreach ($data as $key => $value){ //chuyển dữ liệu thành từng mảng.
    $tmp = explode("|" , $value); //tách dấu | ra khỏi mảng.
    $id = $tmp[0];
    $option = $tmp[1];
    $answer = $tmp[2];
    $point = $tmp[3];
    $arrOption[$id][$option]["option"] = $answer;
    $arrOption[$id][$option]["point"] = $point;
}

?>