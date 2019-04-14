<?php

$conn = mysqli_connect('localhost', 'root', '', 'hakcvratsa');

$Id = $_GET['id'];

$sql = "DELETE FROM okcomments WHERE id = $Id";

$result = mysqli_query($conn, $sql);

header("Location: view.php");