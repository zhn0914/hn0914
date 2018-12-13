<?php 
	header("content-type","text/html;charset=ytf-8");

	$useremail = $_POST["useremail"];
	$userpass = $_POST["userpass"];



	$con = mysql_connect("localhost","root","root");


	if(!$con){

		echo "0";
	}


	mysql_select_db("jifanxi",$con);


	$sqlStr = "insert into vip(useremail,userpass)
	values('".$useremail."','".$userpass."','".$username."','".$userln."','"$.$usercountry."','".$usertitle."')";

	mysql_query($sqlStr,$con);

	mysql_close($con);
?>