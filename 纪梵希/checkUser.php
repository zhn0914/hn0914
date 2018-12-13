<?php
	header("content-type","text/html;charset=utf-8");

	$useremail = $_GET["useremail"];


	$con = mysql_connect("localhost","root","root");
	mysql_select_db("jifanxi",$con);


	$sqlStr="select * from vip where useremail='".$useremail."'";


	$result = mysql_query($sqlStr,$con);


	mysql_close($con);



	$rows = mysql_num_rows($result);


	if($rows>0){
		echo "0";
	}else{
		echo "1";
	}


?>