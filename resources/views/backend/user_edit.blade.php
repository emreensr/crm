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
                                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <div class="media mb-2">
                                        <a class="mr-2 my-25" href="#">
                                            <img src="{{ asset('/storage/images/' . $users->photo) }}" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                        </a>
                                        <div class="media-body mt-50">
                                            <h4 class="media-heading">{{ $users->name }}</h4>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form  action="{{route('user_editpost',$users->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username" value="{{ $users->username }}" value="{{ $users->username }}"
                                                    <div class="controls">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>E-mail</label>
                                                        <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Birth date</label>
                                                        <input type="text" class="form-control" name=birthdate" value="{{ $users->birthdate }}">
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Mobile</label>
                                                            <input type="text" class="form-control" name="mobile"  value="{{ $users->mobile }}">
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link d-flex align-items-center active"  aria-selected="true">
                                                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Company</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="text" class="form-control"  name="company" value="{{ $users->company }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Office</label>
                                                            <input type="text" class="form-control" name="office" value="{{ $users->office }}">
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Position</label>
                                                        <input type="text" class="form-control" name="position"  value="{{ $users->position }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control" name="website" value="{{ $users->website }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Start Date</label>
                                                        <input type="text" class="form-control" name="startdate" value="{{ $users->startdate }}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="gender" checked value="false">
                                                                    <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                    Male
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="gender" value="false">
                                                                    <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                    Female
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                </div>
                                                    <label>Upload a photo</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-upload" id="basic-addon5"></span>
                                                        </div>
                                                        <input type="file" name="avatar" class="form-control"  value="{{$users->photo}}" aria-describedby="basic-addon5">
                                                    </div>
                                            </div>
                                            <div class="col-12 col-sm-6">

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status" data-value="0">
                                                        <option>0</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select class="form-control" name="role" data-value="0">
                                                        <option>0</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" name="age"  value="{{ $users->age }}">
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs mb-3" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link d-flex align-items-center active"  aria-selected="true">
                                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Addresses</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control" name="address"  value="{{ $users->address }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control"  name="postcode" value="{{ $users->postcode }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" name="city" value="{{ $users->city }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>State</label>
                                                        <input type="text" class="form-control" name="state" value="{{ $users->state }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control"  name="country" value="{{ $users->country }}">
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs mb-3" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link d-flex align-items-center active"  aria-selected="true">
                                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Social Links</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <fieldset>
                                                    <label>Twitter</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                        </div>
                                                        <input type="text" name="twitter" class="form-control" value="{{ $users->twitter }}">
                                                    </div>

                                                    <label>Facebook</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                        </div>
                                                        <input type="text" name="facebook" class="form-control" value="{{ $users->facebook }}">
                                                    </div>
                                                    <label>Instagram</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                        </div>
                                                        <input type="text" name="instagram" class="form-control" value="{{ $users->instagram }}">
                                                    </div>
                                                </fieldset>

                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                    Changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Reset</button>
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

