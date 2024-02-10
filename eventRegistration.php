<?php
session_start();

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

      <!-- Required Meta Tags Always Come First -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Title -->
      <title>Add User | Front - Admin &amp; Dashboard Template</title>

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
    <body class=" ">

      <script src="./assets/js/hs.theme-appearance.js"></script>

      <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

      <!-- ========== HEADER ========== -->

      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
        <div class="navbar-nav-wrap">
          
          </div>
        </div>
      </header>

      <main id="content" role="main" class="main">
         <form class="js-step-form py-md-5" method="post" action="#" data-hs-step-form-options='{ "progressSelector": "#addUserStepFormProgress", "stepsSelector": "#addUserStepFormContent", "endSelector": "#addUserFinishBtn", "isValidate": false }'>
            <div class="row justify-content-lg-center">
              
              <div class="col-lg-8">
                <!-- Step -->
            
               <!--  <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepProfile"
                      }'>
                      <span class="step-icon step-icon-soft-dark">1</span>
                      <div class="step-content">
                        <span class="step-title">Share Details</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepBillingAddress"
                      }'>
                      <span class="step-icon step-icon-soft-dark">2</span>
                      <div class="step-content">
                        <span class="step-title">Payment</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                        "targetSelector": "#addUserStepConfirmation"
                      }'>
                      <span class="step-icon step-icon-soft-dark">3</span>
                      <div class="step-content">
                        <span class="step-title">Event Ticket</span>
                      </div>
                    </a>
                  </li>
                </ul> -->
                <!-- End Step -->

                <!-- Content Step Form -->
                <div id="addUserStepFormContent">
                  <!-- Card -->
                  <div id="addUserStepProfile" class="card card-lg active">

                    <div class="col-lg-12">
          <!-- Profile Cover -->
          <div class="profile-cover">
            <div class="profile-cover-img-wrapper">
              <img class="profile-cover-img" src="admin/assets/img/1920x400/img1.jpg" alt="Image Description">
            </div>
          </div>
                    <!-- Body -->
                    <div class="card-body">
                      <!-- Form -->
                          <div class="content container-fluid">
        <center>  <div class=" col-lg-6 mb-6">
          <h1 class="step-title">Event Name : <?php echo $_GET['event_name']; ?></h1>
          <h2 class="step-title">Fees : INR <?php echo $_GET['cost']; ?></h2>
<!--           <p>Start Date - End Date</p>
 -->              </div> </center>

                      <!-- Form first name-->
                      <div class="row mb-4">
                        <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">First name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter Name of Your Leader"></i></label>

                        <div class="col-sm-9">
                          <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="First Name" aria-label="Aditya">
                          </div>
                        </div>
                      </div>

                       <div class="row mb-4">
                        <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Last name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter Name of Your Leader"></i></label>

                        <div class="col-sm-9">
                          <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" name="lastName" id="firstNameLabel" placeholder="Last Name" aria-label="Aditya">
                          </div>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form email-->
                      <div class="row mb-4">
                        <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="emailLabel" placeholder="email@gmail.com" aria-label="aditya@gmail.com">
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form Phone -->
                      <div class="js-add-field row mb-4" data-hs-add-field-options='{
                              "template": "#addPhoneFieldTemplate",
                              "container": "#addPhoneFieldContainer",
                              "defaultCreated": 0
                            }'>
                        <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone</label>

                        <div class="col-sm-9">
                          <div class="input-group input-group-sm-vertical">
                            <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+91 xxxxx xxxxx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                    "mask": "00000 00000"
                                  }'>
                          </div>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form College-->
                      <div class="row mb-4">
                        <label for="organizationLabel" class="col-sm-3 col-form-label form-label">College Name</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="SKNCOE" aria-label="Htmlstream">
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form Department-->
                      <div class="row mb-4">
                        <label for="departmentLabel" class="col-sm-3 col-form-label form-label">Department</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="department" id="departmentLabel" placeholder="Computer" aria-label="Human resources">
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      
                      <!-- End Form -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-end align-items-center">
                      <button type="submit" class="btn btn-primary" name="btn_register" data-hs-step-form-next-options='{
                                "targetSelector": "#addUserStepBillingAddress"
                              }'>
                        Proceed to pay<i class="bi-chevron-right"></i>

  
                    </div>
                    <!-- End Footer -->
                  </div>
                  </div>                 
                </div>
                <!-- End Content Step Form -->

                <!-- Message Body -->
                <div id="successMessageContent" style="display:none;">
                  <div class="text-center">
                    <img class="img-fluid mb-3" src="./assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                    <img class="img-fluid mb-3" src="./assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

                    <div class="mb-4">
                      <h2>Welcome</h2>
                      <p><span class="fw-semibold text-dark">Aditya Patil</span> has been participated in Event</p>
                    </div>

                    <div class="d-flex justify-content-center">
                      <a class="btn btn-white me-3" href="./landing.php">
                        <i class="bi-chevron-left ms-1"></i> Home
                      </a>
                      <a class="btn btn-primary" href="./event.php">
                        <i class="bi-person-plus-fill me-1"></i> Participate in New Event
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Message Body -->
              </div>

              <!-- End Content Step Form -->

              <!-- Message Body -->
              <div id="successMessageContent" style="display:none;">
                <div class="text-center">
                  <img class="img-fluid mb-3" src="./assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                  <img class="img-fluid mb-3" src="./assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

                  <div class="mb-4">
                    <h2>Welcome</h2>
                    <p><span class="fw-semibold text-dark">Aditya Patil</span> has been participated in Event</p>
                  </div>

                  <div class="d-flex justify-content-center">
                    <a class="btn btn-white me-3" href="./index.php">
                      <i class="bi-chevron-left ms-1"></i> Home
                    </a>
                    <a class="btn btn-primary" href="./event.php">
                      <i class="bi-person-plus-fill me-1"></i> Participate in New Event
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Message Body -->
            </div>
            <!-- End Row -->
          </form>
          <!-- End Step Form -->
        </div>
        <!-- End Content -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->
      

      <!-- JS Global Compulsory  -->
      <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
      <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <!-- JS Implementing Plugins -->
      <script src="./assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
      <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

      <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
      <script src="./assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
      <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
      <script src="./assets/vendor/imask/dist/imask.min.js"></script>
      <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

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


            // INITIALIZATION OF FILE ATTACH
            // =======================================================
            new HSFileAttach('.js-file-attach')


            // INITIALIZATION OF STEP FORM
            // =======================================================
            new HSStepForm('.js-step-form', {
              finish: () => {
                document.getElementById("addUserStepFormProgress").style.display = 'none'
                document.getElementById("addUserStepProfile").style.display = 'none'
                document.getElementById("addUserStepBillingAddress").style.display = 'none'
                document.getElementById("addUserStepConfirmation").style.display = 'none'
                document.getElementById("successMessageContent").style.display = 'block'
                scrollToTop('#header');
                const formContainer = document.getElementById('formContainer')
              },
              onNextStep: function () {
                scrollToTop()
              },
              onPrevStep: function () {
                scrollToTop()
              }
            })

            function scrollToTop(el = '.js-step-form') {
              el = document.querySelector(el)
              window.scrollTo({
                top: (el.getBoundingClientRect().top + window.scrollY) - 30,
                left: 0,
                behavior: 'smooth'
              })
            }


            // INITIALIZATION OF ADD FIELD
            // =======================================================
            new HSAddField('.js-add-field', {
              addedField: field => {
                HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
                HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
              }
            })


            // INITIALIZATION OF SELECT
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select', {
              render: {
                'option': function (data, escape) {
                  return data.optionTemplate || `<div>${data.text}</div>>`
                },
                'item': function (data, escape) {
                  return data.optionTemplate || `<div>${data.text}</div>>`
                }
              }
            })


            // INITIALIZATION OF INPUT MASK
            // =======================================================
            HSCore.components.HSMask.init('.js-input-mask')
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
    <!-- End Style Switcher JS -->
  </body>
  </html>

