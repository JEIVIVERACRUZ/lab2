<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Welcome</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<!-- WELCOME PAGE - Landing page showing both resident and admin portals -->
<body style="background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;display:flex;align-items:center;justify-content:center">

<!-- MAIN CONTAINER - Centered content wrapper -->
<div style="max-width:1000px;width:92%;color:#fff">
  <!-- PAGE TITLE SECTION -->
  <div style="text-align:center;margin-bottom:40px">
    <div style="font-size:64px;margin-bottom:16px">🏘️</div>
    <h1 style="margin:0 0 8px;font-size:32px;font-weight:700">Barangay San Isidro</h1>
    <p style="margin:0;font-size:18px;opacity:0.9">Local Assistance for Barangay Services</p>
  </div>

  <!-- MAIN SECTIONS - Two options for residents and admins -->
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-bottom:40px">
    <!-- RESIDENT PORTAL CARD -->
    <div style="background:rgba(255,255,255,0.15);border-radius:14px;padding:28px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2)">
      <div style="font-size:40px;margin-bottom:12px">👤</div>
      <h3 style="margin:0 0 8px;font-size:20px">Resident Portal</h3>
      <p style="margin:0 0 16px;font-size:14px;opacity:0.9">Request documents, book appointments, track applications, and pay fees online</p>
      <a href="index.php" class="btn btn-primary" style="display:inline-block;text-decoration:none">Sign In / Sign Up</a>
    </div>

    <!-- ADMIN DASHBOARD CARD -->
    <div style="background:rgba(255,255,255,0.15);border-radius:14px;padding:28px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2)">
      <div style="font-size:40px;margin-bottom:12px">🔐</div>
      <h3 style="margin:0 0 8px;font-size:20px">Admin Dashboard</h3>
      <p style="margin:0 0 16px;font-size:14px;opacity:0.9">Manage residents, process requests, view reports, and administer barangay services</p>
      <a href="admin_login.php" class="btn btn-primary" style="display:inline-block;text-decoration:none">Admin Login</a>
    </div>
  </div>

  <!-- QUICK LINKS SECTION - Fast access to common features -->
  <div style="background:rgba(255,255,255,0.15);border-radius:14px;padding:28px;backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);margin-bottom:40px">
    <h3 style="margin:0 0 16px;font-size:18px">Quick Links</h3>
    <!-- QUICK ACTION LINKS - Common tasks residents might want to do -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px">
      <!-- REQUEST DOCUMENT LINK -->
      <a href="index.php" style="background:rgba(255,255,255,0.1);padding:12px 16px;border-radius:8px;text-decoration:none;color:#fff;transition:all 0.3s;display:inline-block" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
        📋 Request Document
      </a>
      <!-- BOOK APPOINTMENT LINK -->
      <a href="index.php" style="background:rgba(255,255,255,0.1);padding:12px 16px;border-radius:8px;text-decoration:none;color:#fff;transition:all 0.3s;display:inline-block" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
        📅 Book Appointment
      </a>
      <!-- PAY FEES LINK -->
      <a href="index.php" style="background:rgba(255,255,255,0.1);padding:12px 16px;border-radius:8px;text-decoration:none;color:#fff;transition:all 0.3s;display:inline-block" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
        💳 Pay Fees Online
      </a>
      <!-- TRACK STATUS LINK -->
      <a href="index.php" style="background:rgba(255,255,255,0.1);padding:12px 16px;border-radius:8px;text-decoration:none;color:#fff;transition:all 0.3s;display:inline-block" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
        ✓ Track Request Status
      </a>
    </div>
  </div>

  <!-- FOOTER - Copyright information -->
  <div style="text-align:center;opacity:0.8">
    <p style="margin:0;font-size:13px">Barangay San Isidro © 2026 | All Rights Reserved</p>
  </div>
</div>

</body>
</html>
