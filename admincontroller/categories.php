<?php
include("D:/xampp/htdocs/PHPProject/sharedfiles/_purpose_header.php");

?>
<?= getHead('Categories') ?>
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
                    <h5 class="mb-1">Categories</h5>
                    <p class="text-sm text-muted mb-0">You can edit categories.</p>
                </div>
                <div>

                    <table class="table table-cards align-items-center">
                        <thead>
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Categories</th>
                            <th scope="col" class="sort" data-sort="budget">Main Category</th>
                            <th scope="col" class="sort" data-sort="status">Number of Products</th>

                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <?php

                        $sql = "SELECT c.Id, c.Name, c2.Name as Main_Category FROM Categories c  JOIN Categories c2 ON c.MainCategoryId = c2.Id";
                        $query = mysqli_query($con, $sql);
                        while ($category = mysqli_fetch_array($query)) {
                            $id = $category['tabbleId'];
                            $name = $category['Name'];
                            $main_category = $category['Main_Category'];
                            ?>

                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">

                                        <div class="media-body ml-4">
                                            <span class="name mb-0 text-sm"><?= $name ?></span>
                                        </div>
                                    </div>
                                </th>

                                <td>
                                    <?= $main_category ?>
                                </td>
                                <td>
                                    Number of Products
                                </td>

                                <td class="text-right">
                                    <!-- Actions -->
                                    <div class="actions ml-3">

                                        <a href="#" class="action-item mr-2 edit-button"
                                           data-toggle="modal"
                                           data-target="#edit-modal"
                                           title="Edit the Product"
                                           id="<?= $id ?>edit">
                                            <i class="far fa-pencil-alt"></i>
                                        </a>
                                        <a href="#" class="action-item text-danger mr-2 delete-button"
                                           data-toggle="modal" data-target="#delete-modal"
                                           title="Remove the Product" id="<?= $id ?>remove">
                                            <i class="far fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        <!--<tr class="table-divider"></tr>-->

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
                <h5 class="modal-title" id="delete-modal-title">Remove Catagory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure delete the category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="delete-submit" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>

<form id="form-delete" action="/PHPProject/admincontroller/remove_category.php" method="get">
    <input type="hidden" name="id" id="remove-id" value="">
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
                <form action="edit_category.php" method="get" id="edit-form">
                    <input type="hidden" id="edit-id" name="id" value="">
                    <div class="form-group">
                        <label for="input-name" class="form-control-label">Category Name</label>
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-pencil"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" required id="input-name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Main Category</label>
                        <select required name="category_id" id="product-category" class="custom-select">
                            <option value="0" selected>Not have main category</option>

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
        $('#remove-id').val(parseInt(this.id));
    });
    $('#delete-submit').click(function () {
        $('#form-delete').submit();
    });
    $('#edit-dismiss').click(function () {
        $('#edit-modal-title').attr('style', "");
        $('#edit-modal-title').html('Edit Categories');
    });
    $('.edit-button').click(function () {
        $('#edit-id').val(parseInt(this.id));
    });
    $('#edit-submit').click(function () {
        if ($('#input-name').val() === '' || $('#product-category').children('option:selected').val() === -1) {
            $('#edit-modal-title').attr('style', 'color: #4d00b3;');
            $('#edit-modal-title').html('Please fill all fields');
        } else
            $('#edit-form').submit();
    });

</script>

</body>

</html>