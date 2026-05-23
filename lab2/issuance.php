<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Issuance / Documents</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- DOCUMENT ISSUANCE PAGE - Admin interface for processing document requests -->
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
          <h3>Issuance / Documents</h3>
          <div class="text-muted">Process certificates, clearances, and document requests.</div>
        </div>
        <div class="topbar-actions">
          <button class="btn btn-primary btn-sm" type="button" data-toast="Create Document">Create Document</button>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <h4>Requests Today</h4>
          <p data-target="27">0</p>
          <div class="stat-icon">📄</div>
          <div class="stat-change positive">+10% from yesterday</div>
        </div>
        <div class="stat">
          <h4>Approved</h4>
          <p data-target="18">0</p>
          <div class="stat-icon">✅</div>
          <div class="stat-change positive">Strong processing</div>
        </div>
        <div class="stat">
          <h4>Pending</h4>
          <p data-target="9">0</p>
          <div class="stat-icon">⏳</div>
          <div class="stat-change warning">Review required</div>
        </div>
      </div>

      <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-bottom:18px">
          <div>
            <h3>Document Requests</h3>
            <p class="text-muted">View, search, and manage recent applications.</p>
          </div>
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm" type="button">Filter by Zone</button>
            <button class="btn btn-secondary btn-sm" type="button">Export List</button>
          </div>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Resident</th>
                <th>Document</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jose Dela Cruz</td>
                <td>Barangay Clearance</td>
                <td>May 20, 2026</td>
                <td><span class="badge badge-warning">Pending</span></td>
              </tr>
              <tr>
                <td>Ella Bautista</td>
                <td>Certificate of Indigency</td>
                <td>May 19, 2026</td>
                <td><span class="badge badge-success">Approved</span></td>
              </tr>
              <tr>
                <td>Ramon Villanueva</td>
                <td>Barangay ID</td>
                <td>May 18, 2026</td>
                <td><span class="badge badge-danger">Rejected</span></td>
              </tr>
              <tr>
                <td>Marissa Cruz</td>
                <td>Business Permit</td>
                <td>May 17, 2026</td>
                <td><span class="badge badge-warning">Pending</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
</body>
</html>
