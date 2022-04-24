<!DOCTYPE html>

<html>

<head>
    <title>Sign Up</title>

    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

</head>

<body>

<div id="container">

    <div>
        <h2>SIGN UP</h2>
    </div>

    <!-- Form -->
    <form method="post" action="autentication_signup.php">

        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="confirmpassword" id="confirm_password" placeholder="Confirm Password">

        <input type="submit" onclick="validatePassword()" value="Sign Up">
        <button class="button" type="button"><a class="link-button" href="../index.php"> BACK </a></button>

    </form>

</div>

    <script src="../resources/js/function.js"></script>
</body>

</html>