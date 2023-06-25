<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login-form.css">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <div class="login">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>
     		<div class="message">
                <strong><?php echo $_GET['error']; ?></strong>
            </div>
     	<?php } ?>
        <form method="post" action="../php/verify.php">
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large" name="submit">Let me in.</button>
        </form>
        <a href="registration-form.php">register</a>
    </div>
</body>
</html>