<?php
// Database connection parameters
include 'admin/include/config.php'; // Added a semicolon here
$d1 =  date('Y-m-d');
$d2 = date('H:i:s');
$date_n_time = $d1." - ".$d2;
$d3 = random_int(10,99);
$d4 = random_int(10,99);
$d5 = $d1."".$d3."".$d2."".$d4;

$z1 =  date('Ymd');
$z2 = date('His');
$z3 = random_int(10,99);
$z4 = random_int(10,99);

$page_tracking_id = $z1."".$z3."".$z2."".$z4;
// Check if the form is submitted
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $reg_fname = $_POST['firstName'];
    $reg_lname = $_POST['lastName'];
    $reg_email = $_POST['email'];
    $reg_mobile = $_POST['phone'];
    $reg_clg = $_POST['organization'];
    $reg_dept = $_POST['department'];
    $reg_timestamp = date("Y-m-d H:i:s"); // Current timestamp

    // SQL query to insert data into tbl_register
    $sql = "INSERT INTO `tbl_register`(`reg_fname`, `reg_lname`, `reg_email`, `reg_mobile`, `reg_clg`, `reg_dept`, `reg_timestamp`) 
            VALUES ('$reg_fname', '$reg_lname', '$reg_email', '$reg_mobile', '$reg_clg', '$reg_dept', '$reg_timestamp')";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}*/

// Close connection
//$con->close();

?>
<?php
if(isset($_POST['btn_register'])){
 // print_r($_POST);
  extract($_POST);
  $k1=$_GET['event_id'];
  $k2=$_GET['event_name'];
  $k3=$_GET['cost'];

$sql = "INSERT INTO `tbl_register` (`reg_id`, `reg_fname`, `reg_lname`, `reg_email`, `reg_mobile`, `reg_clg`, `reg_dept`, `reg_timestamp`, `reg_event_id`, `reg_event_name`,`reg_amt`,`reg_tk_id`) VALUES 
(NULL, '$firstName', '$lastName', '$email', '$phone', '$organization', '$department', '$time_stamp', '$k1', '$k2','$k3','$page_tracking_id')";
if(mysqli_query($con,$sql))
{
  echo "data added";
?>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    pay_now();

    function pay_now(){
        var name="abhijit";
        var amt="<?php echo $k3; ?>";
        var tkno="<?php echo $page_tracking_id; ?>";
        var mob="<?php echo $phone; ?>";
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"pti="+tkno+"&mobno="+mob,
               success:function(result){
                   var options = {
                        "key": "rzp_test_F7x1JKRcw87rk5", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Code Crafters",
                        "description": "Test Transaction",
                        "image": "https://techking.in.net/img/service/654bdd2ff261a.png",
                       "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                            data:"pyid="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="payment_status_sucess.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
<?php
      }else{
  echo "error is present";
}

}

?>