<?php  
	$con = mysqli_connect('localhost', 'root', '', 'hayu_dagang');

	function megacrypt($pass){
		return md5(md5(md5(md5(md5(md5(md5($pass)))))));
		
	}
?>