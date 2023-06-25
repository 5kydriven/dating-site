<?php
    session_start();
    include '../php/connect.php';
    $logUser = $_SESSION['id'];

    $id = $_GET['id'];


    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'"));

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    
    <title>Profile</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>Caila Dating Site
            </div>
            <div class="navigation">
                <a href="profile.php">Profile</a>
                <a href="#">Account</a>
                <a href="user.php?logout=<?= $id?>">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <div class="profile">
                    <div class="background">
                        <img src="../uploads/<?= $row['background'];?>" width="100%" height="300px">
                        <div class="bg-btns">
                            <a href="user.php" class="bck">BACK</a>
                            <?php if($id == $logUser) {?>
                                <a href="upload.php?cover=<?= "Update Cover"?>" class="bg-update" id="openModal">UPDATE COVER</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="bio">
                        <div class="profile-box">
                            <div class="profile_box">
                                <img src="../uploads/<?= $row['image'];?>" height="150px" width="150px">
                                <?php if($id == $logUser) {?>
                                    <a href="upload.php?pp=<?= "Update Profile"?>" class="profile-btn">UPLOAD PHOTO</a>
                                <?php } ?>
                            </div>
                            <label class="user-name"><?= $row['name']?></label>
                        </div>
                    </div>
                    <div class="bio-down">
                        <h2>A Few Words About Myself
                            <?php if($id == $logUser) {?>
                                <a href="upload.php?bio=<?= $id?>"><img src="../edit-button.png" ></a>
                            <?php } ?>
                        </h2>
                        <div class="bio-box">
                            <p><?= $row['bio']?></p>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="About box">
                        <div class="title-box">
                            <h2>About ME</h2>
                            <?php if($id == $logUser) {?>
                                <a href="upload.php?about=<?= $id?>"><button><img src="../edit-button.png"></button></a>
                            <?php } ?>
                        </div>
                        <div class="about-box">
                            <p><strong>Live in:</strong> <span><?= $row['address']?></span></p>
                            <p><strong>Work as:</strong> <span><?= $row['work']?></span></p>
                            <p><strong>Eye Color:</strong> <span><?= $row['eyeColor']?></span></p>
                            <p><strong>Zodiac sign:</strong> <span><?= $row['zodiac']?></span></p>
                            <p><strong>Height:</strong> <span><?= $row['height']?></span></p>        
                            <p><strong>Education:</strong> <span><?= $row['education']?></span></p>
                            <p><strong>Body type:</strong> <span><?= $row['body']?></span></p>
                            <p><strong>Have kids:</strong> <span><?= $row['kids']?></span></p>
                            <p><strong>Age:</strong> <span><?= $row['age']?></span></p>
                        </div>
                    </div>
                    <div class="looking box">
                        <div class="title-box">
                            <h2>I'm Looking for</h2>
                            <?php if($id == $logUser) {?>
                                <a href="upload.php?looking=<?= $id?>"><button><img src="../edit-button.png"></button></a>
                            <?php }?>
                        </div>
                        <div class="about-box">
                            <p><?= $row['looking']?></p>
                        </div>
                    </div>
                </div>
                <div class="space">

                </div>
            </div>
            <div class="contacts">
                <div class="my-contact">
                    <div class="title">
                        <h3>My contacts</h3>
                    </div>
                    <p>
                        You have no chats.
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
    <div class="modal ">
        <div class="modal-box bgModal">
            <form method="post" action="" enctype="multipart/form-data">
                <label>
                    <input type="file" name="background">
                    Upload Picture
                </label>
                <div class="modal-btns">
                    <button type="submit" class="cancel-modal">Cancel</button>
                    <button type="submit" name="upload">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
<scrip src="../js/profile.js"></scrip>
</html>