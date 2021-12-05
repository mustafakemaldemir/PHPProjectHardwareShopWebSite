<!-- Account navigation -->
<div class="d-flex">

    <a href="/PHPProject/admincontroller/index.php" class="btn btn-icon btn-group-nav shadow btn-neutral">
        <span class="btn-inner--icon"><i class="far fa-user-cog"></i></span>
        <span class="btn-inner--text d-none d-md-inline-block">Admin</span>
    </a>

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

        <div class="btn-group" role="group">

            <button id="btn-group-listing" type="button"
                    class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown"
                    data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                <span class="btn-inner--text d-none d-sm-inline-block">Orders</span>
            </button>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                 aria-labelledby="btn-group-settings">
                <a class="dropdown-item" href="listing-orders.html">Show Orders</a>
            </div>

        </div>
    </div>
</div>