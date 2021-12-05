<?php

include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php");

$message = "Add Categories";
$style = 'color: #3C4858;';

if (isset($_POST['input-name']) && isset($_POST['category_id']))
{
	if (add_category($_POST['input-name'], $_POST['category_id']))
	{
        	$message = "Kategori başarıyla eklendi";
        	$style = 'color: #4d00b3;';
    	} 
	else
	{
        	$message = "Bir hata oluştu";
        	$style = 'color: #4d00b3;';
    	}
}
?>


<?= getHead('Kategori Ekle') ?>
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

    <section class="slice bg-section-secondary" style="min-height: 75vh">
        <div class="container">

            <div class="actions-toolbar py-2 mb-4">
                <h5 id="header" class="mb-1" style="<?= $style ?>"><?= $message ?></h5>
                <p class="text-sm text-muted mb-0">Add categories to classify your products.</p>
            </div>

            <form action="/PHPProject/admincontroller/add_category.php" method="post" id="add-category-form">

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="input-name" class="form-control-label">Name</label>
                            <input class="form-control" id="input-name" name="input-name" type="text"
                                   placeholder="Catagory Name">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="form-control-label">Main Catagory</label>
                            <select name="category_id" required id="product-category" class="custom-select">
                                <option value="0" selected>No Main Catagory</option>

                                <?php
                                $sql = "SELECT * FROM Categories";
                                $query = mysqli_query($con, $sql);
                                while ($category2 = mysqli_fetch_array($query)) {
                                    ?>
                                    <option name="category_id"
                                            value="<?= $category2['tabbleId'] ?>"> <?= $category2['Name'] ?> </option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Save changes buttons -->
                <div class="pt-5 mt-5 delimiter-top text-center">
                    <button type="button" id="submit-button" class="btn btn-sm btn-primary">Save</button>
                    <button type="button" id="cancel-button" class="btn btn-link text-muted">Cancel</button>
                </div>
            </form>
    </section>


</div>



<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

<script>
    let numbers = /[^0-9]/;
    $('#submit-button').click(function () {
        if ($('#input-name').val() === '') {
            $('#header').attr('style', 'color: #4d00b3;');
            $('#header').html('Add Category Name');
        } else {
            $('#add-category-form').submit();
        }
    });


</script>

</body>

</html>