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
    


<!-- Parent Table -->
<div class="card pt-4 pb-4">
  <div class="card-header d-flex justify-content-between align-items-center bg-white">
    <!-- Left Side: Section Title and Suboptions -->
    <div>
        <h5 class="mb-0 fw-bold">All Parents</h5>
        <small class="fw-normal">Manage your parents from start to finish with complete control.</small>
        <ul class="list-unstyled mt-2"></ul>
    </div>

    <!-- Right Side: Download and Add Buttons -->
    <div class="d-flex gap-2">
      <div class="add-container">
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addParentModal">
            <i class="fas fa-plus"></i>
            <span class="btn-text">Add New Parent</span>
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
        <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup="filterTable()" />
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
    <select class="form-select w-25" id="statusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange="filterTableSelect()">
        <option selected>Status Select</option>
        <option value="Active">Active</option>
        <option value="On Leave">On Leave</option>
        <option value="Pending">Pending</option>
        <option value="Completed">Completed</option>
    </select>

    <!-- Select Department Dropdown -->
    <select class="form-select w-25" id="departmentSelect" aria-label="Select Department" style="font-size: 14px!important;" onchange="filterTableSelect()">
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
            <th class="ps-3 pe-4"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()" /></th> 
            <th class="ps-3 pe-4" data-sortable="true">Parent Name</th>
            <th class="ps-3 pe-4" data-sortable="true">Student Name</th>
            <th class="ps-3 pe-4" data-sortable="true">Student Class</th>
            <th class="ps-3 pe-4" data-sortable="true">Phone Number</th> <!-- Added Phone Number -->
            <th class="ps-3 pe-4" data-sortable="true">Email</th>
            <th class="ps-3 pe-4">Action</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        <!-- Row 1 -->
        <tr>
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox1"  onclick="toggleDeleteButton()"/></td>
            <td class="ps-4 pe-4">Mr. Zain</td>
            <td class="ps-4 pe-4">Ali Zain</td>
            <td class="ps-4 pe-4">One</td>
            <td class="ps-4 pe-4">+923 456 7890</td> <!-- Added phone number -->
            <td class="ps-4 pe-4">sarah.johnson@example.com</td>
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
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox2"  onclick="toggleDeleteButton()"/></td>
            <td class="ps-4 pe-4">Mr. Ahmed</td>
            <td class="ps-4 pe-4">Sara Ahmed</td>
            <td class="ps-4 pe-4">Two</td>
            <td class="ps-4 pe-4">+923 876 4321</td> <!-- Added phone number -->
            <td class="ps-4 pe-4">mark.lee@example.com</td>
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
            <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox3" onclick="toggleDeleteButton()" /></td>
            <td class="ps-4 pe-4">Mrs. Laura</td>
            <td class="ps-4 pe-4">John Laura</td>
            <td class="ps-4 pe-4">Three</td>
            <td class="ps-4 pe-4">+923 233 4455</td> <!-- Added phone number -->
            <td class="ps-4 pe-4">laura.smith@example.com</td>
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
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox4"  onclick="toggleDeleteButton()"/></td>
    <td class="ps-4 pe-4">Mr. Daniel</td>
    <td class="ps-4 pe-4">Sophia Daniel</td>
    <td class="ps-4 pe-4">Four</td>
    <td class="ps-4 pe-4">+923 887 7665</td> <!-- Added phone number -->
    <td class="ps-4 pe-4">daniel.jones@example.com</td>
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
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox5" onclick="toggleDeleteButton()" /></td>
    <td class="ps-4 pe-4">Mrs. Emily</td>
    <td class="ps-4 pe-4">James Emily</td>
    <td class="ps-4 pe-4">Five</td>
    <td class="ps-4 pe-4">+923 332 2110</td> <!-- Added phone number -->
    <td class="ps-4 pe-4">emily.clark@example.com</td>
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
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox6" onclick="toggleDeleteButton()" /></td>
    <td class="ps-4 pe-4">Mr. Michael</td>
    <td class="ps-4 pe-4">Sophia Michael</td>
    <td class="ps-4 pe-4">Six</td>
    <td class="ps-4 pe-4">+923 667 7889</td> <!-- Added phone number -->
    <td class="ps-4 pe-4">michael.brown@example.com</td>
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


<!-- Add New Parent Modal -->
<!-- Add New Parent Modal -->
<div class="modal fade" id="addParentModal" tabindex="-1" aria-labelledby="addParentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addParentModalLabel">Add New Parent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="parentName" class="form-label">Parent Name</label>
          <input type="text" class="form-control" id="parentName" required>
        </div>
        <div class="mb-3">
          <label for="StudentName" class="form-label">Student Name</label>
          <input type="text" class="form-control" id="StudentName" required>
        </div>
        <div class="mb-3">
          <label for="StudentClass" class="form-label">Student Class</label>
          <input type="text" class="form-control" id="StudentClass" required>
        </div>
        <div class="mb-3">
          <label for="parentPhone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="parentPhone" required>
        </div>
        <div class="mb-3">
          <label for="parentEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="parentEmail" required>
        </div>
        <div class="mb-3 text-center">
          <label for="parentPhoto" class="form-label">Upload Photo</label>
          <input type="file" class="form-control" id="parentPhoto" accept="image/*" onchange="previewParentPhoto(event)">
        </div>
        <!-- Image preview -->
        <div class="text-center">
          <img id="parentPhotoPreview" src="#" alt="Parent Photo Preview" style="max-width: 100px; display: none;">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add Parent</button>
      </div>
    </form>
  </div>
</div>

 <?php include('../includes/inc/footer.php');?>
</body>
</html>