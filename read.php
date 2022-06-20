<?php require "php/read.php"; ?>
<!DOCTYPE html>
<html lang="KO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD 공부 - Read</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <div class="box">
            <?php if (isset($_GET['success'])) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php endif ?>
            <?php if (mysqli_num_rows($result)) : ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $i = 0;
                    while($rows = mysqli_fetch_assoc($result)) :
                    $i++;
                ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?=$rows['name']?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td>
                        <a href="update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a>
                        <a href="./php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile ?>
                </tbody>
            </table>
            <?php endif ?>
            <div class="link-right">
                <a href="./index.php" class="link-primary">Create</a>
            </div>
        </div>
    </div>
</body>
</html>