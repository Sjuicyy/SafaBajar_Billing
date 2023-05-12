<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        .signupform {
            max-width: 35%;
            margin: auto;
            background-color: #d5e0d1;
            padding: 20px;
            border-radius: 5px;
        }

        .signup {
            background-color: #6dbe45;
            color: white;
        }

        .signup:hover {
            background-color: #519230;
            outline: 1px solid #b75ea4;
        }
    </style>
</head>

<body>
    <h2 class="text-center mt-2">Sign UP</h2>
    <div class="signupform">
        <div class="logo text-center mb-3">
            <img src="img/logo.png" alt="Company Logo" width="250px">
        </div>

        <form action="Signup_check.php" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input required type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="email">Contact</label>
                <input required type="number" class="form-control" name="phone" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input required type="text" class="form-control" name="password" placeholder="Enter your password">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input required type="text" class="form-control" name="address" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input required type="file" accept=".jpg, .png, .jpeg" class="form-control" name="photo">
            </div>

            <div class="text-center"><button type="submit" class="btn signup">Sign Up</button></div>
        </form>
        <p class="text-center">Already have a account ? <a href="Login.php">Log In</a></p>

    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>