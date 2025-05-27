<?php 
include ('./include/header.php');
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] !== "user" ){
    header("Location: index.php");
    exit();
}

?>
<h1>user dash board</h1>
<a href="./logout.php" class="btn btn-sm btn-danger">log out</a>
<?php 
include ('./include/footer.php')
?>