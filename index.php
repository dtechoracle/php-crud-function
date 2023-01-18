<?php 
include 'function.php';
include 'db.php';
if(isset($_POST['reg'])){
   create ();
}

if(isset($_GET['del'])){
    delete ();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method ="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="email" name="email" placeholder="email">
        <input type="submit" name="reg">
    </form>
</body>
</html>

<?php 
read ();
?>

