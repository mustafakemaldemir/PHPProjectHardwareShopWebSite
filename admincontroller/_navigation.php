<!-- Account navigation -->
<div class="d-flex">
    <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">

        <div class="btn-group" role="group">

            <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon"
                    data-toggle="dropdown" data-offset="0,8" aria-haspopup="true"
                    aria-expanded="false">
                <span class="btn-inner--icon"><i class="far fa-gift"></i></span>
                <span class="btn-inner--text d-none d-sm-inline-block">Products</span>
            </button>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                 aria-labelledby="btn-group-settings">
                <a class="dropdown-item" href="/PHPProject/admincontroller/add_product.php">Add Products</a>
                <a class="dropdown-item" href="/PHPProject/admincontroller/products.php">Show Products</a>
            </div>

        </div>

        <div class="btn-group" role="group">

            <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon"
                    data-toggle="dropdown" data-offset="0,8" aria-haspopup="true"
                    aria-expanded="false">
                <span class="btn-inner--icon"><i class="far fa-list-ul"></i></span>
                <span class="btn-inner--text d-none d-sm-inline-block">Categories</span>
            </button>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                 aria-labelledby="btn-group-boards">
                <a class="dropdown-item" href="/PHPProject/admincontroller/categories.php">Show Categories</a>
                <a class="dropdown-item" href="/PHPProject/admincontroller/add_category.php">Add Categories</a>
            </div>

        </div>        
    </div>
</div>