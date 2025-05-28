<?php 
include ('./include/header.php');
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] !== "user" ){
    header("Location: index.php");
    exit();
}

    $username = $_SESSION['user'] ?? 'Guest';
$id = $_SESSION['id'] ?? 'N/A';
$role = $_SESSION['role'] ?? 'N/A';
?>
<h1>User Dashboard</h1>
<div class="container mt-4">
    <div class="card text-dark mb-3" style="max-width: 22rem;">
      <div class="card-header">User Information</div>
      <div class="card-body">
        <h5 class="card-title">Welcome: <?php echo $username ?></h5>
        <p class="card-text">User ID: <?php echo $id ?></p>
        <p class="card-text">Role: <?php echo $role ?></p>
      </div>
    </div>
</div>
<a href="./logout.php" class="btn btn-sm btn-danger">log out</a>
<?php 
include ('./include/footer.php')
?>