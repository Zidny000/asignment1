<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $user = "Zidny";
        $pass = 123456;
    
        if(isset($_GET['submit'])){
            if($_GET['name'] == $user && $_GET['password'] == $pass){
                echo "You are loged in";
            }else echo "Incorect username or password";
        }
    
    ?>

    <form action="" method="GET">
        <input type="text" name="name">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>