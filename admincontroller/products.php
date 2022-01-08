<?php
include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php");

?>
<?= getHead('Products') ?>
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
            <div class="mb-5">
                <div class="actions-toolbar py-2 mb-4">
                    <h5 class="mb-1">Products</h5>
                    <p class="text-sm text-muted mb-0">You can edit products.</p>
                </div>
                <div>
                    <table class="table table-cards align-items-center">
                        <thead>
                        <tr>

                            <th scope="col" class="sort" data-sort="name">Product</th>
                            <th scope="col" class="sort" data-sort="status">Price</th>
                            <th scope="col" class="sort" data-sort="budget">Category</th>

                        </tr>
                        </thead>
                        <tbody class="list">
                        <?php
                        $sql = "SELECT p.Id, p.Name, p.Price, p.Img, c.Name as Kategori FROM Products p JOIN Categories c ON p.CategoryId = c.tabbleId";
                        $query = mysqli_query($con, $sql);
                        while ($product = mysqli_fetch_array($query)) {

                            $id = $product['Id'];
                            $name = $product['Name'];
                            $price = $product['Price'];
                            $img = ($product['Img'] == "") ? "default.png" : $product['Img'];
                            $category = $product['Kategori'];
                            ?>

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                 src="/PHPProject/lib/product_images/<?= $img ?>"
                                                 class="avatar  rounded-circle">
                                        </div>
                                        <div class="media-body ml-4">
                                            <span class="name mb-0 text-sm"><?= $name ?></span>
                                        </div>
                                    </div>
                                </th>

                                <td class="budget">
                                    <?= $price ?> TL
                                </td>

                                <td>
                                    <?= $category ?>
                                </td>

                                <td class="text-right">
                                    <!-- Actions -->
                                    <div class="actions ml-3">

                                        <a href="#" class="action-item mr-2 edit-button"
                                           data-toggle="modal"
                                           data-target="#edit-modal"
                                           title="Edit Product"
                                           id="<?= $id ?>edit">
                                            <i class="far fa-pencil-alt"></i>
                                        </a>
                                        <a href="#" id="deneme" class="action-item text-danger mr-2 delete-button"
                                           data-toggle="modal" data-target="#delete-modal"
                                           title="Remove Product" id="<?= $id ?>remove">
                                            <i class="far fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="delete-modal-title">Remove Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Ürünü silmek istediğinize emin misiniz?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="delete-submit" class="btn btn-primary">Remove</button>
            </div>

        </div>
    </div>
</div>

<form id="form-delete" action="/PHPProject/admincontroller/remove_product.php" method="get">
    <input type="hidden" name="id" id="remove-id">
</form>

<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-title"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-title">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="edit_product.php" method="get" id="edit-form">
                    <input type="hidden" id="edit-id" name="id" value="">
                    <div class="form-group">
                        <label for="input-name" class="form-control-label">Product Name</label>
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-pencil"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" required id="input-name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="input-price" class="form-control-label">Product Price</label>
                        <div class="input-group input-group-merge">

                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-dollar-sign"></i></span>
                            </div>

                            <input type="text" name="price" required class="form-control" id="input-price"
                                   placeholder="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Category of Product</label>
                        <select required name="category_id" id="product-category" class="custom-select">
                            <option value="-1" selected>Choose Category</option>

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
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" id="edit-dismiss" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="edit-submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>

</div>



<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="/PHPProject/lib/js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="/PHPProject/lib/js/purpose.js"></script>

<script>
    $('.delete-button').click(function () {
        $('#remove-id').val((parseInt().id));
    });
    $('#delete-submit').click(function () {
        $('#form-delete').submit();
    });
    $('#edit-dismiss').click(function () {
        $('#edit-modal-title').attr('style', "");
        $('#edit-modal-title').html('Edit Product');
    });
    $('.edit-button').click(function () {
        console.log(this.id);
        $('#edit-id').val(parseInt(this.id));
    });
    $('#edit-submit').click(function () {
        if ($('#input-name').val() === '' || $('#input-price').val() === '' || $('#product-category').children('option:selected').val() === -1) {
            $('#edit-modal-title').attr('style', 'color: #4d00b3;');
            $('#edit-modal-title').html('Please fill all fields');
        } else
            $('#edit-form').submit();
    });

</script>

</body>

</html>