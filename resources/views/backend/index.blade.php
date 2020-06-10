@extends('backend.layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card bg-analytics text-white">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <img src="../../../frontend/images/elements/decore-left.png" class="img-left" alt="
            card-img-left">
                                    <img src="../../../frontend/images/elements/decore-right.png" class="img-right" alt="
            card-img-right">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-2 text-white">Hoşgeldiniz {{Auth::user()->name}}</h1>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">Detayları Göster <i class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Son 7 Gün
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">Goal: $100000</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Users: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Retention: 90%</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Duration: 1yr</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Cironuz</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Son 1 Ay
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Son 1 ay</a>
                                            <a class="dropdown-item" href="#">Son 3 ay</a>
                                            <a class="dropdown-item" href="#">Son 1 yıl</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">350.546 ₺</h1>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">Gelir</p>
                                                <span class="font-large-1">650.500 ₺</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Gider</p>
                                                <span class="font-large-1">300.000 ₺</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <div class="content-overlay"></div>
                        <div class="header-navbar-shadow"></div>
                        <div class="content-wrapper">
                            <div class="content-header row">
                            </div>
                            <div class="content-body">
                                <!-- Full calendar start -->
                                <section id="basic-examples">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="cal-category-bullets d-none">
                                                            <div class="bullets-group-1 mt-2">
                                                                <div class="category-business mr-1">
                                                                    <span class="bullet bullet-success bullet-sm mr-25"></span>
                                                                    Business
                                                                </div>
                                                                <div class="category-work mr-1">
                                                                    <span class="bullet bullet-warning bullet-sm mr-25"></span>
                                                                    Work
                                                                </div>
                                                                <div class="category-personal mr-1">
                                                                    <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                                                    Personal
                                                                </div>
                                                                <div class="category-others">
                                                                    <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                                                    Others
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id='fc-default'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- calendar Modal starts-->
                                    <div class="modal fade text-left modal-calendar" tabindex="-1" role="dialog" aria-labelledby="cal-modal" aria-modal="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-text-bold-600" id="cal-modal">Add Event</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <div class="d-flex justify-content-between align-items-center add-category">
                                                            <div class="chip-wrapper"></div>
                                                            <div class="label-icon pt-1 pb-2 dropdown calendar-dropdown">
                                                                <i class="feather icon-tag dropdown-toggle" id="cal-event-category" data-toggle="dropdown"></i>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cal-event-category">
                                                    <span class="dropdown-item business" data-color="success">
                                                        <span class="bullet bullet-success bullet-sm mr-25"></span>
                                                        Business
                                                    </span>
                                                                    <span class="dropdown-item work" data-color="warning">
                                                        <span class="bullet bullet-warning bullet-sm mr-25"></span>
                                                        Work
                                                    </span>
                                                                    <span class="dropdown-item personal" data-color="danger">
                                                        <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                                        Personal
                                                    </span>
                                                                    <span class="dropdown-item others" data-color="primary">
                                                        <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                                        Others
                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" class="form-control" id="cal-event-title" placeholder="Event Title">
                                                            <label for="cal-event-title">Event Title</label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" class="form-control pickadate" id="cal-start-date" placeholder="Start Date">
                                                            <label for="cal-start-date">Start Date</label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" class="form-control pickadate" id="cal-end-date" placeholder="End Date">
                                                            <label for="cal-end-date">End Date</label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <textarea class="form-control" id="cal-description" rows="5" placeholder="Description"></textarea>
                                                            <label for="cal-description">Description</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary cal-add-event waves-effect waves-light" disabled>
                                                            Add Event</button>
                                                        <button type="button" class="btn btn-primary d-none cal-submit-event waves-effect waves-light" disabled>submit</button>
                                                        <button type="button" class="btn btn-flat-danger cancel-event waves-effect waves-light" data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-flat-danger remove-event d-none waves-effect waves-light" data-dismiss="modal">Remove</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- calendar Modal ends-->
                                </section>
                                <!-- // Full calendar end -->

                            </div>
                        </div>
                    </div>

                </div>


            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
