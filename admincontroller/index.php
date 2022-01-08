<?php include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php"); ?>

<?= getHead('Admin Panel') ?>
<?= getHeader() ?>

<div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" style="height: 150px"
             data-offset-top="#header-main">
        <!-- Header container -->
        <div class="container pt-4 pt-lg-0">
            <div class="row">
                <div class=" col-lg-12">

                    <?php include("D:/xampp/htdocs/PHPProject/admincontroller/_navigation.php"); ?>

                </div>
            </div>

        </div>
    </section>    
</div>




<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

</body>

</html>