<?php
header('Content-Type:text/html;charset=utf-8');
if($_POST){
	if($_FILES['pic']['name'] && is_uploaded_file($_FILES['pic']['tmp_name'])){
		$_file=$_FILES['pic'];
		switch ($file['error']){
			break;
			case 2:
			echo "上传文件太大"; die;
			break;
			case 3;
			echo"上传文件不完整";  die;
			break;
			case 4;
			echo"没有文件上传";  die;
			break;
			case 5;
			echo"找不到文件上传的临时目录"; die;
			break;
			case 6;
			echo"找不到文件上传的临时目录"; die;
			break;
			case 7;
			echo"没有权限"; die;
			break；
		}
		//naashiyitiaoni 
		if($file['size']>8388608){
			echo '1';
//那就是啊   我去    此处不应该  我们该怎么办呢   
		}
		if(!isset($type[$ext])){
			echo '上传的文件的类型不符合'；die;
		}
	}
	move_uploaded_file()
}
		// <input type="text">
		// <lebal>1111</lebal>
//如果没有那种情况下   我哟该怎么办呢 又该怎么办呢 三  