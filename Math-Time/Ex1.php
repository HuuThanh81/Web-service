<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
            $fraction = '';
            if(isset($_POST["PS"])){
                $fraction = $_POST["PS"];
           }
            
            $arrFraction = explode('/', $fraction);
            $ts = $arrFraction[0];
            $ms = $arrFraction[1];
            $x =" ";
            
            function UCLN($n1, $n2) {
                        for($i = 1; $i <= $n1; $i++) {
                                    if($n1 % $i == 0) { $uclnN1[] = $i; }
                        }
                        for($i = 1; $i <= $n2; $i++) {
                                    if($n2 % $i == 0) { $uclnN2[] = $i; }
                        }
                        $temp = array_intersect($uclnN1, $uclnN2);
                        $result = max($temp);
                        return $result;
            
                    }

            $ucln = UCLN($ts, $ms);
            $ts = $ts/$ucln;
            $ms = $ms/$ucln;
?>

    <form method="POST">
    <input type="Text" name="PS" placeholder="Nhập phân số" value="<?php echo $fraction;?>">
    <button type="submit">Ok</button>
    </form>
    <?php
        echo '<p>'.$ts.'/'.$ms.'</p>';
    ?>
</body>
</html>