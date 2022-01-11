<?php
$message = "Please login";
$style = 'color: #8492A6 !important;';

if (isset($_POST["input-email"]) && isset($_POST["input-password"])) {
    $user_email = ($_POST["input-email"]);
    $user_password = ($_POST["input-password"]);

    include("D:/xampp/htdocs/PHPProject/database/db.php");
    
    if (check_user_login($user_email, $user_password)) {
        session_start();
        $_SESSION["user"] = $user_email;
        $_SESSION["role"] = (get_user_role($user_email) == 1) ? "Admin" : "User";
        header('Location: http://localhost/PHPProject/index.php');
    }
    $message = "E-mail or password are wrong!";
    $style = 'color: #4d00b3;';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
    <meta name="author" content="Webpixels">
    <title>LOGIN | Hardware Shop</title>
    <!-- Favicon -->
    <link rel="icon" href="/PHPProject/lib/favicon.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/PHPProject/lib/font-awesome/css/font-awesome.css"><!-- Purpose CSS -->
    <link rel="stylesheet" href="/PHPProject/lib/css/purpose.css" id="stylesheet">
</head>

<body>
<div class="main-content">
    <div class="container h-100vh d-flex align-items-center">
        <div class="col">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div>
                        <div class="mb-5 text-center">
                            <h6 class="h3">LOGIN</h6>
                            <p id="message" class=" mb-0" style="<?= $style ?>"><?= $message ?></p>
                        </div>
                        <span class="clearfix"></span>
                        <form action="login.php" method="post" id="login-form">

                            <div class="form-group">
                                <label for="input-email" class="form-control-label">E-mail Adress</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" required name="input-email"
                                           id="input-email"
                                           placeholder="e-mail@*mail.com">
                                </div>
                            </div>


                            <div class="form-group mb-4">

                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <label for="input-password" class="form-control-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <a href="/PHPProject/usercontroller/password_reset.php"
                                           class="small text-muted text-underline--dashed border-primary">Forget your password?</a>
                                    </div>
                                </div>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" required name="input-password"
                                           id="input-password"
                                           placeholder="********">

                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" id="submit-button" class="btn btn-block btn-primary">LOGIN</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center"><small>Are you not registered?</small>
                            <a href="/PHPProject/usercontroller/register.php" class="small font-weight-bold">Create Account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

<script>
    $('#submit-button').click(function () {
        if ($('#input-email').val() === '' || $('#input-password').val() === '') {
            $('#message').attr('style', 'color: #4d00b3;');
            $('#message').html('Please fill all fields!');
        } else
            $('#login-form').submit();
    })
</script>

</body>

</html>