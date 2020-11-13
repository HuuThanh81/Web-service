<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'function-Q.php'; // lấy câu hỏi từ file function-Q.php
        require_once 'function-S.php'; // lấy câu hỏi từ file function-S.php

        $newArr = array();
        foreach($arrQuestion as $key => $value) //duyệt trong mảng.
        {
            $newArr[$key]["question"] = $value["question"]; //duyệt dữ liệu theo value question.
            $newArr[$key]["sentences"] = $arrOption[$key]; //duyệt dữ liệu theo key của $arrOption
        }
    ?>

    <div class="content">
        <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST" name="mainForm">
            <?php
                $i = 1;
                foreach($newArr as $key => $value)
                {
                    echo '<div class="question">';
                    echo '<p><span>Câu hỏi '.$i.': </span>'.$value["question"].'</p>';
                    echo '<ul>';
                    foreach($value["sentences"] as $keyC => $valueC)
                    {
                        echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC["option"].'</label></li>';
                    }
                    echo '</ul>';
                    echo '<div>';
                    $i++;
                }
                
            ?>
            <input type="submit" value="Kiểm tra" name="submit">
        </form>
    </div>
</body>
</html>