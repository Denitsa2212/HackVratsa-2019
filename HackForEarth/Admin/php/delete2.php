<?php

$conn = mysqli_connect('localhost', 'root', '', 'hakcvratsa');

$Id = $_GET['id'];

$sql = "DELETE FROM userpictures WHERE id = $Id";

$result = mysqli_query($conn, $sql);

header("Location: ../gallery.php");