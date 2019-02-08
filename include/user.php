<?php session_start(); ?>
<?php require_once('connection.php');?>

<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM user WHERE is_deleted=0 ORDER BY name";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['name']} </td>";
    $userlist.="<td>{$user['address']} </td>";
    $userlist.="<td>{$user['date']} </td>";
    $userlist.="<td><a href=\"modify.php?user_id={$user['id']}\">Edit</a></td>";
    $userlist.="<td><a href=\"delete.php?user_id={$user['id']}\">Delete</a></td>";
    $userlist.="</tr>";
}
}
else{
    echo 'Database Error';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Users

    </title>
</head>
<body>
    <header>
        <div class="appname">User Mangement</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Users <span><a href="adduser.php">+Add New</a></span></h1>
<table class="masterlist">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>last Login</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
    <?php echo $userlist; ?>
</table>
    </main>
</body>
</html>