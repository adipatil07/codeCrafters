  !DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Orders | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

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
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center mb-3">
          <div class="col-sm">
            <h1 class="page-header-title">Orders <span class="badge bg-soft-dark text-dark ms-2">106,905</span></h1>

            <div class="d-flex mt-2">
              <a class="text-body me-3" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exportOrdersModal">
                <i class="bi-download me-1"></i> Export
              </a>

              <!-- Dropdown -->
              <div class="dropdowm">
                <a class="text-body" href="javascript:;" id="moreOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  More options <i class="bi-chevron-down"></i>
                </a>

                <div class="dropdown-menu mt-1" aria-labelledby="moreOptionsDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> New order
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder dropdown-item-icon"></i> New order - Development
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder dropdown-item-icon"></i> New order - Staging
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal">
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

          <!-- Nav -->
          <ul class="nav nav-tabs page-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">All products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Open</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unfulfilled</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unpaid</a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->
      </div>
      <!-- End Page Header -->

      <div class="row justify-content-end mb-3">
        <div class="col-lg">
          <!-- Datatable Info -->
          <div id="datatableCounterInfo" style="display: none;">
            <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
              <span class="d-block d-sm-inline-block fs-5 me-3 mb-2 mb-sm-0">
                <span id="datatableCounter">0</span>
                Selected
              </span>
              <a class="btn btn-outline-danger btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-trash"></i> Delete
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-archive"></i> Archive
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-upload"></i> Publish
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0" href="javascript:;">
                <i class="bi-x-lg"></i> Unpublish
              </a>
            </div>
          </div>
          <!-- End Datatable Info -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-md-between">
          <div class="mb-2 mb-md-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="d-grid d-sm-flex gap-2">
            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi-download me-2"></i> Export
              </button>

              <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                <span class="dropdown-header">Options</span>
                <a id="export-copy" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                  Copy
                </a>
                <a id="export-print" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                  Print
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Download options</span>
                <a id="export-excel" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                  Excel
                </a>
                <a id="export-csv" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                  .CSV
                </a>
                <a id="export-pdf" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                  PDF
                </a>
              </div>
            </div>
            <!-- End Dropdown -->

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white btn-sm w-100" id="showHideDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                <i class="bi-table me-1"></i> Columns <span class="badge bg-soft-dark text-dark rounded-circle ms-1">7</span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown" style="width: 15rem;">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="d-grid gap-3">
                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_order">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Order</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_order" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_date">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Date</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_date" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_customer">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Customer</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_customer" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_payment_status">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Payment status</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_payment_status" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_fulfillment_status">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Fulfillment status</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_fulfillment_status" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_payment_method">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Payment method</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_payment_method" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_total">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Total</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_total">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_actions">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Actions</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_actions" checked>
                        </span>
                      </label>
                      <!-- End Form Switch -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 12,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th class="table-column-ps-0">Order</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Payment status</th>
                <th>Fulfillment status</th>
                <th>Payment method</th>
                <th>Total</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck1">
                    <label class="form-check-label" for="ordersCheck1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#35463</a>
                </td>
                <td>Aug 17, 2020, 5:48 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Jase Marley</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 4242</span>
                  </div>
                </td>
                <td>$256.39</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown1">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck2">
                    <label class="form-check-label" for="ordersCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#23513</a>
                </td>
                <td>Aug 17, 2020, 2:01 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Mathew Gustaffson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 2390</span>
                  </div>
                </td>
                <td>$2,125.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown2" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown2">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck3">
                    <label class="form-check-label" for="ordersCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#62311</a>
                </td>
                <td>Aug 17, 2020, 1:55 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Mathew Gustaffson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$532.99</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown3" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown3">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck4">
                    <label class="form-check-label" for="ordersCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#12453</a>
                </td>
                <td>Aug 17, 2020, 1:54 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Nicky Olvsson</a>
                </td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 3535</span>
                  </div>
                </td>
                <td>$1,035.02</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown4" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown4">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck5">
                    <label class="form-check-label" for="ordersCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#84223</a>
                </td>
                <td>Aug 17, 2020, 1:04 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">David Nunez</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$68.53</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown5" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown5">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck6">
                    <label class="form-check-label" for="ordersCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#46542</a>
                </td>
                <td>Aug 17, 2020, 1:01 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Brian Jackson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$100.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown6" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown6">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck7">
                    <label class="form-check-label" for="ordersCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="text-danger" href="./ecommerce-order-details.php">#35378</a>
                  <i class="bi-exclamation-diamond-fill text-warning"></i>
                </td>
                <td>Aug 17, 2020, 12:56 (ET)</td>
                <td class="text-danger">No customer</td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 9901</span>
                  </div>
                </td>
                <td class="text-danger">$89.46</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown7" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown7">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck8">
                    <label class="form-check-label" for="ordersCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="text-danger" href="./ecommerce-order-details.php">#24562</a>
                  <i class="bi-exclamation-diamond-fill text-warning"></i>
                </td>
                <td>Aug 17, 2020, 12:54 (ET)</td>
                <td class="text-danger">No customer</td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 2278</span>
                  </div>
                </td>
                <td class="text-danger">$3,535.46</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown8" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown8">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck9">
                    <label class="form-check-label" for="ordersCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#78531</a>
                </td>
                <td>Aug 17, 2020, 12:48 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Mathew Gustaffson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$23.89</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown9" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown9">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck10">
                    <label class="form-check-label" for="ordersCheck10"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#34634</a>
                </td>
                <td>Aug 17, 2020, 12:41 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Jase Marley</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$77.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown10" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown10">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck11">
                    <label class="form-check-label" for="ordersCheck11"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="text-danger" href="./ecommerce-order-details.php">#93817</a>
                  <i class="bi-exclamation-diamond-fill text-warning"></i>
                </td>
                <td>Aug 17, 2020, 12:36 (ET)</td>
                <td><a class="text-danger" href="./ecommerce-customer-details.php">Jase Marley</a></td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td class="text-danger">$77.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown11" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown11">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck12">
                    <label class="form-check-label" for="ordersCheck12"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#43113</a>
                </td>
                <td>Aug 17, 2020, 12:25 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Jacky Ferguson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 5533</span>
                  </div>
                </td>
                <td>$1,421.47</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown12" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown12">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck13">
                    <label class="form-check-label" for="ordersCheck13"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#12412</a>
                </td>
                <td>Aug 16, 2020, 4:31 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Brian Jackson</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 4440</span>
                  </div>
                </td>
                <td>$45.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown13" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown13">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck14">
                    <label class="form-check-label" for="ordersCheck14"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="text-danger" href="./ecommerce-order-details.php">#92271</a>
                  <i class="bi-exclamation-diamond-fill text-warning"></i>
                </td>
                <td>Aug 16, 2020, 3:26 (ET)</td>
                <td><a class="text-danger" href="./ecommerce-customer-details.php">Kamilia Williams</a></td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 6182</span>
                  </div>
                </td>
                <td class="text-danger">$2,577.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown14" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown14">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck15">
                    <label class="form-check-label" for="ordersCheck15"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="text-danger" href="./ecommerce-order-details.php">#62555</a>
                  <i class="bi-exclamation-diamond-fill text-warning"></i>
                </td>
                <td>Aug 16, 2020, 2:54 (ET)</td>
                <td class="text-danger">No customer</td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td class="text-danger">$63.46</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown15" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown15">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck16">
                    <label class="form-check-label" for="ordersCheck16"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#35331</a>
                </td>
                <td>Aug 16, 2020, 2:48 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Victoria Vicky</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$4,639.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown16" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown16">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck17">
                    <label class="form-check-label" for="ordersCheck17"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#45321</a>
                </td>
                <td>Aug 16, 2020, 2:40 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Anna Alexsandrova</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/paypal-icon.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull;@gmail.com</span>
                  </div>
                </td>
                <td>$5,253.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown17" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown17">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck18">
                    <label class="form-check-label" for="ordersCheck18"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#23541</a>
                </td>
                <td>Aug 16, 2020, 1:59 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Max Norway</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 3091</span>
                  </div>
                </td>
                <td>$499.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown18" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown18">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck19">
                    <label class="form-check-label" for="ordersCheck19"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#68681</a>
                </td>
                <td>Aug 16, 2020, 1:55 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Williams Tonston</a>
                </td>
                <td>
                  <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>Paid
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-info text-info">
                    <span class="legend-indicator bg-info"></span>Fulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 8837</span>
                  </div>
                </td>
                <td>$171.00</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown19" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown19">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ordersCheck20">
                    <label class="form-check-label" for="ordersCheck20"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a href="./ecommerce-order-details.php">#78323</a>
                </td>
                <td>Aug 16, 2020, 1:15 (ET)</td>
                <td>
                  <a class="text-body" href="./ecommerce-customer-details.php">Victor Martinov</a>
                </td>
                <td>
                  <span class="badge bg-soft-warning text-warning">
                    <span class="legend-indicator bg-warning"></span>Pending
                  </span>
                </td>
                <td>
                  <span class="badge bg-soft-dark text-dark">
                    <span class="legend-indicator bg-dark"></span>Unfulfilled
                  </span>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/mastercard.svg" alt="Image Description">
                    <span class="text-dark">&bull;&bull;&bull;&bull; 3566</span>
                  </div>
                </td>
                <td>$348.55</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-order-details.php">
                      <i class="bi-eye"></i> View
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="ordersExportDropdown20" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="ordersExportDropdown20">
                        <span class="dropdown-header">Options</span>
                        <a class="js-export-copy dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                          Copy
                        </a>
                        <a class="js-export-print dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                          Print
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Download options</span>
                        <a class="js-export-excel dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                          Excel
                        </a>
                        <a class="js-export-csv dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                          .CSV
                        </a>
                        <a class="js-export-pdf dropdown-item" href="javascript:;">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                          PDF
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="12" selected>12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <?php include "include/footer.php";   ?>
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

  <!-- Export Orders Modal -->
  <div class="modal fade" id="exportOrdersModal" tabindex="-1" aria-labelledby="exportOrdersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exportOrdersModalLabel">Export orders</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <div class="d-grid gap-2 mb-4">
            <!-- Form Check -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio1" checked>
              <label class="form-check-label" for="exportProductsRadio1">
                Current page
              </label>
            </div>
            <!-- End Form Check -->

            <!-- Form Check -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio2">
              <label class="form-check-label" for="exportProductsRadio2">
                All products
              </label>
            </div>
            <!-- End Form Check -->

            <!-- Form Check -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio3">
              <label class="form-check-label" for="exportProductsRadio3">
                Selected: 20 products
              </label>
            </div>
            <!-- End Form Check -->

            <!-- Form Check -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio4">
              <label class="form-check-label" for="exportProductsRadio4">
                Order by date
              </label>
            </div>
            <!-- End Form Check -->
          </div>

          <label class="form-label">Export as</label>

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportOrdersAsRadio" id="exportOrdersAsRadio1" checked>
            <label class="form-check-label" for="exportOrdersAsRadio1">
              CSV for Excel, Numbers, or other spreadsheet programs
            </label>
          </div>
          <!-- End Form Check -->

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportOrdersAsRadio" id="exportOrdersAsRadio2">
            <label class="form-check-label" for="exportOrdersAsRadio2">
              Plain CSV file
            </label>
          </div>
          <!-- End Form Check -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Export orders</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Export Orders Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      });

      const datatable = HSCore.components.HSDatatables.getItem('datatable')

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });

      $('#datatableSearch').on('mouseup', function (e) {
        var $input = $(this),
          oldValue = $input.val();

        if (oldValue == "") return;

        setTimeout(function(){
          var newValue = $input.val();

          if (newValue == ""){
            // Gotcha
            datatable.search('').draw();
          }
        }, 1);
      });

      $('#toggleColumn_order').change(function (e) {
        datatable.columns(1).visible(e.target.checked)
      })

      $('#toggleColumn_date').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      })

      $('#toggleColumn_customer').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_payment_status').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      })

      $('#toggleColumn_fulfillment_status').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      })

      $('#toggleColumn_payment_method').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      })

      datatable.columns(7).visible(false)

      $('#toggleColumn_total').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      })

      $('#toggleColumn_actions').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      })
    });
  </script>

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


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')
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