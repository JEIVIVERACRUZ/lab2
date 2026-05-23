<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Admin Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- LOGIN WRAPPER - Main container for the login page -->
<div class="login-wrap">
  <!-- LOGIN CARD - Centered login form container -->
  <div class="login-card">
    <!-- LEFT SIDE - Branding and introduction section -->
    <div class="login-left">
      <!-- BRAND SECTION - Logo and system name -->
      <div class="brand">
        <div class="logo"><img src="assets/images/logo.jpg" alt="ALAB-SI Logo"></div>
        <div>
          <h2>Local Assistance for Barangay Services</h2>
          <p class="text-muted">Barangay administration portal</p>
        </div>
      </div>
      <!-- INTRO TEXT - Explains what this login page is for -->
      <div style="margin-top:28px">
        <h3>Admin Access</h3>
        <p>Sign in with admin credentials to access the management dashboard</p>
      </div>
    </div>

    <!-- RIGHT SIDE - Login form section -->
    <div class="login-right">
      <h3>Admin Sign In</h3>
      <!-- LOGIN FORM - Takes admin username and password -->
      <form>
        <!-- USERNAME INPUT FIELD -->
        <div class="form-group">
          <input class="form-control" placeholder="Admin Username">
        </div>
        <!-- PASSWORD INPUT FIELD -->
        <div class="form-group">
          <input class="form-control" placeholder="Password" type="password">
        </div>
        <!-- REMEMBER ME CHECKBOX and FORGOT PASSWORD LINK -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
          <label class="remember"><input type="checkbox" checked> Remember me</label>
          <a class="text-muted" href="#">Forgot Password</a>
        </div>
        <!-- LOGIN BUTTON - Takes admin to dashboard -->
        <div style="display:flex;gap:10px;align-items:center">
          <a href="dashboard.php" class="btn btn-primary">Login</a>
        </div>
        <!-- LINK TO RESIDENT LOGIN - Allows residents to access their portal -->
        <div class="login-footer text-muted">
          Are you a resident? <a href="index.php" style="color:var(--primary);font-weight:600;text-decoration:none">Resident Login</a>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
