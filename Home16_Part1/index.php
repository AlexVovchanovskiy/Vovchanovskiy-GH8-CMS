<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration form</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<form class="row m-0" method="POST" action="register.php">
    <div class="m-auto col-10 col-sm-8 col-md-6 col-lg-4">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="repeat_password">Repeat password:</label>
            <input type="password" id="repeat_password" name="repeat_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last name:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <div class="col-8">
                <fieldset class="row text-center">
                    <legend class="col-form-label pt-0 mb-2">Gender:</legend>
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label for="male">Male</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
    </div>
</form>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
