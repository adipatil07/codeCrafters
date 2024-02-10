<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Connections | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->

  <link rel="preload" href="./assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="./assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/dashboard.php","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

<?php   include "include/header.php"; ?>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
<?php include "include/sidebar.php";  ?>




  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <!-- Profile Cover -->
          <div class="profile-cover">
            <div class="profile-cover-img-wrapper">
              <img class="profile-cover-img" src="./assets/img/1920x400/img1.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Profile Cover -->

          <!-- Profile Header -->
          <div class="text-center mb-5">
            <!-- Avatar -->
            <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
              <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
              <span class="avatar-status avatar-status-success"></span>
            </div>
            <!-- End Avatar -->

            <h1 class="page-header-title">Ella Lauda <i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h1>

            <!-- List -->
            <ul class="list-inline list-px-2">
              <li class="list-inline-item">
                <i class="bi-building me-1"></i>
                <span>Htmlstream</span>
              </li>

              <li class="list-inline-item">
                <i class="bi-geo-alt me-1"></i>
                <a href="#">San Francisco,</a>
                <a href="#">US</a>
              </li>

              <li class="list-inline-item">
                <i class="bi-calendar-week me-1"></i>
                <span>Joined March 2017</span>
              </li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Profile Header -->

          <!-- Nav -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <ul class="nav nav-tabs align-items-center">
              <li class="nav-item">
                <a class="nav-link " href="./user-profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-teams.php">Teams</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./user-profile-projects.php">Projects <span class="badge bg-soft-dark text-dark rounded-circle ms-1">3</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./user-profile-connections.php">Connections</a>
              </li>

              <li class="nav-item ms-auto">
                <div class="d-flex gap-2">
                  <!-- Form Check -->
                  <div class="form-check form-check-switch">
                    <input class="form-check-input" type="checkbox" value="" id="connectCheckbox">
                    <label class="form-check-label btn btn-sm" for="connectCheckbox">
                      <span class="form-check-default">
                        <i class="bi-person-plus-fill"></i> Connect
                      </span>
                      <span class="form-check-active">
                        <i class="bi-check-lg me-2"></i> Connected
                      </span>
                    </label>
                  </div>
                  <!-- End Form Check -->

                  <a class="btn btn-icon btn-sm btn-white" href="#">
                    <i class="bi-list-ul me-1"></i>
                  </a>

                  <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">
                      <span class="dropdown-header">Settings</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-share-fill dropdown-item-icon"></i> Share profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> Block page and profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                      </a>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Feedback</span>

                      <a class="dropdown-item" href="#">
                        <i class="bi-flag dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Dropdown -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Nav -->

          <!-- Filter -->
          <div class="row align-items-center mb-5">
            <div class="col">
              <h3 class="mb-0">7 connections</h3>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Nav -->
              <ul class="nav nav-segment" id="connectionsTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                    <i class="bi-grid"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                    <i class="bi-list"></i>
                  </a>
                </li>
              </ul>
              <!-- End Nav -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Filter -->

          <!-- Tab Content -->
          <div class="tab-content" id="connectionsTabContent">
            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
              <!-- Connections -->
              <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown1">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-soft-primary avatar-circle avatar-centered mb-3">
                        <span class="avatar-initials">R</span>
                        <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Rachel Doe</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Design</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">UI/UX</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Sketch</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Figma</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">25 connections</a>
                        </div>

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox1" checked>
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox1">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown2">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                        <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Isabella Finley</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>FrontApp</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Human resources</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Support</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">79 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox2" checked>
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox2">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown3">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">David Harrison</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Unassigned</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Marketing</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">0 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox3">
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox3">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown4">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-soft-dark avatar-circle avatar-centered mb-3">
                        <span class="avatar-initials">B</span>
                        <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Bob Dean</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Sales</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Sales</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Legal</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">25 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox4">
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox4">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown5">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Amanda Harvey</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Atlassian</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Human resources</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Legal</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">3 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox5" checked>
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox5">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown6">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Finch Hoot</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Dev</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">JS</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Vue.js</a></li>
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">HTML5</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">7 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox6" checked>
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox6">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <div class="card-pinned">
                      <div class="card-pinned-top-end">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsDropdown7">
                            <a class="dropdown-item" href="#">Share connection</a>
                            <a class="dropdown-item" href="#">Block connection</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Delete</a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body text-center">
                      <!-- Avatar -->
                      <div class="avatar avatar-xl avatar-circle avatar-centered mb-3">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                      </div>
                      <!-- End Avatar -->

                      <h3 class="mb-1">
                        <a class="text-dark" href="#">Costa Quinn</a>
                      </h3>

                      <div class="mb-3">
                        <i class="bi-building me-1"></i>
                        <span>Research team</span>
                      </div>

                      <!-- Badges -->
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">SEO</a></li>
                      </ul>
                      <!-- End Badges -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto py-1">
                          <a class="fs-6 text-body" href="#">9 connections</a>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto py-1">
                          <!-- Form Check -->
                          <div class="form-check form-check-switch">
                            <input class="form-check-input" type="checkbox" value="" id="connectionsCheckbox7">
                            <label class="form-check-label btn btn-sm" for="connectionsCheckbox7">
                              <span class="form-check-default">
                                <i class="bi-person-plus-fill"></i> Connect
                              </span>
                              <span class="form-check-active">
                                <i class="bi-check-lg me-2"></i> Connected
                              </span>
                            </label>
                          </div>
                          <!-- End Form Check -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Footer -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Connections -->
            </div>

            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
              <div class="row row-cols-1">
                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-soft-primary avatar-circle">
                          <span class="avatar-initials">R</span>
                          <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Rachel Doe</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Design</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown1">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">UI/UX</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Sketch</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Figma</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox1" checked>
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox1">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Isabella Finley</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>FrontApp</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown2">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Human resources</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Support</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox2" checked>
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox2">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">David Harrison</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Unassigned</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown3">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Marketing</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox3">
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox3">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">B</span>
                          <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Bob Dean</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Sales</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown4">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Sales</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Legal</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox4">
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox4">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Amanda Harvey</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Atlassian</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown5">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Human resources</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Legal</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox5" checked>
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox5">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Finch Hoot</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Dev</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown6">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">JS</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">Vue.js</a></li>
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">HTML5</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox6" checked>
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox6">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-3">
                  <!-- Card -->
                  <div class="card card-body">
                    <div class="d-flex align-items-md-center">
                      <div class="flex-shrink-0">
                        <!-- Avatar -->
                        <div class="avatar avatar-lg avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                        </div>
                        <!-- End Avatar -->
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-md-center">
                          <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                            <h4 class="mb-1">
                              <a class="text-dark" href="#">Costa Quinn</a>
                            </h4>

                            <span class="d-block">
                              <i class="bi-building me-1"></i>
                              <span>Research team</span>
                            </span>
                          </div>
                          <!-- End Col -->

                          <div class="col-3 col-md-auto order-md-last text-end ms-n3">
                            <!-- Dropdown -->
                            <div class="dropdown">
                              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="connectionsListDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                              </button>

                              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end" aria-labelledby="connectionsListDropdown7">
                                <a class="dropdown-item" href="#">Rename project </a>
                                <a class="dropdown-item" href="#">Add to favorites</a>
                                <a class="dropdown-item" href="#">Archive project</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Delete</a>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm mb-2 mb-sm-0">
                            <!-- Badges -->
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><a class="badge bg-soft-secondary text-secondary p-2" href="#">SEO</a></li>
                            </ul>
                            <!-- End Badges -->
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Form Check -->
                            <div class="form-check form-check-switch">
                              <input class="form-check-input" type="checkbox" value="" id="connectionsListCheckbox7">
                              <label class="form-check-label btn btn-sm" for="connectionsListCheckbox7">
                                <span class="form-check-default">
                                  <i class="bi-person-plus-fill"></i> Connect
                                </span>
                                <span class="form-check-active">
                                  <i class="bi-check-lg me-2"></i> Connected
                                </span>
                              </label>
                            </div>
                            <!-- End Form Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

 <?php  include "include/footer.php";   ?>
    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

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
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="./assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
</body>
</html>