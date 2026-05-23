<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Reports Management</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- REPORTS MANAGEMENT PAGE - Generate and export barangay analytics reports -->
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
          <h3>Reports Management</h3>
          <div class="text-muted">Generate and export key barangay analytics reports.</div>
        </div>
        <div class="topbar-actions">
          <button class="btn btn-primary btn-sm btn-export" data-type="pdf">Export PDF</button>
          <button class="btn btn-secondary btn-sm btn-export" data-type="excel">Export Excel</button>
        </div>
      </div>

      <div class="card">
        <div class="form-grid">
          <div class="form-group">
            <label>Report Type</label>
            <select id="reportFilter">
              <option>Population Report</option>
              <option>Request Report</option>
              <option>Household Report</option>
            </select>
          </div>
          <div class="form-group">
            <label>Start Date</label>
            <input type="date">
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="date">
          </div>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <h4>Population Summary</h4>
          <p data-target="1750">0</p>
          <div class="stat-icon">📈</div>
          <div class="stat-change positive">Updated weekly</div>
        </div>
        <div class="stat">
          <h4>Requests Logged</h4>
          <p data-target="421">0</p>
          <div class="stat-icon">📑</div>
          <div class="stat-change positive">New insights</div>
        </div>
        <div class="stat">
          <h4>Household Records</h4>
          <p data-target="598">0</p>
          <div class="stat-icon">🏘️</div>
          <div class="stat-change positive">Stable volumes</div>
        </div>
      </div>

      <div class="card">
        <h3>Report Details</h3>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Report</th>
                <th>Type</th>
                <th>Created</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population Growth</td>
                <td>Population Report</td>
                <td>May 18, 2026</td>
                <td><span class="badge badge-success">Ready</span></td>
              </tr>
              <tr>
                <td>Document Requests</td>
                <td>Request Report</td>
                <td>May 17, 2026</td>
                <td><span class="badge badge-info">Processing</span></td>
              </tr>
              <tr>
                <td>Household Allocation</td>
                <td>Household Report</td>
                <td>May 16, 2026</td>
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
