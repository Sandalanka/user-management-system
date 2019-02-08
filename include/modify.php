<?php session_start(); ?>
<?php require_once('connection.php');?>
 
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}
$error=array();
if(isset($_GET['user_id'])){
    $user_id=mysqli_real_escape_string($connection,$_GET['user_id']);
//$query="SELECT*FROM user WHERE id={$user_id} LIMIT 1";
//$result_set=mysqli_query($connection,$query);
//if($result_set){
    //if(mysqli_num_rows($result_set)==1){
//$result=mysqli_fetch_assoc($result_set);
//$name=$result['name'];
//$address=$result['address'];
    }
    //else{
    //header('Location:user.php?err=user_not_found');
    //}
//}
//else{
    //header('Location:user.php?err=query_not_found');
//}
//}

if(isset($_POST['submit'])){
    if(isset($_GET['user_id'])){
    $user_id=mysqli_real_escape_string($connection,$_GET['user_id']);
    $named=$_POST['name'];
    $password=$_POST['address'];
    $query="UPDATE user SET name={$name} AND password={$password} WHERE id ={$user_id} LIMIT 1" ;
    $result=mysqli_query($connection,$query);


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
    <title>View/modify user

    </title>
</head>
<body>
    <header>
        <div class="appname">User Mangement</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>View/Modify user <span><a href="user.php">Back to page</a></span></h1>


<form action="modify.php"method="POST" class="userform">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
<p>
    <label for="">Name</label>
    <input type="text" name="name"  >
</p>
<p>
    <label for="">Email Address</label>
    <input type="email" name="address"  >
</p>
<p>
    <label for="">password</label>
    <span>*****</span><a href="pssword.php">Change password</a>
</p>
<p>
    <button type="submit" name="submit">save</button>
</p>

</form>
    </main>
</body>
</html>