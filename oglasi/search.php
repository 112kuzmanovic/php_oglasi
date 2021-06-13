
<?php require_once 'partials/head.php';?>

<?php require_once 'partials/navbar.php';?>

<?php $search=$_GET['search']; 
 



$sql="SELECT oglas.title,oglas.category,oglas.price,users.name FROM oglas INNER JOIN users ON users.id=oglas.user_id
WHERE oglas.title='$search'
OR oglas.category='$search'
OR users.name='$search'";

$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
?>

<?php foreach($result as $row): ?>
    <div class="col-4">
        <div class="card mb-2 mt-2">
            <div class="card-header">
                <a href="show.category.php?cat=<?php echo $row['category'] ?>" class="btn btn-secondary btn-sm" >
                    <?php echo $row['category']; ?>
                </a>
            </div>
            <div class="card-body text-center">
                <h5><?php echo $row['title'];?></h5>
                <a href="single.oglas.php?id=<?php echo $row['id'] ?>" clas="btn btn-light btn-sm">Vidi oglas</a>
            </div>
            <div class="card-footer">
                <a href="oglasi_from_user.php?name=<?php echo $row['name']?>" class="btn btn-warning btn-sm float-left"><?php echo $row['name'];?></a>
                <a href="" class="btn btn-danger btn-sm float-right"><?php echo $row['price'] ?></a>
            </div>
        </div>
    </div>
    <?php endforeach ?>

<?php require_once 'partials/footer.php'; ?>  
