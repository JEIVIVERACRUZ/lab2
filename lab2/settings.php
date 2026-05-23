<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Settings</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- SETTINGS PAGE - Configure barangay information, system preferences, and security -->
  <div class="app">
    <!-- SIDEBAR - Navigation menu for admin sections -->
    <aside class="sidebar">
      <!-- SIDEBAR HEADER - Branding -->
      <div class="sidebar-header">
        <div class="logo-box">
          <img src="assets/images/logo.jpg" alt="Logo">
        </div>
        <div>
          <h3>Barangay Admin</h3>
          <p class="text-muted">San Isidro</p>
        </div>
      </div>
      <!-- SIDEBAR MENU - Navigation links to admin sections -->
      <ul class="menu">
        <li><a href="dashboard.php"><div class="icon">🏠</div><span>Dashboard</span></a></li>
        <li><a href="my_profile.php"><div class="icon">👥</div><span>My Inhabitant Profile</span></a></li>
        <li><a href="issuance.php"><div class="icon">🧾</div><span>Issuance / Documents</span></a></li>
        <li><a href="announcements.php"><div class="icon">📢</div><span>Announcements</span></a></li>
        <li><a href="mapping.php"><div class="icon">📍</div><span>Geographic Mapping</span></a></li>
        <li><a href="reports.php"><div class="icon">🧾</div><span>Reports Management</span></a></li>
        <li><a href="users.php"><div class="icon">🔒</div><span>User Management</span></a></li>
        <li><a href="settings.php"><div class="icon">⚙️</div><span>Settings</span></a></li>
        <li><a href="admin_login.php" style="color:#ef4444"><div class="icon">🚪</div><span>Sign Out</span></a></li>
      </ul>
    </aside>

    <main class="main">
      <div class="topbar">
        <div>
          <h3>Settings</h3>
          <div class="text-muted">Update barangay information, system preferences, and security options.</div>
        </div>
      </div>

      <div class="card">
        <h3>Barangay Information</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Barangay Name</label>
            <input type="text" value="Barangay San Isidro">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" value="123 Sampaguita St., Zone 2, San Isidro">
          </div>
          <div class="form-group">
            <label>Contact Number</label>
            <input type="text" value="(02) 555-1234">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" value="info@barangaysanisdro.gov.ph">
          </div>
        </div>
      </div>

      <div class="card">
        <h3>System Branding</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>System Logo</label>
            <input type="file">
          </div>
          <div class="form-group">
            <label>Theme Color</label>
            <input type="color" value="#0066cc">
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Security Settings</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Current Password</label>
            <input type="password" placeholder="Enter current password">
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" placeholder="Enter new password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" placeholder="Confirm new password">
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Backup & Restore</h3>
        <p class="text-muted">Create or restore system snapshots for the barangay database.</p>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm btn-export" data-type="backup">Create Backup</button>
          <button class="btn btn-secondary btn-sm btn-export" data-type="restore">Restore Backup</button>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
</body>
</html>
