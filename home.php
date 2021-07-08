<?php
session_start();

//connect to database // host,user,pass,bd
$db=mysqli_connect("localhost","root","","mysite");


?>
<?php include 'partials/header.php';?>
<body class="main-layout ">

<?php include 'partials/navigation.php';?>



<?php include 'partials/footer.php';?>

