<?php session_start(); ?>
<?php require_once('connection.php');?>
 
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}
$error=array();
if(isset($_GET['user_id'])){
    $user_id=mysqli_real_escape_string($connection,$_GET['user_id']);
if($user_id==$_SESSION['user_id']){
    header('Location:user.php');
}
else{
$query="UPDATE user SET is_deleted =1 WHERE id ={$user_id} LIMIT 1" ;
$result=mysqli_query($connection,$query);
if($result){
    header('Location:user.php');
}
}
}
else{
    header('Location:user.php');
}



?>

