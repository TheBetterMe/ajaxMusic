<?php  
$connection=mysqli_connect("localhost","root","123456","ajaxmusic");

$sql="select id,name,musicName from music_list";

$query=mysqli_query($connection,$sql);

if($query && mysqli_num_rows($query)){//查询到了，
	while($row=mysqli_fetch_assoc($query)){//查询数据填充到关联数组
	$data[]=$row;}

    echo json_encode($data);//输出json格式

}




