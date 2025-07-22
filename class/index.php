<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


               <!-- header call  php function -->

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

     
     
    
<!-- Students Table -->
<div class="card pt-4 pb-4">
<div class="card-header d-flex justify-content-between align-items-center bg-white">
    <!-- Left Side: Section Title and Suboptions -->
    <div>
        <h5 class="mb-0 fw-bold">All Classes</h5>
        <small class="fw-normal">Manage your Classes from start to finish with complete control.</small>
        <ul class="list-unstyled mt-2">
        
        </ul>
    </div>

    <!-- Right Side: Download and Add Buttons -->
    <div class="d-flex gap-2">
      <div class="add-container">
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addTeacherModal">
            <i class="fas fa-plus"></i>
            <span class="btn-text">Add New Class</span>
        </button>
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle download-btn " type="button" id="fileOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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



  
<!-- Filter Section with two sections: Left for Search and Right for Filters -->
<div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
    <!-- Left: Search Bar -->
    <div class="d-flex w-25">
        <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup=" filterTable()" />
    </div>

    <!-- Right: Filter Date, Status, and Select Department -->
    <div class="d-flex w-50 gap-3 justify-content-end">
    <!-- Filter Date Select Dropdown -->
    <select class="form-select w-25" aria-label="Filter Date Select" style="font-size: 14px!important;">
        <option selected>Filter Date Select</option>
        <option value="1">Weekly</option>
        <option value="2">Monthly</option>
        <option value="3">Yearly</option>
    </select>

    <!-- Status Select Dropdown -->
    <select class="form-select w-25" id="statusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange=" filterTableSelect()">
        <option selected>Status Select</option>
        <option value="Active">Active</option>
        <option value="On Leave">On Leave</option>
        <option value="Pending">Pending</option>
        <option value="Completed">Completed</option>
    </select>

    <!-- Select Department Dropdown -->
    <select class="form-select w-25" id="departmentSelect" aria-label="Select Department" style="font-size: 14px!important;" onchange=" filterTableSelect()">
        <option selected>Select Class</option>
        <option value="Physics">One</option>
        <option value="Computer Science">Two</option>
        <option value="Chemistry">Three</option>
        <option value="Biology">Four</option>
        <option value="History">Five</option>
        <option value="Mathematics">Six</option>
    </select>
</div>
</div>




<!-- table data -->
<table class="table ps-3 pe-3" id="myTable" data-toggle="table" data-sortable="true" data-classes="table">
    <thead>
        <tr class="custom-header">
            <!-- Checkbox for Select All -->
            <th class="ps-3 pe-4"><input type="checkbox" id="selectAll"onclick="toggleSelectAll()" /></th> 
            <th class="ps-3 pe-4">Class </th>
            <th class="ps-3 pe-4" data-sortable="true">Teacher Name</th>
            <th class="ps-3 pe-4">	No. of Students</th>
            <th class="ps-3 pe-4" data-sortable="true">Schedule</th>
            <th class="ps-3 pe-4" data-sortable="true">	Subject</th>
            <th class="ps-3 pe-4" data-sortable="true">Attendance</th>
            <th class="ps-3 pe-4">Status</th>
            <th class="ps-3 pe-4">Action</th>
           

        </tr>
    </thead>
    <tbody id="tableBody">
        <!-- Row 1 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox1" onclick="toggleDeleteButton()"/></td>
            <td class="ps-4 pe-4">One</td>
            <td class="ps-4 pe-4">Mr. Ahmed</td>
            <td class="ps-4 pe-4">65</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am	</td>
            <td class="ps-4 pe-4">Mathematics</td>
            <td class="ps-4 pe-4">80%</td>
            <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
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
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox2"onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Two</td>
            <td class="ps-4 pe-4">Ms. Fatima</td>
            <td class="ps-4 pe-4">40</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am</td>
            <td class="ps-4 pe-4">History</td>
            <td class="ps-4 pe-4">70%</td>
            <td class="ps-4 pe-4"><span class="badge bg-warning">On Leave</span></td>
            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
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
            <td class="ps-4 pe-4">Three</td>
            <td class="ps-4 pe-4">Mr. Hassan</td>
            <td class="ps-4 pe-4">60</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am</td>
            <td class="ps-4 pe-4">Physics</td>
            <td class="ps-4 pe-4">90%</td>
            <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
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
        <!-- Row 4 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox4" onclick="toggleDeleteButton()"/></td>
            <td class="ps-4 pe-4">Four</td>
            <td class="ps-4 pe-4">Ms. Sarah</td>
            <td class="ps-4 pe-4">50</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am</td>
            <td class="ps-4 pe-4">Chemistry</td>
             <td class="ps-4 pe-4">80%</td>
            <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <!-- Row 5 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox5"onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Five</td>
            <td class="ps-4 pe-4">Mr. Imran</td>
            <td class="ps-4 pe-4">40</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am</td>
            <td class="ps-4 pe-4">Biology</td>
            <td class="ps-4 pe-4">85%</td>
            <td class="ps-4 pe-4"><span class="badge bg-warning">On Leave</span></td>
            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <li><a class="dropdown-item" href="#">Overview</a></li>
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <!-- Row 6 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox6" onclick="toggleDeleteButton()"/></td>
            <td class="ps-4 pe-4">Six</td>
            <td class="ps-4 pe-4">Mr. Zain</td>
            <td class="ps-4 pe-4">30</td>
            <td class="ps-4 pe-4">Mon & Wed, 9-10am</td>
            <td class="ps-4 pe-4">Computer Science</td>
            <td class="ps-4 pe-4">98%</td>
            <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>

            <td class="ps-4 pe-4">
                <!-- Dropdown with 3 dots -->
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
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
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-2 pt-4 px-4">
  
  <!-- Showing results text -->
  <div>
    Showing 1 to 3 of 3 entries
  </div>

  <!-- Pagination buttons -->
  <div class="d-flex flex-wrap gap-2">
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


  </div>
</div>

  <!-- Add New Student Modal -->
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

 <?php include('../includes/inc/footer.php');?>
</body>
</html>