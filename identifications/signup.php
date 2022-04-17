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
    <form>

        <input type="text" name="first-name" placeholder="First Name" required>
        <input type="text" name="Last-name" placeholder="Last Name" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="confirm-password" id="confirm_password" placeholder="Confirm Password" required>

        <p class="span-style">
            <span>Forget password ?</span>
        </p>

        <button class="button" type="submit" onclick="validatePassword()"><a class="link-button"> SIGN UP </a></button>
        <button class="button" type="button"><a class="link-button" href="../index.php"> BACK </a></button>

    </form>

</div>

    <script src="../resources/js/function.js"></script>
</body>

</html>