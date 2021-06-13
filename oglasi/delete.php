
<?php require_once 'partials/head.php';?>
<?php 
$id1=$_GET['id'];
$sql="DELETE FROM oglas WHERE oglas.id=$id1";
$query=mysqli_query(db(),$sql);

header('Location: index.php');


?>
<?php require_once 'partials/navbar.php';?>
<?php require_once 'partials/footer.php'; ?>  



