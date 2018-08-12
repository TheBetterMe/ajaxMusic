<?php  
$connection=mysqli_connect("localhost","root","123456","ajaxmusic");
$mid = $_GET['mid'];//传过来的id

$sql = "select * from message_list where mid = $mid";

$query=mysqli_query($connection,$sql);
if( $query && mysqli_num_rows($query) ){
		while($row = mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
		echo json_encode($data);
	}




