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

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- page users view start -->
            <section class="page-users-view">
                <div class="row">
                    <!-- account start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Product</div>
                            </div>
                            <div class="card-body">
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Name</td>
                                                <td>{{$product->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Version</td>
                                                <td>{{$product->version}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Release Date</td>
                                                <td>{{$product->release_date}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                <td class="font-weight-bold">Setup File</td>
                                                <td>{{$product->setup_file}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">User Manual</td>
                                                <td>{{$product->user_manual}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Release Notes</td>
                                                <td>{{$product->notes}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{route('product_edit', $product->id)}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                        <a href="{{route('product_delete',$product->id)}}"><button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- account end -->
                    <!-- information start -->
                    <!-- information start -->
                    <!-- social links end -->
                    <!-- social links end -->
                </div>
            </section>
            <!-- page users view end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
