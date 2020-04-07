<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        if(isset($_GET['submit'])){
            if(!empty($_GET['firstname']) && !empty($_GET['secondname'])){
                echo $_GET['firstname']." ".$_GET['secondname'];
            }else{
                echo "Empty field not allowed!!";
            }
        }
    ?>

    <form action="" method="GET">
    
        <input type="text" name="firstname">
        <input type="text" name="secondname">
        <input type="submit" name="submit">
    
    </form>
</body>
</html>