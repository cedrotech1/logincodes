<?php
include("connection.php");
session_start();
?>
<center>
    <h3>login form</h3>
    <form action="login.php" method='post'>
        <input type="text" placeholder='username' name='username'><br><br>
        <input type="password" placeholder='********' name='password'><br><br>
        <input type="submit" value='login' name='login'>
    </form>
</center>
<?php
if(isset($_POST['login'])){
   $un=$_POST['username'];
   $ps=$_POST['password'];
   $q=mysqli_query($connect,"select * from users where username='$un' and password='$ps'");
  $rows= mysqli_num_rows($q);
  if($rows){
    $_SESSION['cedrick']=$un;
    echo "<script>window.location.href='index.php'</script>";
  }else{
    echo "<script>alert('incorect cridentios')</script>";
  }
}


?>
