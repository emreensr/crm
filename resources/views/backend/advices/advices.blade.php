@extends('backend.layout')
@section('content')

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
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
                                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Öneriler</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <section id="horizontal-vertical">
                                        <div class="row">
                                            <div class="col-15">
                                                <div class="card-body card-dashboard">
                                                    <div class="table-responsive">
                                                        <table class="table nowrap scroll-horizontal-vertical">
                                                            <thead>
                                                            <tr>
                                                                <th>Öneri No</th>
                                                                <th>Oluşturulma Tarih</th>
                                                                <th>Ad Soyad</th>
                                                                <th>Departman</th>
                                                                <th>Pozisyon</th>
                                                                <th>Şube</th>
                                                                <th>Öneri Adı</th>
                                                                <th>Öneri Özeti</th>
                                                                <th>Öneri Türü</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class="form-control" name=" data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td><input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="office"  data-validation-required-message="This mobile number is required">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Kaydet
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>



                                    <!-- BEGIN: Content-->
@endsection
