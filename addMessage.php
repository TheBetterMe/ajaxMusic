<?php  
$connection=mysqli_connect("localhost","root","123456","ajaxmusic");
$mid = $_POST['mid'];//传过来的id

$text = htmlspecialchars($_POST['text']);
$sql="insert into message_list(mid,text) values($mid , '$text')";

$query=mysqli_query($connection,$sql);

	if($query){
		echo '{"code":"1","message":"'.$text.'"}';
	}
	else{
		echo '{"code":"0","message":"添加失败"}';
	}
