<?php
include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php");

if (!isset($_SESSION['user'])) {
    header('Location: http://localhost/PHPProject/index.php');
}

$name = "Please input your name";
$surname = "Please input your surname";
$address = "Please input your home address";
$email = $_SESSION["user"];
$user_info = get_user_info($email);
if (isset($user_info)) {
    $name = $user_info['Name'];
    $surname = $user_info['Surname'];
    $address = $user_info['Address'];
}
if (isset($_POST["input-name"]) && isset($_POST["input-surname"]) && isset($_POST["input-address"])) {
    $user_name = $_POST["input-name"];
    $user_surname = $_POST["input-surname"];
    $user_address = $_POST["input-address"];

    if (update_user_info($user_name, $user_surname, $user_address, $email)) {
        $message = "Successfully update your information!";
        $style = 'color: #4d00b3;';
    } else {
        $message = "Something went wrong!";
        $style = 'color: #4d00b3;';
    }
} else {
    $user_name = get_user_info($email);
    if (isset($user_name)) {
        $message = $user_name['Name'] . " " . $user_name['Surname'];
        $style = 'color: #FFFFFF !important;';
    } else {
        $message = "Update your information";
        $style = 'color: #FFFFFF !important;';
    }
}
?>
<?= getHead('My Profile') ?>
<?= getHeader() ?>


<div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" style="height: 150px"
             data-offset-top="#header-main">
        <!-- Header container -->
        <div class="container pt-4 pt-lg-0">
            <div class="row">
                <div class=" col-lg-12">

                    <!-- Account navigation -->
                    <div class="d-flex">
                        <a href="/PHPProject/usercontroller/profile.php" class="btn btn-icon btn-group-nav shadow btn-neutral">
                            <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                            <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice" style="min-height: 75vh">
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-9 order-lg-2">
                    <!-- Change avatar -->
                    <div class="card bg-gradient-warning hover-shadow-lg">
                        <div class="card-body py-3">
                            <div class="row row-grid align-items-center">
                                <div class="col-lg-8">
                                    <div class="media align-items-center">

                                        <div class="media-body">
                                            <h5 id="message" class=" mb-0" style="<?= $style ?>"><?= $message ?></h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- General information form -->
                    <div class="actions-toolbar py-2 mb-4">
                        <h5 class="mb-1">General information</h5>
                        <p class="text-sm text-muted mb-0">İnput your information completely.</p>
                    </div>
                    <form action="profile.php" method="post" id="profile-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-name" class="form-control-label">Name</label>
                                    <input class="form-control" id="input-name" name="input-name" type="text"
                                           placeholder="<?= $name ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-surname" class="form-control-label">Surname</label>
                                    <input class="form-control" id="input-surname" name="input-surname" type="text"
                                           placeholder="<?= $surname ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">Home Address</label>
                                        <textarea class="form-control"
                                                  id="input-address"
                                                  name="input-address"
                                                  placeholder="<?= $address ?>"
                                                  rows="3"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Save changes buttons -->
                        <div class="pt-5 mt-5 delimiter-top text-center">
                            <button type="button" id="submit-button" class="btn btn-sm btn-primary">Changes your updates</button>
                            <button type="button" id="cancel-button" class="btn btn-link text-muted">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
                        <div class="card">
                            <div class="card-header py-3">
                                <span class="h6">Settings</span>
                            </div>
                            <div class="list-group list-group-sm list-group-flush">
                                <a href="/PHPProject/usercontroller/profile.php"
                                   class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i class="far fa-user-circle mr-2"></i>
                                        <span>Profile</span>
                                    </div>
                                    <div>
                                        <i class="far fa-angle-right"></i>
                                    </div>
                                </a>
                                <a href="/PHPProject/usercontroller/change_password.php"
                                   class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i class="far fa-cog mr-2"></i>
                                        <span>Change Password</span>
                                    </div>
                                    <div>
                                        <i class="far fa-angle-right"></i>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/PHPProject/lib/js/select2.js"></script>
<script src="/PHPProject/lib/js/bootstrap-tagsinput.min.js"></script>
<script src="/PHPProject/lib/js/flatpickr.min.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>
<script>
    $('#cancel-button').click(function () {
        $(location).attr('href', '/PHPProject/index.php');
    });
    $('#submit-button').click(function () {
        if ($('#input-name').val() === '' || $('#input-surname').val() === '' || $('#input-address').val() === '') {
            $('#message').attr('style', 'color:  #4d00b3 !important;');
            $('#message').html('Please fill all fields');
        } else {
            $('#profile-form').submit();
        }
    });
</script>

</body>

</html>