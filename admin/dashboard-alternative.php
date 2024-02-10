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
?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Alternative Dashboard | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./assets/vendor/jsvectormap/dist/css/jsvectormap.min.css">

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
    <div class="bg-dark">
      <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->
        <div class="page-header page-header-light">
          <div class="row align-items-center">
            <div class="col">
              <h1 class="page-header-title">Dashboard</h1>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-ghost-light btn-sm dropdown-toggle">
                <i class="bi-calendar-week"></i>
                <span class="js-daterangepicker-predefined-preview ms-1"></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Nav Scroller -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev hs-nav-scroller-arrow-dark-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next hs-nav-scroller-arrow-dark-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <!-- Nav -->
            <ul class="nav nav-tabs nav-tabs-light page-header-tabs" id="pageHeaderTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="javascript:;">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="javascript:;">Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="javascript:;">
                  Sessions
                  <span class="badge bg-warning text-dark rounded-pill ms-1">
                    <i class="bi-exclamation-triangle-fill me-1"></i> Verification required
                  </span>
                </a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->
      </div>
    </div>
    <!-- End Content -->

    <!-- Content -->
    <div class="content container-fluid" style="margin-top: -17rem;">
      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header card-header-content-sm-between">
          <h4 class="card-header-title mb-2 mb-sm-0">Recent projects</h4>

          <!-- Nav -->
          <ul class="nav nav-segment nav-fill" id="projectsTab" role="tablist">
            <li class="nav-item" data-bs-toggle="chart" data-datasets="0" data-trigger="click" data-action="toggle">
              <a class="nav-link active" href="javascript:;" data-bs-toggle="tab">This week</a>
            </li>
            <li class="nav-item" data-bs-toggle="chart" data-datasets="1" data-trigger="click" data-action="toggle">
              <a class="nav-link" href="javascript:;" data-bs-toggle="tab">Last week</a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="card-body">
          <div class="row align-items-sm-center mb-4">
            <div class="col-sm mb-3 mb-sm-0">
              <div class="d-flex align-items-center">
                <span class="h1 mb-0">$7,431.14 USD</span>

                <span class="text-success ms-2">
                  <i class="bi-graph-up"></i> 25.3%
                </span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <!-- Legend Indicators -->
              <div class="row fs-6">
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Income
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-info"></span> Expenses
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- Bar Chart -->
          <div class="chartjs-custom" style="height: 18rem;">
            <canvas id="updatingLineChart" data-hs-chartjs-options='{
                      "type": "line",
                      "data": {
                         "labels": ["Feb","Jan","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                         "datasets": [{
                          "backgroundColor": ["rgba(55,125,255, .5)", "rgba(255, 255, 255, .2)"],
                          "borderColor": "#377dff",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#377dff",
                          "pointBackgroundColor": "#377dff",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0,
                          "tension": 0.4
                        },
                        {
                          "backgroundColor": ["rgba(0, 201, 219, .5)", "rgba(255, 255, 255, .2)"],
                          "borderColor": "#00c9db",
                          "borderWidth": 2,
                          "pointRadius": 0,
                          "hoverBorderColor": "#00c9db",
                          "pointBackgroundColor": "#00c9db",
                          "pointBorderColor": "#fff",
                          "pointHoverRadius": 0,
                          "tension": 0.4
                        }]
                      },
                      "options": {
                        "gradientPosition": {"y1": 200},
                         "scales": {
                            "y": {
                              "grid": {
                                "color": "#e7eaf3",
                                "drawBorder": false,
                                "zeroLineColor": "#e7eaf3"
                              },
                              "ticks": {
                                "min": 0,
                                "max": 100,
                                "stepSize": 20,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 10,
                                "postfix": "k"
                              }
                            },
                            "x": {
                              "grid": {
                                "display": false,
                                "drawBorder": false
                              },
                              "ticks": {
                                "fontSize": 12,
                                "fontColor": "#97a4af",
                                "fontFamily": "Open Sans, sans-serif",
                                "padding": 5
                              }
                            }
                        },
                        "plugins": {
                          "tooltip": {
                            "prefix": "$",
                            "postfix": "k",
                            "hasIndicator": true,
                            "mode": "index",
                            "intersect": false,
                            "lineMode": true,
                            "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                          }
                        },
                        "hover": {
                          "mode": "nearest",
                          "intersect": true
                        }
                      }
                    }'>
            </canvas>
          </div>
          <!-- End Bar Chart -->
        </div>
        <!-- End Body -->

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-thead-bordered table-align-middle card-table">
            <thead class="thead-light">
              <tr>
                <th>Project name</th>
                <th>Members</th>
                <th>Spent</th>
                <th>Hours</th>
                <th>Completion</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-sm" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Install Front pay</span>
                    </div>
                  </a>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-info" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Lisa Iston">
                      <span class="avatar-initials">L</span>
                    </a>
                    <a class="avatar avatar-light avatar-circle" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                      <span class="avatar-initials">+5</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">$25,000</span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">34</span>
                    <span class="badge bg-soft-danger text-danger p-1 ms-2">
                      <i class="bi-graph-down"></i> 1.8
                    </span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0 me-2">26%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-sm" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Update subscription method <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                    </div>
                  </a>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-danger" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                      <span class="avatar-initials">A</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">$5,783</span>
                    <span class="badge bg-soft-success text-success p-1 ms-2">
                      <i class="bi-graph-up"></i> 7.3%
                    </span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">73.1</span>
                    <span class="badge bg-soft-success text-success p-1 ms-2">
                      <i class="bi-graph-up"></i> 5.0
                    </span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0 me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                        <span class="avatar-initials">I</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Increase productivity with reviews</span>
                    </div>
                  </a>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">$36,678</span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">68.7</span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0 me-2">7%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-sm" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Develop our mobile app <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                    </div>
                  </a>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-danger" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Adam Keep">
                      <span class="avatar-initials">A</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">$2,623</span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">62.4</span>
                    <span class="badge bg-soft-success text-success p-1 ms-2">
                      <i class="bi-graph-up"></i> 2.2
                    </span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0 me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-sm" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="d-block h5 text-inherit mb-0">Get a complete store audit</span>
                    </div>
                  </a>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-info" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Lisa Iston">
                      <span class="avatar-initials">L</span>
                    </a>
                    <a class="avatar avatar-light avatar-circle" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Lewis Clarke, Chris Mathew and 3 more">
                      <span class="avatar-initials">+5</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">$9,000</span>
                    <span class="badge bg-soft-danger text-danger p-1 ms-2">
                      <i class="bi-graph-down"></i> 0.4
                    </span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0">7</span>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mb-0 me-2">42%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Card Footer -->
        <a class="card-footer text-center" href="./projects.php">
          View all projects <i class="bi-chevron-right"></i>
        </a>
        <!-- End Card Footer -->
      </div>
      <!-- End Card -->

      <div class="row">
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Payments</h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown1">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body text-center">
              <!-- Badge -->
              <div class="h3">
                <span class="badge bg-soft-info text-info rounded-pill">
                  <i class="bi-check-circle-fill me-1"></i> On track
                </span>
              </div>
              <!-- End Badge -->

              <!-- Chart Half -->
              <div class="chartjs-doughnut-custom" style="height: 12rem;">
                <canvas id="doughnutHalfChart" class="js-chartjs-doughnut-half" data-hs-chartjs-options='{
                        "type": "doughnut",
                        "data": {
                          "labels": ["Current status", "Goal"],
                          "datasets": [{
                            "data": [64, 35],
                            "backgroundColor": ["#377dff", "rgba(55,125,255,.35)"],
                            "borderWidth": 4,
                            "borderColor": "#fff",
                            "hoverBorderColor": "#ffffff"
                          }]
                        }
                      }'></canvas>

                <div class="chartjs-doughnut-custom-stat">
                  <small class="text-cap">Project balance</small>
                  <span class="h1">$150,238.00</span>
                </div>
              </div>
              <!-- End Chart Half -->

              <hr>

              <div class="row col-divider">
                <div class="col text-end">
                  <span class="d-block h4 mb-0">$72.46</span>
                  <span class="d-block">last transaction</span>
                </div>

                <div class="col text-start">
                  <span class="d-block h4 text-success mb-0">
                    <i class="bi-graph-up"></i> 12%
                  </span>
                  <span class="d-block">since last visit</span>
                </div>
              </div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-8 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header card-header-content-between">
              <h4 class="card-header-title">Latest transactions</h4>

              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-three-dots-vertical"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown3">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share-fill dropdown-item-icon"></i> Share reports
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i> Connect other apps
                  </a>

                  <div class="dropdown-divider"></div>

                  <span class="dropdown-header">Feedback</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body card-body-height">
              <ul class="list-group list-group-flush list-group-no-gutters">
                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Bob Dean</h5>
                          <span class="fs-6 text-body">Transfer to bank account</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="mb-0">-$290.00 USD</h5>
                          <span class="fs-6 text-body">15 May, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-warning text-warning rounded-pill">Pending</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->

                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <img class="avatar avatar-sm avatar-circle" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Slack</h5>
                          <span class="fs-6 text-body">Subscription payment</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="mb-0">-$11.00 USD</h5>
                          <span class="fs-6 text-body">12 May, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-success text-success rounded-pill">Completed</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->

                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <img class="avatar avatar-sm avatar-circle" src="./assets/svg/brands/bank-of-america-icon.svg" alt="Image Description">
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Bank of America</h5>
                          <span class="fs-6 text-body">Withdrawal to bank account</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="text-success mb-0">$3500.00 USD</h5>
                          <span class="fs-6 text-body">10 May, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-success text-success rounded-pill">Completed</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->

                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <img class="avatar avatar-sm avatar-circle" src="./assets/svg/brands/spotify-icon.svg" alt="Image Description">
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Spotify</h5>
                          <span class="fs-6 text-body">Subscription payment</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="mb-0">-$10.00 USD</h5>
                          <span class="fs-6 text-body">12 May, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-danger text-danger rounded-pill">Failed</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->

                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">R</span>
                      </div>
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Rachel Doe</h5>
                          <span class="fs-6 text-body">Transfer to bank account</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="text-success mb-0">$290.00 USD</h5>
                          <span class="fs-6 text-body">28 April, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-success text-success rounded-pill">Completed</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->

                <!-- List Item -->
                <li class="list-group-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <img class="avatar avatar-sm avatar-circle" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-7 col-md-5 order-md-1">
                          <h5 class="mb-0">Ella Lauda</h5>
                          <span class="fs-6 text-body">Transfer to bank account</span>
                        </div>

                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                          <h5 class="mb-0">-$250.00 USD</h5>
                          <span class="fs-6 text-body">01 May, 2020</span>
                        </div>

                        <div class="col-auto col-md-3 order-md-2">
                          <span class="badge bg-soft-success text-success rounded-pill">Completed</span>
                        </div>
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                </li>
                <!-- End List Item -->
              </ul>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header card-header-content-between">
          <h4 class="card-header-title">Audience overview <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="This report is based on 100% of sessions."></i></h4>

          <!-- Dropdown -->
          <div class="dropdown">
            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-three-dots-vertical"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown2">
              <span class="dropdown-header">Settings</span>

              <a class="dropdown-item" href="#">
                <i class="bi-share-fill dropdown-item-icon"></i> Share reports
              </a>
              <a class="dropdown-item" href="#">
                <i class="bi-download dropdown-item-icon"></i> Download
              </a>
              <a class="dropdown-item" href="#">
                <i class="bi-alt dropdown-item-icon"></i> Connect other apps
              </a>

              <div class="dropdown-divider"></div>

              <span class="dropdown-header">Feedback</span>

              <a class="dropdown-item" href="#">
                <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
              </a>
            </div>
          </div>
          <!-- End Dropdown -->
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="card-body">
          <div class="row col-sm-divider">
            <div class="col-sm-3">
              <!-- Stats -->
              <div class="d-lg-flex align-items-md-center">
                <div class="flex-shrink-0">
                  <i class="bi-person fs-1 text-primary"></i>
                </div>

                <div class="flex-grow-1 ms-lg-3">
                  <span class="d-block fs-6">Users</span>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">34,413</h3>
                    <span class="badge bg-soft-success text-success ms-2">
                      <i class="bi-graph-up"></i> 12.5%
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Stats -->
            </div>

            <div class="col-sm-3">
              <!-- Stats -->
              <div class="d-lg-flex align-items-md-center">
                <div class="flex-shrink-0">
                  <i class="bi-clock-history fs-1 text-primary"></i>
                </div>

                <div class="flex-grow-1 ms-lg-3">
                  <span class="d-block fs-6">Avg. session duration</span>
                  <div class="d--flex align-items-center">
                    <h3 class="mb-0">1m 3s</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->
            </div>

            <div class="col-sm-3">
              <!-- Stats -->
              <div class="d-lg-flex align-items-md-center">
                <div class="flex-shrink-0">
                  <i class="bi-files-alt fs-1 text-primary"></i>
                </div>

                <div class="flex-grow-1 ms-lg-3">
                  <span class="d-block fs-6">Pages/Sessions</span>
                  <div class="d--flex align-items-center">
                    <h3 class="mb-0">1.78</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->
            </div>

            <div class="col-sm-3">
              <!-- Stats -->
              <div class="d-lg-flex align-items-md-center">
                <div class="flex-shrink-0">
                  <i class="bi-pie-chart fs-1 text-primary"></i>
                </div>

                <div class="flex-grow-1 ms-lg-3">
                  <span class="d-block fs-6">Bounce rate</span>
                  <div class="d--flex align-items-center">
                    <h3 class="mb-0">62.9%</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->

        <!-- Vector Map -->
        <div class="jsvectormap-custom-wrapper">
          <div class="js-jsvectormap jsvectormap-custom" data-hs-js-vector-map-options='{
                  "focusOn": {
                		"coords": [25, 12],
                		"scale": 1.5,
                		"animate": true
                	},
                  "regionStyle": {
                    "initial": {
                      "fill": "rgba(55, 125, 255, .3)"
                    },
                    "hover": {
                      "fill": "#377dff"
                    }
                  },
                  "markerStyle": {
                    "initial": {
                      "stroke-width": 2,
                      "fill": "rgba(255,255,255,.5)",
                      "stroke": "rgba(255,255,255,.5)",
                      "r": 6
                    },
                    "hover": {
                      "fill": "#fff",
                      "stroke": "#fff"
                    }
                  }
								}'>
          </div>
        </div>
        <!-- End Vector Map -->
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-between">
          <h4 class="card-header-title">Recent reviews</h4>

          <!-- Dropdown -->
          <div class="dropdown">
            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reportsOverviewDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-three-dots-vertical"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reportsOverviewDropdown4">
              <span class="dropdown-header">Settings</span>

              <a class="dropdown-item" href="#">
                <i class="bi-share-fill dropdown-item-icon"></i> Share reports
              </a>
              <a class="dropdown-item" href="#">
                <i class="bi-download dropdown-item-icon"></i> Download
              </a>
              <a class="dropdown-item" href="#">
                <i class="bi-alt dropdown-item-icon"></i> Connect other apps
              </a>

              <div class="dropdown-divider"></div>

              <span class="dropdown-header">Feedback</span>

              <a class="dropdown-item" href="#">
                <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
              </a>
            </div>
          </div>
          <!-- End Dropdown -->
        </div>
        <!-- End Header -->

        <div class="row">
          <div class="col-lg-4">
            <!-- Body -->
            <div class="card-body bg-light h-100">
              <div class="d-flex align-items-center">
                <span class="display-1 text-dark me-4">4.84</span>
                <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations/oc-review.svg" alt="Image Description" data-hs-theme-appearance="default">
                <img class="avatar avatar-xl avatar-4x3" src="./assets/svg/illustrations-light/oc-review.svg" alt="Image Description" data-hs-theme-appearance="dark">
              </div>

              <span class="d-block mb-5">
                &mdash; of 56 reviews <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+1 this week</span>
              </span>

              <ul class="list-unstyled list-py-1">
                <!-- Review Ratings -->
                <li class="d-flex align-items-center fs-6">
                  <span class="me-3">5</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="ms-3">51</span>
                </li>
                <!-- End Review Ratings -->

                <!-- Review Ratings -->
                <li class="d-flex align-items-center fs-6">
                  <span class="me-3">4</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="ms-3">5</span>
                </li>
                <!-- End Review Ratings -->

                <!-- Review Ratings -->
                <li class="d-flex align-items-center fs-6">
                  <span class="me-3">3</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="ms-3">0</span>
                </li>
                <!-- End Review Ratings -->

                <!-- Review Ratings -->
                <li class="d-flex align-items-center fs-6">
                  <span class="me-3">2</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="ms-3">0</span>
                </li>
                <!-- End Review Ratings -->

                <!-- Review Ratings -->
                <li class="d-flex align-items-center fs-6">
                  <span class="me-3">1</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="ms-3">0</span>
                </li>
                <!-- End Review Ratings -->
              </ul>
            </div>
            <!-- End Body -->
          </div>

          <div class="col-lg-8">
            <!-- Body -->
            <div class="card-body card-body-height" style="height: 25rem;">
              <!-- List Comment -->
              <ul class="list-comment">
                <!-- Review -->
                <li class="list-comment-item">
                  <!-- Media -->
                  <div class="d-flex mb-2">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <div class="avatar avatar-sm avatar-circle mb-2">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="mb-0">Amanda Harvey</h5>

                          <ul class="list-inline fs-6">
                            <li class="list-inline-item">
                              <!-- Rating List -->
                              <div class="d-flex gap-1 me-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                              </div>
                              <!-- End Rating List -->
                            </li>

                            <li class="list-inline-item">1 day ago</li>
                          </ul>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reviewMoreDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reviewMoreDropdown1">
                              <a class="dropdown-item" href="#">
                                <i class="bi-flag dropdown-item-icon"></i> Flag as inappropriate
                              </a>

                              <a class="dropdown-item" href="#">
                                <i class="bi-exclamation-diamond dropdown-item-icon"></i> Flag as spam
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                  <!-- End Media -->

                  <h5 class="mb-1">Great template</h5>
                  <p>Another great template from Htmlstream! Refreshing and Thought provoking design and it changes my view about how I design the websites. Great typography, modern clean white design, nice tones of the color. SVG artifacts are a plus.</p>

                  <a href="#">
                    <i class="bi-reply"></i> Reply
                  </a>
                </li>
                <!-- End Review -->

                <!-- Review -->
                <li class="list-comment-item">
                  <!-- Media -->
                  <div class="d-flex mb-2">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <div class="avatar avatar-sm avatar-circle mb-2">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="mb-0">David Harrison</h5>

                          <ul class="list-inline fs-6">
                            <li class="list-inline-item">
                              <!-- Rating List -->
                              <div class="d-flex gap-1 me-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                              </div>
                              <!-- End Rating List -->
                            </li>

                            <li class="list-inline-item">3 weeks ago</li>
                          </ul>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reviewMoreDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reviewMoreDropdown2">
                              <a class="dropdown-item" href="#">
                                <i class="bi-flag dropdown-item-icon"></i> Flag as inappropriate
                              </a>

                              <a class="dropdown-item" href="#">
                                <i class="bi-exclamation-diamond dropdown-item-icon"></i> Flag as spam
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                  <!-- End Media -->

                  <h5 class="mb-1">Well documented! Lots of possibilities!</h5>
                  <p>Truly great. Well done. Carefully structured. Happy with the template.</p>

                  <blockquote class="blockquote blockquote-sm mt-4">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle mb-2">
                          <img class="avatar-img" src="./assets/svg/brands/htmlstream.svg" alt="Image Description">
                        </div>
                      </div>

                      <div class="flex-grow-1 ms-2">
                        <h5 class="mb-0">Htmlstream</h5>

                        <ul class="list-inline fs-6">
                          <li class="list-inline-item">Author</li>
                          <li class="list-inline-item">3 weeks ago</li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Media -->

                    Awesome! We are super glad to hear that everything is working great for you!
                  </blockquote>
                </li>
                <!-- End Review -->

                <!-- Review -->
                <li class="list-comment-item">
                  <!-- Media -->
                  <div class="d-flex mb-2">
                    <div class="flex-shrink-0">
                      <!-- Avatar -->
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                        <span class="avatar-initials">B</span>
                      </div>
                      <!-- End Avatar -->
                    </div>

                    <div class="flex-grow-1 ms-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="mb-0">Bob Dean</h5>

                          <ul class="list-inline fs-6">
                            <li class="list-inline-item">
                              <!-- Rating List -->
                              <div class="d-flex gap-1 me-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                              </div>
                              <!-- End Rating List -->
                            </li>

                            <li class="list-inline-item">2 months ago</li>
                          </ul>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" id="reviewMoreDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="reviewMoreDropdown3">
                              <a class="dropdown-item" href="#">
                                <i class="bi-flag dropdown-item-icon"></i> Flag as inappropriate
                              </a>

                              <a class="dropdown-item" href="#">
                                <i class="bi-exclamation-diamond dropdown-item-icon"></i> Flag as spam
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                  <!-- End Media -->

                  <h5 class="mb-1">Beautifull template great support</h5>
                  <p>Got a very quick response on my inquiry, very nice! Love the template, beautifull components!</p>

                  <blockquote class="blockquote blockquote-sm mt-4">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle mb-2">
                          <img class="avatar-img" src="./assets/svg/brands/htmlstream.svg" alt="Image Description">
                        </div>
                      </div>

                      <div class="flex-grow-1 ms-2">
                        <h5 class="mb-0">Htmlstream</h5>

                        <ul class="list-inline fs-6">
                          <li class="list-inline-item">Author</li>
                          <li class="list-inline-item">2 months ago</li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Media -->

                    Hey Bob, thanks a lot for sharing your experience - we do much appreciate it! Cheers!
                  </blockquote>
                </li>
                <!-- End Review -->
              </ul>
              <!-- End List Comment -->
            </div>
            <!-- End Body -->
          </div>
        </div>
        <!-- End Row -->

        <!-- Card Footer -->
        <a class="card-footer text-center" href="./ecommerce-manage-reviews.php">
          View all reviews <i class="bi-chevron-right"></i>
        </a>
        <!-- End Card Footer -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

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
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="./assets/vendor/jsvectormap/dist/js/jsvectormap.min.js"></script>
  <script src="./assets/vendor/jsvectormap/dist/maps/world.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>
  <script src="./assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').php(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller', {
          delay: 400
        })


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        var updatingChartDatasets = [
          [
            [18, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
            [27, 38, 60, 77, 40, 50, 49, 29, 42, 27, 42, 50]
          ],
          [
            [77, 40, 50, 49, 27, 38, 60, 42, 50, 29, 42, 27],
            [60, 38, 18, 51, 88, 50, 40, 52, 60, 70, 88, 80]
          ]
        ]


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init(document.querySelector('#updatingLineChart'), {
          data: {
            datasets: [
              {
                data: updatingChartDatasets[0][0]
              },
              {
                data: updatingChartDatasets[0][1]
              }
            ]
          }
        })

        const updatingLineChart = HSCore.components.HSChartJS.getItem(0)

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart"]')
          .forEach($item => {
            $item.addEventListener('click', e => {
              let keyDataset = e.currentTarget.getAttribute('data-datasets')

              // Update datasets for chart
              updatingLineChart.data.datasets.forEach((dataset, key) => {
                dataset.data = updatingChartDatasets[keyDataset][key];
              });
              updatingLineChart.update();
            })
          })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init(document.querySelector('.js-chartjs-doughnut-half'), {
          options: {
            plugins: {
              tooltip: {
                postfix: "%"
              }
            },
            cutout: '85%',
            rotation: '270',
            circumference: '180'
          }
        });


        // INITIALIZATION OF VECTOR MAP
        // =======================================================
        const markers = [
          {
            "coords": [38, -97],
            "name": "United States",
            "active": 200,
            "new": 40,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/us.svg",
            "code": "US"
          },
          {
            "coords": [20, 77],
            "name": "India",
            "active": 300,
            "new": 100,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/in.svg",
            "code": "IN"
          },
          {
            "coords": [60, -105],
            "name": "Canada",
            "active": 400,
            "new": 500,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ca.svg",
            "code": "CA"
          },
          {
            "coords": [51, 9],
            "name": "Germany",
            "active": 120,
            "new": 600,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/de.svg",
            "code": "DE"
          },
          {
            "coords": [54, -2],
            "name": "United Kingdom",
            "active": 140,
            "new": 100,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/gb.svg",
            "code": "GB"
          },
          {
            "coords": [1.3, 103.8],
            "name": "Singapore",
            "active": 56,
            "new": 0,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/sg.svg",
            "code": "SG"
          },
          {
            "coords": [9.0, 8.6],
            "name": "Nigeria",
            "active": 34,
            "new": 2,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ng.svg",
            "code": "NG"
          },
          {
            "coords": [61.5, 105.3],
            "name": "Russia",
            "active": 135,
            "new": 46,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ru.svg",
            "code": "RU"
          },
          {
            "coords": [35.8, 104.1],
            "name": "China",
            "active": 325,
            "new": 75,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/cn.svg",
            "code": "CN"
          },
          {
            "coords": [-10, -51],
            "name": "Brazil",
            "active": 242,
            "new": 17,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/br.svg",
            "code": "BR"
          }
        ];
        const tooltipTemplate = function (marker) {
          return `
					<span class="d-flex align-items-center mb-2">
						<img class="avatar avatar-xss avatar-circle" src="${marker.flag}" alt="Flag">
						<span class="h5 ms-2 mb-0">${marker.name}</span>
					</span>
					<div class="d-flex justify-content-between" style="max-width: 10rem;">
						<strong>Active:</strong>
						<span class="ms-2">${marker.active}</span>
					</div>
					<div class="d-flex justify-content-between" style="max-width: 10rem;">
						<strong>New:</strong>
						<span class="ms-2">${marker.new}</span>
					</div>
				`;
        };

        HSCore.components.HSJsVectorMap.init('.js-jsvectormap', {
          markers,
          onRegionTooltipShow(map, tooltip, code) {
            let marker = markers.find(function (marker) {
              return marker.code === code;
            });

            if (marker) {
              tooltip._tooltip.style.display = null;
              tooltip._tooltip.innerHTML = tooltipTemplate(marker);
            } else {
              tooltip._tooltip.style.display = 'none';
            }
          },
          onMarkerTooltipShow: function (map, tooltip, code) {
            tooltip._tooltip.style.display = null;
            tooltip._tooltip.innerHTML = tooltipTemplate(markers[code]);
          },
          backgroundColor: HSThemeAppearance.getAppearance() === 'dark' ? '#25282a' : '#132144'
        })

        const vectorMap = HSCore.components.HSJsVectorMap.getItem(0)

        window.addEventListener('on-hs-appearance-change', e => {
          vectorMap.setBackgroundColor(e.detail === 'dark' ? '#25282a' : '#132144')
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