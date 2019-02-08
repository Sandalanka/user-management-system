<?php session_start(); ?>
<?php require_once('connection.php');?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['address']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $query="INSERT INTO user(name,address,password)VALUES('{$name}','{$email}','{$password}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:user.php?add_user=true');
    }
    else{
        echo 'Error';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Add new user

    </title>
</head>
<body>
    <header>
        <div class="appname">User Mangement</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Add new user <span><a href="user.php">Back to page</a></span></h1>
<?php
if(!empty($error)){
    echo '<div class="errmsg">';
    echo '<b>There was error</b>';
    foreach($error as $error){
        echo $error.'<br>';
    }
    echo "</div>";

}
?>

<form action="adduser.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>
<p>
    <label for="">Email Address</label>
    <input type="email" name="address" id="" require>
</p>
<p>
    <label for="">New password</label>
    <input type="password" name="password" require>
</p>
<p>
    <button type="submit" name="submit">save</button>
</p>

</form>
    </main>
</body>
</html>