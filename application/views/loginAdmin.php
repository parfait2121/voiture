
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo site_url('admin/login'); ?>" method="POST">
        <input type="email" name="email" placeholder="login"> <br>
        <input type="password" name="mot de passe " placeholder="mot de passe"><br>
        <input type="submit" value="valider">
    </form>   
</body>
</html>