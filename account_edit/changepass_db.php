<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['change_pass'])) {
        $oldpass = mysqli_real_escape_string($conn, $_POST['old_password']);
        $newpass1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $newpass2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($oldpass)) {
            array_push($errors, "Old Password is required");
            $_SESSION['error'] = "Old Password is required";
        }
        if (empty($newpass1)) {
            array_push($errors, "New Password is required");
            $_SESSION['error'] = "New Password is required";
        }
        if ($newpassw1 != $newpass2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        if (count($errors) == 0) {
            $oldpasshash = md5($oldpass);
            $query = "SELECT * FROM user_final WHERE password = '$oldpasshash' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $newpasshash = md5($newpass1);
                $sql ="INSERT INTO user_final (password) VALUES ($newpasshash)";
                mysqli_query($conn, $sql); 
            } else {
                array_push($errors, "Old Password is incorrect!");
                $_SESSION['error'] = "Old Password is incorrect!";
                header("location: changepass.php");
            }
        }
    }
?>
