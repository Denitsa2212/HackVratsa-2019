<?php
if (isset($_POST['logSubmit'])) {
	# code...
	if ($_POST['logName'] == "" || $_POST['logPwd'] == "") {
        echo '<script type="text/javascript">';
        echo 'alert("Anything is wrong!");';
        echo '</script>';
    } else {
    	$username = $_POST['logName'];
    	$pwd = $_POST['logPwd'];

    	$conn = mysqli_connect("localhost", "root", "", "hakcvratsa");

    	$sql = "SELECT * FROM signup";
    	$finder = mysqli_query($conn, $sql);

    	while ($row = mysqli_fetch_assoc($finder)) {
    		if ($username == $row['name'] && $pwd == $row['password']) {
    			# code...
    			header("Location: ../Registered/index.php");
    		}else{
    			echo "You can not log in. Try again later!!!";
    		}
    	}
    }

    if ($username == "NikolaAdmin" && $pwd == "123") {
        # code...
        header("Location: ../Admin/index.php");
    }
}
?>