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
                                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Eğitim Bilgileri</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>Başlangıç Tarihi</span>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-control" name="status" data-value="0">
                                                                <option>Seçiniz</option>
                                                                <option>Eşit</option>
                                                                <option>Büyük</option>
                                                                <option>Büyük Eşit</option>
                                                                <option>Küçük</option>
                                                                <option>Küçük Eşit</option>
                                                                <option>Arasında</option>
                                                                <option>Boş</option>
                                                                <option>Boş Değil</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <input type="date" id="email-id" class="form-control picker--focused" name="email-id" placeholder="Email">
                                                                </div>
                                                    </div>
                                                </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>Bitiş Tarihi</span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select class="form-control" name="status" data-value="0">
                                                                        <option>Seçiniz</option>
                                                                        <option>Eşit</option>
                                                                        <option>Büyük</option>
                                                                        <option>Büyük Eşit</option>
                                                                        <option>Küçük</option>
                                                                        <option>Küçük Eşit</option>
                                                                        <option>Arasında</option>
                                                                        <option>Boş</option>
                                                                        <option>Boş Değil</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4">
                                                                            <input type="date" id="email-id" class="form-control picker--focused" name="email-id" placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4">
                                                                            <span>Eğitim Türü</span>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <select class="form-control" name="status" data-value="0">
                                                                                <option>İçerisinde</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <select class="form-control" name="status" data-value="0">
                                                                                <option>Seçiniz</option>
                                                                                <option>Kurumiçi</option>
                                                                                <option>Kurumdışı</option>
                                                                            </select>
                                                                        </div>
                                            </div>
                                        </div>
                                                                <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4">
                                                                            <span>Eğitim Konusu</span>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <select class="form-control" name="status" data-value="0">
                                                                                <option>Seçiniz</option>
                                                                                <option>Eşit</option>
                                                                                <option>Büyük</option>
                                                                                <option>Büyük Eşit</option>
                                                                                <option>Küçük</option>
                                                                                <option>Küçük Eşit</option>
                                                                                <option>Arasında</option>
                                                                                <option>Boş</option>
                                                                                <option>Boş Değil</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4">
                                                                                    <input type="text" id="email-id" class="form-control picker--focused" name="email-id" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    </form>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Kaydet
                                        </button>
                                    </div>
                                </div>

                                </div>
                                                    </div>


                                    <!-- BEGIN: Content-->
@endsection
