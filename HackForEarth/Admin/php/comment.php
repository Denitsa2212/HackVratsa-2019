<?php

if (isset($_POST['submit'])) {
    if ($_POST['nameUser'] == "" || $_POST['comment'] == "") {
        echo '<script type="text/javascript">';
        echo 'alert("Anything is wrong!");';
        echo '</script>';
    } else {
    $conn = mysqli_connect("localhost", "root", "", "hakcvratsa");

	$name = $_POST["nameUser"];
	$comment = $_POST["comment"];

	$sql = "INSERT INTO okcomments(name, comment) VALUES('$name', '$comment')";

    $result = mysqli_query($conn, $sql);

    header("Location: ../aboutus.php?commentUploadSiuccesfuly");
    }
}

header("Location: ../aboutus.php?commentUploadSiuccesfuly");