<?php
	$host = "ec2-34-195-169-25.compute-1.amazonaws.com";
	$user = "vastjiccyrujng";
	$pass = "65353e0e14733f71ac8fae19d9277f10f1dceef650f215fd18cd2cfc91273181";
	$port = "5432";
	$dbname = "d5gl0aajitlv3u";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
