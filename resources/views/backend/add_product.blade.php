@extends('backend.layout')
@section('content')

        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="users-edit">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Product</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form  action="{{route('product_insert')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Name"  required data-validation-required-message="This name field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Version</label>
                                                        <input type="text" class="form-control" name="version" placeholder="Version"  required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Release Date</label>
                                                    <input type="text" class="form-control"  name="release_date" placeholder="Release Date">
                                                </div>
                                                <label>Setup File</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-upload" id="basic-addon5"></span>
                                                    </div>
                                                    <input type="file" name="setup_file" class="form-control"  placeholder="Upload a photo" aria-describedby="basic-addon5">
                                                </div>
                                                <label>User Manual</label>
                                                <div class="input-group mb-75">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text feather icon-upload" id="basic-addon5"></span>
                                                    </div>
                                                    <input type="file" name="user_manual" class="form-control"  placeholder="Upload a photo" aria-describedby="basic-addon5">
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Release Notes</label>
                                                        <input type="text" class="form-control" name="release_notes" placeholder="Release Notes"  required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users edit ends -->
        </div>
    </div>
</div>
<!-- END: Content-->
</html>

@endsection
