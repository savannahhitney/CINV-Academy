<?php
include_once("dbConfig.php");
if(!empty($_POST["name"]) && !empty($_POST["comment"])){
	$insertComments = "INSERT INTO comment (parent_id, comment, sender) VALUES ('".$_POST["commentId"]."', '".$_POST["comment"]."', '".$_POST["name"]."')";
	mysqli_query($db, $insertComments) or die("database error: ". mysqli_error($db));	
	$message = '<label class="text-success">Comment posted Successfully.</label>';
	$status = array(
		'error'  => 0,
		'message' => $message
	);	
} else {
	$message = '<label class="text-danger">Error: Comment not posted.</label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);	
}
echo json_encode($status);
?>