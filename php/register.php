<?php
    include 'connect.php';
        $name = $_POST['full_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $zodiac_sign = $_POST['zodiac_sign'];
        $eye_color = $_POST['eye_color'];
        $username = $_POST['username'];
        $interest = $_POST['interest'];
        $password = md5($_POST['password']);
        
        $pic = $_FILES['image']['name'];
        $picture_tmp_name = $_FILES['image']['tmp_name'];
        $picFolder = '../uploads/'.$pic;

    if(isset($_POST['submit'])){
        
        //if(empty($pic)){
            $default = "defaultBG.jpeg";
            $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

            if(mysqli_num_rows($user) > 0){
                header('Location: ../html/registration-form.php?error=Username already exist!');
                exit(); 
            } else {
                move_uploaded_file($picture_tmp_name, $picFolder);
                mysqli_query($conn, "INSERT INTO user (name, age, address, gender,zodiac,eyeColor,username,password,interest,image,bio,background) VALUES ('$name','$age','$address','$gender','$zodiac_sign','$eye_color','$username','$password','$interest','$pic','$dbio','$default')");
                header('location: ../html/login-form.php');
                exit(); 
            }
        // } else {
        //     echo 'no picture';
        // }
        
    }