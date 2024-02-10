<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Files | Front - Admin &amp; Dashboard Template</title>

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
        <div class="row align-items-end mb-3">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Files</li>
              </ol>
            </nav>

            <h1 class="page-header-title">Files</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto" aria-label="Button group">
            <!-- Button Group -->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                <i class="bi-cloud-arrow-up-fill me-1"></i> Upload
              </button>

              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" id="uploadGroupDropdown" data-bs-toggle="dropdown" aria-expanded="false"></button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="uploadGroupDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> New folder
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-symlink dropdown-item-icon"></i> New shared folder
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                    <i class="bi-file-earmark-arrow-up dropdown-item-icon"></i> Upload files
                  </a>
                  <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadFilesModal">
                    <i class="bi-upload dropdown-item-icon"></i> Upload folder
                  </a>
                </div>
              </div>
            </div>
            <!-- End Button Group -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Nav -->
        <!-- Nav -->
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

          <ul class="nav nav-tabs page-header-tabs" id="projectsTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link " href="./project.php">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./project-files.php">Files</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-activity.php">Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-teams.php">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./project-settings.php">Settings</a>
            </li>
          </ul>
        </div>
        <!-- End Nav -->
      </div>
      <!-- End Page Header -->

      <!-- List Group -->
      <ul class="list-group">
        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-docs-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">WordPress contract terms</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 50 min ago</li>
                <li class="list-inline-item">25kb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown1" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Dashboard layout flow</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 1 hour ago</li>
                <li class="list-inline-item">1mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown2" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-slides-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">WordPress theme presentation</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 5 hours ago</li>
                <li class="list-inline-item">3mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown3" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-docs-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Untitled</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 5 hours ago</li>
                <li class="list-inline-item">1mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown4" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-sheets-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Hot startup 2019 - Report</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 3 weeks ago</li>
                <li class="list-inline-item">3mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown5" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown5" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-docs-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Marketing strategy</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 2 weeks ago</li>
                <li class="list-inline-item">2mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown6" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown6" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/components/placeholder-img-format.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Past-experience.jpg</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 1 month ago</li>
                <li class="list-inline-item">15mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown7" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown7" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/components/placeholder-img-format.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Front_2018.jpg</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 1 month ago</li>
                <li class="list-inline-item">9mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown8" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Business opportunities</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 2 months ago</li>
                <li class="list-inline-item">4mb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown9" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown9" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-sheets-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Untitled</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 3 months ago</li>
                <li class="list-inline-item">3kb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown10" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown10" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/components/placeholder-img-format.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">front-2.9.x.jpg</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 2 months ago</li>
                <li class="list-inline-item">73kb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown11" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown11" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-docs-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">Untitled</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 4 months ago</li>
                <li class="list-inline-item">25kb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown12" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown12" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-auto">
              <img class="avatar avatar-xs avatar-4x3" src="./assets/svg/brands/google-slides-icon.svg" alt="Image Description">
            </div>

            <div class="col">
              <h5 class="mb-0">
                <a class="text-dark" href="#">How to improve coding process</a>
              </h5>
              <ul class="list-inline list-separator small text-body">
                <li class="list-inline-item">Updated 5 months ago</li>
                <li class="list-inline-item">5kb</li>
              </ul>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <!-- Dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-white btn-sm" id="filesListDropdown13" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline-block me-1">More</span>
                  <i class="bi-chevron-down"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="filesListDropdown13" style="min-width: 13rem;">
                  <span class="dropdown-header">Settings</span>

                  <a class="dropdown-item" href="#">
                    <i class="bi-share dropdown-item-icon"></i> Share file
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-folder-plus dropdown-item-icon"></i> Move to
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-star dropdown-item-icon"></i> Add to stared
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-pencil dropdown-item-icon"></i> Rename
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-download dropdown-item-icon"></i> Download
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-trash dropdown-item-icon"></i> Delete
                  </a>
                </div>
              </div>
              <!-- End Dropdown -->
            </div>
          </div>
          <!-- End Row -->
        </li>
        <!-- End Item -->
      </ul>
      <!-- End List Group -->
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

  <!-- Upload files Modal -->
  <div class="modal fade" id="uploadFilesModal" tabindex="-1" aria-labelledby="uploadFilesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadFilesModalLabel">Add files</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
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
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Upload</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Upload files Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="./assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="./assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

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


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
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