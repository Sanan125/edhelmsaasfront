<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Include the Header -->
    <?php 
  $basePath = '../'; // because this page is inside a subfolder
  include('../includes/inc/header.php'); 
?>
   
   
</head>
<body>
   
 <!-- !-- Full page container with flexbox to center content --> 
     <div class="container-fluid d-flex justify-content-center align-items-center vh-100 p-0">
        <div class="row w-50 no-gap"> <!-- no-gap removes the gap between columns -->
            <!-- Left Column (Form) -->
            <div class="col-md-6 p-0"> <!-- w-50 replaced with col-md-6 for 50% width -->
                <div class="card p-4 w-100 ">
                    <h2 class="text-left mb-2 mt-2"><b>Welcome Back! </b></h2>
                     <h6 class="text-left mb-4"style="color:#7E787C;">Please login to your account</h6>

    
                 <form >

    <div class="fullname d-flex mb-2">
  <div class="mb-3 me-3 w-50">
    <label for="fullName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
  </div>

  <div class="mb-3 w-50">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
  </div>
</div>

<div class="phone d-flex mb-2">
  <div class="mb-3 me-3 w-50">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" id="phone" placeholder="123-456-7890" required>
  </div>

  <div class="mb-3 w-50">
    <label for="role" class="form-label">Role</label>
    <select class="form-select" id="role" required>
      <option value="student">Student</option>
      <option value="teacher">Teacher</option>
      <option value="admin">Admin</option>
    </select>
  </div>
</div>

<div class="password d-flex mb-2">
  <div class="mb-3 me-3 w-50">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="••••••" required>
  </div>

  <div class="mb-3 w-50">
    <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmPassword" placeholder="••••••" required>
  </div>
</div>

<div class="conditions mb-3 w-100">
  <div class="form-check">
    <input type="checkbox" class="form-check-input me-2" id="terms" required>
    <label class="form-check-label" for="terms">I agree to the Terms and Conditions</label>
  </div>
</div>


<div class="sign d-flex justify-content-center align-items-center w-100">
  <button type="submit" class="btn btn-primary me-3">Sign Up</button>
  <p class="acount btn-success d-flex justify-content-center align-items-center mt-3 mb-0"><a href="#">Already have an account?</a></p>
</div>



</form>

 


         <div class="mt-0">
    <!--form align center -->
          <div class="row justify-content-center">
        
    </div>
   
     </div>

      </div>
        </div>

            <!-- Right Column (Image as Background) -->
            <div class="col-md-6 p-0 right-column">
                <!-- Background image will automatically fill the column -->
            </div>
        </div>
    </div>








     

    <?php include('../includes/inc/footer.php');?>
</body>
</html>