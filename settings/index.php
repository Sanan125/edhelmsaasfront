<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>

  <!-- Header include (links Bootstrap CSS + icons, etc.) -->
  <?php 
    $basePath = '../';           // because this file lives in a sub-folder
    include('../includes/inc/header.php');
  ?>
</head>

<body>
  <!-- Top-bar -->
  <?php include('../includes/inc/topbar.php'); ?>

  <!-- Sidebar -->
  <?php include('../includes/inc/sidebar.php'); ?>

  <!-- —— Main content —— -->
  <div class="main-content">

    <!-- Breadcrumb -->
    <?php include('../includes/inc/breadcrumb.php'); ?>


    <!-- ───── Tabs navigation ───── -->
    <ul class="nav nav-pills mb-3 mt-5 ms-5" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="general-settings-tab"
           data-bs-toggle="pill" href="#general-settings"
           role="tab" aria-controls="general-settings" aria-selected="true">
          <i class="bi bi-person"></i> General Settings
        </a>
      </li>

      <li class="nav-item" role="presentation">
        <a class="nav-link" id="theme-settings-tab"
           data-bs-toggle="pill" href="#theme-settings"
           role="tab" aria-controls="theme-settings" aria-selected="false">
          <i class="bi bi-shield-lock"></i> Theme Settings
        </a>
      </li>

      <li class="nav-item" role="presentation">
        <a class="nav-link" id="activity-tab"
           data-bs-toggle="pill" href="#activity"
           role="tab" aria-controls="activity" aria-selected="false">
          <i class="bi bi-credit-card"></i> Activity
        </a>
      </li>

      <li class="nav-item" role="presentation">
  <a class="nav-link" id="role-permissions-tab"
     data-bs-toggle="pill"
     href="#role-permissions"
     role="tab" aria-controls="role-permissions" aria-selected="false">
    <i class="bi bi-people"></i> Users 
  </a>
   </li>



      <li class="nav-item" role="presentation">
        <a class="nav-link" id="logs-tab"
           data-bs-toggle="pill" href="#logs"
           role="tab" aria-controls="logs" aria-selected="false">
          <i class="bi bi-box-arrow-right"></i> Logs
        </a>
      </li>
    </ul>
    

    <!-- ───── Tabs content ───── -->
    <div class="tab-content" id="pills-tabContent">

      <!-- ▸ General Settings (default open) -->
      <div class="tab-pane fade show active" id="general-settings" role="tabpanel"
           aria-labelledby="general-settings-tab">
        <div class="setting card pb-4 mt-3">

          <div class="card-header bg-light d-flex justify-content-between align-items-center py-3">
            <div>
              <h5 class="mb-0 fw-bold">General Settings</h5>
              <small class="fw-normal">Configure the general settings for the site.</small>
            </div>
          </div>

          <form action="#" method="POST">
            <div class="card-body">

              <div class="mb-3">
                <label for="siteTitle" class="form-label">Site Title</label>
                <input type="text" class="form-control" id="siteTitle" name="siteTitle"
                       value="EDHELM" required>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address"
                       value="2400 Fresno St, Fresno, CA 93721, USA" required>
              </div>

              <div class="mb-3">
                <label for="phoneNo" class="form-label">Phone No</label>
                <input type="tel" class="form-control" id="phoneNo" name="phoneNo"
                       value="+185283465385" required>
              </div>

              <div class="mb-3">
                <label for="currencySymbol" class="form-label">Currency Symbol</label>
                <input type="text" class="form-control" id="currencySymbol" name="currencySymbol"
                       value="$" required>
              </div>

              <div class="mb-3">
                <label for="systemEmail" class="form-label">System Email</label>
                <input type="email" class="form-control" id="systemEmail" name="systemEmail"
                       value="info@inilabs.net" required>
              </div>

              <div class="mb-3">
                <label for="currencyCode" class="form-label">Currency Code</label>
                <input type="text" class="form-control" id="currencyCode" name="currencyCode"
                       value="USD" required>
              </div>

              <div class="mb-3">
                <label for="timeZone" class="form-label">Time Zone</label>
                <select class="form-select" id="timeZone" name="timeZone" required>
                  <option value="GMT+06:00 Dhaka" selected>(GMT+06:00) Dhaka</option>
                  <option value="GMT+05:00">(GMT+05:00)</option>
                  <option value="GMT+02:00">(GMT+02:00)</option>
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

            <!-- License -->
            <div class="card mb-4 mx-3">
              <div class="card-header"><h5 class="mb-0">License Code</h5></div>
              <div class="card-body">
                <div class="mb-3">
                  <label for="licenseCode" class="form-label">License Code</label>
                  <input type="text" class="form-control" id="licenseCode" name="licenseCode"
                         value="p6u90xe7-h0j0-22v2-8467-k421p95209p11" required>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-end mx-3 pb-3">
              <button type="submit" class="btn btn-primary">Save Settings</button>
            </div>
          </form>
        </div>
      </div>

      <!-- ▸ Theme Settings (default hidden) -->
      <div class="tab-pane fade" id="theme-settings" role="tabpanel"
           aria-labelledby="theme-settings-tab">
        <div class="card my-4">
          <div class="card-header"><h5 class="mb-0">Theme Settings</h5></div>

          <div class="card-body">
            <!-- colour swatches -->
            <div class="d-flex flex-wrap mb-3">
              <button id="theme-default"      class="theme-option" style="background:#333;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">Default</button>
              <button id="theme-white-blue"   class="theme-option" style="background:#4f8bbf;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">White Blue</button>
              <button id="theme-black"        class="theme-option" style="background:#000;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">Black</button>
              <button id="theme-purple"       class="theme-option" style="background:#6f42c1;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">Purple</button>
              <button id="theme-green"        class="theme-option" style="background:#28a745;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">Green</button>
              <button id="theme-red"          class="theme-option" style="background:#dc3545;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;">Red</button>

              <!-- custom picker -->
              <div id="picker" class="theme-option d-flex align-items-center justify-content-center"
                   style="background:#c5cfff;width:100px;height:50px;margin:0 10px 10px 0;color:#fff;cursor:pointer;">
                Custom
              </div>
            </div>

            <!-- input fields for custom colour -->
            <div id="colorInputwrapper" class="mt-3" style="display:none;">
              <input type="color" id="colorinput" class="form-control form-control-color mb-2" value="#c5c8ff">
              <input type="text"  id="hexcode"   class="form-control" placeholder="#c5c8ff">
            </div>
          </div>
        </div>
      </div>



      <!-- ▸ Activity -->
      <div class="tab-pane fade" id="activity" role="tabpanel"
           aria-labelledby="activity-tab">
        <div class="card my-4">
          <div class="card-header"><h5 class="mb-0">Activity</h5></div>
          <div class="card-body">
            <!-- placeholder table -->
            <table class="table">
              <thead><tr><th>Date</th><th>Action</th><th>User</th></tr></thead>
              <tbody>
                <tr><td>2025-06-27</td><td>Login</td><td>Admin</td></tr>
                <tr><td>2025-06-26</td><td>Updated theme</td><td>Admin</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


