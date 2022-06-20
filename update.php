<?php require "php/update.php"; ?>
<!DOCTYPE html>
<html lang="KO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD 공부 - Update</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <form action="./php/update.php" method="post" >

            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value = "<?=$row['name'] ?>"
                        placeholder="Enter name">
            </div>
    
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value = "<?=$row['email'] ?>"
                        placeholder="Enter email">
            </div>
            
            <input type="text" name="id" value="<?=$row['id']?>" hidden>

    
            <button type="submit" 
                    class="btn btn-primary"
                    name = "update">Update</button>
            <a href="./read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>