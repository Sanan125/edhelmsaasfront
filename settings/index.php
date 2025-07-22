<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Settings</title>

    <!-- Include the Header -->
    <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>

</head>
<body>
    
   <?php include('../includes/inc/topbar.php');?>

       <!-- side bar call  php function -->

    <?php include('../includes/inc/sidebar.php');?>


    
    <!-- Row1 Main Content -->
    <div class="main-content  ">
     


     <?php include('../includes/inc/breadcrumb.php');?>






     


        <!-- Site Configuration Section -->
        <div class="setting card  pb-4" >
            <div class="card-header bg-light d-flex justify-content-between align-items-center py-3">
                <div>
                    <h5 class="mb-0 fw-bold">General Settings</h5>
                    <small class="fw-normal">Configure the general settings for the site.</small>
                </div>
            </div>

            <form action="#" method="POST">
                <!-- Site Configuration -->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="siteTitle" class="form-label">Site Title</label>
                        <input type="text" class="form-control" id="siteTitle" name="siteTitle" value="EDHELM" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="2400 Fresno St, Fresno, CA 93721, USA" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">Phone No</label>
                        <input type="tel" class="form-control" id="phoneNo" name="phoneNo" value="+185283465385" required>
                    </div>
                    <div class="mb-3">
                        <label for="currencySymbol" class="form-label">Currency Symbol</label>
                        <input type="text" class="form-control" id="currencySymbol" name="currencySymbol" value="$" required>
                    </div>
                    <div class="mb-3">
                        <label for="systemEmail" class="form-label">System Email</label>
                        <input type="email" class="form-control" id="systemEmail" name="systemEmail" value="info@inilabs.net" required>
                    </div>
                    <div class="mb-3">
                        <label for="currencyCode" class="form-label">Currency Code</label>
                        <input type="text" class="form-control" id="currencyCode" name="currencyCode" value="USD" required>
                    </div>
                    <div class="mb-3">
                        <label for="timeZone" class="form-label">Time Zone</label>
                        <select class="form-select" id="timeZone" name="timeZone" required>
                            <option value="GMT+06:00 Dhaka" selected>(GMT+06:00) Dhaka</option>
                            <option value="GMT+05:00">GMT+05:00</option>
                            <option value="GMT+02:00">GMT+02:00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <select class="form-select" id="note" name="note" required>
                            <option value="Enable" selected>Enable</option>
                            <option value="Disable">Disable</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="language" class="form-label">Default Language</label>
                        <select class="form-select" id="language" name="language" required>
                            <option value="English" selected>English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="profileEdit" class="form-label">Profile Edit</label>
                        <select class="form-select" id="profileEdit" name="profileEdit" required>
                            <option value="Disable" selected>Disable</option>
                            <option value="Enable">Enable</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                </div>

                <!-- License Code -->
                <div class="card mb-4 mx-3">
                    <div class="card-header">
                        <h5 class="mb-0">License Code</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="licenseCode" class="form-label">License Code</label>
                            <input type="text" class="form-control" id="licenseCode" name="licenseCode" value="p6u90xe7-h0j0-22v2-8467-k421p95209p11" required>
                        </div>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="d-flex justify-content-end mx-3">
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </div>
            </form>
        </div>
        

<!-- Theme Change -->
<div class="card my-4" >
    <div class="card-header">
        <h5 class="mb-0">Theme Settings</h5>
    </div>



  <div class="card-body">
  <div class="d-flex flex-wrap justify-content-start">
    <button id="theme-default" class="theme-option" style="background-color: #333333; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>Default</span>
    </button>
    <button id="theme-white-blue" class="theme-option" style="background-color: #4f8bbf; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>White Blue</span>
    </button>
    <button id="theme-black" class="theme-option" style="background-color: #000000; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>Black</span>
    </button>
    <button id="theme-purple" class="theme-option" style="background-color: #6f42c1; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>Purple</span>
    </button>
    <button id="theme-green" class="theme-option" style="background-color: #28a745; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>Green</span>
    </button>
    <button id="theme-red" class="theme-option" style="background-color: #dc3545; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; text-align: center; color: white;">
      <span>Red</span>
    </button>

    <!--  Custom Color Picker Button -->
<div id="picker" class="theme-option d-flex align-items-center justify-content-center mt-3" 
     style="background-color:#c5cfff; color:white; width: 100px; height: 50px; margin-right: 10px; margin-bottom: 10px; cursor: pointer; position: relative;">
  Custom color <div class="check-icon"></div>
</div>

<!--  Color Input Fields -->
<div id="colorInputwrapper" class="mt-3" style="display: none;">
  <input type="color" id="colorinput" class="form-control form-control-color mb-2" value="#c5c8ff">
  <input type="text" id="hexcode" class="form-control" placeholder="#c5c8ff">
</div>

   </div>

  </div>
 </div> 
</div>

</div>

  

    <?php include('../includes/inc/footer.php');?>
</body>
</html>
