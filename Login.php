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
    <h2 class="text-center mt-2">Log In</h2>
    <div class="signupform">
        <div class="logo text-center mb-3">
            <img src="img/logo.png" alt="Company Logo" width="250px">
        </div>

        <form action="Login_check.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>
            <div class="text-center"><button type="submit" class="btn signup">Log In</button></div>

            <p class="text-center mt-3">Don't have a account ? <a href="Adminlogin.html">Sign Up</a></p>
        </form>
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