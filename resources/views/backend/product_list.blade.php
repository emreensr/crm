@extends('backend.layout')
@section('content')

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <link rel="apple-touch-icon" href="../../../frontend/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../frontend/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="../../../frontend/vendors/css/tables/ag-grid/ag-theme-material.css">
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
    <link rel="stylesheet" type="text/css" href="../../../frontend/css/pages/aggrid.css">
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
            <!-- users list start -->
            <section class="users-list-wrapper">
                <!-- users filter start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Filters</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="users-list-filter">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <label for="users-list-role">Role</label>
                                            <fieldset class="form-group">
                                                <select class="form-control" id="users-list-role">
                                                    <option value="">All</option>
                                                    <option value="user">User</option>
                                                    <option value="staff">Staff</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <label for="users-list-status">Status</label>
                                            <fieldset class="form-group">
                                                <select class="form-control" id="users-list-status">
                                                    <option value="">All</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Blocked">Blocked</option>
                                                    <option value="deactivated">Deactivated</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <label for="users-list-verified">Verified</label>
                                            <fieldset class="form-group">
                                                <select class="form-control" id="users-list-verified">
                                                    <option value="">All</option>
                                                    <option value="true">Yes</option>
                                                    <option value="false">No</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <label for="users-list-department">Department</label>
                                            <fieldset class="form-group">
                                                <select class="form-control" id="users-list-department">
                                                    <option value="">All</option>
                                                    <option value="Sales">Sales</option>
                                                    <option value="Devlopment">Devlopment</option>
                                                    <option value="Management">Management</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- users filter end -->
                <!-- Ag Grid users list section start -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">All users are listed in here.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Version</th>
                                                    <th>Release Date</th>
                                                    <th>Setup File</th>
                                                    <th>User Manual</th>
                                                    <th>Release Notes</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($product as $key)
                                                <tr>
                                                    <td>{{$key->name}}</td>
                                                    <td>{{$key->version}}</td>
                                                    <td>{{$key->release_date}}</td>
                                                    <td>{{$key->setup_file}}</td>
                                                    <td>{{$key->user_manual}}</td>
                                                    <td>{{$key->notes}}</td>
                                                    <td><a href="{{ route('product_edit',$key->id) }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Edit</a>
                                                        <a href="{{ route('product_view',$key->id) }}" class="btn btn-outline-dark round mr-1 mb-1 waves-effect waves-light">Show</a>
                                                    </td>
                                                </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<!-- END: Content-->

<!-- END: Body-->

@endsection
