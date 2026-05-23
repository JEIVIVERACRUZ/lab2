<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — User Management</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- USER MANAGEMENT PAGE - Manage admin and staff accounts and permissions -->
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
          <h3>User Management</h3>
          <div class="text-muted">Search, edit and manage staff accounts and permissions.</div>
        </div>
        <div class="topbar-actions">
          <button class="btn btn-primary btn-sm" type="button" data-toast="Add User">Add User</button>
        </div>
      </div>

      <div class="card">
        <div class="form-grid">
          <div class="form-group">
            <label>Search Users</label>
            <input id="userSearch" type="search" placeholder="Type a name or role">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select>
              <option>All roles</option>
              <option>Administrator</option>
              <option>Staff</option>
            </select>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Staff Accounts</h3>
        <div class="table-container">
          <table id="usersTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Leila Mendoza</td>
                <td>Administrator</td>
                <td>leila.m@barangay.gov.ph</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button">Edit</button> <button class="btn btn-danger btn-sm" type="button">Delete</button></td>
              </tr>
              <tr>
                <td>Ramon Ortiz</td>
                <td>Staff</td>
                <td>ramon.o@barangay.gov.ph</td>
                <td><span class="badge badge-info">Pending</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button">Edit</button> <button class="btn btn-danger btn-sm" type="button">Delete</button></td>
              </tr>
              <tr>
                <td>Grace Flores</td>
                <td>Staff</td>
                <td>grace.f@barangay.gov.ph</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button">Edit</button> <button class="btn btn-danger btn-sm" type="button">Delete</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="display:flex;justify-content:flex-end;padding-top:14px;">
          <button class="btn btn-secondary btn-sm" type="button">Previous</button>
          <button class="btn btn-secondary btn-sm" type="button">Next</button>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
</body>
</html>
