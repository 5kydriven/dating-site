<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>
    <div class="login">
        <h1>Registration Form</h1>
        <?php if (isset($_GET['error'])) { ?>
     		<div class="message">
                <strong><?php echo $_GET['error']; ?></strong>
            </div>
     	<?php } ?>
        <form method="post" action="../php/register.php" enctype="multipart/form-data">
            <input type="text" name="full_name" placeholder="Full Name" required="required" />
            <input type="number" name="age" placeholder="Age" required="required" style="appearance: textfield;"/>
            <input type="text" name="address" placeholder="Address" required="required" />
            <input type="text" name="eye_color" placeholder="Eye Color" required="required" />
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <input type="file" name="image" required="required" />
            <select name="gender" required="required">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <select name="zodiac_sign" required="required">
                <option value="">Select Zodiac Sign</option>
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
            <select name="interest" required>
                <option value="">Interested in</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            
            <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Register</button>
        </form>
        <a href="login-form.php">Login</a>
    </div>
</body>
</html>
