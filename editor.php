<?php 
include ('./include/header.php');
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] !== "editor" ){
    header("Location: index.php");
    exit();
}

?>
<h1>editor dash board</h1>
<a href="./logout.php" class="btn btn-sm btn-danger">log out</a>
<?php 
include ('./include/footer.php')
?>