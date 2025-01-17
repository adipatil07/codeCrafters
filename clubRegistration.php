<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Club Registration</title>

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
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
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

<body>

  <script src="./assets/js/hs.theme-appearance.js"></script>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <div class="position-fixed top-0 end-0 start-0 bg-img-start" style="height: 32rem; background-image: url(./assets/svg/components/card-6.svg);">
      <!-- Shape -->
      <div class="shape shape-bottom zi-1">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
        </svg>
      </div>
      <!-- End Shape -->
    </div>

    <!-- Content -->
    <div class="container py-5 py-sm-7">
      <a class="d-flex justify-content-center mb-5" href="./index.php">
      <img class="zi-2" src="./images/logo-no-background.png" alt="Image Description" style="width: 15rem;">
      </a>

      <div class="mx-auto" style="max-width: 30rem;">
        <!-- Card -->
        <div class="card card-lg mb-5">
          <div class="card-body">
            <!-- Form -->
            <form action="#" method="post" id="joinClubForm">
    <div class="text-center">
        <div class="mb-5">
            <h1 class="display-4">Join Club</h1>
            <h2 class="display-5">Club Name: <?php extract($_GET); echo $club_name; ?></h2>
            <h2 class="display-5">Club ID: <?php echo $club_id; ?></h2>
        </div>
    </div>

    <div class="mb-4">
        <label class="form-label" for="fullName">Full Name</label>
        <input type="text" class="form-control form-control-lg" name="fullName" id="fullName" placeholder="Mark Williams" aria-label="Mark Williams" required>
        <span class="invalid-feedback">Please enter your full name.</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="signupSrEmail">Your email</label>
        <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@site.com" aria-label="Markwilliams@site.com" required>
        <span class="invalid-feedback">Please enter a valid email address.</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="mobile">Your Mobile No</label>
        <input type="text" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="+91 xxxxx xxxxx" required>
        <span class="invalid-feedback">Please enter a valid mobile number.</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="dept">Department</label>
        <input type="text" class="form-control form-control-lg" name="dept" id="dept" placeholder="CS" required>
        <span class="invalid-feedback">Please Enter your Department name</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="departmentDropdown">Domain</label>
        <select class="form-select form-select-lg" id="departmentDropdown" name="domain" required>
            <option value="" selected disabled>Choose Your Domain</option>
            <option value="AD">Android Development</option>
            <option value="WD">Web Development</option>
            <option value="AM">AI/ML</option>
            <option value="CC">Cloud Computing</option>
        </select>
        <span class="invalid-feedback">Please select your department.</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="linkedin">LinkedIn Profile</label>
        <input type="text" class="form-control form-control-lg" name="linkdean" id="linkedin" placeholder="https://www.linkedin.com/in/xyz" required>
        <span class="invalid-feedback">Please Enter your LinkedIn Profile link</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="github">Github Profile</label>
        <input type="text" class="form-control form-control-lg" name="git_hub" id="github" placeholder="https://github.com/xyz" required>
        <span class="invalid-feedback">Please enter your Github Profile link</span>
    </div>

    <div class="mb-4">
        <label class="form-label" for="reasonForJoining">Why do you want to join the club?</label>
        <textarea class="form-control" name="reasonForJoining" id="reasonForJoining" rows="4" placeholder="Write your response here..." required></textarea>
        <span class="invalid-feedback">Please provide a reason for joining the club.</span>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn-lg" name="btn_submit">Submit</button>
    </div>
</form>

            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')
      }
    })()
  </script>
</body>
</html>
<?php
if(isset($_POST['btn_submit'])){
  print_r($_POST);
  extract($_POST);
include('admin/include/config.php');

// Inserting values into the database
$sql = "INSERT INTO `tbl_user_club_req` 
        (`req_user_id`, `req_user_name`, `req_user_email`, `req_user_mobile`, `req_user_dept`, `req_user_domain`, `reg_user_linkedin`, `reg_user_github`, `req_user_msg`,`req_club_name`,`req_club_id`) 
        VALUES 
        (NULL, '$fullName', '$email', '', '$dept', '$domain', '$linkdean', '$git_hub', '$reasonForJoining','$club_name','$club_id')";

if(mysqli_query($con, $sql)){
    echo "<script>alert('Records inserted successfully.'); window.location.href = 'index.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



}




?>
