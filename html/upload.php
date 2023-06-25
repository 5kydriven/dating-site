<?php
    session_start();
    include '../php/connect.php';

    $id = $_SESSION['id'];

    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/upload.css">
    <title>Uploads</title>
</head>
<body>
    <div class="container">
        <?php if(isset($_GET['cover']) || isset($_GET['pp'])) {?>
            <div class="image-box">
                <h1>
                    <?php if(isset($_GET['cover'])) {
                        echo $_GET['cover'];
                    } else {
                       echo $_GET['pp']; 
                    }
                    ?>
                </h1>
                <form method="post" action="../php/upload.php" enctype="multipart/form-data">
                    <?php if(isset($_GET['cover'])) {?>
                        <input type="hidden" value="cover" name="determin">
                    <?php } else {?>
                        <input type="hidden" value="pp" name="determin">
                    <?php }?>
                    <label>
                        <input type="file" name="image" required>
                        <?php if(isset($_GET['cover'])) {
                                echo "Upload Cover Photo";
                            } else {
                                echo "Upload Profile Picture"; 
                            }
                        ?>
                    </label>
                    <div class="btns">
                        <a href="profile.php?id=<?= $id?>">Cancel</a>
                        <a><button type="submit" name="upload" class="save-btn">Update</button></a>
                    </div>
                </form>
            </div>
        <?php } else if(isset($_GET['bio'] ) || isset($_GET['looking'] )) {?>
        <div class="bio">
            <form method="post" action="../php/upload.php" class="formbio">
            <?php if(isset($_GET['bio'])) {?>
                <p>
                E.G.: "Hello, I’m&nbsp;looking for a&nbsp;companion. Someone with a&nbsp;big personality but able to&nbsp;give me&nbsp;plenty of&nbsp;attention too. Please message me&nbsp;if&nbsp;you’ve&nbsp;got a&nbsp;good appetite, interesting conversation and the ability to&nbsp;laugh at&nbsp;yourself."
                </p>
                <input type="hidden" value="bio" name="asd">
            <?php } else { ?>
                <p> E.G.: "I’m looking for a Man/Woman, younger than 30 years old"
                </p>
                <input type="hidden" value="look" name="asd">
            <?php } ?>
                
                    <?php if(isset($_GET['bio'])) { ?>
                            <textarea name="bio" class="input" ><?= $row['bio']?></textarea>
                    <?php } else { ?>
                        <textarea name="bio" class="input" ><?= $row['looking']?></textarea>
                    <?php } ?>
                
                <div class="btns">
                    <a href="profile.php?id=<?= $id?>">Cancel</a>
                    <a><button type="submit" name="saveBio" class="save-btn">Save</button></a>
                </div>
            </form>
        </div>
        <?php } else if(isset($_GET['about'])) {?>
        <div class="about">
            <form method="post" action="../php/upload.php" class="formabout">
                <div class="about-input">
                    <strong>Where do you live?</strong>
                    <input name="place" type="text" placeholder="" value="<?= $row['address'];?>">
                </div>
                <div class="about-input">
                    <strong>What is your occupation?</strong>
                    <input name="occupation" type="text" placeholder="" value="<?= $row['work'];?>">
                </div>
                <div class="about-input">
                    <strong>What's your eye color?</strong>
                    <input name="eyeColor" type="text" placeholder="" value="<?= $row['eyeColor'];?>">
                </div>
                <div class="about-input">
                    <strong>What's your zodiac sign</strong>
                    <select name="zodiac_sign" required="required">
                        <option value="<?= $row['zodiac'];?>"></option>
                        <option value="aries">Aries</option>
                        <option value="taurus">Taurus</option>
                        <option value="gemini">Gemini</option>
                        <option value="cancer">Cancer</option>
                        <option value="leo">Leo</option>
                        <option value="virgo">Virgo</option>
                        <option value="libra">Libra</option>
                        <option value="scorpio">Scorpio</option>
                        <option value="sagittarius">Sagittarius</option>
                        <option value="capricorn">Capricorn</option>
                        <option value="aquarius">Aquarius</option>
                        <option value="pisces">Pisces</option>
                    </select>
                </div>
                <div class="about-input">
                    <strong>How tall are you?</strong>
                    <input name="height" type="number" placeholder="" value="<?= $row['height'];?>">
                </div>
                <div class="about-input">
                    <strong>What's your educational level?</strong>
                    <select name="education">
                        <option value="<?= $row['education'];?>"></option>
                        <option>High School</option>
                        <option>College</option>
                        <option>Associates Degree</option>
                        <option>Bachelors Degree</option>
                        <option>Graduate Degree</option>
                        <option>PhD</option>
                    </select>
                </div>
                <div class="about-input">
                    <strong>What's your body type?</strong>
                    <select name="body">
                        <option value="<?= $row['body'];?>"></option>
                        <option>Average</option>
                        <option>Curvy</option>
                        <option>Athletic</option>
                        <option>Muscular</option>
                        <option>Slim</option>
                    </select>
                </div>
                <div class="about-input">
                    <strong>Do you have kids?</strong>
                    <select name="kids">
                        <option value="<?= $row['kids'];?>"></option>
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </div>            
                <div class="about-input">
                    <strong>How old Are you?</strong>
                    <input name="age" type="number" placeholder="" value="<?= $row['age'];?>">
                </div> 
                <div class="btns">
                    <a href="profile.php?id=<?= $id?>">Cancel</a>
                    <a><button type="submit" name="about" class="save-btn">Save</button></a>
                </div>  
            </form>
        </div>
        <?php } ?>
       
    </div>
</body>
</html>