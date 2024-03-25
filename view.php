<?php
session_start();
if(!isset($_SESSION['cedrick'])){
    echo "<script>window.location.href='login.php'</script>";
}
?>
<h1>our view page</h1>