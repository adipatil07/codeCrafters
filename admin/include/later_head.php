          <!-- Profile Header -->

           <!-- Profile Cover -->
<div class="profile-cover">
  <div class="profile-cover-img-wrapper">
    <img class="profile-cover-img" src="../assets/img/1920x400/img1.jpg" alt="Image Description">
  </div>
</div>
<!-- End Profile Cover -->
<div class="text-center mb-5">
<label class="avatar avatar-xl avatar-uploader me-4" for="avatarUploader">
  <img id="avatarImg" class="avatar-img img-fluid rounded" src="./assets/img/160x160/logo.jpeg" alt="Image Description">

  <input type="file" class="js-file-attach avatar-uploader-input" id="logo" name="logo" accept=".png, .jpeg, .jpg">

  <span class="avatar-uploader-trigger">
    <i class="bi-pencil avatar-uploader-icon shadow-sm"></i>
  </span>
</label>


<script>
  document.getElementById('avatarUploader').addEventListener('change', function () {
    var input = this;
    var img = document.getElementById('avatarImg');

    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        img.src = e.target.result;
      };
      reader.readAsDataURL(input.files[0]);
    }
  });
</script>

  <!-- End Profile Header -->
