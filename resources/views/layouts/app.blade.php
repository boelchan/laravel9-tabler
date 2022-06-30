<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/datatables/datatables.min.css') }}" />


</head>

<body class="">
    <div class="page">
        <header class="navbar navbar-expand-md navbar-dark navbar-overlap d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="/">
                        <img src="./static/logo-white.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url(./static/avatars/000m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-muted">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            @if (Auth::check())
                            <a href="#" class="dropdown-item">Profile & account</a>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            <a href="/login" class="dropdown-item">Login</a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                            <line x1="12" y1="12" x2="20" y2="7.5" />
                                            <line x1="12" y1="12" x2="12" y2="21" />
                                            <line x1="12" y1="12" x2="4" y2="7.5" />
                                            <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Interface
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./empty.html">
                                                Empty page
                                            </a>
                                            <a class="dropdown-item" href="./accordion.html">
                                                Accordion
                                            </a>
                                            <a class="dropdown-item" href="./blank.html">
                                                Blank page
                                            </a>
                                            <a class="dropdown-item" href="./buttons.html">
                                                Buttons
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                    aria-expanded="false">
                                                    Cards
                                                    <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./cards.html" class="dropdown-item">
                                                        Sample cards
                                                    </a>
                                                    <a href="./card-actions.html" class="dropdown-item">
                                                        Card actions
                                                        <span
                                                            class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                                    </a>
                                                    <a href="./cards-masonry.html" class="dropdown-item">
                                                        Cards Masonry
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./colors.html">
                                                Colors
                                            </a>
                                            <a class="dropdown-item" href="./datatables.html">
                                                Datatables
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./dropdowns.html">
                                                Dropdowns
                                            </a>
                                            <a class="dropdown-item" href="./modals.html">
                                                Modals
                                            </a>
                                            <a class="dropdown-item" href="./maps.html">
                                                Maps
                                            </a>
                                            <a class="dropdown-item" href="./map-fullsize.html">
                                                Map fullsize
                                            </a>
                                            <a class="dropdown-item" href="./maps-vector.html">
                                                Vector maps
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./navigation.html">
                                                Navigation
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./charts.html">
                                                Charts
                                            </a>
                                            <a class="dropdown-item" href="./pagination.html">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                                Pagination
                                            </a>
                                            <a class="dropdown-item" href="./placeholder.html">
                                                Placeholder
                                            </a>
                                            <a class="dropdown-item" href="./tabs.html">
                                                Tabs
                                            </a>
                                            <a class="dropdown-item" href="./tables.html">
                                                Tables
                                            </a>
                                            <a class="dropdown-item" href="./carousel.html">
                                                Carousel
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./lists.html">
                                                Lists
                                            </a>
                                            <a class="dropdown-item" href="./typography.html">
                                                Typography
                                            </a>
                                            <a class="dropdown-item" href="./offcanvas.html">
                                                Offcanvas
                                            </a>
                                            <a class="dropdown-item" href="./markdown.html">
                                                Markdown
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                    aria-expanded="false">
                                                    Authentication
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./sign-in.html" class="dropdown-item">
                                                        Sign in
                                                    </a>
                                                    <a href="./sign-up.html" class="dropdown-item">
                                                        Sign up
                                                    </a>
                                                    <a href="./forgot-password.html" class="dropdown-item">
                                                        Forgot password
                                                    </a>
                                                    <a href="./terms-of-service.html" class="dropdown-item">
                                                        Terms of service
                                                    </a>
                                                    <a href="./auth-lock.html" class="dropdown-item">
                                                        Lock screen
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                    aria-expanded="false">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-inline me-1" width="24" height="24"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                        <path
                                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                        <line x1="9" y1="14" x2="15" y2="14" />
                                                    </svg>
                                                    Error pages
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./error-404.html" class="dropdown-item">
                                                        404 page
                                                    </a>
                                                    <a href="./error-500.html" class="dropdown-item">
                                                        500 page
                                                    </a>
                                                    <a href="./error-maintenance.html" class="dropdown-item">
                                                        Maintenance page
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./form-elements.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 11 12 14 20 6" />
                                            <path
                                                d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Forms
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Extra
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./activity.html">
                                                Activity
                                            </a>
                                            <a class="dropdown-item" href="./gallery.html">
                                                Gallery
                                            </a>
                                            <a class="dropdown-item" href="./invoice.html">
                                                Invoice
                                            </a>
                                            <a class="dropdown-item" href="./search-results.html">
                                                Search results
                                            </a>
                                            <a class="dropdown-item" href="./pricing.html">
                                                Pricing cards
                                            </a>
                                            <a class="dropdown-item" href="./faq.html">
                                                FAQ
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./users.html">
                                                Users
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./license.html">
                                                License
                                            </a>
                                            <a class="dropdown-item" href="./music.html">
                                                Music
                                            </a>
                                            <a class="dropdown-item" href="./tasks.html">
                                                Tasks
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./uptime.html">
                                                Uptime monitor
                                            </a>
                                            <a class="dropdown-item" href="./widgets.html">
                                                Widgets
                                            </a>
                                            <a class="dropdown-item" href="./wizard.html">
                                                Wizard
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <rect x="4" y="4" width="6" height="5" rx="2" />
                                            <rect x="4" y="13" width="6" height="7" rx="2" />
                                            <rect x="14" y="4" width="6" height="7" rx="2" />
                                            <rect x="14" y="15" width="6" height="5" rx="2" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Layout
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-horizontal.html">
                                                Horizontal
                                            </a>
                                            <a class="dropdown-item" href="./layout-boxed.html">
                                                Boxed
                                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical.html">
                                                Vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                                Vertical transparent
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-right.html">
                                                Right vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-condensed.html">
                                                Condensed
                                            </a>
                                            <a class="dropdown-item" href="./layout-combo.html">
                                                Combined
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-navbar-dark.html">
                                                Navbar dark
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                                Navbar sticky
                                            </a>
                                            <a class="dropdown-item active" href="./layout-navbar-overlap.html">
                                                Navbar overlap
                                            </a>
                                            <a class="dropdown-item" href="./layout-rtl.html">
                                                RTL mode
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid.html">
                                                Fluid
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                                Fluid vertical
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./icons.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                            <line x1="10" y1="10" x2="10.01" y2="10" />
                                            <line x1="14" y1="10" x2="14.01" y2="10" />
                                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        1960 icons
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="4" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="15" y1="15" x2="18.35" y2="18.35" />
                                            <line x1="9" y1="15" x2="5.65" y2="18.35" />
                                            <line x1="5.65" y1="5.65" x2="9" y2="9" />
                                            <line x1="18.35" y1="5.65" x2="15" y2="9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Help
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./docs/index.html">
                                        Documentation
                                    </a>
                                    <a class="dropdown-item" href="./changelog.html">
                                        Changelog
                                    </a>
                                    <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank"
                                        rel="noopener">
                                        Source code
                                    </a>
                                    <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm"
                                        target="_blank" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor project!
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none text-white">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h2 class="page-title">
                                Navbar overlap layout
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                @yield('content')
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html"
                                        class="link-secondary">Documentation</a></li>
                                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                                </li>
                                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                        class="link-secondary" rel="noopener">Source code</a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank"
                                        class="link-secondary" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon text-pink icon-filled icon-inline" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2022
                                    <a href="." class="link-secondary">Tabler</a>.
                                    All rights reserved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Tabler Libs -->

    <!-- Tabler Core -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('dist/js/demo.min.js') }}"></script>

    <script src="{{ asset('vendor/datatables/datatables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    @yield('page-script')

</body>

</html>