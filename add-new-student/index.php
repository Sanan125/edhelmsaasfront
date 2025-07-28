<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Student</title>
    <?php 
        $basePath = '../'; 
        include('../includes/inc/header.php'); 
    ?>
    <!-- PapaParse CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.4.1/papaparse.min.js"></script>
</head>
<body>
<?php include('../includes/inc/topbar.php');?>
<?php include('../includes/inc/sidebar.php');?>

<!-- Main Content -->
<div class="main-content">
    <?php include('../includes/inc/breadcrumb.php');?>

    <div class="card mt-3 mt-sm-4 p-3 p-md-5 px-3 px-sm-4 px-md-5 mx-2 mx-sm-3 mx-md-4 mx-lg-5 mb-5">
        <div class="card-header bg-white d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
            <div>
                <h5 class="mb-1 fw-bold">Add New Student</h5>
                <small class="fw-normal">Fill in the details below to add a new student.</small>
            </div>

            <!-- Bulk Upload Toggle -->
            <div class="bulk-upload-section mt-2 mt-md-0">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="bulkUploadToggle">
                    <label for="bulkUploadToggle" class="form-check-label fw-bold">Upload your files in bulk</label>
                </div>
            </div>
        </div>

        <!-- Bulk Upload Form (Hidden by default) -->
        <div id="bulkUploadForm" style="display:none; margin-top:20px;">
            <form action="add_student_process.php" method="POST" enctype="multipart/form-data">
                <label class="form-label">Upload CSV File:</label>
                <input type="file" class="form-control form-control-sm mt-1" name="bulk_upload" accept=".csv" required>
                <button type="submit" class="btn btn-primary btn-sm mt-3">Upload</button>
            </form>

            <!-- ✅ CSV Template Download & Preview -->
            <div class="mt-4 p-3 border rounded bg-light">
                <h6 class="fw-bold mb-2">📄 Download Bulk Upload Template</h6>
                <p class="small mb-2">Use this CSV template to correctly format your bulk student data.</p>
                <a href="../assests/files/student.csv" class="btn btn-outline-secondary btn-sm" download>
                    <i class="fas fa-download"></i> Download CSV Template
                </a>

                <!-- 🔥 Exact CSV File Preview -->
                <div class="mt-3">
                    <h6 class="fw-bold">Template Preview:</h6>
                    <div id="csvPreview" style="overflow-x:auto; border:0px solid #ccc; border-radius:8px; padding:10px;"></div>
                </div>
            </div>
        </div>

        <!-- ✅ Full Add Student Form -->
        <form id="addStudentForm" action="add_student_process.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row g-3">
                    <!-- Your existing form fields here... (unchanged) -->

                    <div class="col-12 col-sm-6">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="guardian" class="form-label">Guardian</label>
                        <input type="text" class="form-control" id="guardian" name="guardian">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="admission_date" class="form-label">Admission Date *</label>
                        <input type="date" class="form-control" id="admission_date" name="admission_date" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="dob" class="form-label">Date of Birth *</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="gender" class="form-label">Gender *</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="blood_group" class="form-label">Blood Group</label>
                        <input type="text" class="form-control" id="blood_group" name="blood_group">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="class" class="form-label">Class *</label>
                        <select class="form-select" id="class" name="class" required>
                            <option value="" disabled selected>Select Class</option>
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
                            <option value="Four">Four</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="section" class="form-label">Section *</label>
                        <input type="text" class="form-control" id="section" name="section" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="group" class="form-label">Group</label>
                        <input type="text" class="form-control" id="group" name="group">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="optional_subject" class="form-label">Optional Subject</label>
                        <input type="text" class="form-control" id="optional_subject" name="optional_subject">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="register_no" class="form-label">Register No *</label>
                        <input type="text" class="form-control" id="register_no" name="register_no" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="roll" class="form-label">Roll *</label>
                        <input type="text" class="form-control" id="roll" name="roll" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="extra_curricular" class="form-label">Extra Curricular Activities</label>
                        <input type="text" class="form-control" id="extra_curricular" name="extra_curricular">
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="2"></textarea>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="username" class="form-label">Username *</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-center justify-content-md-end">
                <button type="submit" class="btn btn-success shadow-sm px-3 d-flex align-items-center gap-2">
                    <i class="fas fa-user-graduate"></i> 
                    <span>Add Student</span>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include('../includes/inc/footer.php'); ?>

<!-- JS Toggle and CSV Preview -->
<script>
document.getElementById('bulkUploadToggle').addEventListener('change', function () {
    const bulkForm = document.getElementById('bulkUploadForm');
    const addForm = document.getElementById('addStudentForm');
    if (this.checked) {
        bulkForm.style.display = 'block';
        addForm.style.display = 'none';
    } else {
        bulkForm.style.display = 'none';
        addForm.style.display = 'block';
    }
});

// Load CSV Preview on page load
function loadCSVPreview() {
    Papa.parse("../assests/files/student.csv", {
        download: true,
        header: true,
        complete: function (results) {
            const data = results.data;
            const previewDiv = document.getElementById('csvPreview');
            if (!data.length) {
                previewDiv.innerHTML = "<p class='text-danger'>No data found in CSV.</p>";
                return;
            }

            let table = '<table class="table table-bordered table-sm mb-0">';
            table += '<thead><tr>';
            Object.keys(data[0]).forEach(key => {
                table += `<th>${key}</th>`;
            });
            table += '</tr></thead><tbody>';

            data.forEach(row => {
                table += '<tr>';
                Object.values(row).forEach(val => {
                    table += `<td>${val || ''}</td>`;
                });
                table += '</tr>';
            });

            table += '</tbody></table>';
            previewDiv.innerHTML = table;
        }
    });
}

document.addEventListener("DOMContentLoaded", loadCSVPreview);
</script>
</body>
</html>