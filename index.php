<?php
session_start();
// echo "hello". $_SESSION['cedrick'];
if(!isset($_SESSION['cedrick'])){
    echo "<script>window.location.href='login.php'</script>";
}

?>
<h1>our index page</h1>
<a href="./logout.php"><button>logout</button></a>