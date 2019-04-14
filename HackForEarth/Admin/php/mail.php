<?php

if (isset($_POST["submit"])) {
	# code...

$name = $_POST["name"];
$email = $_POST["email"];
$source = $_POST["source"];

$mailTo = "nikola.n@abv.bg";
$txt = "Съобщение от ".$name."E-mail: ".$email.". "."\n\n"."Искам да ви помогна. Това е кода, който направих: ".$source.". ";

mail($mailTo, "Сорс код...", $txt);
header("Location: ../harduer.php?mail_don't_Send");

	}else{
		header("Location: ../harduer.php?sendFail");
	}

header("Location: ../harduer.php?mailSend");