<?php
    session_start();
    include '../php/connect.php';
    $id = $_SESSION['id'];
    $interest = $_SESSION['interest'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE gender = '$interest'");

    if(isset($_GET['logout'])){
        unset($id);
        session_destroy();
        header('location: login-form.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <title>Welcome - user</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>Caila Dating Site
            </div>
            <div class="navigation">
                <a href="profile.php?id=<?= $id?>">Profile</a>
                <a href="#">Account</a>
                <a href="user.php?logout=<?= $id?>">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="user-grid">
                <h2>Profiles</h2>
                <div class="grid">
                    <?php
                        while($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <a href="profile.php?id=<?= $row['id']?>">
                            <div class="card">
                                <div class="image">
                                    <img src="../uploads/<?= $row['image'];?>" height="150px" width="200px">
                                </div>
                                <div class="info">
                                    <label><?= $row['name'];?>, <span><?= $row['age'];?></span></label><br>
                                    <p><?= $row['bio']?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="contacts">
                <div class="my-contact">
                    <div class="title">
                        <h3>My contacts</h3>
                    </div>
                    <p>
                        You have no chats.<br>
                        Explore the world and meet anyone through 
                        the chat.
                    </p>
                </div>
                <div class="chat-request">
                    <div class="req-title">
                        <h3>chat-request</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>