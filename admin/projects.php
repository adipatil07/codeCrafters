<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Projects | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="./assets/vendor/quill/dist/quill.snow.css">

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
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.php","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
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
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Overview</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Overview</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#newProjectModal">
              <i class="bi-plus me-1"></i> New project
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Nav -->
        <ul class="nav nav-tabs page-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="./projects.php">
              Projects <span class="badge bg-soft-dark text-dark ms-1">24</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./projects-timeline.php">
              Timeline
            </a>
          </li>
        </ul>
        <!-- End Nav -->
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Body -->
        <div class="card-body">
          <div class="d-flex align-items-md-center">
            <div class="flex-shrink-0">
              <span class="display-3 text-dark">24</span>
            </div>

            <div class="flex-grow-1 ms-3">
              <div class="row mx-md-n3">
                <div class="col-md px-md-4">
                  <span class="d-block">Total projects</span>
                  <span class="badge bg-soft-danger text-danger rounded-pill p-1">
                    <i class="bi-graph-down"></i> -2 late in due
                  </span>
                </div>
                <!-- End Col -->

                <div class="col-md-9 col-lg-10 column-md-divider px-md-4">
                  <div class="row justify-content-start mb-2">
                    <div class="col-auto">
                      <span class="legend-indicator bg-primary"></span>
                      In progress (10)
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="legend-indicator bg-success"></span>
                      Completed (8)
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="legend-indicator"></span>
                      To do (6)
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Progress -->
                  <div class="progress rounded-pill">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- End Progress -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
      <!-- End Card -->

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

          <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="fs-5 me-3">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
                <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->

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
              <button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi-filter me-1"></i> Filter <span class="badge bg-soft-dark text-dark rounded-circle ms-1">2</span>
              </button>

              <div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered" aria-labelledby="usersFilterDropdown" style="min-width: 22rem;">
                <!-- Card -->
                <div class="card">
                  <div class="card-header card-header-content-between">
                    <h5 class="card-header-title">Filter users</h5>

                    <!-- Toggle Button -->
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm ms-2">
                      <i class="bi-x-lg"></i>
                    </button>
                    <!-- End Toggle Button -->
                  </div>

                  <div class="card-body">
                    <form>
                      <div class="mb-4">
                        <small class="text-cap text-body">Role</small>

                        <div class="row">
                          <div class="col">
                            <!-- Check -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="usersFilterCheckAll" checked>
                              <label class="form-check-label" for="usersFilterCheckAll">
                                All
                              </label>
                            </div>
                            <!-- End Check -->
                          </div>
                          <!-- End Col -->

                          <div class="col">
                            <!-- Check -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="usersFilterCheckEmployee">
                              <label class="form-check-label" for="usersFilterCheckEmployee">
                                Employee
                              </label>
                            </div>
                            <!-- End Check -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>

                      <div class="row">
                        <div class="col-sm mb-4">
                          <small class="text-cap text-body">Position</small>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="2" data-hs-tom-select-options='{
                                      "placeholder": "Any",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                              <option value="">Any</option>
                              <option value="Accountant">Accountant</option>
                              <option value="Co-founder">Co-founder</option>
                              <option value="Designer">Designer</option>
                              <option value="Developer">Developer</option>
                              <option value="Director">Director</option>
                            </select>
                            <!-- End Select -->
                          </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm mb-4">
                          <small class="text-cap text-body">Status</small>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="4" data-hs-tom-select-options='{
                                      "placeholder": "Any status",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                              <option value="">Any status</option>
                              <option value="Completed" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-success"></span>Completed</span>'>Completed</option>
                              <option value="In progress" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning"></span>In progress</span>'>In progress</option>
                              <option value="To do" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger"></span>To do</span>'>To do</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->

                        <div class="col-12 mb-4">
                          <small class="text-cap text-body">Members</small>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select form-select" autocomplete="off" multiple data-hs-tom-select-options='{
                                      "singleMultiple": true,
                                      "hideSelected": false,
                                      "placeholder": "Select member"
                                    }'>
                              <option label="empty"></option>
                              <option value="AH" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img10.jpg" alt="Image Description" /><span class="text-truncate">Amanda Harvey</span></span>'>Amanda Harvey</option>
                              <option value="DH" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img3.jpg" alt="Image Description" /><span class="text-truncate">David Harrison</span></span>'>David Harrison</option>
                              <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img4.jpg" alt="Image Description" /><span class="text-truncate">Sam Kart</span></span>'>Sam Kart</option>
                              <option value="FH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img5.jpg" alt="Image Description" /><span class="text-truncate">Finch Hoot</span></span>'>Finch Hoot</option>
                              <option value="CQ" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/img/160x160/img6.jpg" alt="Image Description" /><span class="text-truncate">Costa Quinn</span></span>'>Costa Quinn</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <div class="d-grid">
                        <a class="btn btn-primary" href="javascript:;">Apply</a>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 2, 3, 6, 7],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 15,
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
                <th class="table-column-ps-0">Project</th>
                <th>Tasks</th>
                <th>Members</th>
                <th>Status</th>
                <th>Completion</th>
                <th><i class="bi-paperclip"></i></th>
                <th><i class="bi-chat-left-dots"></i></th>
                <th>Due date</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck1">
                    <label class="form-check-label" for="usersDataCheck1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/guideline-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Cloud computing web service</span>
                      <span class="d-block fs-6 text-body">Updated 2 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    120 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+2</a>
                  </div>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                      <span class="avatar-initials">A</span>
                    </a>
                    <a class="avatar avatar-soft-info" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sara Iwens">
                      <span class="avatar-initials">S</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Finch Hoot">
                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">35%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 10
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 2
                  </a>
                </td>
                <td>05 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">I</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Improve profile UX <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                      <span class="d-block fs-6 text-body">Updated 4 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>28</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 17
                  </a>
                </td>
                <td>01 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck11">
                    <label class="form-check-label" for="usersDataCheck11"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/capsule-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Build stronger customer relationships</span>
                      <span class="d-block fs-6 text-body">Updated 1 months ago</span>
                    </div>
                  </a>
                </td>
                <td>1</td>
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
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 1
                  </a>
                </td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck5">
                    <label class="form-check-label" for="usersDataCheck5"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">U</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Update social banners</span>
                      <span class="d-block fs-6 text-body">Updated 1 week ago</span>
                    </div>
                  </a>
                </td>
                <td>21</td>
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
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">5%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 3
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 21
                  </a>
                </td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck6">
                    <label class="form-check-label" for="usersDataCheck6"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/mailchimp-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Update subscription method <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                      <span class="d-block fs-6 text-body">Updated 2 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>0</td>
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
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 9
                  </a>
                </td>
                <td>25 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck12">
                    <label class="form-check-label" for="usersDataCheck12"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">E</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Extend Spotify mobile app features</span>
                      <span class="d-block fs-6 text-body">Updated 1 day ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    27 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+2</a>
                  </div>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-info" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Bob Bardly">
                      <span class="avatar-initials">B</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">71%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 2
                  </a>
                </td>
                <td>-</td>
                <td>19 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck9">
                    <label class="form-check-label" for="usersDataCheck9"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/spec-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Install Front pay</span>
                      <span class="d-block fs-6 text-body">Updated 23 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>7</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">83%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 1
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 1
                  </a>
                </td>
                <td>30 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck7">
                    <label class="form-check-label" for="usersDataCheck7"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">B</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Binance-chain <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                      <span class="d-block fs-6 text-body">Updated 14 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    19 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+1</a>
                  </div>
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
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck3">
                    <label class="form-check-label" for="usersDataCheck3"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/jira-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Develop Slack mobile app</span>
                      <span class="d-block fs-6 text-body">Updated 18 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    32 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+5</a>
                  </div>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Ella Lauda">
                      <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                      <span class="avatar-initials">A</span>
                    </a>
                    <a class="avatar avatar-light avatar-circle" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart, Amanda Harvey and 1 more">
                      <span class="avatar-initials">+3</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>-</td>
                <td>25 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck10">
                    <label class="form-check-label" for="usersDataCheck10"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">G</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Get a complete store audit</span>
                      <span class="d-block fs-6 text-body">Updated 2 weeks ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    10 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="task completed today">+1</a>
                  </div>
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
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">30%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 3
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 15
                  </a>
                </td>
                <td>01 June</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck4">
                    <label class="form-check-label" for="usersDataCheck4"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Create a new theme <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                      <span class="d-block fs-6 text-body">Updated 5 days ago</span>
                    </div>
                  </a>
                </td>
                <td>2</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 33
                  </a>
                </td>
                <td>08 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck15">
                    <label class="form-check-label" for="usersDataCheck15"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Create a new database for Webdev</span>
                      <span class="d-block fs-6 text-body">Updated 2 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>0</td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-danger" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                      <span class="avatar-initials">T</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-light avatar-circle" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                      <span class="avatar-initials">+9</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 1
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 7
                  </a>
                </td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck14">
                    <label class="form-check-label" for="usersDataCheck14"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-danger avatar-circle">
                      <span class="avatar-initials">M</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Marketing &amp; Communications</span>
                      <span class="d-block fs-6 text-body">Updated 2 months ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    44 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+5</a>
                  </div>
                </td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-danger" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                      <span class="avatar-initials">T</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">37%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 2
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 9
                  </a>
                </td>
                <td>14 June</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck13">
                    <label class="form-check-label" for="usersDataCheck13"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/bookingcom-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Set up a datatable for Booking.com</span>
                      <span class="d-block fs-6 text-body">Updated 13 days ago</span>
                    </div>
                  </a>
                </td>
                <td>0</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 10
                  </a>
                </td>
                <td>-</td>
                <td>05 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck16">
                    <label class="form-check-label" for="usersDataCheck16"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-dark avatar-circle">
                      <span class="avatar-initials">C</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Create a new marketing campaign</span>
                      <span class="d-block fs-6 text-body">Updated 1 day ago</span>
                    </div>
                  </a>
                </td>
                <td>5</td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Costa Quinn">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Clarice Boone">
                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-dark" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Zack Ins">
                      <span class="avatar-initials">Z</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">90%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 1
                  </a>
                </td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck8">
                    <label class="form-check-label" for="usersDataCheck8"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/prosperops-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Prosperops</span>
                      <span class="d-block fs-6 text-body">Updated 1 hour ago</span>
                    </div>
                  </a>
                </td>
                <td>21</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">7%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 2
                  </a>
                </td>
                <td>-</td>
                <td>26 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck17">
                    <label class="form-check-label" for="usersDataCheck17"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">I</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Increase productivity with reviews</span>
                      <span class="d-block fs-6 text-body">Updated 30 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    10 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="tasks completed today">+7</a>
                  </div>
                </td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">80%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 2
                  </a>
                </td>
                <td>06 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck18">
                    <label class="form-check-label" for="usersDataCheck18"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/spotify-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Redesigning the Spotify main page</span>
                      <span class="d-block fs-6 text-body">Updated 27 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>48</td>
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
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 5
                  </a>
                </td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck19">
                    <label class="form-check-label" for="usersDataCheck19"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-info avatar-circle">
                      <span class="avatar-initials">T</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">The Hub project <i class="tio-verified text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Earned extra bonus"></i></span>
                      <span class="d-block fs-6 text-body">Updated 9 hours ago</span>
                    </div>
                  </a>
                </td>
                <td>5</td>
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
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-success me-2">100%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 1
                  </a>
                </td>
                <td>-</td>
                <td>12 June</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck20">
                    <label class="form-check-label" for="usersDataCheck20"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/digitalocean-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Working on a new Cloud computing</span>
                      <span class="d-block fs-6 text-body">Updated 5 days ago</span>
                    </div>
                  </a>
                </td>
                <td>8</td>
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
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">12%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 4
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 29
                  </a>
                </td>
                <td>22 July</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck21">
                    <label class="form-check-label" for="usersDataCheck21"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-primary avatar-circle">
                      <span class="avatar-initials">L</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Launch social network campaign</span>
                      <span class="d-block fs-6 text-body">Updated 46 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>1</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-primary"></span>In progress
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">50%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 5
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 11
                  </a>
                </td>
                <td>-</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck22">
                    <label class="form-check-label" for="usersDataCheck22"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">New software tool</span>
                      <span class="d-block fs-6 text-body">Updated 7 minutes ago</span>
                    </div>
                  </a>
                </td>
                <td>22</td>
                <td>
                  <!-- Avatar Group -->
                  <div class="avatar-group avatar-group-xs avatar-circle">
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Sam Kart">
                      <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-soft-danger" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Teresa Eyker">
                      <span class="avatar-initials">T</span>
                    </a>
                    <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                    </a>
                    <a class="avatar avatar-light avatar-circle" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Brian Halligan, Rachel Doe and 7 more">
                      <span class="avatar-initials">+9</span>
                    </a>
                  </div>
                  <!-- End Avatar Group -->
                </td>
                <td>
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 7
                  </a>
                </td>
                <td>-</td>
                <td>05 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck23">
                    <label class="form-check-label" for="usersDataCheck23"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <img class="avatar" src="./assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Increase email conversion rating</span>
                      <span class="d-block fs-6 text-body">Updated 1 hour ago</span>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    9 <a class="badge bg-soft-dark text-dark ms-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="task completed today">+1</a>
                  </div>
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
                  <span class="legend-indicator"></span>To do
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 me-2">0%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-body" href="./project-files.php">
                    <i class="bi-paperclip"></i> 2
                  </a>
                </td>
                <td>
                  <a class="text-body" href="./project-activity.php">
                    <i class="bi-chat-left-dots"></i> 5
                  </a>
                </td>
                <td>01 May</td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck24">
                    <label class="form-check-label" for="usersDataCheck24"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="./project.php">
                    <div class="avatar avatar-soft-danger avatar-circle">
                      <span class="avatar-initials">E</span>
                    </div>
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Ethereum project</span>
                      <span class="d-block fs-6 text-body">Updated 5 days ago</span>
                    </div>
                  </a>
                </td>
                <td>4</td>
                <td>No assignee</td>
                <td>
                  <span class="legend-indicator bg-success"></span>Completed
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="fs-6 text-primary me-2">95%</span>
                    <div class="progress table-progress">
                      <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </td>
                <td>-</td>
                <td>
                  <a class="text-body" href="#">
                    <i class="bi-chat-left-dots"></i> 1
                  </a>
                </td>
                <td>-</td>
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
                    <option value="10">10</option>
                    <option value="15" selected>15</option>
                    <option value="20">20</option>
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

  <!-- Edit user -->
  <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Edit user</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
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
            <ul class="js-tabs-to-dropdown nav nav-segment nav-fill mb-5" id="editUserModalTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-selected="true">
                  <i class="bi-person me-1"></i> Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#billing-address" id="billing-address-tab" data-bs-toggle="tab" data-bs-target="#billing-address" role="tab" aria-selected="false">
                  <i class="bi-building me-1"></i> Billing address
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#change-password" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password" role="tab" aria-selected="false">
                  <i class="bi-shield-lock me-1"></i> Change password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#notifications" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications" role="tab" aria-selected="false">
                  <i class="bi-bell me-1"></i> Notifications
                </a>
              </li>
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->

          <!-- Tab Content -->
          <div class="tab-content" id="editUserModalTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <form>
                <!-- Profile Cover -->
                <div class="profile-cover">
                  <div class="profile-cover-img-wrapper">
                    <img id="editProfileCoverImgModal" class="profile-cover-img" src="./assets/img/1920x400/img1.jpg" alt="Image Description">

                    <!-- Custom File Cover -->
                    <div class="profile-cover-content profile-cover-uploader p-3">
                      <input type="file" class="js-file-attach profile-cover-uploader-input" id="editProfileCoverUplaoderModal" data-hs-file-attach-options='{
                                  "textTarget": "#editProfileCoverImgModal",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "allowTypes": [".png", ".jpeg", ".jpg"]
                               }'>
                      <label class="profile-cover-uploader-label btn btn-sm btn-white" for="editProfileCoverUplaoderModal">
                        <i class="bi-camera-fill"></i>
                        <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                      </label>
                    </div>
                    <!-- End Custom File Cover -->
                  </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar mb-5" for="editAvatarUploaderModal">
                  <img id="editAvatarImgModal" class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">

                  <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                              "textTarget": "#editAvatarImgModal",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>

                  <span class="avatar-uploader-trigger">
                    <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                  </span>
                </label>
                <!-- End Avatar -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editFirstNameModalLabel" class="col-sm-3 col-form-label form-label">Full name <i class="tio-help-outlined text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="form-control" name="editFirstNameModal" id="editFirstNameModalLabel" placeholder="Your first name" aria-label="Your first name" value="Ella">
                      <input type="text" class="form-control" name="editLastNameModal" id="editLastNameModalLabel" placeholder="Your last name" aria-label="Your last name" value="Lauda">
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editEmailModalLabel" class="col-sm-3 col-form-label form-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="editEmailModal" id="editEmailModalLabel" placeholder="Email" aria-label="Email" value="ella@site.com">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editPhoneLabel" class="col-sm-3 col-form-label form-label">Phone <span class="form-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <input type="text" class="js-masked-input form-control" name="phone" id="editPhoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="1(609)972-22-22" data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" autocomplete="off" name="editPhoneSelect" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="Mobile" selected>Mobile</option>
                          <option value="Home">Home</option>
                          <option value="Work">Work</option>
                          <option value="Fax">Fax</option>
                          <option value="Direct">Direct</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editOrganizationModalLabel" class="col-sm-3 col-form-label form-label">Organization</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="editOrganizationModal" id="editOrganizationModalLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editDepartmentModalLabel" class="col-sm-3 col-form-label form-label">Department</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="editDepartmentModal" id="editDepartmentModalLabel" placeholder="Your department" aria-label="Your department">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label class="col-sm-3 col-form-label form-label">Account type</label>

                  <div class="col-sm-9">
                    <div class="input-group input-group-sm-vertical">
                      <!-- Radio Check -->
                      <label class="form-control" for="editUserModalAccountTypeModalRadio1">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio1" checked>
                          <span class="form-check-label">Individual</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="editUserModalAccountTypeModalRadio2">
                        <span class="form-check">
                          <input type="radio" class="form-check-input" name="editUserModalAccountTypeModalRadio" id="editUserModalAccountTypeModalRadio2">
                          <span class="form-check-label">Company</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="billing-address" role="tabpanel" aria-labelledby="billing-address-tab">
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="editLocationModalLabel" class="col-sm-3 col-form-label form-label">Location</label>

                  <div class="col-sm-9">
                    <!-- Select -->
                    <div class="tom-select-custom mb-4">
                      <select class="js-select form-select" id="editLocationModalLabel" autocomplete="off" data-hs-tom-select-options='{
                               "placeholder": "Select country"
                             }'>
                        <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
                        <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>Aland Islands</option>
                        <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>Albania</option>
                        <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>Algeria</option>
                        <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>American Samoa</option>
                        <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>Andorra</option>
                        <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>Angola</option>
                        <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>Anguilla</option>
                        <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>Antigua and Barbuda</option>
                        <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>Argentina</option>
                        <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>Armenia</option>
                        <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>Aruba</option>
                        <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>Australia</option>
                        <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>Austria</option>
                        <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>Azerbaijan</option>
                        <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>Bahamas</option>
                        <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>Bahrain</option>
                        <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>Bangladesh</option>
                        <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>Barbados</option>
                        <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>Belarus</option>
                        <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>Belgium</option>
                        <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>Belize</option>
                        <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>Benin</option>
                        <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>Bermuda</option>
                        <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>Bhutan</option>
                        <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>Bolivia (Plurinational State of)</option>
                        <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>Bosnia and Herzegovina</option>
                        <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>Botswana</option>
                        <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>Brazil</option>
                        <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>British Indian Ocean Territory</option>
                        <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>Brunei Darussalam</option>
                        <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>Bulgaria</option>
                        <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>Burkina Faso</option>
                        <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>Burundi</option>
                        <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>Cabo Verde</option>
                        <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>Cambodia</option>
                        <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>Cameroon</option>
                        <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>Canada</option>
                        <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>Cayman Islands</option>
                        <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>Central African Republic</option>
                        <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>Chad</option>
                        <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>Chile</option>
                        <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>China</option>
                        <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>Christmas Island</option>
                        <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>Cocos (Keeling) Islands</option>
                        <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>Colombia</option>
                        <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>Comoros</option>
                        <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>Cook Islands</option>
                        <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>Costa Rica</option>
                        <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>Croatia</option>
                        <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>Cuba</option>
                        <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>Curaçao</option>
                        <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>Cyprus</option>
                        <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>Czech Republic</option>
                        <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>Côte d'Ivoire</option>
                        <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>Democratic Republic of the Congo</option>
                        <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>Denmark</option>
                        <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>Djibouti</option>
                        <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>Dominica</option>
                        <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>Dominican Republic</option>
                        <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>Ecuador</option>
                        <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>Egypt</option>
                        <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>El Salvador</option>
                        <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>England</option>
                        <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>Equatorial Guinea</option>
                        <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>Eritrea</option>
                        <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>Estonia</option>
                        <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>Ethiopia</option>
                        <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>Falkland Islands</option>
                        <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>Faroe Islands</option>
                        <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>Federated States of Micronesia</option>
                        <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>Fiji</option>
                        <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>Finland</option>
                        <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>France</option>
                        <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>French Guiana</option>
                        <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>French Polynesia</option>
                        <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>French Southern Territories</option>
                        <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>Gabon</option>
                        <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>Gambia</option>
                        <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>Georgia</option>
                        <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>Germany</option>
                        <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>Ghana</option>
                        <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>Gibraltar</option>
                        <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>Greece</option>
                        <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>Greenland</option>
                        <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>Grenada</option>
                        <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>Guadeloupe</option>
                        <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>Guam</option>
                        <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>Guatemala</option>
                        <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>Guernsey</option>
                        <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>Guinea</option>
                        <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>Guinea-Bissau</option>
                        <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>Guyana</option>
                        <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>Haiti</option>
                        <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>Holy See</option>
                        <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>Honduras</option>
                        <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>Hong Kong</option>
                        <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>Hungary</option>
                        <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>Iceland</option>
                        <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>India</option>
                        <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>Indonesia</option>
                        <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>Iran (Islamic Republic of)</option>
                        <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>Iraq</option>
                        <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>Ireland</option>
                        <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>Isle of Man</option>
                        <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>Israel</option>
                        <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>Italy</option>
                        <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>Jamaica</option>
                        <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>Japan</option>
                        <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>Jersey</option>
                        <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>Jordan</option>
                        <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>Kazakhstan</option>
                        <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>Kenya</option>
                        <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>Kiribati</option>
                        <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>Kuwait</option>
                        <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>Kyrgyzstan</option>
                        <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>Laos</option>
                        <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>Latvia</option>
                        <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>Lebanon</option>
                        <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>Lesotho</option>
                        <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>Liberia</option>
                        <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>Libya</option>
                        <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>Liechtenstein</option>
                        <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>Lithuania</option>
                        <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>Luxembourg</option>
                        <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>Macau</option>
                        <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>Madagascar</option>
                        <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>Malawi</option>
                        <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>Malaysia</option>
                        <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>Maldives</option>
                        <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>Mali</option>
                        <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>Malta</option>
                        <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>Marshall Islands</option>
                        <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>Martinique</option>
                        <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>Mauritania</option>
                        <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>Mauritius</option>
                        <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>Mayotte</option>
                        <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>Mexico</option>
                        <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>Moldova</option>
                        <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>Monaco</option>
                        <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>Mongolia</option>
                        <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>Montenegro</option>
                        <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>Montserrat</option>
                        <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>Morocco</option>
                        <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>Mozambique</option>
                        <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>Myanmar</option>
                        <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>Namibia</option>
                        <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>Nauru</option>
                        <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>Nepal</option>
                        <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>Netherlands</option>
                        <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>New Caledonia</option>
                        <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>New Zealand</option>
                        <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>Nicaragua</option>
                        <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>Niger</option>
                        <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>Nigeria</option>
                        <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>Niue</option>
                        <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>Norfolk Island</option>
                        <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>North Korea</option>
                        <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>North Macedonia</option>
                        <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>Northern Ireland</option>
                        <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Mariana Islands Flag" /><span class="text-truncate">Northern Mariana Islands</span></span>'>Northern Mariana Islands</option>
                        <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>Norway</option>
                        <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>Oman</option>
                        <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>Pakistan</option>
                        <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>Palau</option>
                        <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>Panama</option>
                        <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>Papua New Guinea</option>
                        <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>Paraguay</option>
                        <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>Peru</option>
                        <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>Philippines</option>
                        <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>Pitcairn</option>
                        <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>Poland</option>
                        <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>Portugal</option>
                        <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>Puerto Rico</option>
                        <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>Qatar</option>
                        <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>Republic of the Congo</option>
                        <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>Romania</option>
                        <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>Russia</option>
                        <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>Rwanda</option>
                        <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>Réunion</option>
                        <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>Saint Barthélemy</option>
                        <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>Saint Kitts and Nevis</option>
                        <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>Saint Lucia</option>
                        <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>Saint Martin</option>
                        <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>Saint Pierre and Miquelon</option>
                        <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>Saint Vincent and the Grenadines</option>
                        <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>Samoa</option>
                        <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>San Marino</option>
                        <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>Sao Tome and Principe</option>
                        <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>Saudi Arabia</option>
                        <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>Scotland</option>
                        <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>Senegal</option>
                        <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>Serbia</option>
                        <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>Seychelles</option>
                        <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>Sierra Leone</option>
                        <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>Singapore</option>
                        <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>Sint Maarten</option>
                        <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>Slovakia</option>
                        <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>Slovenia</option>
                        <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>Solomon Islands</option>
                        <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>Somalia</option>
                        <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>South Africa</option>
                        <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>South Georgia and the South Sandwich Islands</option>
                        <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>South Korea</option>
                        <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>South Sudan</option>
                        <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>Spain</option>
                        <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>Sri Lanka</option>
                        <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>State of Palestine</option>
                        <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>Sudan</option>
                        <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>Suriname</option>
                        <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>Svalbard and Jan Mayen</option>
                        <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>Swaziland</option>
                        <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>Sweden</option>
                        <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>Switzerland</option>
                        <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>Syrian Arab Republic</option>
                        <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>Taiwan</option>
                        <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>Tajikistan</option>
                        <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>Tanzania</option>
                        <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>Thailand</option>
                        <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>Timor-Leste</option>
                        <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>Togo</option>
                        <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>Tokelau</option>
                        <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>Tonga</option>
                        <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>Trinidad and Tobago</option>
                        <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>Tunisia</option>
                        <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>Turkey</option>
                        <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>Turkmenistan</option>
                        <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>Turks and Caicos Islands</option>
                        <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>Tuvalu</option>
                        <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>Uganda</option>
                        <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>Ukraine</option>
                        <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>United Arab Emirates</option>
                        <option value="GB" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>United Kingdom</option>
                        <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>United States Minor Outlying Islands</option>
                        <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>United States of America</option>
                        <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>Uruguay</option>
                        <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>Uzbekistan</option>
                        <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>Vanuatu</option>
                        <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>Venezuela (Bolivarian Republic of)</option>
                        <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>Vietnam</option>
                        <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>Virgin Islands (British)</option>
                        <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>Virgin Islands (U.S.)</option>
                        <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>Wales</option>
                        <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>Wallis and Futuna</option>
                        <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>Western Sahara</option>
                        <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>Yemen</option>
                        <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>Zambia</option>
                        <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>Zimbabwe</option>
                      </select>
                    </div>
                    <!-- End Select -->

                    <div class="mb-4">
                      <input type="text" class="form-control" name="editCityModal" id="editCityModalLabel" placeholder="City" aria-label="City" value="London">
                    </div>

                    <input type="text" class="form-control" name="editStateModal" id="editStateModalLabel" placeholder="State" aria-label="State">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editAddressLine1Label" class="col-sm-3 col-form-label form-label">Address line 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="editAddressLine1Label" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editAddressLine2ModalLabel" class="col-sm-3 col-form-label form-label">Address line 2 <span class="form-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="editAddressLine2Modal" id="editAddressLine2ModalLabel" placeholder="Your address" aria-label="Your address">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row">
                  <label for="editZipCodeLabel" class="col-sm-3 col-form-label form-label">Zip code <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="You can find your code in a postal address."></i></label>

                  <div class="col-sm-9">
                    <input type="text" class="js-input-mask form-control" name="zipCode" id="editZipCodeLabel" placeholder="Your zip code" aria-label="Your zip code" value="KW5 8NW" data-hs-mask-options='{
                             "mask": "AA0 0AA"
                           }'>
                  </div>
                </div>
                <!-- End Form -->

                <hr>

                <div class="d-grid gap-3">
                  <!-- Form Switch -->
                  <label class="row form-check form-switch" for="editUserModalBillingPreferencesSwitch1">
                    <span class="col-8 col-sm-9 ms-0">
                      <span class="d-block text-dark mb-1">Default billing address</span>
                      <span class="d-block fs-5 text-muted">Set as default billing address</span>
                    </span>
                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="editUserModalBillingPreferencesSwitch1" checked>
                    </span>
                  </label>
                  <!-- End Form Switch -->

                  <!-- Form Switch -->
                  <label class="row form-check form-switch" for="editUserModalBillingPreferencesSwitch2">
                    <span class="col-8 col-sm-9 ms-0">
                      <span class="d-block text-dark mb-1">See info about people who view my profile</span>
                      <span class="d-block fs-5 text-muted"><a class="link" href="#">More about viewer info</a>.</span>
                    </span>
                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="editUserModalBillingPreferencesSwitch2">
                    </span>
                  </label>
                  <!-- End Form Switch -->
                </div>

                <div class="d-flex justify-content-end mt-4">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
              <form>
                <!-- Form -->
                <div class="row mb-4">
                  <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label form-label">Current password</label>

                  <div class="col-sm-9">
                    <!-- Input Group -->
                    <div class="input-group input-group-merge">
                      <input type="password" class="js-toggle-password form-control" name="currentPassword" id="editUserModalCurrentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password" data-hs-toggle-password-options='{
                                 "target": "#editUserModalChangePassModalTarget",
                                 "defaultClass": "bi-eye-slash",
                                 "showClass": "bi-eye",
                                 "classChangeTarget": "#editUserModalChangePassModalIcon"
                               }'>
                      <a id="editUserModalChangePassModalTarget" class="input-group-append input-group-text" href="javascript:;">
                        <i id="editUserModalChangePassModalIcon" class="bi-eye"></i>
                      </a>
                    </div>
                    <!-- End Input Group -->
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editUserModalNewPassword" class="col-sm-3 col-form-label form-label">New password</label>

                  <div class="col-sm-9">
                    <input type="password" class="js-toggle-password form-control" name="editUserModalNewPassword" id="editUserModalNewPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <label for="editUserModalConfirmNewPasswordLabel" class="col-sm-3 col-form-label form-label">Confirm new password</label>

                  <div class="col-sm-9">
                    <input type="password" class="js-toggle-password form-control" name="confirmNewPassword" id="editUserModalConfirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password" data-hs-toggle-password-options='{
                               "target": "#editUserModalChangePassModalCheckbox"
                             }'>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                  <div class="col-sm-9 offset-sm-3">
                    <!-- Form Check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="editUserModalChangePassModalCheckbox">
                      <label class="form-check-label" for="editUserModalChangePassModalCheckbox">
                        Show password
                      </label>
                    </div>
                    <!-- End Form Check -->
                  </div>
                </div>
                <!-- End Form -->

                <div class="d-flex justify-content-end">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
              <!-- Table -->
              <div class="table-responsive datatable-custom">
                <table class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                  <thead class="thead-light">
                    <tr>
                      <th>Type</th>
                      <th class="text-center">
                        <div class="mb-1">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-email-at.svg" alt="Image Description" data-hs-theme-appearance="default">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-email-at.svg" alt="Image Description" data-hs-theme-appearance="dark">
                        </div>
                        Email
                      </th>
                      <th class="text-center">
                        <div class="mb-1">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-globe.svg" alt="Image Description" data-hs-theme-appearance="default">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-globe.svg" alt="Image Description" data-hs-theme-appearance="dark">
                        </div>
                        Browser
                      </th>
                      <th class="text-center">
                        <div class="mb-1">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations/oc-phone.svg" alt="Image Description" data-hs-theme-appearance="default">
                          <img class="avatar avatar-xs" src="./assets/svg/illustrations-light/oc-phone.svg" alt="Image Description" data-hs-theme-appearance="dark">
                        </div>
                        App
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>New for you</td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox1">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox1"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox2">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox2"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox3">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox3"></label>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>Account activity <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Get important notifications about you or activity you've missed"></i></td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox4">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox4"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox5" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox5"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox6" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox6"></label>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>A new browser used to sign in</td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox7" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox7"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox8" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox8"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox9" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox9"></label>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>A new device is linked</td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox10">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox10"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox11" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox11"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox12">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox12"></label>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>A new device connected <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Email me when a new device connected"></i></td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox13">
                          <label class="form-check-label" for="editUserModalAlertsCheckbox13"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox14" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox14"></label>
                        </div>
                      </td>
                      <td class="text-center">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="" id="editUserModalAlertsCheckbox15" checked>
                          <label class="form-check-label" for="editUserModalAlertsCheckbox15"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->

              <hr>

              <div class="row">
                <div class="col-sm">
                  <!-- Form -->
                  <div class="mb-4">
                    <span class="d-block mb-2">When should we send notifications?</span>

                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "width": "15rem",
                                  "hideSearch": true
                                }'>
                        <option value="whenToSendNotification1">Always</option>
                        <option value="whenToSendNotification2">Only when I'm online</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Form -->
                </div>

                <div class="col-sm">
                  <!-- Form -->
                  <div class="mb-4">
                    <span class="d-block mb-2">Send a daily summary ("Daily Digest") of task activity.</span>

                    <div class="row">
                      <div class="col-auto mb-2">
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="EveryDay">Every day</option>
                            <option value="weekdays" selected>Weekdays</option>
                            <option value="Never">Never</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-2">
                        <!-- Select -->
                        <div class="tom-select-custom tom-select-custom-end">
                          <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true,
                                    "dropdownWidth": "11rem",
                                    "dropup": true
                                  }'>
                            <option value="0">at 12 AM</option>
                            <option value="1">at 1 AM</option>
                            <option value="2">at 2 AM</option>
                            <option value="3">at 3 AM</option>
                            <option value="4">at 4 AM</option>
                            <option value="5">at 5 AM</option>
                            <option value="6">at 6 AM</option>
                            <option value="7">at 7 AM</option>
                            <option value="8">at 8 AM</option>
                            <option value="9" selected>at 9 AM</option>
                            <option value="10">at 10 AM</option>
                            <option value="11">at 11 AM</option>
                            <option value="12">at 12 PM</option>
                            <option value="13">at 1 PM</option>
                            <option value="14">at 2 PM</option>
                            <option value="15">at 3 PM</option>
                            <option value="16">at 4 PM</option>
                            <option value="17">at 5 PM</option>
                            <option value="18">at 6 PM</option>
                            <option value="19">at 7 PM</option>
                            <option value="20">at 8 PM</option>
                            <option value="21">at 9 PM</option>
                            <option value="22">at 10 PM</option>
                            <option value="23">at 11 PM</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <p>In order to cut back on noise, email notifications are grouped together and only sent when you're idle or offline.</p>

              <div class="d-flex justify-content-end">
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>
  <!-- End Edit user -->

  <!-- New Project Modal -->
  <div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newProjectModalLabel">New project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Step Form -->
          <form class="js-step-form" data-hs-step-form-options='{
                  "progressSelector": "#createProjectStepFormProgress",
                  "stepsSelector": "#createProjectStepFormContent",
                  "endSelector": "#createProjectFinishBtn",
                  "isValidate": false
                }'>
            <!-- Step -->
            <ul id="createProjectStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-3 mb-sm-7">
              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                    "targetSelector": "#createProjectStepDetails"
                  }'>
                  <span class="step-icon step-icon-soft-dark">1</span>
                  <div class="step-content">
                    <span class="step-title">Details</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                     "targetSelector": "#createProjectStepTerms"
                   }'>
                  <span class="step-icon step-icon-soft-dark">2</span>
                  <div class="step-content">
                    <span class="step-title">Terms</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                     "targetSelector": "#createProjectStepMembers"
                   }'>
                  <span class="step-icon step-icon-soft-dark">3</span>
                  <div class="step-content">
                    <span class="step-title">Members</span>
                  </div>
                </a>
              </li>
            </ul>
            <!-- End Step -->

            <!-- Content Step Form -->
            <div id="createProjectStepFormContent">
              <div id="createProjectStepDetails" class="active">
                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Project logo</label>

                  <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarNewProjectUploader">
                      <img id="avatarNewProjectImg" class="avatar-img" src="./assets/img/160x160/img2.jpg" alt="Image Description">

                      <input type="file" class="js-file-attach avatar-uploader-input" id="avatarNewProjectUploader" data-hs-file-attach-options='{
                                "textTarget": "#avatarNewProjectImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "resetTarget": ".js-file-attach-reset-img",
                                "resetImg": "./assets/img/160x160/img1.jpg",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>

                      <span class="avatar-uploader-trigger">
                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                      </span>
                    </label>
                    <!-- End Avatar -->

                    <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                  </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="clientNewProjectLabel" class="form-label">Client</label>

                  <div class="row align-items-center">
                    <div class="col-12 col-md-7 mb-3">
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-person-square"></i>
                        </div>
                        <input class="form-control" id="clientNewProjectLabel" placeholder="Add creater name" aria-label="Add creater name">
                      </div>
                    </div>
                    <!-- End Col -->

                    <span class="col-auto mb-3">or</span>

                    <div class="col-md mb-md-3">
                      <a class="btn btn-white" href="javascript:;">
                        <i class="tio-add me-1"></i>New client
                      </a>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="projectNameNewProjectLabel" class="form-label">Project name <i class="bi-question-circle text-body ms-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-briefcase"></i>
                    </div>
                    <input type="text" class="form-control" name="projectName" id="projectNameNewProjectLabel" placeholder="Enter project name here" aria-label="Enter project name here">
                  </div>
                </div>
                <!-- End Form -->

                <!-- Quill -->
                <div class="mb-4">
                  <label class="form-label">Project description <span class="form-label-secondary">(Optional)</span></label>

                  <!-- Quill -->
                  <div class="quill-custom">
                    <div class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                         "placeholder": "Type your message...",
                          "modules": {
                            "toolbar": [
                              ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                            ]
                          }
                         }'>
                    </div>
                  </div>
                  <!-- End Quill -->
                </div>
                <!-- End Quill -->

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="projectDeadlineNewProjectLabel" class="form-label">Due date</label>

                      <div id="projectDeadlineNewProject" class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-calendar-week"></i>
                        </div>

                        <input type="text" class="form-control" id="projectDeadlineNewProjectLabel" placeholder="Select dates">
                      </div>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="ownerNewProjectLabel" class="form-label">Owner</label>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" id="ownerNewProjectLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="owner1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle" src="./assets/img/160x160/img6.jpg" alt="Avatar" /><span class="flex-grow-1 ms-2">Mark Williams</span></span>'>Mark Williams</option>
                          <option value="owner2" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle" src="./assets/img/160x160/img10.jpg" alt="Avatar" /><span class="flex-grow-1 ms-2">Amanda Harvey</span></span>'>Amanda Harvey</option>
                          <option value="owner3" selected data-option-template='<span class="d-flex align-items-center"><i class="bi-person text-body"></i><span class="flex-grow-1 ms-2">Assign to owner</span></span>'>Assign to owner</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Attach files</label>

                  <!-- Dropzone -->
                  <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                    <div class="dz-message">
                      <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="default">
                      <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations-light/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="dark">

                      <h5>Drag and drop your file here</h5>

                      <p class="mb-2">or</p>

                      <span class="btn btn-white btn-sm">Browse files</span>
                    </div>
                  </div>
                  <!-- End Dropzone -->
                </div>
                <!-- End Form -->

                <label class="form-label">Default view</label>

                <div class="input-group input-group-md-vertical">
                  <!-- Radio Check -->
                  <label class="form-control" for="projectViewNewProjectTypeRadio1">
                    <span class="form-check form-check-reverse">
                      <input type="radio" class="form-check-input" name="projectViewNewProjectTypeRadio" id="projectViewNewProjectTypeRadio1">
                      <span class="form-check-label"><i class="bi-view-list text-muted me-2"></i> List</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->

                  <!-- Radio Check -->
                  <label class="form-control" for="projectViewNewProjectTypeRadio2">
                    <span class="form-check form-check-reverse">
                      <input type="radio" class="form-check-input" name="projectViewNewProjectTypeRadio" id="projectViewNewProjectTypeRadio2" checked>
                      <span class="form-check-label"><i class="bi-table text-muted me-2"></i> Table</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->

                  <!-- Radio Check -->
                  <label class="form-control" for="projectViewNewProjectTypeRadio3">
                    <span class="form-check form-check-reverse">
                      <input type="radio" class="form-check-input" name="projectViewNewProjectTypeRadio" id="projectViewNewProjectTypeRadio3" disabled>
                      <span class="form-check-label">Timeline</span>
                      <span class="badge bg-soft-primary text-primary rounded-pill">Coming soon...</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->
                </div>

                <!-- Footer -->
                <div class="d-flex align-items-center mt-5">
                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#createProjectStepTerms"
                            }'>
                      Next <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>

              <div id="createProjectStepTerms" style="display: none;">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="paymentTermsNewProjectLabel" class="form-label">Terms</label>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" id="paymentTermsNewProjectLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="fixed" selected>Fixed</option>
                          <option value="Per hour">Per hour</option>
                          <option value="Per day">Per day</option>
                          <option value="Per week">Per week</option>
                          <option value="Per month">Per month</option>
                          <option value="Per quarter">Per quarter</option>
                          <option value="Per year">Per year</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <label for="expectedValueNewProjectLabel" class="form-label">Expected value</label>

                    <!-- Form -->
                    <div class="mb-4">
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-currency-dollar"></i>
                        </div>
                        <input type="text" class="form-control" name="expectedValue" id="expectedValueNewProjectLabel" placeholder="Enter value here" aria-label="Enter value here">
                      </div>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Form Row -->

                <div class="row">
                  <div class="col-lg-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="milestoneNewProjectLabel" class="form-label">Milestone <a class="small ms-1" href="javascript:;">Change probability</a></label>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" id="milestoneNewProjectLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="New">New</option>
                          <option value="Qualified">Qualified</option>
                          <option value="Meeting">Meeting</option>
                          <option value="Proposal">Proposal</option>
                          <option value="Negotiation">Negotiation</option>
                          <option value="Contact">Contact</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="privacyNewProjectLabel" class="form-label me-2">Privacy</label>

                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" id="privacyNewProjectLabel" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="privacy1" data-option-template='<span class="d-flex"><i class="bi-people fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Everyone</span><small class="tom-select-custom-hide">Public to Front Dashboard</small></span></span>'>Everyone</option>
                          <option value="privacy2" disabled data-option-template='<span class="d-flex"><i class="bi-lock fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Private to project members <span class="badge bg-soft-primary text-primary">Upgrade to Premium</span></span><small class="tom-select-custom-hide">Only visible to project members</small></span></span>'>Private to project members</option>
                          <option value="privacy3" data-option-template='<span class="d-flex"><i class="bi-person fs2 text-body"></i><span class="flex-grow-1 ms-2"><span class="d-block">Private to me</span><small class="tom-select-custom-hide">Only visible to you</small></span></span>'>Private to me</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Form Row -->

                <div class="d-grid gap-2">
                  <!-- Check -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="budgetNewProjectCheckbox">
                    <label class="form-check-label" for="budgetNewProjectCheckbox">
                      Budget resets every month
                    </label>
                  </div>
                  <!-- End Check -->

                  <!-- Check -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="emailAlertNewProjectCheckbox" checked>
                    <label class="form-check-label" for="emailAlertNewProjectCheckbox">
                      Send email alerts if project exceeds <span class="font-weight-bold">50.00%</span> of budget
                    </label>
                  </div>
                  <!-- End Check -->
                </div>

                <!-- Footer -->
                <div class="d-flex align-items-center mt-5">
                  <button type="button" class="btn btn-ghost-secondary me-2" data-hs-step-form-prev-options='{
                       "targetSelector": "#createProjectStepDetails"
                     }'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#createProjectStepMembers"
                            }'>
                      Next <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>

              <div id="createProjectStepMembers" style="display: none;">
                <!-- Form -->
                <div class="mb-4">
                  <div class="input-group mb-2 mb-sm-0">
                    <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

                    <div class="input-group-append input-group-append-last-sm-down-none">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-end">
                        <select class="js-select form-select tom-select-custom-form-select-invite-user" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                        </select>
                      </div>
                      <!-- End Select -->

                      <a class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Invite</a>
                    </div>
                  </div>

                  <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
                </div>
                <!-- End Form -->

                <ul class="list-unstyled list-py-3 mb-5">
                  <!-- List Group Item -->
                  <li>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="icon icon-soft-dark icon-sm icon-circle">
                          <i class="bi-people-fill"></i>
                        </span>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col-sm">
                            <h5 class="text-body mb-0">#digitalmarketing</h5>
                            <span class="d-block fs-6">8 members</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-sm-end">
                              <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                <option value="guest" selected>Guest</option>
                                <option value="can edit">Can edit</option>
                                <option value="can comment">Can comment</option>
                                <option value="full access">Full access</option>
                                <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                              </select>
                            </div>
                            <!-- End Select -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col-sm">
                            <h5 class="text-body mb-0">David Harrison</h5>
                            <span class="d-block fs-6">david@site.com</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-sm-end">
                              <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                <option value="guest" selected>Guest</option>
                                <option value="can edit">Can edit</option>
                                <option value="can comment">Can comment</option>
                                <option value="full access">Full access</option>
                                <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                              </select>
                            </div>
                            <!-- End Select -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                        </div>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col-sm">
                            <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                            <span class="d-block fs-6">Markvt@site.com</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-sm-end">
                              <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                <option value="guest" selected>Guest</option>
                                <option value="can edit">Can edit</option>
                                <option value="can comment">Can comment</option>
                                <option value="full access">Full access</option>
                                <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                              </select>
                            </div>
                            <!-- End Select -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <span class="icon icon-soft-dark icon-sm icon-circle">
                          <i class="bi-people-fill"></i>
                        </span>
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <div class="row align-items-center">
                          <div class="col-sm">
                            <h5 class="text-body mb-0">#conference</h5>
                            <span class="d-block fs-6">3 members</span>
                          </div>
                          <!-- End Col -->

                          <div class="col-sm-auto">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-sm-end">
                              <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "11rem"
                                      }'>
                                <option value="guest" selected>Guest</option>
                                <option value="can edit">Can edit</option>
                                <option value="can comment">Can comment</option>
                                <option value="full access">Full access</option>
                                <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                              </select>
                            </div>
                            <!-- End Select -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->
                </ul>

                <div class="d-grid gap-3">
                  <!-- Form Switch -->
                  <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch1">
                    <span class="col-8 col-sm-9 ms-0">
                      <i class="bi-bell text-primary me-3"></i>
                      <span class="text-dark">Inform all project members</span>
                    </span>
                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch1" checked>
                    </span>
                  </label>
                  <!-- End Form Switch -->

                  <!-- Form Switch -->
                  <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch2">
                    <span class="col-8 col-sm-9 ms-0">
                      <i class="bi-chat-left-dots text-primary me-3"></i>
                      <span class="text-dark">Show team activity</span>
                    </span>
                    <span class="col-4 col-sm-3 text-end">
                      <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch2">
                    </span>
                  </label>
                  <!-- End Form Switch -->
                </div>

                <!-- Footer -->
                <div class="d-sm-flex align-items-center mt-5">
                  <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2" data-hs-step-form-prev-options='{
                       "targetSelector": "#createProjectStepTerms"
                     }'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="d-flex justify-content-end gap-3 ms-auto">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button id="createProjectFinishBtn" type="button" class="btn btn-primary">Create project</button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->
            <div id="createProjectStepSuccessMessage" style="display:none;">
              <div class="text-center">
                <img class="img-fluid mb-3" src="./assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                <img class="img-fluid mb-3" src="./assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

                <div class="mb-4">
                  <h2>Successful!</h2>
                  <p>New project has been successfully created.</p>
                </div>

                <div class="d-flex justify-content-center gap-3">
                  <a class="btn btn-white" href="./projects.php">
                    <i class="bi-chevron-left"></i> Back to projects
                  </a>

                  <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                    <i class="bi-building"></i> Add new project
                  </a>
                </div>
              </div>
            </div>
            <!-- End Message Body -->
          </form>
          <!-- End Step Form -->
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>

  <!-- End New Project Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="./assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/quill/dist/quill.min.js"></script>
  <script src="./assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="./assets/vendor/jszip/dist/jszip.min.js"></script>
  <script src="./assets/vendor/pdfmake/build/pdfmake.min.js"></script>
  <script src="./assets/vendor/pdfmake/build/vfs_fonts.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.php5.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="./assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
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

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
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


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')


        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("createProjectStepFormProgress").style.display = 'none'
            document.getElementById("createProjectStepFormContent").style.display = 'none'
            document.getElementById("createProjectStepDetails").style.display = 'none'
            document.getElementById("createProjectStepTerms").style.display = 'none'
            document.getElementById("createProjectStepMembers").style.display = 'none'
            document.getElementById("createProjectStepSuccessMessage").style.display = 'block'
            const formContainer = document.getElementById('formContainer')
          }
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