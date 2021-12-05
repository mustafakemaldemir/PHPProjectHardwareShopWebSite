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

    <section class="slice bg-section-secondary">
        <div class="container">
            <!-- Stats -->
            <div class="mb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div
                            class="card card-stats bg-gradient-primary border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                            <div class="actions actions-dark">


                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="icon text-white icon-sm">
                                            <i class="far fa-credit-card"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <span class="d-block h5 text-white mr-2 mb-1">$25.000</span>
                                        <span class="text-white">Monthly Payments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="card card-stats bg-gradient-info border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                            <div class="actions actions-dark">


                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="icon text-white icon-sm">
                                            <i class="far fa-file-alt"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <span class="d-block h5 text-white mr-2 mb-1">300 remaining</span>
                                        <span class="text-white">Open invoices</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="card card-stats bg-gradient-dark border-0 hover-shadow-lg hover-translate-y-n3 mb-4 ml-lg-0">
                            <div class="actions actions-dark">


                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <div class="icon text-white icon-sm">
                                            <i class="far fa-clock"></i>
                                        </div>
                                    </div>
                                    <div class="pl-4">
                                        <span class="d-block h5 text-white mr-2 mb-1">180</span>
                                        <span class="text-white">Working hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Latest projects -->
            <div class="mb-5">
                <div class="actions-toolbar py-2 mb-4">
                    <h5 class="mb-1">Latest projects</h5>
                    <p class="text-sm text-muted mb-0">Manage pending orders and track invoices.</p>
                </div>
                <div>
                    <table class="table table-cards align-items-center">
                        <thead>
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Project</th>
                            <th scope="col" class="sort" data-sort="budget">Budget</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col">Users</th>
                            <th scope="col" class="sort" data-sort="completion">Completion</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-1.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body ml-4">
                                        <span class="name mb-0 text-sm">Purpose Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                $2500 USD
                            </td>
                            <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">pending</span>
                    </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                        <i class="far fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="far fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                       title="Move to trash">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-divider"></tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-2.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body ml-4">
                                        <span class="name mb-0 text-sm">Website redesign</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                $1800 USD
                            </td>
                            <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">100%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                        <i class="far fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="far fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                       title="Move to trash">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-divider"></tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-3.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body ml-4">
                                        <span class="name mb-0 text-sm">Webpixels website launch</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                $3150 USD
                            </td>
                            <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                      <span class="status">delayed</span>
                    </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">72%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                        <i class="far fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="far fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                       title="Move to trash">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-divider"></tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-4.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body ml-4">
                                        <span class="name mb-0 text-sm">Purpose Website UI Kit</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                $4400 USD
                            </td>
                            <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-info"></i>
                      <span class="status">on schedule</span>
                    </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">90%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                        <i class="far fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="far fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                       title="Move to trash">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-divider"></tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-5.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body ml-4">
                                        <span class="name mb-0 text-sm">Prototype Purpose Dashboard</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                $2200 USD
                            </td>
                            <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                      <span class="status">completed</span>
                    </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                                    </a>
                                    <a href="#" class="avatar rounded-circle avatar-sm">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">100%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                        <i class="far fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="far fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                       title="Move to trash">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Project stats -->
            <div class="actions-toolbar py-2 mb-4">
                <h5 class="mb-1">Project stats</h5>
                <p class="text-sm text-muted mb-0">Manage pending orders and track invoices.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Project progress</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i class="far fa-sync"></i></a>
                                        <div class="dropdown action-item" data-toggle="dropdown">
                                            <a href="#" class="action-item"><i class="far fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Refresh</a>
                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-1.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="flex-fill pl-3 text-limit">
                                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Design
                                            System</h6>
                                        <div class="progress progress-xs mb-0">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                                            <div>
                                                <span class="font-weight-bold text-warning">Pending</span>
                                            </div>
                                            <div>
                                                20 Aug 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-2.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="flex-fill pl-3 text-limit">
                                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Website redesign</h6>
                                        <div class="progress progress-xs mb-0">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                                            <div>
                                                <span class="font-weight-bold text-success">Completed</span>
                                            </div>
                                            <div>
                                                20 Aug 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-3.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="flex-fill pl-3 text-limit">
                                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Webpixels website
                                            launch</h6>
                                        <div class="progress progress-xs mb-0">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%;"
                                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                                            <div>
                                                <span class="font-weight-bold text-danger">Delayed</span>
                                            </div>
                                            <div>
                                                20 Aug 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-4.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="flex-fill pl-3 text-limit">
                                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Purpose Website UI
                                            Kit</h6>
                                        <div class="progress progress-xs mb-0">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;"
                                                 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                                            <div>
                                                <span class="font-weight-bold text-info">On schedule</span>
                                            </div>
                                            <div>
                                                20 Aug 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-5.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="flex-fill pl-3 text-limit">
                                        <h6 class="progress-text mb-1 text-sm d-block text-limit">Prototype Purpose
                                            Dashboard</h6>
                                        <div class="progress progress-xs mb-0">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between text-xs text-muted text-right mt-1">
                                            <div>
                                                <span class="font-weight-bold text-success">Completed</span>
                                            </div>
                                            <div>
                                                20 Aug 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Project budgets</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i class="far fa-sync"></i></a>
                                        <div class="dropdown action-item" data-toggle="dropdown">
                                            <a href="#" class="action-item"><i class="far fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Refresh</a>
                                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-1.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="text-sm d-block text-limit mb-0">Purpose Design System</h6>
                                        <span class="d-block text-sm text-muted">Development</span>
                                    </div>
                                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $2500
                      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-2.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="text-sm d-block text-limit mb-0">Website redesign</h6>
                                        <span class="d-block text-sm text-muted">Identity</span>
                                    </div>
                                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $1800
                      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-3.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="text-sm d-block text-limit mb-0">Webpixels website launch</h6>
                                        <span class="d-block text-sm text-muted">Branding</span>
                                    </div>
                                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $3150
                      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-4.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="text-sm d-block text-limit mb-0">Purpose Website UI Kit</h6>
                                        <span class="d-block text-sm text-muted">Marketing</span>
                                    </div>
                                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $4400
                      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder"
                                             src="../../assets/img/theme/light/brand-avatar-5.png"
                                             class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="text-sm d-block text-limit mb-0">Prototype Purpose Dashboard</h6>
                                        <span class="d-block text-sm text-muted">Frameworks</span>
                                    </div>
                                    <div class="media-body text-right">
                      <span class="text-sm text-dark font-weight-bold ml-3">
                        $2200
                      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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