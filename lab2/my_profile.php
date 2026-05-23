<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — My Inhabitant Profile</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- ADMIN DASHBOARD - Main app container -->
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
      <!-- SIDEBAR MENU - Navigation links to different admin sections -->
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

    <!-- MAIN CONTENT AREA -->
    <main class="main">
      <!-- PAGE TITLE AND DESCRIPTION -->
      <div class="topbar">
        <div>
          <h3>My Inhabitant Profile</h3>
          <div class="text-muted">Review resident details and household information.</div>
        </div>
      </div>

      <!-- KEY STATISTICS - Shows overview of resident data -->
      <div class="stats">
        <!-- STAT 1 - Total registered residents -->
        <div class="stat">
          <h4>Registered Residents</h4>
          <p data-target="1810">0</p>
          <div class="stat-icon">👤</div>
          <div class="stat-change positive">Updated today</div>
        </div>
        <!-- STAT 2 - Family heads count -->
        <div class="stat">
          <h4>Family Heads</h4>
          <p data-target="498">0</p>
          <div class="stat-icon">🏠</div>
          <div class="stat-change positive">+2.4% this month</div>
        </div>
        <!-- STAT 3 - Active households -->
        <div class="stat">
          <h4>Active Households</h4>
          <p data-target="570">0</p>
          <div class="stat-icon">📊</div>
          <div class="stat-change positive">Data refreshed</div>
        </div>
      </div>

      <!-- QUICK ACTION CARDS - Links to related functions -->
      <div class="content-cards">
        <!-- RESIDENT SUMMARY CARD -->
        <div class="card">
          <h4>Resident Summary</h4>
          <small class="text-muted">Latest profile updates for barangay members.</small>
        </div>
        <!-- HOUSEHOLD OVERVIEW CARD -->
        <div class="card">
          <h4>Household Overview</h4>
          <small class="text-muted">Check active families, age groups, and locations.</small>
        </div>
        <!-- COMMUNITY NOTES CARD -->
        <div class="card">
          <h4>Community Notes</h4>
          <small class="text-muted">Staff comments and recent resident alerts.</small>
        </div>
      </div>

      <!-- FEATURED RESIDENT PROFILE - Displays sample resident details -->
      <div class="card">
        <h3>Featured Resident</h3>
        <!-- TWO-COLUMN LAYOUT - Left column: basic info, Right column: address & emergency contact -->
        <div class="form-grid">
          <!-- LEFT COLUMN - Name, age, ID, occupation -->
          <div>
            <!-- RESIDENT NAME FIELD -->
            <div class="form-group">
              <label>Name</label>
              <input type="text" value="Maria L. Santos" readonly>
            </div>
            <!-- RESIDENT AGE FIELD -->
            <div class="form-group">
              <label>Age</label>
              <input type="text" value="34" readonly>
            </div>
            <!-- BARANGAY ID FIELD -->
            <div class="form-group">
              <label>Barangay ID</label>
              <input type="text" value="BRGY-2026-014" readonly>
            </div>
            <!-- OCCUPATION FIELD -->
            <div class="form-group">
              <label>Occupation</label>
              <input type="text" value="Community Health Worker" readonly>
            </div>
          </div>
          <!-- RIGHT COLUMN - Address, household status, emergency contact -->
          <div>
            <!-- ADDRESS FIELD -->
            <div class="form-group">
              <label>Address</label>
              <textarea rows="4" readonly>123 Sampaguita St., Zone 2, Barangay San Isidro</textarea>
            </div>
            <!-- HOUSEHOLD HEAD STATUS FIELD -->
            <div class="form-group">
              <label>Household Head</label>
              <input type="text" value="Yes" readonly>
            </div>
            <!-- EMERGENCY CONTACT FIELD -->
            <div class="form-group">
              <label>Emergency Contact</label>
              <input type="text" value="Jose P. Santos — 0917 555 0123" readonly>
            </div>
          </div>
        </div>
      </div>

      <!-- RESIDENT RECORDS TABLE - Shows all registered residents -->
      <div class="card">
        <h3>Recent Resident Records</h3>
        <!-- TABLE CONTAINER - Scrollable table for responsive design -->
        <div class="table-container">
          <!-- RESIDENTS TABLE -->
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Relation</th>
                <th>Age</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria L. Santos</td>
                <td>Self</td>
                <td>34</td>
                <td><span class="badge badge-success">Verified</span></td>
              </tr>
              <tr>
                <td>Jose P. Santos</td>
                <td>Spouse</td>
                <td>36</td>
                <td><span class="badge badge-success">Verified</span></td>
              </tr>
              <tr>
                <td>Angelica Santos</td>
                <td>Daughter</td>
                <td>8</td>
                <td><span class="badge badge-info">Pending</span></td>
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
