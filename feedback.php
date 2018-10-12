<?php
include_once 'connection.php';
$spot_last_id = "SELECT COUNT(commentId) AS max_order FROM comments" ;
	$spot_last_id_result = $conn->query($spot_last_id);
	$spot_last_id_row = $spot_last_id_result->fetch_assoc();
	$next_order = ($spot_last_id_row["max_order"] + 1);

	for($co = 1; $co<=$next_order; $co++){
	$cont_order = '<option value = "'.$co.'">'.$co.'</option>';
	}
date_default_timezone_set ("Africa/Nairobi");
$post_date =  date("Y-M-d");

if (isset($_POST["save"])){
	$feedback= $_POST["feedback"];
	$C_name= $_POST["C_name"];
	
   $sql="INSERT INTO `comments`(`commentId`,`C_name`,`feedback`, `post_date`) VALUES ('$next_order','$C_name','$feedback',now())";
   
      $query=mysqli_query($conn,$sql);
         if($query){
	header('location:Events.php');
}
}
?>
