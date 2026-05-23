<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- LOGIN WRAPPER - Main container for the resident login page -->
<div class="login-wrap">
  <!-- LOGIN CARD - Centered login form container -->
  <div class="login-card">
    <!-- LEFT SIDE - Branding and welcome section -->
    <div class="login-left">
      <!-- BRAND SECTION - Logo and system name -->
      <div class="brand">
        <div class="logo"><img src="assets/images/logo.jpg" alt="ALAB-SI Logo"></div>
        <div>
          <h2>Local Assistance for Barangay Services</h2>
          <p class="text-muted">Barangay administration portal</p>
        </div>
      </div>
      <!-- INTRO TEXT - Welcomes residents back to the system -->
      <div style="margin-top:28px">
        <h3>Welcome Back!</h3>
        <p>Sign in to continue to LGUSS</p>
      </div>
    </div>

    <!-- RIGHT SIDE - Login form section for residents -->
    <div class="login-right">
      <h3>Sign In</h3>
      <!-- LOGIN FORM - Takes resident username/email and password -->
      <form>
        <!-- USERNAME OR EMAIL INPUT FIELD -->
        <div class="form-group">
          <input class="form-control" placeholder="Username or Email">
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
        <!-- LOGIN BUTTON - Takes resident to their portal -->
        <div style="display:flex;gap:10px;align-items:center">
          <a href="resident_portal.php" class="btn btn-primary">Login</a>
        </div>
        <!-- LINK TO SIGNUP - Allows new residents to create an account -->
        <div class="login-footer text-muted">Don't have an account? <a href="signup.php" style="color:var(--primary);font-weight:600;text-decoration:none">Sign Up Here</a></div>
        <!-- LINK TO ADMIN LOGIN - Allows staff/admins to access admin portal -->
        <div style="text-align:center;margin-top:12px;padding-top:12px;border-top:1px solid var(--border)">
          <small class="text-muted">Staff/Admin? <a href="admin_login.php" style="color:var(--primary);font-weight:600;text-decoration:none">Admin Login</a></small>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
