<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- ADMIN DASHBOARD - Main administrative interface for barangay management -->
  <div class="app">
    <!-- SIDEBAR - Navigation menu for admin sections -->
    <aside class="sidebar">
      <!-- SIDEBAR HEADER - Branding and title -->
      <div class="sidebar-header">
        <div class="logo-box">
          <img src="assets/images/logo.jpg" alt="Logo">
        </div>
        <div>
          <h3>Barangay Admin</h3>
          <p class="text-muted">San Isidro</p>
        </div>
      </div>
      <!-- SIDEBAR MENU - Links to admin sections: dashboard, residents, documents, announcements, mapping, reports, users, settings -->
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
      <!-- PAGE TITLE - Dashboard heading and description -->
      <div class="topbar">
        <div>
          <h3>Dashboard</h3>
          <div class="text-muted">Overview of barangay data, requests and resident insights.</div>
        </div>
        <!-- TOP ACTION BUTTONS -->
        <div class="topbar-actions">
          <button class="btn btn-secondary btn-sm" type="button">Activity Log</button>
          <button class="btn btn-primary btn-sm" type="button">New Request</button>
        </div>
      </div>

      <!-- KEY STATISTICS SECTION - Shows important dashboard metrics -->
      <div class="stats">
        <!-- STAT 1 - Total residents count -->
        <div class="stat">
          <h4>Total Residents</h4>
          <p data-target="1810">0</p>
          <div class="stat-icon">👥</div>
          <div class="stat-change positive">+4.8% this month</div>
        </div>
        <!-- STAT 2 - Pending document requests -->
        <div class="stat">
          <h4>Pending Requests</h4>
          <p data-target="38">0</p>
          <div class="stat-icon">🧾</div>
          <div class="stat-change warning">+12% since last week</div>
        </div>
        <!-- STAT 3 - System activities and uptime -->
        <div class="stat">
          <h4>System Activities</h4>
          <p data-target="129">0</p>
          <div class="stat-icon">⚡</div>
          <div class="stat-change positive">Stable uptime</div>
        </div>
      </div>

      <!-- HERO SECTION - Banner with system title and description -->
      <div class="hero">
        <div class="overlay">
          <h1>Barangay San Isidro Analytics</h1>
          <p>Monitor population growth, document requests, and zone activity with live dashboard indicators.</p>
        </div>
      </div>

      <!-- QUICK ACTION CARDS - Shortcuts to common admin tasks -->
      <div class="content-cards">
        <!-- ADD RESIDENT CARD -->
        <div class="card quick-action-card" data-action="Add Resident">
          <h4>Add Resident</h4>
          <small class="text-muted">Register new households and individuals</small>
        </div>
        <!-- CREATE DOCUMENT CARD -->
        <div class="card quick-action-card" data-action="Create Document">
          <h4>Create Document</h4>
          <small class="text-muted">Prepare certificates, clearances, and records</small>
        </div>
        <!-- VIEW REPORTS CARD -->
        <div class="card quick-action-card" data-action="View Reports">
          <h4>View Reports</h4>
          <small class="text-muted">Open population and request summaries</small>
        </div>
        <!-- MANAGE USERS CARD -->
        <div class="card quick-action-card" data-action="Manage Users">
          <h4>Manage Users</h4>
          <small class="text-muted">Update admin and staff access</small>
        </div>
      </div>

      <!-- CHARTS SECTION - Visual representations of data -->
      <div class="charts-container">
        <div class="chart-card">
          <h4>Residents by Age Group</h4>
          <canvas id="ageChart"></canvas>
        </div>
        <div class="chart-card">
          <h4>Monthly Document Requests</h4>
          <canvas id="requestsChart"></canvas>
        </div>
        <div class="chart-card">
          <h4>Male vs Female Population</h4>
          <canvas id="genderChart"></canvas>
        </div>
        <div class="chart-card">
          <h4>Household Distribution per Zone</h4>
          <canvas id="zoneChart"></canvas>
        </div>
      </div>

      <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;flex-wrap:wrap;gap:12px">
          <h3>Recent Activity</h3>
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm" type="button">Last 7 days</button>
            <button class="btn btn-secondary btn-sm" type="button">All Actions</button>
          </div>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria Santos</td>
                <td>Registered household</td>
                <td>May 18, 2026</td>
                <td><span class="badge badge-success">Approved</span></td>
              </tr>
              <tr>
                <td>Jose Dela Cruz</td>
                <td>Requested clearance</td>
                <td>May 19, 2026</td>
                <td><span class="badge badge-warning">Pending</span></td>
              </tr>
              <tr>
                <td>Anna Reyes</td>
                <td>Updated profile details</td>
                <td>May 20, 2026</td>
                <td><span class="badge badge-success">Approved</span></td>
              </tr>
              <tr>
                <td>Pedro Gonzales</td>
                <td>Submitted certificate request</td>
                <td>May 21, 2026</td>
                <td><span class="badge badge-danger">Rejected</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
