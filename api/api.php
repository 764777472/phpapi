<?php
	$id = $_GET["user_id"];
	if ($id != 10086){
	    exit();
	}
	
	$userinfo = array(
	    'username'=>'jason',
	    'password'=>'xxxxxx',
	);
	
	$result = array(
	          'code'=>'10000',
	          'message'=>'成功',
	          'data'=>$userinfo,
	        );
	echo json_encode($result);