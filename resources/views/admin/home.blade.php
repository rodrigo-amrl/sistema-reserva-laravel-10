<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin Templates - Dashboard Templates">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="/theme/img/favicon.svg" />
    <title>Sistema Reservas</title>
    @vite(['resources/css/app.scss'])
</head>

<body>
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <div class="page-wrapper">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ url('') }}" class="logo">
                    Sistema de Reservas
                </a>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">Menu</li>

                        <li>
                            <a href="{{ route('sala.index') }}">
                                <i class="icon-tag1"></i>
                                <span class="menu-text">Salas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reserva.index') }}">
                                <i class="icon-shopping-bag1"></i>
                                <span class="menu-text">Reservas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('usuario.index') }}">
                                <i class="icon-user1"></i>
                                <span class="menu-text">Usuários</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-content">
            <header class="header">
                <div class="toggle-btns">
                    <a id="toggle-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                    <a id="pin-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                </div>
                <div class="header-items">
                    <ul class="header-actions">
                        <li class="dropdown">
                            <a href="#" id="notifications" data-bs-toggle="dropdown" aria-haspopup="true">
                                <i class="icon-bell"></i>
                                <span class="count-label">0</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                                <div class="dropdown-menu-header">
                                    Notificações (0)
                                </div>
                                <ul class="header-notifications">

                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-bs-toggle="dropdown"
                                aria-haspopup="true">
                                <span class="user-name">Nina Griffin</span>
                                <span class="avatar">
                                    <i class="icon-user1"></i>

                                    <span class="status busy"></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                                <div class="header-profile-actions">
                                    <div class="header-user-profile">
                                        <div class="header-user">
                                            <img src="/theme/img/user7.png" alt="Admin Templates">
                                        </div>
                                        <h5>Nina Griffin</h5>
                                        <p>Admin</p>
                                    </div>
                                    <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                                    <a href="account-settings.html"><i class="icon-settings1"></i> Account
                                        Settings</a>
                                    <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Admin Dashboard</li>
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
        </div>

    </div>

    @vite(['resources/js/app.js'])
    <script src="/theme/js/jquery.min.js"></script>

    <script type="module" src="/theme/vendor/slimscroll/slimscroll.min.js"></script>
    <script type="module" src="/theme/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="/theme/vendor/apex/apexcharts.min.js"></script>
    <script src="/theme/vendor/apex/admin/customers.js"></script>


</body>

</html>
