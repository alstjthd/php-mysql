<?php 
    session_start();
?>
<html>
<head>
    <title>result session</title>
</head>
<body>
    <h1>session example</h1>
    세션 값은 : <?php echo $_SESSION['mySession']; ?>입니다
</body>
</html>