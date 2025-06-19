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
    

       <!-- side bar call  php function -->

   <?php include('../includes/inc/sidebar.php');?>

    
          <!-- Sidebar Toggle Button for mobile -->
            <button id="sidebarToggle" class="btn btn-primary d-md-none" style="margin: 10px 20px;">
                <i class="fas fa-bars"></i>
            </button>


    <!-- Row1 Main Content -->
    <div class="main-content px-5 ">
        <!-- <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>School Management Dashboard</h2>
        </div> -->

        
   <?php include('../includes/inc/topbar.php');?>
    
<!-- Subject Table -->
<div class="card pt-4 pb-4" style="margin-left: 62px; margin-right: 62px;">
    <div class="card-header d-flex justify-content-between align-items-center bg-white">
        <!-- Left Side: Section Title and Suboptions -->
        <div>
            <h5 class="mb-0 fw-bold">All Subjects</h5>
            <small class="fw-normal">Manage your subjects from start to finish with complete control.</small>
        </div>

        <!-- Right Side: Download and Add Buttons -->
        <div class="d-flex gap-2">
            <div class="add-container">
                <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addSubjectModal">
                    <i class="fas fa-plus"></i>
                    <span class="btn-text">Add New Subject</span>
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

    <!-- Filter Section with Search -->
    <div class="d-flex justify-content-between mt-3 mb-3 w-100 gap-4 ps-4 pe-4">
        <!-- Left: Search Bar -->
        <div class="d-flex w-25">
            <input type="text" id="search" class="form-control w-100" placeholder="Search" onkeyup="filterTable()"/>
        </div>

        <!-- Right: Filter by Status -->
        <div class="d-flex w-50 gap-3 justify-content-end">
            <!-- Status Select Dropdown -->
            <select class="form-select w-25" id="statusSelect" aria-label="Status Select" style="font-size: 14px!important;" onchange="filterTableSelect()">
                <option selected>Status Select</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
    </div>

    <!-- Table Data -->
    <table class="table ps-3 pe-3" id="subjectTable" data-toggle="table" data-sortable="true" data-classes="table">
        <thead>
            <tr class="custom-header">
                <!-- Checkbox for Select All -->
                <th class="ps-3 pe-3"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"/></th>
                <th class="ps-3 pe-3" data-sortable="true">Subject Name</th>
                <th class="ps-3 pe-3" data-sortable="true">Subject Code</th>
                <th class="ps-3 pe-3" data-sortable="true">Department</th>
                <th class="ps-3 pe-3">Status</th>
                <th class="ps-3 pe-3">Action</th>
            </tr>
        </thead>
        <tbody id="subjectTableBody">
            <!-- Row 1 -->
            <tr>
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox1" onclick="toggleDeleteButton()" /></td>
                <td class="ps-4 pe-4">Mathematics</td>
                <td class="ps-4 pe-4">MATH101</td>
                <td class="ps-4 pe-4">Science</td>
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
                <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox2" onclick="toggleDeleteButton()" /></td>
                <td class="ps-4 pe-4">Physics</td>
                <td class="ps-4 pe-4">PHYS101</td>
                <td class="ps-4 pe-4">Science</td>
                <td class="ps-4 pe-4"><span class="badge bg-warning">Inactive</span></td>
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
                <td class="ps-4 pe-4">Chemistry</td>
                <td class="ps-4 pe-4">CHEM101</td>
                <td class="ps-4 pe-4">Science</td>
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
            <!-- Additional Rows for Subject Table -->
<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox4"onclick="toggleDeleteButton()" /></td>
    <td class="ps-4 pe-4">Biology</td>
    <td class="ps-4 pe-4">BIO101</td>
    <td class="ps-4 pe-4">Science</td>
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

<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox5"  onclick="toggleDeleteButton()"/></td>
    <td class="ps-4 pe-4">English</td>
    <td class="ps-4 pe-4">ENG101</td>
    <td class="ps-4 pe-4">Arts</td>
    <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
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

<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox6"onclick="toggleDeleteButton()" /></td>
    <td class="ps-4 pe-4">Computer Science</td>
    <td class="ps-4 pe-4">CS101</td>
    <td class="ps-4 pe-4">Engineering</td>
    <td class="ps-4 pe-4"><span class="badge bg-warning">Inactive</span></td>
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

<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox7" onclick="toggleDeleteButton()"/></td>
    <td class="ps-4 pe-4">History</td>
    <td class="ps-4 pe-4">HIST101</td>
    <td class="ps-4 pe-4">Arts</td>
    <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
    <td class="ps-4 pe-4">
        <!-- Dropdown with 3 dots -->
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                <li><a class="dropdown-item" href="#">Overview</a></li>
                <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox8" onclick="toggleDeleteButton()"/></td>
    <td class="ps-4 pe-4">Economics</td>
    <td class="ps-4 pe-4">ECO101</td>
    <td class="ps-4 pe-4">Commerce</td>
    <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
    <td class="ps-4 pe-4">
        <!-- Dropdown with 3 dots -->
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                <li><a class="dropdown-item" href="#">Overview</a></li>
                <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
            </ul>
        </div>
    </td>
</tr>

<tr>
    <td class="ps-4 pe-4"><input type="checkbox" class="selectRow" id="checkbox9" onclick="toggleDeleteButton()" /></td>
    <td class="ps-4 pe-4">Physical Education</td>
    <td class="ps-4 pe-4">PE101</td>
    <td class="ps-4 pe-4">Arts</td>
    <td class="ps-4 pe-4"><span class="badge bg-success">Active</span></td>
    <td class="ps-4 pe-4">
        <!-- Dropdown with 3 dots -->
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
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
    <div class="d-flex justify-content-between pt-4 pe-4 ps-4">
        <!-- Showing results text -->
        <div>Showing 1 to 3 of 3 entries</div>
        
        <!-- Pagination with Previous, Next, and page numbers -->
        <div>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <i class="bi bi-chevron-left"></i> Previous
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <span>1</span>
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;">
                <span>2</span>
            </button>
            <button class="btn btn-outline-primary" style="color:#727171; font-size: 12px; border: 1px solid #d3d1d1;"> Next
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Add New Subject Modal -->
<div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="addSubjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubjectModalLabel">Add New Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="subjectName" class="form-label">Subject Name</label>
                    <input type="text" class="form-control" id="subjectName" required>
                </div>
                <div class="mb-3">
                    <label for="subjectCode" class="form-label">Subject Code</label>
                    <input type="text" class="form-control" id="subjectCode" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-select" id="department" required>
                        <option selected>Choose Department</option>
                        <option value="Science">Science</option>
                        <option value="Arts">Arts</option>
                        <option value="Commerce">Commerce</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="subjectStatus" class="form-label">Status</label>
                    <select class="form-select" id="subjectStatus" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Subject</button>
            </div>
        </form>
    </div>
</div>


    <?php include('../includes/inc/footer.php');?>
</body>
</html>