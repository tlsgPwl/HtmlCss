<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>
  Do it! HABIT TRACKER
</title>
</head>
<body>
<h1><a href="http://localhost/homepage/study1.php?id=1">HABIT TRACKER CHALLENGE</a></h1>
<nav>
<ol>
<?php
echo file_get_contents("list.txt");
 ?>
</ol>
</nav>
<article>
<?php
echo file_get_contents($_GET['id'].".txt");
 ?>
</article>
</body>
</html>
