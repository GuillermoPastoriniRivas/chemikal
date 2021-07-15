<?php
session_start();
if(  isset($_SESSION['username']) && $_SESSION['username'] !== "Invitado")
{
  header("location:index.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","mysite");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']); //Limpia caracteres del username
      $password=mysqli_real_escape_string($db,$_POST['password']); //Limpia caracteres del password
      $password=md5($password); //Encripta password
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:index.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>
<?php include 'partials/header.php';?>
<body class="main-layout centrado">
<div class="centrado">
  
<?php
    if(isset($_SESSION['message']))
    {
      
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="login.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="btn Log In estiloBotonRojo"></td>
     </tr>
 
  </table>
</form>
<a class="nav-link" href="register.php">SignUp</a>
</div>

<?php include 'partials/footer.php';?>
