<?php 
    session_start();
    $session_value = 'gnuwiz';
    $_SESSION['mySession'] = $session_value;
?>
<html>
<head>
    <title>Create session</title>
</head>
<body>
    <h1>session example</h1>
    세션을 만듭니다.<br />
    세션 내용은<a href="C:\xampp\gnuwiz\myapp\session\result_sesion.php">여기로</a>!!!
</body>
</html>