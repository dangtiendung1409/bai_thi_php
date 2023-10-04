
<!doctype html>
<html lang="en">
<head>
    <?php include ("head.php"); ?>
</head>
<body>
<?php include ("nav.php"); ?>
<div class="container">

    <form action="store.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input name="age" type="number" class="form-control" >
        </div>

        <div class="mb-3 ">
            <label class="form-label" >Address</label>
            <input name="address" type="text" class="form-control" >

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            <textarea  name="telephone" type="text" class="form-control" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

</body>
</html>
