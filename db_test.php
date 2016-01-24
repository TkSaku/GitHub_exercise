<?php
	$link = mysqli_connect('localhost', 'root', '3196@Yuno');
	if(!$link) {
		die('接続失敗!<br>'.mysqli_connect_error()	);
	} else {
		echo '接続成功!';
	}
?>