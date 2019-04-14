<?php

 $conn =mysqli_connect("localhost", "root", "", "hakcvratsa");
 $sql = "INSERT INTO reportcomment (report) VALUES ('There is a problem comment!')";

 $result = mysqli_query($conn, $sql);
 echo "Ние ще се погрижим!";
 header("Location: comment.php");