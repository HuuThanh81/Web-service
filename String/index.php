<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
	
	function format($str){ //chuyển thành viết hoa
		$result = $str[0];
		for($i = 1; $i < strlen($str); $i++){
			if(ctype_upper($str[$i])==true){
				$result .= " " . $str[$i];
			}else{
				$result .= $str[$i];
			}
		}
		return $result;
	}

	function getInfo($url){ 
		$index 	= strripos($url, "/"); //tìm vị trí xuất hiện / trong chuỗi
		$result = substr($url, $index+1); // hiển thị từ ở vị trí phía sau lần xuất hiện dấu /
		return $result;
	}
	
	$info 	= getInfo($url);
	
	$result = array();
	
	$arrayInfo	= explode("_", $info); // Chia chuỗi thành mảng
	
	// ID
	$result["id"]	= $arrayInfo[0];

	// TYPE
	$arrType		= explode(".", $arrayInfo[3]);
	$result["type"]	= $arrType[1];
	
	// NAME, AUDIO, SINGER
	$arrayInfo[3]	= $arrType[0];
	
	$result["singer"]	=	format($arrayInfo[3]);
	$result["name"]		=	format($arrayInfo[1]);
	$result["album"]	=	format($arrayInfo[2]);
	echo '<p>URL = '.$url.'</p>';
    echo '<p>ID: '.$result["id"].'</p>';
    echo '<p>Name: '.$result["name"].'</p>';
    echo '<p>Singer: '.$result["singer"].'</p>';
    echo '<p>Album: '.$result["album"].'</p>';
    echo '<p>Type: '.$result["type"].'</p>';
 ?>   
</body>
</html>


