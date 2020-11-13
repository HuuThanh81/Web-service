<?php
$data = file('question.txt') or die("Không thể đọc file"); //đọc dữ liệu từ file.
array_shift($data); //data -> array.
$arrQuestion = array();
foreach ($data as $key => $value){ //chuyển dữ liệu thành từng mảng.
    $tmp = explode("|" , $value); //tách dấu | ra khỏi mảng.
    $id = $tmp[0];
    $question = $tmp[1];
    $arrQuestion[$id] = array("question" => $question);
}

?>