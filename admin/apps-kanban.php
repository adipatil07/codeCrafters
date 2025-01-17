  !DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Kanban | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">

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
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kanban</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Kanban</h1>
          </div>
          <!-- End Col -->

          <div class="col-lg-auto">
            <span class="text-cap small">Team members:</span>

            <div class="d-flex">
              <!-- Avatar Group -->
              <div class="avatar-group avatar-circle me-3">
                <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Amanda Harvey">
                  <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                </a>
                <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Linda Bates">
                  <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </a>
                <a class="avatar avatar-soft-info" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="#digitalmarketing">
                  <span class="avatar-initials">
                    <i class="bi-people-fill"></i>
                  </span>
                </a>
                <a class="avatar" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="David Harrison">
                  <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                </a>
                <a class="avatar avatar-soft-dark" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Antony Taylor">
                  <span class="avatar-initials">A</span>
                </a>

                <a class="avatar avatar-light avatar-circle" href="javascript:;" data-bs-toggle="modal" data-bs-target="#shareWithPeopleModal">
                  <span class="avatar-initials">+2</span>
                </a>
              </div>
              <!-- End Avatar Group -->

              <a class="btn btn-primary btn-icon rounded-circle" href="javascript:;" data-bs-toggle="modal" data-bs-target="#shareWithPeopleModal">
                <i class="bi-share-fill"></i>
              </a>
            </div>
          </div>
          <!-- End Col -->
        </div>
      </div>
      <!-- End Page Header -->
    </div>
    <!-- End Content -->

    <!-- Content -->
    <div class="content container-fluid my-n9">
      <div class="row mb-5">
        <div class="col-12 col-sm-auto mb-3">
          <!-- Input Group -->
          <div class="input-group input-group-merge">
            <div class="input-group-prepend input-group-text">
              <i class="bi-search"></i>
            </div>
            <input type="search" class="form-control" placeholder="Search projects" aria-label="Search projects">
          </div>
          <!-- End Input Group -->
        </div>
        <!-- End Col -->

        <div class="col-auto mb-3">
          <!-- Daterangepicker -->
          <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary dropdown-toggle">
            <i class="bi-calendar-week"></i>
            <span class="js-daterangepicker-predefined-preview ms-2"></span>
          </button>
          <!-- End Daterangepicker -->
        </div>
        <!-- End Col -->

        <div class="col-auto mb-3 ms-auto">
          <!-- Nav -->
          <ul class="nav nav-segment" id="connectionsTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="grid-tab" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                <i class="bi-grid"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="list-tab" data-bs-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                <i class="bi-view-list"></i>
              </a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Tab Content -->
    <div class="tab-content" id="connectionsTabContent">
      <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
        <!-- Content -->
        <div class="content container-fluid kanban-board">
          <!-- Kanban Row -->
          <ul class="row list-unstyled kanban-board-row">
            <li class="js-add-field col-12" data-hs-add-field-options='{
                "template": "#createProjectGridTemplateToDo",
                "container": "#createProjectGridContainerToDo",
                "defaultCreated": 0
               }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">To do</h6>

                <a class="js-create-field btn btn-white btn-icon btn-xs" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Front mobile app launch</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-soft-dark avatar-circle">
                              <span class="avatar-initials">I</span>
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown1">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">20</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Increase page loading speed</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">2 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown2">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">3</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Implement a calendar plugin</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">1 Assignee</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown3">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">9</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectGridContainerToDo"></div>

              <!-- Card -->
              <div class="d-grid">
                <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                  <i class="bi-plus"></i> Add project
                </a>
              </div>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectGridTemplateToDo" style="display: none;">
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="mb-4">
                        <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                      </div>

                      <div class="d-flex justify-content-end gap-3">
                        <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                        <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <li class="js-add-field col-12" data-hs-add-field-options='{
                  "template": "#createProjectGridTemplateInProgress",
                  "container": "#createProjectGridContainerInProgress",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">In progress</h6>

                <a class="js-create-field btn btn-white btn-icon btn-xs" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Display tasks in account page</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown4">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">7</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">12</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">3</span>
                            <span class="d-block fs-6">Days left</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Update Slack integration to use the new bot token</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-soft-danger avatar-circle">
                              <span class="avatar-initials">P</span>
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown5">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">40</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">20</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">45</span>
                            <span class="d-block fs-6">Days left</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectGridContainerInProgress"></div>

              <!-- Card -->
              <div class="d-grid">
                <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                  <i class="bi-plus"></i> Add project
                </a>
              </div>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectGridTemplateInProgress" style="display: none;">
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="mb-4">
                        <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                      </div>

                      <div class="d-flex justify-content-end gap-3">
                        <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                        <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <li class="js-add-field col-12" data-hs-add-field-options='{
                  "template": "#createProjectGridTemplateReview",
                  "container": "#createProjectGridContainerReview",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">Review</h6>

                <a class="js-create-field btn btn-white btn-icon btn-xs" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Design banner for social networks</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-soft-info avatar-circle">
                              <span class="avatar-initials">L</span>
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">2 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown6">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">7</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">7</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">2</span>
                            <span class="d-block fs-6">Days left</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectGridContainerReview"></div>

              <!-- Card -->
              <div class="d-grid">
                <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                  <i class="bi-plus"></i> Add project
                </a>
              </div>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectGridTemplateReview" style="display: none;">
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="mb-4">
                        <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                      </div>

                      <div class="d-flex justify-content-end gap-3">
                        <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                        <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <li class="js-add-field col-12" data-hs-add-field-options='{
                 "template": "#createProjectGridTemplateDone",
                 "container": "#createProjectGridContainerDone",
                 "defaultCreated": 0
               }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">Done</h6>

                <a class="js-create-field btn btn-white btn-icon btn-xs" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Create product roadmap</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">1 Assignee</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown7">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">1</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">1</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Mobile: notifications for subscribe pages and goals</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown8">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">5</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">7</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Allow commenting from the report view</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-soft-info avatar-circle">
                              <span class="avatar-initials">V</span>
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown9" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown9">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">3</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">6</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex mb-5">
                        <div class="me-2">
                          <h4 class="text-wrap">Public API</h4>

                          <!-- Avatar Group -->
                          <div class="avatar-group avatar-group-sm">
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle">
                              <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                            </span>
                            <span class="fs-6 ms-2">3 Assignees</span>
                          </div>
                          <!-- End Avatar Group -->
                        </div>

                        <div class="ms-auto">
                          <!-- Dropdown -->
                          <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsGridDropdown10" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsGridDropdown10">
                              <a class="dropdown-item" href="#">
                                <i class="bi-pencil dropdown-item-icon"></i> Rename project
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-star dropdown-item-icon"></i> Add to favorites
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="bi-archive dropdown-item-icon"></i> Archive project
                              </a>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item text-danger" href="#">
                                <i class="bi-trash dropdown-item-icon text-danger"></i>
                                Remove
                              </a>
                            </div>
                          </div>
                          <!-- End Dropdown -->
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">75</span>
                            <span class="d-block fs-6">Tasks</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">4</span>
                            <span class="d-block fs-6">Complete</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->

                        <div class="col-4">
                          <!-- Stats -->
                          <div class="text-center">
                            <span class="d-block h4 mb-1">0</span>
                            <span class="d-block fs-6">Completed</span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectGridContainerDone"></div>

              <!-- Card -->
              <div class="d-grid">
                <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                  <i class="bi-plus"></i> Add project
                </a>
              </div>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectGridTemplateDone" style="display: none;">
                <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="mb-4">
                        <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                      </div>

                      <div class="d-flex justify-content-end gap-3">
                        <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                        <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <li class="col-12">
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">Create a new group</h6>

                <div class="js-sortable"></div>

                <a class="btn btn-white btn-icon btn-xs" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Create group">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->
            </li>
          </ul>
          <!-- End Kanban Row -->
        </div>
        <!-- End Content -->
      </div>

      <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
        <!-- Content -->
        <div class="content container-fluid">
          <!-- Kanban List -->
          <ul class="list-inline">
            <li class="js-add-field" data-hs-add-field-options='{
                  "template": "#createProjectListTemplateToDo",
                  "container": "#createProjectListContainerToDo",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">To do</h6>

                <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Front mobile app launch</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown1">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-dark avatar-circle">
                            <span class="avatar-initials">I</span>
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">20</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Increase page loading speed</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown2">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">2 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Implement a calendar plugin</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown3">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">2 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">9</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectListContainerToDo"></div>

              <!-- Card -->
              <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                <i class="bi-plus"></i> Add project
              </a>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectListTemplateToDo" style="display: none;">
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="mb-4">
                      <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-3">
                      <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                      <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <!-- Divider -->
            <li>
              <hr class="my-7">
            </li>
            <!-- End Divider -->

            <li class="js-add-field" data-hs-add-field-options='{
                  "template": "#createProjectListTemplateInProgress",
                  "container": "#createProjectListContainerInProgress",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">In progress</h6>

                <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Display tasks in account page</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown4">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">12</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Update Slack integration to use the new bot token</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown5">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-danger avatar-circle">
                            <span class="avatar-initials">P</span>
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">40</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">20</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">45</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectListContainerInProgress"></div>

              <!-- Card -->
              <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                <i class="bi-plus"></i> Add project
              </a>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectListTemplateInProgress" style="display: none;">
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="mb-4">
                      <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-3">
                      <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                      <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <!-- Divider -->
            <li>
              <hr class="my-7">
            </li>
            <!-- End Divider -->

            <li class="js-add-field" data-hs-add-field-options='{
                  "template": "#createProjectListTemplateReview",
                  "container": "#createProjectListContainerReview",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">Review</h6>

                <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Design banner for social networks</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown6">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">L</span>
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">2 Assignees</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">2</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectListContainerReview"></div>

              <!-- Card -->
              <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                <i class="bi-plus"></i> Add project
              </a>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectListTemplateReview" style="display: none;">
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="mb-4">
                      <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-3">
                      <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                      <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>

            <!-- Divider -->
            <li>
              <hr class="my-7">
            </li>
            <!-- End Divider -->

            <li class="js-add-field" data-hs-add-field-options='{
                  "template": "#createProjectListTemplateDone",
                  "container": "#createProjectListContainerDone",
                  "defaultCreated": 0
                }'>
              <!-- Title -->
              <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-cap mb-0">Done</h6>

                <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="left" title="Add project">
                  <i class="bi-plus"></i>
                </a>
              </div>
              <!-- End Title -->

              <div class="js-sortable">
                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Create product roadmap</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown7">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">1 Assignee</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">1</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">1</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Mobile: notifications for subscribe pages and goals</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown8">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignee</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">5</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Allow commenting from the report view</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown9" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown9">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">V</span>
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignee</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">6</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h4 class="text-wrap">Public API</h4>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="kanbanProjectsListDropdown10" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="kanbanProjectsListDropdown10">
                            <a class="dropdown-item" href="#">
                              <i class="bi-pencil dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-star dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="bi-trash dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Dropdown -->
                      </div>
                    </div>

                    <div class="row align-items-center">
                      <div class="col-sm-auto mb-3 mb-sm-0">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                        </div>
                        <!-- End Avatar Group -->

                        <span class="d-block fs-6">3 Assignee</span>
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">75</span>
                          <span class="d-block fs-6">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">4</span>
                          <span class="d-block fs-6">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-auto mb-3 mb-sm-0">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block fs-6">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm">
                        <!-- Progress -->
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- Container For Input Field -->
              <div id="createProjectListContainerDone"></div>

              <!-- Card -->
              <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
                <i class="bi-plus"></i> Add project
              </a>
              <!-- End Card -->

              <!-- Add Create Project Template -->
              <form id="createProjectListTemplateDone" style="display: none;">
                <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                  <div class="card-body">
                    <div class="mb-4">
                      <textarea class="form-control" placeholder="What needs to be done?" data-name="body" aria-label="What needs to be done?"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-3">
                      <a class="js-delete-field btn btn-white btn-sm" href="javascript:;">Cancel</a>
                      <a class="btn btn-primary btn-sm" href="javascript:;">Create</a>
                    </div>
                  </div>
                </div>
              </form>
              <!-- End Add Create Project Template -->
            </li>
          </ul>
          <!-- End Kanban List -->
        </div>
        <!-- End Content -->
      </div>
    </div>
    <!-- End Tab Content -->

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

  <!-- Share with people Modal -->
  <div class="modal fade" id="shareWithPeopleModal" tabindex="-1" aria-labelledby="shareWithPeopleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="shareWithPeopleModalLabel">Invite users</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
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

          <!-- List Group -->
          <ul class="list-unstyled list-py-2">
            <!-- Item -->
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
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
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
            <!-- End Item -->

            <!-- Item -->
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
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
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
            <!-- End Item -->

            <!-- Item -->
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
                      <h5 class="text-body mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></h5>
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
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
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
            <!-- End Item -->

            <!-- Item -->
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
                          <option value="guest">Guest</option>
                          <option value="can edit" selected>Can edit</option>
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
            <!-- End Item -->
          </ul>
          <!-- End List Group -->

          <!-- Form Switch -->
          <label class="row form-check form-switch" for="addTeamPreferencesNewProjectSwitch1">
            <span class="col-8 col-sm-9 ms-0">
              <i class="bi-bell text-primary me-2"></i>
              <span class="text-dark">Inform all project members</span>
            </span>
            <span class="col-4 col-sm-3 text-end">
              <input type="checkbox" class="form-check-input" id="addTeamPreferencesNewProjectSwitch1" checked>
            </span>
          </label>
          <!-- End Form Switch -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <div class="row align-items-center flex-grow-1 mx-n2">
            <div class="col-sm-9 mb-2 mb-sm-0">
              <input type="hidden" id="publicShareLinkClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

              <p class="modal-footer-text">The public share <a class="link" href="#">link settings</a>
                <i class="bi-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
              </p>
            </div>
            <!-- End Col -->

            <div class="col-sm-3 text-sm-end">
              <a class="js-clipboard btn btn-white btn-sm text-nowrap" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                  "type": "tooltip",
                  "successText": "Copied!",
                  "contentTarget": "#publicShareLinkClipboard",
                  "container": "#shareWithPeopleModal"
                 }'>
                <i class="bi-link me-1"></i> Copy link</a>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Share with people Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="./assets/vendor/hs-add-field/dist/hs-add-field.js"></script>
  <script src="./assets/vendor/sortablejs/Sortable.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

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


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')


        // INITIALIZATION OF SORTABLEJS
        // =======================================================
        HSCore.components.HSSortable.init('.js-sortable', {
          forceFallback: true,
          animation: 0,
          group: 'listGroup',
          delay: 500,
          delayOnTouchOnly: true
        });
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