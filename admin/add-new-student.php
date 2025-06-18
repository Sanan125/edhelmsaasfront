<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Student</title>

              <!-- header call  php function -->

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

        
    <?php include('../topbar.php');?>

    
 <div class="card p-4" style="margin-left: 62px; margin-right: 62px;">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <!-- Left side: Add New Student Title -->
        <div>
            <h5 class="mb-0 fw-bold">Add New Student</h5>
            <small class="fw-normal">Fill in the details below to add a new student.</small>
        </div>
        
        <!-- Right side: Bulk Upload Section -->
      <div class="bulk-upload-section">
   <small class="fw-bold">Upload your files in bulk</small>
    <form action="add_student_process.php" method="POST" enctype="multipart/form-data">
        <div class="my-2">
            <input type="file" class="form-control form-control-sm" id="bulk_upload" name="bulk_upload" accept=".csv,.xlsx,.xls" required>
        </div>
    </form>
</div>
    </div>

                <!-- Add Student Form -->
                <form action="add_student_process.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <!-- Name and Guardian -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="guardian" class="form-label">Guardian</label>
                                <input type="text" class="form-control" id="guardian" name="guardian">
                            </div>

                            <!-- Admission Date and DOB -->
                            <div class="col-md-6 mb-3">
                                <label for="admission_date" class="form-label">Admission Date *</label>
                                <input type="date" class="form-control" id="admission_date" name="admission_date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dob" class="form-label">Date of Birth *</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>

                            <!-- Gender and Blood Group -->
                            <div class="col-md-6 mb-3">
                                <label for="gender" class="form-label">Gender *</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="blood_group" class="form-label">Blood Group</label>
                                <input type="text" class="form-control" id="blood_group" name="blood_group">
                            </div>

                            <!-- Religion and Email -->
                            <div class="col-md-6 mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <input type="text" class="form-control" id="religion" name="religion">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Phone and Address -->
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address"></textarea>
                            </div>

                            <!-- State and Country -->
                            <div class="col-md-6 mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country">
                            </div>

                            <!-- Class, Section, and Group -->
                            <div class="col-md-6 mb-3">
                                <label for="class" class="form-label">Class *</label>
                                <select class="form-select" id="class" name="class" required>
                                    <option value="" disabled selected>Select Class</option>
                                    <option value="One">One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                    <option value="Four">Four</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="section" class="form-label">Section *</label>
                                <input type="text" class="form-control" id="section" name="section" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="group" class="form-label">Group</label>
                                <input type="text" class="form-control" id="group" name="group">
                            </div>

                            <!-- Optional Subject -->
                            <div class="col-md-6 mb-3">
                                <label for="optional_subject" class="form-label">Optional Subject</label>
                                <input type="text" class="form-control" id="optional_subject" name="optional_subject">
                            </div>

                            <!-- Register No and Roll -->
                            <div class="col-md-6 mb-3">
                                <label for="register_no" class="form-label">Register No *</label>
                                <input type="text" class="form-control" id="register_no" name="register_no" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="roll" class="form-label">Roll *</label>
                                <input type="text" class="form-control" id="roll" name="roll" required>
                            </div>

                            <!-- Photo Upload -->
                            <div class="col-md-6 mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            </div>

                            <!-- Extra Curricular Activities and Remarks -->
                            <div class="col-md-6 mb-3">
                                <label for="extra_curricular" class="form-label">Extra Curricular Activities</label>
                                <input type="text" class="form-control" id="extra_curricular" name="extra_curricular">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea class="form-control" id="remarks" name="remarks"></textarea>
                            </div>

                            <!-- Username and Password -->
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username *</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password *</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary add-student-btn" style="background-color: var(--success-color); color: white; border:none;">
                            <i class="fas fa-user-graduate"></i> Add Student
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>     

   <?php include('../footer.php');?>
</body>
</html>