<!-- User Roles  -->

   <div class="tab-pane fade" id="role-permissions" role="tabpanel" aria-labelledby="role-permissions-tab">
  <div class="card my-4 shadow-sm ">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Users  &amp; Role</h5>



        <!-- Right Side: Download, Add, and Delete Buttons -->
        <div class="d-flex gap-2">
            <div class="add-container">
                <button class="add-btn" data-bs-toggle="modal" data-bs-target="#roleModal">
                    <i class="fas fa-plus"></i>
                    <span class="btn-text">Add New User</span>
                </button>
            </div>

    <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle download-btn" type="button" id="fileOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-download"></i>
                    <span class="btn-text">Download</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="fileOptionsDropdown">
                    <li><a class="dropdown-item" href="#">Excel</a></li>
                    <li><a class="dropdown-item" href="#">CSV</a></li>
                    <li><a class="dropdown-item" href="#">PDF</a></li>
                </ul>
            </div>

             
            <!-- Delete Button with Trash Icon (Initially Hidden) -->
            <button id="deleteBtn" class="btn btn-danger" style="display:none;" onclick="deleteSelectedTeachers()">
                <i class="fas fa-trash-alt"></i> 
            </button>   

    </div>
    
    </div>

    <!-- role table -->
     <table class="table ps-3 pe-3" id="myTable" data-toggle="table" data-sortable="true" data-classes="table">
    <thead>
        <tr class="custom-header">
            <!-- Checkbox for Select All -->
            <th class="ps-3 pe-4"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()" /></th>
            <th class="ps-3 pe-4">User</th>
            <th class="ps-3 pe-4" data-sortable="true">Email</th>
            <th class="ps-3 pe-4" data-sortable="true">Phone</th>
            <th class="ps-3 pe-4">Role</th>
            <th class="ps-3 pe-4">Action</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        <!-- Row 1 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Sanan</td>
            <td class="ps-4 pe-4">sanan@gmail.com</td>
            <td class="ps-4 pe-4">+923 456 8889</td>
            <td class="ps-4 pe-4"><span class="badge bg-success"> Super Admin</span></td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <!-- Row 2 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Sarosh</td>
            <td class="ps-4 pe-4">sarosh@gmail.com</td>
            <td class="ps-4 pe-4">+923 456 7898</td>
            <td class="ps-4 pe-4"><span class="badge bg-warning">Admin</span></td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <!-- Row 3 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Asad</td>
            <td class="ps-4 pe-4">asad@gmail.com</td>
            <td class="ps-4 pe-4">+923 425 2489</td>
            <td class="ps-4 pe-4"><span class="badge bg-secondary">Editor</span></td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
         <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Araiz</td>
            <td class="ps-4 pe-4">araiz@gmail.com</td>
            <td class="ps-4 pe-4">+923 425 2489</td>
            <td class="ps-4 pe-4"><span class="badge bg-secondary">Contributor</span></td>
            <td class="ps-4 pe-4">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
    </tbody>
