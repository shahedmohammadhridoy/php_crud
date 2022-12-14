<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="php/create.php" method="POST">
            <h4 class="display-4 text-center">Create</h4><hr><br>
            <?php if(isset($_GET['error'])){
                ?>
                <div class="alert alert-danger"><?= $_GET['error'] ?></div>
                <?php
            }
            ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo isset($_GET['name'])?$_GET['name']:''?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo isset($_GET['email'])?$_GET['email']:''?>">
            </div>
            <button type="submit" name="create" class="btn btn-primary">Create</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>