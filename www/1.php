<?php
header("content-type:text/html;charset=utf8");
error_reporting(0);
	// 创建数组
// 普通数组
	$arr=array("vivi","ABC","E");
	echo $arr[0]."<br/>";
	echo $arr[1]."<br/>";
	echo $arr[2]."<br/>";
// 关联数组
	$arr2=array("Pata"=>35,"Ben"=>56,"joe"=>43);
	$arr3=array_keys($arr2);
	$arr4=array_values($arr2);
	for($i=0;$i<count($arr2);$i++){
		echo $arr3[$i]."今年".$arr4[$i]."岁"."<br/>";
	}
?>