<?php  
$connection=mysqli_connect("localhost","root","123456","ajaxmusic");
$id = $_GET['id'];
$sql="select * from music_list where id = $id";

$query=mysqli_query($connection,$sql);

if($query && mysqli_num_rows($query)){//查询到了，


    echo json_encode(mysqli_fetch_assoc($query));//输出json格式

}
