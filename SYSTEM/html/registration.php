<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
<?php
    require_once('../connection/registration-conn.php');

    if(isset($_POST['create'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO registration (fullname, username, password) VALUES(?,?,?)";

		$stmtinsert = $db->prepare($sql);

		$result = $stmtinsert->execute([$fullname, $username, $password]);
	}
?>


<form action="#" method="post">
    <div class="main">
    	<h1>User Information</h1>
        <label for="fullname">Full Name</label><br>
        <input type="text" name="fullname" id="fullname" class="input" required><br><br>

        <label for="username">User Name</label><br>
        <input type="text" name="username" id="username" class="input" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" class="input" required><br><br>
    
        <input type="submit" name="create" class="btn" value="Submit">
        <br><br>
    </div>
</form>
</body>
</html>