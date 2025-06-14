<?php 
    session_start();

    require("include/head.inc");
    require("include/nav.inc");
    require("include/home_bg.inc");
?>

<style>
    .login-card {
        margin: 6.25rem auto;
        width: 400px;
        background-color: #ffffff;
        border-radius: 15px;
        text-align: center;
    }

    .login-header {
        text-align: center;
        padding: 30px 0;
        color: white;
        background-image: linear-gradient(to bottom right, #a9e092, #35918e);
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
    }

    .login-header h1 {
        font-size: 42px;
        margin: 0;
    }

    .login-form {
        text-align: center;
    }

    .login-form p {
        margin: 30px 0 0;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
        margin-top: 5px;
        width: 75%;
        border: none;
        outline: none;
        border-bottom: 1px solid #757575;
    }

    .login-form input[type="submit"] {
        width: 300px;
        padding: 10px;
        border: none;
        color: #ffffff;
        background-image: linear-gradient(to bottom right, #a9e092, #35918e);
        border-radius: 25px;
        display: block; 
        margin: 0 auto;
    }

    .login-form a {
        font-size: 0.75em;
        color: #35918e;
        text-decoration: none;
        margin-bottom: 10px;
    }

    .login-submit {
        margin-top: 30px;
        padding-bottom: 15px;
    }

    .login-invalid {
        color: #d6143b;
    }

    .alert {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        width: 15em;
        margin: 5px;
        padding: 25px;
    }

</style>

<div class="login-card">
    <div class="login-header">
        <h1>Login</h1>
    </div>
    <div class="login-form">
        <form action="login.php" method="post">
            <p>
                <input type="text" name="username" placeholder="Username" required>
            </p>
            <p>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <p class="login-submit">
                <input type="submit" value="Login">
            </p>
        </form>
        <a href="#">Forgot password?</a>
    </div>
</div>

<?php 
    require("include/foot.inc");
?>
