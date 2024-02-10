 <?php
// Start session
session_start();

// Check if session variables are set
if (!isset($_SESSION['admin_id']) || !isset($_SESSION['admin_name']) || !isset($_SESSION['admin_email']) || !isset($_SESSION['admin_mobile_no'])) {
    // Session variables are not set, redirect to index.php
    header("Location: index.php");
    exit;
}else{

  extract($_SESSION);
}
// Your dashboard content goes here
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Code Crafters</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

<<<<<<< HEAD:admin/landing.php
  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/dashboard.php","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()
=======
    <!--
>>>>>>> 7372b9a146ab1c62db6a0838cb0a7b3c2d461380:landing.php

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
</head>

<body>

    <main>

        <header class="site-header">
            
        </header>

<<<<<<< HEAD:admin/landing.php
        <a class="navbar-brand" href="./dashboard.php" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>
=======
>>>>>>> 7372b9a146ab1c62db6a0838cb0a7b3c2d461380:landing.php

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Karandak 2k24
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

<<<<<<< HEAD:admin/landing.php
          <a class="btn btn-primary navbar-btn" href="./dashboard.php">Preview Demo</a>
        </div>
        <!-- End Secondary Content -->
=======
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Events</a>
                        </li>
>>>>>>> 7372b9a146ab1c62db6a0838cb0a7b3c2d461380:landing.php

                       
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Clubs</a>
                        </li>