</table>



<!-- Pagination Controls -->
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-2 pt-4 px-4 ">
  
  <!-- Showing results text -->
  <div>
    Showing 1 to 3 of 3 entries
  </div>

  <!-- Pagination buttons -->
  <div class="d-flex flex-wrap gap-2 pb-5">
    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <i class="bi bi-chevron-left"></i> Previous
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <span>1</span>
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      <span>2</span>
    </button>

    <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
      Next <i class="bi bi-chevron-right"></i>
    </button>
  </div>
</div>


<!-- ▸ ADD/EDIT ROLE MODAL -->
<div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- 💡 Added modal-dialog-centered -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLabel">Add / Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 <form action="#" method="post" class="px-4 py-3"> 
        <div class="mb-3">
          <label for="roleName" class="form-label">User Name</label>
          <input type="text" class="form-control" id="userName" name="userName" required>
        </div>
       
        <div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email" required>
  </div>
  

<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" id="password" name="password" required>
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Phone (optional)</label>
  <input type="tel" class="form-control" id="phone" name="phone">
</div>


        <label class="form-label mb-2">Role</label>
        <div class="row g-2">
          <div class="col-6 col-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="students" id="permStudents">
              <label class="form-check-label" for="permStudents">Super Admin </label>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="attendance" id="permAttendance">
              <label class="form-check-label" for="permAttendance">Admin</label>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="fees" id="permFees">
              <label class="form-check-label" for="permFees">Editor</label>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="exams" id="permExams">
              <label class="form-check-label" for="permExams">Contributor</label>
            </div>
          </div>

         

          

        <div class="mt-4 text-end">
          <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Role</button>
        </div>
      </form>
    </div>
  </div>
</div>





    

  </div><!-- /.main-content -->

  <!-- Footer -->
  <?php include('../includes/inc/footer.php'); ?>

  <!-- Make sure Bootstrap JS is included (usually in footer.php) -->
</body>
</html>
