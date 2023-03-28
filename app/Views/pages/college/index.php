
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-5 align-self-center">
                        <h4 class="text-themecolor">College</h4>
                    </div>
                    <div class="col-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">College</li>
                            </ol>
                            <a href="/college/create" class="btn btn-danger d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add College</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">College</h4>
                            <h6 class="card-subtitle">List of Colleges</h6>
                            <div class="table-responsive print_table">
                            <?php //print_r($college);?>    
                            <table id="login-table" class="table color-table inverse-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($college as $row):?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $row['name'];?></td>
                                            <td><?= $row['email'];?></td>
                                            <td><?= $row['phone'];?></td>
                                            <td class="action">
                                                <a href="/college/edit/<?= $row['id'];?>" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a>
                                                <a href="/college/delete/<?= $row['id'];?>" class="text-inverse sa-confirm" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        