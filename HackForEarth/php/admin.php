<?php

if (isset($_POST["submit"])) {
	# code...

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$repeadPwd = $_POST["repPwd"];
$key = $_POST["key"];

	if ($pwd == $repeadPwd) {
		# code...

$mailTo = "nikola.n@abv.bg";
$txt = "Съобщение от ".$username.". "."\n\n".$getText."\n\n".". "."E-mail: ".$email.". "."\n\n"."С парола: ".$pwd." и с продуктов ключ: ".$key.". "."Искам да стана админ? Възможно ли е да ми отговорите с имейл на тази поща?";

mail($mailTo, "Искам да съм админ...", $txt);
header("Location: ../admin.php?mail_don't_Send");

	}else{
		header("Location: ../admin.php?sendFail");
	}
}

header("Location: ../admin.php?mailSend");