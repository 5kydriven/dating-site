<?php
    session_start();
    include 'connect.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['id'] = $row['id'];
            $_SESSION['interest'] = $row['interest'];
            header('Location: ../html/user.php?id='.$row['id']);
            exit();
        } else {
            header('Location: ../html/login-form.php?error=Incorrect username or password!');
            exit();
        }
    }