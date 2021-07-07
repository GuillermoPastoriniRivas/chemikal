<?php
session_start();

//connect to database // host,user,pass,bd
$db=mysqli_connect("localhost","root","","mysite");


?>
<?php include 'partials/header.php';?>


<main class="container">
 <div class="col-md-6 col-md-offset-4">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
</div>
<a href="logout.php">Log Out</a>
</div>
<?php include 'partials/navigation.php';?>
</main>
</div>


<?php include 'partials/footer.php';?>

