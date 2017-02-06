<!DOCTYPE html>
<html>
<head>
    <title> Registration </title>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="container">
        <h3>Registration Form</h3>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($error as $e) : ?>
                        <?= "<li> {$e} </li>" ?>
                    <?php endforeach; ?>                    
                </ul>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
          
            <div class="form-group">
                <label for="name">Full Name: </label>
                <input type="text" name="name" class="form-control" id="name" value="<?= old("name") ?>" required>
            </div>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="form-control" value="<?= old("username") ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-control" value="<?= old("email") ?>" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number: </label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="<?= old("mobile") ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Register</button>
            </div>
          

        </form>
    </div>


</body>
</html>
