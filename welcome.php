<?php 
include './header.php';
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
    exit();
    
}
?>
<p class="alert alert-success text-capitalize fs-4">welcome <strong><?php echo $user ?></strong> You've successfully log in</p>
<a href="./logout.php" class="btn btn-danger btn-sm">logout</a>

<?php 
$user = $_SESSION['user'];

if(!isset($_SESSION['role']))
{
    header("Location: index.php");
    exit();
}
$role = $_SESSION['role'];

if ($role === "admin") {
    header("Location: admin.php");
    exit();
} elseif($role === "editor") {
    header("Location: editor.php");
    exit();
} elseif($role === "user") {
    header("Location: user.php");
    exit();
}else{
?>
<p class="alert alert-warning text-capitalize fs-4">User is not defined</p>
<a href="./logout.php" class="btn btn-danger btn-sm">logout</a>

<?php
}
include './footer.php';
?>
