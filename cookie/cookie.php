<?php
	$cookie_name = 'MyCookie';
	$cookie_value = 'Apple';
	setcookie($cookie_name, $cookie_value, time() + 86400 * 30);
?>
<html>
<head>
	<title>Create Cookie</title>
</head>
<body>
	<h1>Cookie Example</h1>
	쿠키를 만듭니다.<br />
	쿠키 내용은 <a href='./result.php'>여기로</a>!!!
</body>