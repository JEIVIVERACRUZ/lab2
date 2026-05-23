<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Sign Up</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- SIGNUP WRAPPER - Main container for resident registration -->
<div class="login-wrap">
  <!-- SIGNUP CARD - Two-column form layout -->
  <div class="login-card" style="width:920px">
    <!-- LEFT SIDE - Branding and welcome message -->
    <div class="login-left">
      <!-- BRAND SECTION - Logo and system name -->
      <div class="brand">
        <div class="logo"><img src="assets/images/logo.jpg" alt="ALAB-SI Logo"></div>
        <div>
          <h2>Barangay San Isidro</h2>
          <p class="text-muted">Resident Registration Portal</p>
        </div>
      </div>
      <!-- INTRO TEXT - Welcomes new residents -->
      <div style="margin-top:28px">
        <h3>Welcome to Our Community</h3>
        <p>Register as a resident to access barangay services, request documents, and stay connected with your community.</p>
      </div>
    </div>

    <!-- RIGHT SIDE - Registration form section -->
    <div class="login-right" style="max-height:90vh;overflow-y:auto">
      <!-- FORM HEADER - Title and link back to login -->
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px">
        <h3>Create Account</h3>
        <a href="index.php" class="text-muted" style="font-size:13px;text-decoration:underline">Back to Login</a>
      </div>

      <!-- REGISTRATION FORM - Collects resident information for account creation -->
      <form id="signupForm">
        <!-- PERSONAL INFORMATION SECTION -->
        <div class="form-grid">
          <!-- FIRST NAME INPUT -->
          <div class="form-group">
            <label>First Name</label>
            <input class="form-control" type="text" placeholder="Juan" required>
          </div>
          <!-- LAST NAME INPUT -->
          <div class="form-group">
            <label>Last Name</label>
            <input class="form-control" type="text" placeholder="Dela Cruz" required>
          </div>
        </div>

        <!-- CONTACT INFORMATION SECTION -->
        <div class="form-grid">
          <!-- EMAIL INPUT -->
          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" type="email" placeholder="juan@example.com" required>
          </div>
          <!-- PHONE NUMBER INPUT -->
          <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" type="tel" placeholder="0917 555 0123" required>
          </div>
        </div>

        <!-- DEMOGRAPHICS SECTION -->
        <div class="form-grid">
          <!-- DATE OF BIRTH INPUT -->
          <div class="form-group">
            <label>Date of Birth</label>
            <input class="form-control" type="date" required>
          </div>
          <!-- GENDER DROPDOWN -->
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control" required>
              <option value="">Select...</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="O">Other</option>
            </select>
          </div>
        </div>

        <!-- ADDRESS INFORMATION SECTION -->
        <!-- STREET ADDRESS INPUT -->
        <div class="form-group">
          <label>Street Address</label>
          <input class="form-control" type="text" placeholder="123 Sampaguita St." required>
        </div>

        <!-- ZONE AND HOUSE NUMBER -->
        <div class="form-grid">
          <!-- ZONE/PUROK DROPDOWN -->
          <div class="form-group">
            <label>Zone / Purok</label>
            <select class="form-control" required>
              <option value="">Select Zone...</option>
              <option value="Zone 1">Zone 1</option>
              <option value="Zone 2">Zone 2</option>
              <option value="Zone 3">Zone 3</option>
            </select>
          </div>
          <!-- HOUSE NUMBER INPUT -->
          <div class="form-group">
            <label>House Number</label>
            <input class="form-control" type="text" placeholder="Lot 5" required>
          </div>
        </div>

        <!-- OCCUPATION INPUT -->
        <div class="form-group">
          <label>Occupation</label>
          <input class="form-control" type="text" placeholder="e.g., Teacher, Farmer" required>
        </div>

        <!-- ACCOUNT CREDENTIALS SECTION -->
        <div class="form-grid">
          <!-- PASSWORD INPUT -->
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Min. 8 characters" required>
          </div>
          <!-- CONFIRM PASSWORD INPUT -->
          <div class="form-group">
            <label>Confirm Password</label>
            <input class="form-control" type="password" placeholder="Re-enter password" required>
          </div>
        </div>

        <!-- TERMS AND CONDITIONS CHECKBOX -->
        <div style="margin:16px 0;display:flex;align-items:flex-start;gap:8px">
          <input type="checkbox" id="agreeTerms" required style="margin-top:2px">
          <label for="agreeTerms" style="font-size:13px;line-height:1.4">I agree to the Terms of Service and Privacy Policy of Barangay San Isidro and confirm that the information provided is accurate.</label>
        </div>

        <!-- SUBMIT BUTTON - Creates account after form validation -->
        <div style="display:flex;gap:10px;align-items:center">
          <button class="btn btn-primary" type="submit" style="flex:1">Create Account</button>
        </div>

        <!-- LINK TO LOGIN PAGE - For existing residents -->
        <div class="login-footer text-muted" style="margin-top:16px">
          Already have an account? <a href="index.php" style="color:var(--primary);font-weight:600;text-decoration:none">Sign In</a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- JAVASCRIPT SECTION - Handles form submission -->
<script>
document.getElementById('signupForm').addEventListener('submit', function(e) {
  // PREVENT DEFAULT FORM SUBMISSION - Handle with JavaScript instead
  e.preventDefault();
  
  // GET FORM DATA - Collect all form field values
  const formData = new FormData(this);
  const firstName = formData.get('first_name');
  
  // MOCK SIGNUP - In production this would submit to backend database
  alert('Account created successfully! You can now log in.');
  
  // REDIRECT TO LOGIN - Send user to login page after registration
  window.location.href = 'index.php';
});
</script>

</body>
</html>
