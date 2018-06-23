<?php
	sleep(3);	//为了测试返回速度慢，单位： 秒
	if($_REQUEST["user"]=="isaac")
		echo "Sorry, ".$_REQUEST ["user"] . " already exists.";
	else
		echo $_REQUEST ["user"]." is ok.";
?>