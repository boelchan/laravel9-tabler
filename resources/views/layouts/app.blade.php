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
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
    {{-- <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/> --}}
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet"/>
</head>
  <body  class=" layout-boxed">
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href=".">
                <img src="{{ asset('static/logo.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
              </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
              
              <div class="d-none d-md-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                </a>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm" style="background-image: url({{ asset('static/avatars/000m.jpg') }})"></span>
                  <div class="d-none d-xl-block ps-2">
                    <div>Paweł Kuna</div>
                    <div class="mt-1 small text-muted">UI Designer</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <a href="#" class="dropdown-item">Set status</a>
                  <a href="#" class="dropdown-item">Profile & account</a>
                  <a href="#" class="dropdown-item">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Settings</a>
                  <a href="#" class="dropdown-item">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
              <div class="container-xl">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="./index.html" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Home
                      </span>
                    </a>
                  </li>
                  <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Interface
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                          <a class="dropdown-item" href="./empty.html" >
                            Empty page
                          </a>
                          <a class="dropdown-item" href="./accordion.html" >
                            Accordion
                          </a>
                          <a class="dropdown-item active" href="./blank.html" >
                            Blank page
                          </a>
                          <a class="dropdown-item" href="./buttons.html" >
                            Buttons
                          </a>
                          <div class="dropend">
                            <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                              Cards
                              <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                            </a>
                            <div class="dropdown-menu">
                              <a href="./cards.html" class="dropdown-item">
                                Sample cards
                              </a>
                              <a href="./card-actions.html" class="dropdown-item">
                                Card actions
                                <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                              </a>
                              <a href="./cards-masonry.html" class="dropdown-item">
                                Cards Masonry
                              </a>
                            </div>
                          </div>
                          <a class="dropdown-item" href="./colors.html" >
                            Colors
                          </a>
                          <a class="dropdown-item" href="./dropdowns.html" >
                            Dropdowns
                          </a>
                          <a class="dropdown-item" href="./modals.html" >
                            Modals
                          </a>
                          <a class="dropdown-item" href="./maps.html" >
                            Maps
                          </a>
                          <a class="dropdown-item" href="./map-fullsize.html" >
                            Map fullsize
                          </a>
                          <a class="dropdown-item" href="./maps-vector.html" >
                            Vector maps
                            <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                          </a>
                          <a class="dropdown-item" href="./navigation.html" >
                            Navigation
                          </a>
                        </div>
                        <div class="dropdown-menu-column">
                          <a class="dropdown-item" href="./charts.html" >
                            Charts
                          </a>
                          <a class="dropdown-item" href="./pagination.html" >
                            Pagination
                          </a>
                          <a class="dropdown-item" href="./placeholder.html" >
                            Placeholder
                          </a>
                          <a class="dropdown-item" href="./tabs.html" >
                            Tabs
                          </a>
                          <a class="dropdown-item" href="./tables.html" >
                            Tables
                          </a>
                          <a class="dropdown-item" href="./carousel.html" >
                            Carousel
                          </a>
                          <a class="dropdown-item" href="./lists.html" >
                            Lists
                          </a>
                          <a class="dropdown-item" href="./typography.html" >
                            Typography
                          </a>
                          <a class="dropdown-item" href="./offcanvas.html" >
                            Offcanvas
                          </a>
                          <a class="dropdown-item" href="./markdown.html" >
                            Markdown
                          </a>
                          <div class="dropend">
                            <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
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
                            <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
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
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="page-wrapper">
          <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                    Empty page
                    </h2>
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
                    <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                    <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                    <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                    <li class="list-inline-item">
                      <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
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
                    <li class="list-inline-item">
                      <a href="./changelog.html" class="link-secondary" rel="noopener">
                        v1.0.0-beta9
                      </a>
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
    <script src="{{ asset('dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('dist/js/demo.min.js') }}"></script>
</body>
</html>
