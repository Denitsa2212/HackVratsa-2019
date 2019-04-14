<?php

if (isset($_POST['submit'])) {
	# code...
	if ($_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || $_POST['reTypepassword'] == "") {
        echo '<script type="text/javascript">';
        echo 'alert("Anything is wrong!");';
        echo '</script>';
    } else {

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$reTypepassword = $_POST['reTypepassword'];

   if ($password == $reTypepassword) {
	# code...
$conn = mysqli_connect("localhost", "root", "", "hakcvratsa");

$sql = "INSERT INTO signup(name, email, username, password) VALUES('$username', '$email', '$password', '$reTypepassword')";

    $result = mysqli_query($conn, $sql);

header("Location: ../login.php");
		}
	}
}

header("Location: ../login.php");