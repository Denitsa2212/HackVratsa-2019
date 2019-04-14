<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <title>Регистрация</title>
    <style type="text/css">
      *{font-family: 'Comfortaa',sans-serif;}
      input[type="submit"]{
          border-radius: 45%;
          border:1px solid #00ff72;
          background: transparent;
          width: 25%;
          height: 35px;
          transition: .5s;
          font-size: 15px;
          color: #fff;
        }input[type="submit"]:hover{
          background: #00ff72;
          color: #000;
        }
    </style>
</head>
<body>
	<div class="box">
		<h2>Регистрация</h2>
		<form method="POST" action="php/signup.php">
			<div class="inputBox">
				<input type="text" name="username" required="">
				<label>Потребителско име</label>
			</div>
			<div class="inputBox">
				<input type="text" name="email" required="">
				<label>Имейл</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label>Парола</label>
			</div>
			<div class="inputBox">
				<input type="password" name="reTypepassword" required="">
				<label>Повтори Парола</label>
			</div>
			<input type="submit" name="submit" value="Submit">
			<p>Вече регистриран? <a href="login.php">Натисни тук</a></p>
			<p>Искаш да се регистрираш като админ? <a href="admin.php">Натисни тук</a></p>
		</form>
	</div>
</body>
</html>