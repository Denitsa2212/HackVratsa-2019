<!-- <?php
//session_start();
?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
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
		<h2>Вход</h2>
		<form method="post" action="php/login.php">
			<div class="inputBox">
				<input type="text" name="logName" required="">
				<label>Потребителско име</label>
			</div>
			<div class="inputBox">
				<input type="password" name="logPwd" required="">
				<label>Парола</label>
			</div>
			<input type="submit" name="logSubmit" value="Submit">
			<p>Още не си регистриран? <a href="signup.php">Натисни тук</a></p>
		</form>
	</div>
</body>
</html>