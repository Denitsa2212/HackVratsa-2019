<!DOCTYPE html>
<html>
<head>
	<title>Коментари</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="php.css">
  <link rel="stylesheet" href="..\menu.css" />
</head>
<body>
	 <nav>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links">
        <li><a href="..\index.php">Начало</a></li>
        <li><a href="..\aboutus.php">За нас</a></li>
        <li><a href="..\info.php">Информация</a></li>
        <li><a href="..\gallery.php">Галерия</a></li>
        <li><a href="..\angularTest\index.html">Тест</a></li>
        <li><a href="..\football\index.html">Игра</a></li>
        <li><a href="..\harduer.php">Хардуер</a></li>
        <li><a href="..\index.php">Изход</a></li>
      </ul>
    </nav>
		<form action="report.php" method="post">
		<p><button name="report" class="btn btn-default">Докладване</button></p>
		</form>
</div>

<div class="commentsViewUser">
<?php
	$conn = mysqli_connect("localhost", "root", "", "hakcvratsa");
	$sql = "SELECT * FROM okcomments";
	$findComment = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($findComment)) {
		# code...
		$commentName = $row['name'];
		$commentText = $row['comment'];

		echo "<div><p>$commentName:</p><p>$commentText</p><p><a href='delete1.php?id=".$row['id']."' class='deleteBtn'>Изтрий</a></p><p></p><p></p></div>";
	}
?>
</div>

<script src="..\menu.js"></script>
</body>
</html>