<<<<<<< HEAD:admin/landing.php
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link py-2 py-lg-3" href="./documentation/dashboard.php">Documentation <span class="badge bg-dark rounded-pill ms-1">v2.1.1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link py-2 py-lg-3" href="https://htmlstream.com/contact-us" target="_blank">Support <i class="bi-box-arrow-up-right small ms-1"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link py-2 py-lg-3" href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/" target="_blank">Buy Now</a>
            </li>
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <!-- Hero -->
    <div class="overflow-hidden gradient-radial-sm-primary">
      <div class="container-lg content-space-t-3 content-space-t-lg-4 content-space-b-2">
        <div class="w-lg-75 text-center mx-lg-auto text-center mx-auto">
          <!-- Heading -->
          <div class="mb-7 animated fadeInUp">
            <h1 class="display-2 mb-3">Admin &amp; Dashboard theme <span class="text-primary text-highlight-warning">for everyone!</span></h1>
            <p class="fs-2">Developer friendly and highly customizable Admin &amp; Dashboard theme.</p>
          </div>
          <!-- End Heading -->
        </div>

        <!-- Browser Device -->
        <div class="animated fadeInUp">
          <figure class="js-img-comp device-browser device-browser-lg">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.phpstream.com/front/</div>
            </div>

            <div class="position-relative">
              <!-- Loader -->
              <div class="js-img-comp-loader position-absolute d-flex align-items-center justify-content-center bg-white w-100 h-100 zi-999">
                <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
              <!-- End Loader -->

              <div class="device-browser-frame">
                <div class="js-img-comp-container hs-img-comp-container">
                  <img class="hs-img-comp hs-img-comp-a" src="./assets/img/1618x1010/img1.jpg" alt="Image Description">

                  <div class="js-img-comp-wrapper hs-img-comp-wrapper">
                    <img class="hs-img-comp hs-img-comp-b" src="./assets/img/1618x1010/img2.jpg" alt="Image Description">
                  </div>
                </div>
              </div>
            </div>
          </figure>
        </div>
        <!-- End Browser Device -->
      </div>
    </div>
    <!-- End Hero -->

    <!-- Card Grid -->
    <div class="container-lg content-space-t-lg-2 content-space-b-2 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
        <h2 class="display-4">Creative <span class="text-primary">demos</span></h2>
        <p class="lead">Hop in and see Front's power in action in these different layout options.</p>
      </div>
      <!-- End Heading -->

      <div class="row">
        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Vertical Sidebar</h2>
              <p class="card-text lead">Experience a native pilled-styled sidebar that can be minimized on the fly.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img1.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img1-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-dark.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Dark</h2>
              <p class="card-text lead">Leverage Front's user-friendly and yet powerful dark mode, which adapts to the browser's default mode.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img6.jpg" alt="Image Description">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-dark-sidebar.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Dark Sidebar</h2>
              <p class="card-text lead">Build a better experience - mix and match dark with light.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img12.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img12-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-light-sidebar.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Light Sidebar</h2>
              <p class="card-text lead">Link content types with a light gray sidebar color palette.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img11.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img11-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-double-line.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Double Line</h2>
              <p class="card-text lead">Present web app in full content with a double line collapsible navigation bar.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img3.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img3-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-collapsible-layout.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Collapsible Navbar</h2>
              <p class="card-text lead">Present web app in full content with a single collapsible navigation bar.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img2.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img2-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 mb-4 mb-md-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-sidebar-detached.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Sidebar Detached</h2>
              <p class="card-text lead">Choose one of two detached sidebar options to create better navigation options and usability.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img13.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img13-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 bg-light border-0 shadow-none overflow-hidden" href="./dashboard-default-sidebar-detached-overlay.php">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Sidebar Detached Overlay</h2>
              <p class="card-text lead">Provide more navigation options and usability on page level with overlay sidebar detached.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img5.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img5-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <!-- Testimonials -->
    <div class="container-lg">
      <div class="bg-light content-space-2 rounded-3 px-5">
        <div class="w-md-70 text-center mx-md-auto">
          <div class="mb-4">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations/oc-review.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 10rem;">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations-light/oc-review.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 10rem;">
          </div>

          <p class="fs-2 text-dark mb-4"><em>This is a perfect theme for a modern web application. <span class="text-highlight-warning">There was clearly a lot of thought that went into designing</span> all of the components to look coherent and work well together in various grid layouts.</em></p>

          <h3 class="mb-0">Anton</h3>
          <p class="fs-4 mb-0">Happy customer</p>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Card Grid -->
    <div class="container-lg content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
        <h2 class="display-4">Packed with <span class="text-primary">features</span> you already love</h2>
        <p class="lead">The Front features can be flexed according to your needs with dozens of options available and mix-and-match possibilities.</p>
      </div>
      <!-- End Heading -->

      <div class="row">
        <div class="col-md-7 mb-4">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Calendars</h2>
              <p class="card-text lead">Front offers all kinds of calendar components for choosing date ranges, dates and times.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img4.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img4-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-5 mb-4">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">2 Sidebar menu options</h2>
              <p class="card-text lead">Choose between pill or tab navigation style on the sidebar.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img3.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img3-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-5 mb-4">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Datatables</h2>
              <p class="card-text lead">Showcase your latest work with datatable options that provide a powerful portfolio system, beautiful content designs or any other ordered grid content.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img6.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img6-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-7 mb-4">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Chart.js</h2>
              <p class="card-text lead">Allow cross-functional charts to deliver stunning content, data and all kinds of information faster no matter use cases and devices.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img5.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img5-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-7 mb-4 mb-md-0">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Advanced Forms</h2>
              <p class="card-text lead">Upload images, videos or any files, copy to clipboard, toggle passwords, search, add fields, count characters and discover more customizable and feature-rich plugins.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img8.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img8-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-5">
          <!-- Card -->
          <div class="card card-lg h-100 bg-light border-0 shadow-none overflow-hidden">
            <div class="card-body">
              <h2 class="card-title h1 text-inherit">Step Forms (Wizards)</h2>
              <p class="card-text lead">Create multi-step forms, validate and navigate through steps to get more leads and increase engagement.</p>
            </div>
            <div class="card-footer border-0 pt-0 mb-n4 me-n6">
              <img class="img-fluid" src="./assets/img/others/img7.png" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/img/others/img7-dark.png" alt="Image Description" data-hs-theme-appearance="dark">
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <!-- Features -->
    <div class="container-lg content-space-b-2 content-space-b-lg-3">
      <ul class="list-inline list-py-2 list-px-1 text-center mb-0">
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Bootstrap Icons</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Illustrations</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Accordion</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Alerts</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Avatars</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Badge</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Breadcrumb</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Buttons</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Cards</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Collapse</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Column Divider</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Divider</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Dropdowns</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Icons</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">List Group</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Lists</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Legend Indicator</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Modal</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Offcanvas</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Page Header</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Pagination</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Popovers</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Progress</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Profile</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Shapes</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Spinners</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Steps</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tab</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Toasts</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tooltips</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Typography</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navbar</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navs</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Mega Menu</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Navbar Vertical Aside</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Scrollspy</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Tables</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Sticky Header</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Basic Forms</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Checks &amp; Switches</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Input Group</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Advanced Select</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">File Attachments</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Drag' n' Drop File Uploads</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">WYSIWYG Editor</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Quantity Counter</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Copy to Clipboard</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Input Mask</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Step Forms (Wizards)</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Add Field</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Toggle Password</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Count Characters</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Form Search</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Toggle Switch</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Google reCAPTCHA</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Counter</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Circles.js (Pie Chart)</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Fullscreen Lightbox</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Leaflet</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">JSVectorMap</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Sticky Block</span>
        </li>
        <li class="list-inline-item">
          <span class="badge bg-soft-secondary text-dark fs-4 py-2 px-3">Go To</span>
        </li>
      </ul>
    </div>
    <!-- End Features -->

    <!-- Sliding Image -->
    <div class="content-space-b-2">
      <!-- Heading -->
      <div class="container-lg">
        <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
          <h2 class="display-4">Design solutions for any use cases</h2>
          <p class="lead">Whether you're creating a web application, dashboard, admin panels, or SASS based interface — Front Dashboard helps you create the best possible web application projects.</p>
        </div>
      </div>
      <!-- End Heading -->

      <div class="sliding-img mb-5">
        <div class="sliding-img-frame-to-start" style="background-image: url(./assets/img/others/img1.png);" data-hs-theme-appearance="default"></div>
        <div class="sliding-img-frame-to-start" style="background-image: url(./assets/img/others/img1-dark.png);" data-hs-theme-appearance="dark"></div>
      </div>

      <div class="sliding-img">
        <div class="sliding-img-frame-to-end" style="background-image: url(./assets/img/others/img2.png);" data-hs-theme-appearance="default"></div>
        <div class="sliding-img-frame-to-end" style="background-image: url(./assets/img/others/img2-dark.png);" data-hs-theme-appearance="dark"></div>
      </div>
    </div>
    <!-- End Sliding Image -->

    <!-- Stats -->
    <div class="container-lg content-space-b-2 content-space-b-lg-3">
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="text-center">
            <span class="display-3 fw-normal text-dark">60+</span>
            <p class="fs-3 mb-0">Components</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="text-center">
            <span class="display-3 fw-normal text-dark">50+</span>
            <p class="fs-3 mb-0">Plugins</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
          <div class="text-center">
            <span class="display-3 fw-normal text-dark">450+</span>
            <p class="fs-3 mb-0">Combinations</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3">
          <div class="text-center">
            <span class="display-3 fw-normal text-dark">47k+</span>
            <p class="fs-3 mb-0">Happy customers</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Stats -->

    <!-- Testimonials -->
    <div class="container-lg">
      <div class="bg-light content-space-2 rounded-3 px-5">
        <div class="w-md-70 text-center mx-md-auto">
          <div class="mb-4">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations/oc-review.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 10rem;">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations-light/oc-review.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 10rem;">
          </div>

          <p class="fs-2 text-dark mb-4"><em>The theme has a very professional look, bringing a more modern and clean style to the application. <span class="text-highlight-warning">The documentation is extraordinarily rich and complete</span>, helping implementation.</em></p>

          <h3 class="mb-0">Marcos</h3>
          <p class="fs-4 mb-0">Happy customer</p>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Features -->
    <div class="container-lg content-space-2 content-space-lg-4">
      <!-- Heading -->
      <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
        <h2 class="display-4">Applications</h2>
        <p class="lead">Made for everyone, build anything with multiple pre-built applications.</p>
      </div>
      <!-- End Heading -->

      <!-- Card Grid -->
      <div class="row align-items-md-center content-space-b-1 content-space-b-lg-2">
        <div class="col-md-6 order-md-2 mb-10 mb-md-0">
          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.phpstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img7.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img7-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 h-100 bg-soft-primary zi-n1 mb-n6 ms-n6"></div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <div class="pe-md-7">
            <div class="mb-5">
              <div class="mb-5">
                <span class="badge border border-dark text-dark">Application</span>
              </div>

              <h2 class="mb-3">Kanban</h2>
              <p class="fs-4">A board that visually depicts work at various stages of a process using cards to represent work items and columns to represent each stage of the process.</p>
            </div>
            <a class="btn btn-primary" target="_blank" href="./apps-kanban.php">Preview Kanban <i class="bi-box-arrow-up-right ms-2"></i></a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Card Grid -->

      <!-- Card Grid -->
      <div class="row align-items-md-center content-space-1 content-space-b-lg-2">
        <div class="col-md-6 order-md-2 mb-10 mb-md-0">
          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.phpstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img8.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img8-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 h-100 bg-soft-danger zi-n1 mb-n6 ms-n6"></div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <div class="pe-md-7">
            <div class="mb-5">
              <div class="mb-5">
                <span class="badge border border-dark text-dark">Application</span>
              </div>

              <h2 class="mb-3">Calendar</h2>
              <p class="fs-4">Multiple views of your day, week and month, guest invites, calendar on the web and more. It allows users to create, edit events, fill in quickly and easily.</p>
            </div>
            <a class="btn btn-primary" target="_blank" href="./apps-calendar.php">Preview Calendar <i class="bi-box-arrow-up-right ms-2"></i></a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Card Grid -->

      <!-- Card Grid -->
      <div class="row align-items-md-center content-space-1 content-space-b-lg-2">
        <div class="col-md-6 order-md-2 mb-10 mb-md-0">
          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.phpstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img9.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img9-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 h-100 bg-soft-warning zi-n1 mb-n6 ms-n6"></div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <div class="pe-md-7">
            <div class="mb-5">
              <div class="mb-5">
                <span class="badge border border-dark text-dark">Application</span>
              </div>

              <h2 class="mb-3">Invoice Generator</h2>
              <p class="fs-4">Quickly make invoices with Front's attractive invoice template straight from your web browser.</p>
            </div>
            <a class="btn btn-primary" target="_blank" href="./apps-invoice-generator.php">Preview Invoice Generator <i class="bi-box-arrow-up-right ms-2"></i></a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Card Grid -->

      <!-- Card Grid -->
      <div class="row align-items-md-center content-space-t-1">
        <div class="col-md-6 order-md-2 mb-10 mb-md-0">
          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.phpstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img10.jpg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid shadow-lg" src="./assets/img/900x562/img10-dark.jpg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 h-100 bg-soft-success zi-n1 mb-n6 ms-n6"></div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <div class="pe-md-7">
            <div class="mb-5">
              <div class="mb-5">
                <span class="badge border border-dark text-dark">Application</span>
              </div>

              <h2 class="mb-3">File Manager</h2>
              <p class="fs-4">Please your visitors with eye-catching and exciting file manager. Different options and settings to manage your site.</p>
            </div>
            <a class="btn btn-primary" target="_blank" href="./apps-file-manager.php">Preview File Manager <i class="bi-box-arrow-up-right ms-2"></i></a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Card Grid -->
    </div>
    <!-- End Features -->

    <!-- Documentation -->
    <div class="container-lg">
      <div class="bg-dark position-relative rounded overflow-hidden pt-4 px-4 pt-sm-10 px-sm-10">
        <!-- Heading -->
        <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
          <h2 class="display-4 text-white">Documentation</h2>
          <p class="lead text-white-70">Get started with Front - Multipurpose Responsive Template for building responsive, mobile-first sites, with Bootstrap and a template starter page.</p>
        </div>
        <!-- End Heading -->

        <img class="img-fluid" src="./assets/svg/illustrations/docs-main-page.svg" alt="Image Description" data-hs-theme-appearance="default">
        <img class="img-fluid" src="./assets/svg/illustrations/docs-main-page-dark.svg" alt="Image Description" data-hs-theme-appearance="dark">

        <div class="gradient-y-lg-dark position-absolute bottom-0 start-0 end-0 w-100 d-flex justify-content-center zi-1 pb-8" style="padding-top: 13rem;">
          <a class="btn btn-primary btn-lg" href="./documentation/dashboard.php">Browse Documentation</a>
        </div>
      </div>
    </div>
    <!-- End Documentation -->

    <!-- Tools -->
    <div class="container-lg content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
        <h2 class="display-4">Build <span class="text-primary">tools</span> and full <span class="text-primary">documention</span></h2>
        <p class="lead">Components, plugins, and build tools are all thoroughly documented with live examples and markup for easier use and customization.</p>
      </div>
      <!-- End Heading -->

      <div class="w-md-75 w-lg-50 mx-md-auto mb-5 mb-md-9">
        <!-- Code Sample -->
        <div class="card bg-dark mb-5">
          <div class="card-body font-monospace">
            <div class="d-grid gap-6">
              <span class="d-grid gap-1">
                <span class="d-block text-white-70">&gt; $ npm install</span>
                <span class="d-block text-success">Everything installed!</span>
              </span>
              <span class="d-grid gap-1">
                <span class="d-block text-white-70">&gt; $ gulp</span>
                <span class="d-block text-success">scss watching</span>
                <span class="d-block text-success">LiveReload started</span>
                <span class="d-block text-success">Opening localhost:3000</span>
              </span>
              <span class="d-grid gap-1">
                <span class="d-block text-white-70">&gt; $ that's it?!</span>
                <span class="d-block text-success">Yup, that's it.</span>
              </span>
            </div>
          </div>
        </div>
        <!-- End Code Sample -->

        <div class="text-center mb-7">
          <p>Not comfortable diving that deep? No worries, you just use the compiled CSS and examples pages! <a class="link" href="./documentation/gulp.php">Learn more <i class="bi-chevron-right small"></i></a></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-auto col-sm-3 col-sm py-3">
            <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/bootstrap-gray.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col-auto col-sm-3 col-sm py-3">
            <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/sass-gray.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col-auto col-sm-3 col-sm py-3">
            <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/gulp-gray.svg" alt="Logo">
          </div>
          <!-- End Col -->

          <div class="col-auto col-sm-3 col-sm py-3">
            <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/brands/npm-gray.svg" alt="Logo">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <div class="d-grid mx-auto" style="max-width: 15rem;">
        <a class="btn btn-primary btn-lg" href="./documentation/gulp.php">Learn more</a>
      </div>
    </div>
    <!-- End Tools -->

    <!-- Testimonials -->
    <div class="container-lg">
      <div class="bg-light content-space-2 rounded-3 px-5">
        <div class="w-md-70 text-center mx-md-auto">
          <div class="mb-4">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations/oc-review.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 10rem;">
            <img class="img-fluid mx-auto" src="./assets/svg/illustrations-light/oc-review.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 10rem;">
          </div>

          <p class="fs-2 text-dark mb-4"><em>This theme is really great, as back end developer <span class="text-highlight-warning">I was able to build an impressive front end using this theme in plain JavaScript vanilla. The source code is clear and the documentation as well, for me it's the best purchase I made with this team and I am watching evolution.</span> Thank you so much for such quality and price. Keep going!</em></p>

          <h3 class="mb-0">David</h3>
          <p class="fs-4 mb-0">Happy customer</p>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Pricing -->
    <div class="overflow-hidden">
      <div class="container-lg content-space-t-2 content-space-t-lg-3">
        <!-- Heading -->
        <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
          <h2 class="display-4">Pricing</h2>
          <p class="lead">Whatever your status, our offers evolve according to your needs.</p>
        </div>
        <!-- End Heading -->

        <div class="w-md-75 mx-md-auto">
          <div class="position-relative">
            <div class="bg-dark rounded-2 p-5">
              <div class="row align-items-sm-center">
                <div class="col">
                  <h3 class="text-white mb-1">Single</h3>
                  <span class="d-block text-white-70">Single site</span>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-5">
                  <p class="text-white-70 mb-0">Ideal for corporate, portfolio, blog, shop and many more.</p>
                </div>
                <!-- End Col -->

                <div class="col-12 col-md col-lg-4 text-lg-end mt-3 mt-lg-0">
                  <div class="d-grid">
                    <a class="btn btn-primary" href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/" target="_blank">Buy for $49</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <hr class="bg-soft-light opacity-50">

              <div class="row align-items-sm-center">
                <div class="col">
                  <h3 class="text-white mb-1">Multisite</h3>
                  <span class="d-block text-white-70">Unlimited sites</span>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-5">
                  <p class="text-white-70 mb-0">All the same examples as the Standard License, but you could build all of them with a single Multisite license.</p>
                </div>
                <!-- End Col -->

                <div class="col-12 col-md col-lg-4 text-lg-end mt-3 mt-lg-0">
                  <div class="d-grid">
                    <a class="btn btn-primary" href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/" target="_blank">Buy for $149</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <hr class="bg-soft-light opacity-50">

              <div class="row align-items-sm-center">
                <div class="col">
                  <h3 class="text-white mb-1">Extended</h3>
                  <span class="d-block text-white-70">For paying users</span>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-5">
                  <p class="text-white-70 mb-0">Best suited for "paid subscribers" and SaaS analytics applications.</p>
                </div>
                <!-- End Col -->

                <div class="col-12 col-md col-lg-4 text-lg-end mt-3 mt-lg-0">
                  <div class="d-grid">
                    <a class="btn btn-primary" href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/" target="_blank">Buy for $599</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>

            <div class="d-none d-md-block position-absolute bottom-0 start-0">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-peeking.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 8rem; margin-left: -7.8125rem;">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-peeking.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 8rem; margin-left: -7.8125rem;">
            </div>

            <div class="d-none d-md-block position-absolute top-50 end-0 translate-middle-y">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-on-the-go.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem; margin-right: -15rem;">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-on-the-go.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem; margin-right: -15rem;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pricing -->

    <!-- FAQ -->
    <div class="container-lg content-space-t-2 content-space-t-lg-3">
      <!-- Heading -->
      <div class="w-lg-75 text-center mx-lg-auto mb-7 mb-md-10">
        <h2 class="display-4">Frequently Asked <span class="text-primary">Questions</span></h2>
      </div>
      <!-- End Heading -->

      <div class="w-md-75 mx-md-auto">
        <!-- List -->
        <ul class="list-unstyled list-py-3 mb-0">
          <li>
            <h2 class="h1">How can I get a refund?</h2>
            <p class="fs-4">If you'd like a refund please reach out to us at <a class="link" href="mailto:themes@getbootstrap.com">themes@getbootstrap.com</a>. If you need technical help with the theme before a refund please reach out to us first.</p>
          </li>

          <li>
            <h2 class="h1">How do I get access to a theme I purchased?</h2>
            <p class="fs-4">If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a <a class="link" href="https://marketplace.getbootstrap.com/signin/" target="_blank">login</a> or can't remember the information, you can use our handy <a class="link" href="https://themes.getbootstrap.com/redownload/" target="_blank">Redownload page</a>, just remember to use the same email you originally made your purchases with.</p>
          </li>

          <li>
            <h2 class="h1">How do I get help with the theme I purchased?</h2>
            <p class="fs-4">Technical support for each theme is given directly by the creator of the theme. You can contact us <a class="link" href="https://htmlstream.com/contact-us" target="_blank">here</a></p>
          </li>

          <li>
            <h2 class="h1">Is Front Admin available on other web application platforms?</h2>
            <p class="fs-4">Since the theme is a static HTML template, we do not offer any tutorials or any other materials on how to integrate our templates with any CMS, Web Application framework, or any other similar technology. However, since our templates are static HTML/CSS and JS templates, then they should be compatible with any backend technology.</p>
          </li>

          <li>
            <h2 class="h1">How can I access a Figma or Sketch file?</h2>
            <p class="fs-4">Unfortunately, the design files are not available. We will consider the possibility of adding this option in the near future. However, we cannot provide any ETA regarding the release.</p>
          </li>
        </ul>
        <!-- End List -->

        <hr class="my-7">

        <div class="text-center">
          <h3>Haven't found an answer to your question?</h3>
          <p><a class="link" href="https://htmlstream.com/contact-us" target="_blank">Send us a message</a> and we'll get back to you.</p>
        </div>
      </div>
    </div>
    <!-- End FAQ -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="container-lg text-center py-10">
    <!-- Socials -->
    <ul class="list-inline mb-3">
      <li class="list-inline-item">
        <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://www.facebook.com/htmlstream">
          <i class="bi-facebook"></i>
        </a>
      </li>

      <li class="list-inline-item">
        <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://twitter.com/htmlstream">
          <i class="bi-twitter"></i>
        </a>
      </li>

      <li class="list-inline-item">
        <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://github.com/htmlstreamofficial">
          <i class="bi-github"></i>
        </a>
      </li>

      <li class="list-inline-item">
        <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="https://www.instagram.com/htmlstream/">
          <i class="bi-instagram"></i>
        </a>
      </li>
    </ul>
    <!-- End Socials -->

    <p class="mb-0">&copy; Front. 2021 Htmlstream. All rights reserved.</p>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
