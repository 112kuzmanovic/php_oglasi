
<?php require_once 'partials/head.php';?>
<?php if(!isset($_SESSION['id'])){
    header("Location: oglasi.php");
}
?>
<?php require_once 'partials/navbar.php';?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h4 class="text-center m-3">Novi oglas</h4>
            <form action="new.add.php" method="post">
                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <input type="text" name="text" placeholder="text" class="form-control"><br>
                <input type="number" name="price" placeholder="price" class="form-control"><br>
                <select name="category" class="form-control">
                    <option value="racunari" class="form-control">Racunari</option>
                    <option value="bjela_tehnika" class="form-control">Bijela tehnika</option>
                    <option value="ribolov" class="form-control">Ribolov</option>
                    <option value="sport" class="form-control">Sport</option>
                </select><br>
                <button type="submit" class="btn btn-primary" form-control>Add New</button>    

            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>  
