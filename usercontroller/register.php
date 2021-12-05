<?php
$message = "Need Your Hardwares Here!";
$style = 'color: #8492A6 !important;';

if (isset($_POST["input-email"]) && isset($_POST["input-password"]) && isset($_POST["input-password-confirm"])) {
    $user_email = ($_POST["input-email"]);
    $user_password = ($_POST["input-password"]);
    $user_password_confirm = ($_POST["input-password-confirm"]);

    if ($user_password != $user_password_confirm) {
        $message = "Passwords are not match!";
        $style = 'color: #4d00b3;';
    } else {
        include("D:/xampp/htdocs/PHPProject/database/db.php");

        if (register_user($user_email, $user_password)) {
            session_start();
            $_SESSION["user"] = $user_email;
            $_SESSION["role"] = (get_user_role($user_email) == 1) ? "Admin" : "User";
            header('Location: http://localhost/PHPPRoject/usercontroller/profile.php');
        }
        $message = "Something went wrong!";
        $style = 'color: #4d00b3;';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register | Hardware Shop</title>
    <!-- Favicon -->
    <link rel="icon" href="/PHPProject/lib/favicon.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/PHPProject/lib/font-awesome/css/font-awesome.css"><!-- Purpose CSS -->
    <link rel="stylesheet" href="/PHPProject/lib/css/purpose.css" id="stylesheet">
</head>

<body>
<div class="main-content">
    <div class="container min-vh-100 d-flex align-items-center">
        <div class="col py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div>
                        <div class="mb-5 text-center">
                            <h6 class="h3">Create Account</h6>
                            <p id="message" class=" mb-0" style="<?= $style ?>"><?= $message ?></p>
                        </div>
                        <span class="clearfix"></span>
                        <form action="register.php" method="post" id="register-form">
                            <div class="form-group">

                                <label for="input-email" class="form-control-label">E-mail address</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" required name="input-email"
                                           id="input-email"
                                           placeholder="e-mail_name@example.com">


                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="input-password" class="form-control-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" required name="input-password"
                                           id="input-password"
                                           placeholder="********">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input-password-confirm" class="form-control-label">Again Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" required name="input-password-confirm"
                                           id="input-password-confirm"
                                           placeholder="********">

                                </div>
                            </div>
                            <div class="my-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" required id="check-terms">
                                    <label class="custom-control-label" for="check-terms"><a href="#">Accept Confidentiality Agreement</label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" id="submit-button" class="btn btn-block btn-primary">Create Account
                                </button>
                            </div>
                        </form>
                        <div class="mt-4 text-center"><small>Already have account?</small>
                            <a href="/PHPProject/usercontroller/login.php" class="small font-weight-bold">LOGIN</a></div>
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
        if ($('#input-email').val() === '' || $('#input-password').val() === '' || $('#input-password-confirm').val() === '') {
            $('#message').attr('style', 'color: #4d00b3;');
            $('#message').html('Please fill all fields');
        } else if (!$('#check-terms').is(':checked')) {
            $('#message').attr('style', 'color: #4d00b3;');
            $('#message').html('Accept Confidentiality Agreement');
        } else
            $('#register-form').submit();
    })
</script>

</body>

</html>

