<?php
include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php");

$message = "Ürün Ekleme";
$style = 'color: #3C4858;';

if (isset($_POST['input-name']) && isset($_POST['input-price']) && isset($_POST['description'])) {
    $cat = $_POST['category_id'];
    $img = (isset($_POST['file'])) ? $_POST['file'] : "";

	if (add_product($_POST['input-name'], $_POST['input-price'], $_POST['description'], $_POST['category_id'], $img)) 
	{
        	$message = "Successfully Products Added";
        	$style = 'color: #4d00b3;';
    	} 
	else 
	{
        	$message = "Something went wrong";
        	$style = 'color: #4d00b3;';
    	}
}
?>


<?= getHead('Add Product') ?>
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
                <p class="text-sm text-muted mb-0">Products image size must be 1 square</p>
            </div>

            <form action="/PHPProject/admincontroller/add_product.php" method="post" id="add-product-form">

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="input-name" class="form-control-label">Name</label>
                            <input class="form-control" id="input-name" name="input-name" type="text"
                                   placeholder="Product Name">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-pricee" class="form-control-label">Price</label>
                            <input class="form-control" id="input-price" name="input-price" type="text"
                                   placeholder="Product Price">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea class="form-control"
                                          id="input-description"
                                          name="description"
                                          placeholder="Product Description"
                                          rows="3"></textarea>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-control-label">Product Category</label>
                            <select name="category_id" required id="product-category" class="custom-select">
                                <option value="-1" selected>Select Category</option>

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

                    <div class="col-6">
                        <div class="form-group">
                            <label for="file" class="form-control-label">İmage Product</label>
                            <input type="file" name="file" id="file" class="custom-input-file custom-input-file--2"/>
                            <label for="file">
                                <i class="fa fa-upload"></i>
                                <span>Choose Product İmage</span>
                            </label>
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


    <div class="modal fade" id="img-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="delete-modal-title">Not Add İmage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    Your are continue with out the product image. Are you want continue?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" id="add-submit" class="btn btn-primary">Add</button>
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
    let numbers = /[^0-9]/;
    $('#submit-button').click(function () {
        if ($('#input-name').val() === '' || $('#input-price').val() === '' || $('#input-description').val() === '' || $('#product-category').children('option:selected').val() === -1) {
            $('#header').attr('style', 'color: #4d00b3;');
            $('#header').html('Please fill all fields');
        } else if ($('#input-price').val() <= 0 || $('#input-price').val().match(numbers)) {
            $('#header').attr('style', 'color: #4d00b3;');
            $('#header').html('İnvalid Price');
        } else if ($('#file').val() === "") {
            $('#img-modal').modal('toggle');
        } else {
            $('#add-product-form').submit();
        }
    });
    $('#add-submit').click(function () {
        $('#add-product-form').submit();
    });

</script>

</body>

</html>