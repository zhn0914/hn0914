<?php
	header("Content-type:text/html;charset=utf-8");
	
	$username = $_POST['useremail'];
	$userpass = $_POST['userpass'];
	$con = mysql_connect("localhost","root","root");
	if(!$con){
		echo "数据库连接失败";
	}else{
		mysql_select_db("jifanxi",$con);
		$sqlstr = "select * from vip where useremail='$username'";
		$result = mysql_query($sqlstr,$con);
		$rows = mysql_num_rows($result);
		if($rows==0){
			$sqlstr = "insert into vip values('$useremail','$userpass')";
			$result = mysql_query($sqlstr,$con);
			if($result==1){
				echo "1";
			}else{
				echo "0";
			}
		}else{
			echo "-1";
			// mysql_close($con);
		}
	}
	
?>