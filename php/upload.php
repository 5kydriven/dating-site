<?php
  session_start();
  include 'connect.php';
  $id = $_SESSION['id'];

  if(isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $picture_tmp_name = $_FILES['image']['tmp_name'];
    $picFolder = '../uploads/'.$image;

    $determine = $_POST['determin'];

    if($determine == "cover"){
      move_uploaded_file($picture_tmp_name, $picFolder);
      mysqli_query($conn, "UPDATE user SET background = '$image' WHERE id = '$id'");
      header('location: ../html/profile.php?id='.$id);
    } else {
      move_uploaded_file($picture_tmp_name, $picFolder);
      mysqli_query($conn, "UPDATE user SET image = '$image' WHERE id = '$id'");
      header('location: ../html/profile.php?id='.$id);
    }
  } else if(isset($_POST['saveBio'])){
      $bio = $_POST['bio'];
      $asdf = $_POST['asd'];

      if($asdf == "look"){
        mysqli_query($conn, "UPDATE user SET looking = '$bio' WHERE id = '$id'");
        header('location: ../html/profile.php?id='.$id);
      } else {
        mysqli_query($conn, "UPDATE user SET bio = '$bio' WHERE id = '$id'");
        header('location: ../html/profile.php?id='.$id);
      }
  } else if(isset($_POST['about'])){
    $address = $_POST['place'];
    $work = $_POST['occupation'];
    $eye = $_POST['eyeColor'];
    $zodiac = $_POST['zodiac_sign'];
    $height = $_POST['height'];
    $educ = $_POST['education'];
    $body = $_POST['body'];
    $kids = $_POST['kids'];
    $age = $_POST['age'];

    mysqli_query($conn, "UPDATE `user` SET `age`='$age',`address`='$address',`zodiac`='$zodiac',`eyeColor`='$eye',`work`='$work',`height`='$height',`education`='$educ',`body`='$body',`kids`='$kids' WHERE id='$id'");
    header('location: ../html/profile.php?id='.$id);
  } else if (isset($_POST['about'])){

  }
