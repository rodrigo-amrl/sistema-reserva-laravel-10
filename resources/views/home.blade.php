@extends('layout.principal')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="main-container">
        <div class="row gutters">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="icon-eye1"></i>
                    </div>
                    <div class="sale-num">
                        <h3>9.500</h3>
                        <p>Visitantes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="icon-shopping-cart1"></i>
                    </div>
                    <div class="sale-num">
                        <h3>2.500</h3>
                        <p>Reservas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="icon-shopping-bag1"></i>
                    </div>
                    <div class="sale-num">
                        <h3>7.500</h3>
                        <p>Clientes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="info-stats4">
                    <div class="info-icon">
                        <i class="icon-activity"></i>
                    </div>
                    <div class="sale-num">
                        <h3>%30</h3>
                        <p>Crescimento</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gutters">
            <div class="col-xl-8 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Últimas Reservas</div>
                    </div>
                    <div class="card-body">
                        <div class="customScroll5">
                            <ul class="user-messages">
                                <li class="clearfix">
                                    <div class="customer">AM</div>
                                    <div class="delivery-details">
                                        <span class="badge badge-primary">Ordered</span>
                                        <h5>Aaleyah Malik</h5>
                                        <p>We are pleased to inform that the following ticket no. <b>Limit
                                                Less510</b> have been
                                            booked.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">AS</div>
                                    <div class="delivery-details">
                                        <span class="badge badge-primary">Delivered</span>
                                        <h5>Jannik Simon</h5>
                                        <p>The carrier successfully delivered the message to the end user.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">ZR</div>
                                    <div class="delivery-details">
                                        <span class="badge badge-primary">Cancelled</span>
                                        <h5>Zaira Raheem</h5>
                                        <p>The following describe the status codes and messages states for
                                            delivery receipts.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">LJ</div>
                                    <div class="delivery-details">
                                        <span class="badge badge-primary">Returned</span>
                                        <h5>Ellie Murray</h5>
                                        <p>Status codes and descriptions are returned in the following
                                            OpenMarket-specific TLVs When a
                                            delivery receipt is received.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Clientes</div>
                    </div>
                    <div class="card-body">
                        <div id="customers"></div>
                        <div class="row gutters">
                            <div class="col-sm-6 col-6">
                                <div class="info-stats3 shade-one-a">
                                    <i class="icon-opacity"></i>
                                    <h6>Novos</h6>
                                    <h3>450</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6">
                                <div class="info-stats3 shade-one-b">
                                    <i class="icon-opacity"></i>
                                    <h6>Recorrentes</h6>
                                    <h3>900</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="module" src="{{ asset('/theme/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script type="module" src="{{ asset('/theme/vendor/slimscroll/custom-scrollbar.js') }}"></script>
    <script type="module" src="{{ asset('/theme/vendor/apex/admin/customers.js') }}"></script>
@endpush
