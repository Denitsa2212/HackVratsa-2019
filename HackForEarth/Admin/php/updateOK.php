<?php

$conn = mysqli_connect('localhost', 'root', '', 'hakcvratsa');

$Id = $_GET['id'];
$updateText = $_POST['updateText'];

$sql = "UPDATE FROM userpictures SET pictureText = ".$updateText." WHERE id = $Id";

$result = mysqli_query($conn, $sql);

header("Location: ../gallery.php");