=======
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li>
                    </ul>

                </div>
>>>>>>> 7372b9a146ab1c62db6a0838cb0a7b3c2d461380:landing.php
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/v1.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About TechFest 2024</h2>

                            <p class="text-white">Karandak Techfest is a dynamic showcase of innovation and technical prowess, featuring workshops, competitions, and keynote speeches that inspire students and enthusiasts to push the boundaries of science and technology, fostering a culture of learning and innovation.</p>

                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="images/main1.jpg" class="about-image img-fluid">

                            
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Events</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="images/main2.jpg"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">
                                <p>
                                    <strong>Name:</strong>
                                    TechFest
                                </p>

                                <p>
                                    <strong>Date:</strong>
                                    10th Feb 2024
                                </p>

                                <p>
                                    <strong>Location:</strong>
                                    Pune
                                </p>

                                <hr>

                                <p class="mb-0">
                                    <strong>Register Yourself:</strong>
                                    <a href="#">Enroll Now</a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


       


        <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Clubs</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    <h3>Association of Computer Engineering</h3>

                                    <p>Including good things:</p>
                                </div>

                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">Networking 
                                    </li>

                                <li class="pricing-list-item">Skill-building</li>

                                <li class="pricing-list-item">Collaboration</li>

                                <li class="pricing-list-item">Engagement</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="#">
                                <span>Join Club</span>
                                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="16" cy="16" r="15.5"></circle>
                                        <line x1="10" y1="18" x2="16" y2="12"></line>
                                        <line x1="16" y1="12" x2="22" y2="18"></line>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Any Query..?</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactForm" type="button" role="tab"
                                    aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                    role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                    class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email"
                                                    pattern="[^ @]*@[^ @]*" class="form-control"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>

                                        <input type="text" name="contact-company" id="contact-company"
                                            class="form-control" placeholder="College" required>

                                        <textarea name="contact-message" rows="3" class="form-control"
                                            id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.3775663510382!2d73.83401107465093!3d18.466549170823306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2954c2482cba5%3A0x6223f5d2544ac9bb!2z4KS24KWN4KSw4KWA4KSu4KSk4KWAIOCkleCkvuCktuClgOCkrOCkvuCkiCDgpKjgpLXgpLLgpYcg4KSV4KWJ4KSy4KWH4KScIOCkkeCkq-CkvCDgpIfgpILgpJzgpYDgpKjgpL_gpK_gpLDgpL_gpILgpJc!5e0!3m2!1shi!2sin!4v1707556807461!5m2!1shi!2sin"                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Karandak TechFest</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2024 Code Crafters</p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>