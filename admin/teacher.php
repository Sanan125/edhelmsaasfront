<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

           <!--  call  php function -->


      <?php include('../header.php');?>

   
</head>
<body>
    
    <!-- side bar call  php function -->
   <?php include('../sidebar.php');?>
    
          <!-- Sidebar Toggle Button for mobile -->
            <button id="sidebarToggle" class="btn btn-primary d-md-none" style="margin: 10px 20px;">
                <i class="fas fa-bars"></i>
            </button>


    <!-- Row1 Main Content -->
    <div class="main-content px-5 ">
        <!-- <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>School Management Dashboard</h2>
        </div> -->

        
    <!-- Top Navbar -->

         <?php include('../topbar.php');?>

    
<!-- Teachers Table -->
<div class="card pt-4 pb-4" style="margin-left: 62px; margin-right: 62px;">
 <div class="card-header d-flex justify-content-between align-items-center bg-white">
        <!-- Left Side: Section Title and Suboptions -->
        <div>
            <h5 class="mb-0 fw-bold">All Teachers</h5>
            <small class="fw-normal">Manage your teachers from start to finish with complete control.</small>
            <ul class="list-unstyled mt-2">
            </ul>
        </div>

        <!-- Right Side: Download, Add, and Delete Buttons -->
        <div class="d-flex gap-2">
            <div class="add-container">
                <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
                    <i class="fas fa-plus"></i>
                    <span class="btn-text">Add New Teacher</span>
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

    <!-- Filter Section and Table -->
    <div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
        <!-- Filter Section (Search, Status, Department) -->
        <div class="d-flex w-25">
            <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup="filterTable()"/>
        </div>
        <div class="d-flex w-50 gap-3 justify-content-end">
            <!-- Filters (Date, Status, Department) -->
        </div>
    </div>

    <!-- Teachers Table -->
    <table class="table ps-3 pe-3" id="myTable" data-toggle="table" data-sortable="true" data-classes="table">
        <thead>
            <tr class="custom-header">
                <!-- Checkbox for Select All -->
                <th class="ps-3 pe-4"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"/></th>
                <th class="ps-3 pe-4">Photo</th>
                <th class="ps-3 pe-4" data-sortable="true">Teacher Name</th>
                <th class="ps-3 pe-4" data-sortable="true">Subject</th>
                <th class="ps-3 pe-4" data-sortable="true">Email</th>
                <th class="ps-3 pe-4">Status</th>
                <th class="ps-3 pe-4">Action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Row 1 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox1" onclick="toggleDeleteButton()"/></td>
                <td class="ps-4 pe-4"><img src="../assests/images/default.png" alt="Teacher" class="img-fluid rounded-circle small-image"></td>
                <td class="ps-4 pe-4">Mr. Zain</td>
                <td class="ps-4 pe-4">Mathematics</td>
                <td class="ps-4 pe-4">sarah.johnson@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
                <td class="ps-4 pe-4">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Row 2 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox2" onclick="toggleDeleteButton()"/></td>
                <td class="ps-4 pe-4"><img src="../assests/images/default.png" alt="Teacher" class="img-fluid rounded-circle small-image"></td>
                <td class="ps-4 pe-4">Mr. Ahmed</td>
                <td class="ps-4 pe-4">History</td>
                <td class="ps-4 pe-4">mark.lee@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-warning">On Leave</span></td>
                <td class="ps-4 pe-4">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Row 3 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox3" onclick="toggleDeleteButton()"/></td>
                <td class="ps-4 pe-4"><img src="../assests/images/default.png" alt="Teacher" class="img-fluid rounded-circle small-image"></td>
                <td class="ps-4 pe-4">Ms. Sarah</td>
                <td class="ps-4 pe-4">Physics</td>
                <td class="ps-4 pe-4">emma.williams@example.com</td>
                <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
                <td class="ps-4 pe-4">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item" href="#">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Additional rows go here -->
        </tbody>
    </table>    





<!-- Pagination Controls -->
   <div class="d-flex justify-content-between pt-4 pe-4 ps-4">
    <!-- Showing results text -->
    <div>Showing 1 to 3 of 3 entries</div>
    
    <!-- Pagination with Previous, Next, and page numbers -->
    <div>
        <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
            <i class="bi bi-chevron-left"></i>Previous
        </button>
        
        <!-- Pagination Page Numbers -->
        <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
            <span>1</span>
        </button>
        <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
            <span >2</span>
        </button>
        
        <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;" >Next
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>
</div>

  </div>
</div>

  <!-- Add New Teacher Modal -->
  <div class="modal fade" id="addTeacherModal" tabindex="-1" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTeacherModalLabel">Add New Teacher</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="teacherName" class="form-label">Name</label>
            <input type="text" class="form-control" id="teacherName" required>
          </div>
          <div class="mb-3">
            <label for="teacherSubject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="teacherSubject" required>
          </div>
          <div class="mb-3">
            <label for="teacherEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="teacherEmail" required>
          </div>
          <div class="mb-3">
            <label for="teacherStatus" class="form-label">Status</label>
            <select class="form-select" id="teacherStatus" required>
              <option value="Active">Active</option>
              <option value="On Leave">On Leave</option>
              <option value="Retired">Retired</option>
            </select>
          </div>
            <div class="mb-3 text-center">
              <input type="file" class="form-control" id="teacherPhoto" accept="image/*" onchange="previewTeacherPhoto(event)">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add Teacher</button>
        </div>
      </form>
    </div>
  </div>     

    <!-- Bootstrap JS + Popper (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="../includes/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.21.4/bootstrap-table.min.js"></script>
    <!-- Include Bootstrap Drop Down -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>