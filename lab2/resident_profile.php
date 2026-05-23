<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — My Profile</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="app">
    <aside class="sidebar">
      <div class="sidebar-header">
        <div class="logo-box">
          <img src="assets/images/logo.jpg" alt="Logo">
        </div>
        <div>
          <h3>Barangay Portal</h3>
          <p class="text-muted">San Isidro</p>
        </div>
      </div>
      <ul class="menu">
        <li><a href="resident_portal.php"><div class="icon">🏠</div><span>Home</span></a></li>
        <li><a href="resident_announcements.php"><div class="icon">📢</div><span>Announcements</span></a></li>
        <li><a href="resident_profile.php"><div class="icon">👤</div><span>My Profile</span></a></li>
        <li><a href="resident_documents.php"><div class="icon">🧾</div><span>My Documents</span></a></li>
        <li><a href="resident_appointments.php"><div class="icon">📅</div><span>Appointments</span></a></li>
        <li><a href="resident_payments.php"><div class="icon">💳</div><span>Payments</span></a></li>
        <li><a href="index.php" style="color:#ef4444"><div class="icon">🚪</div><span>Sign Out</span></a></li>
      </ul>
    </aside>

    <main class="main">
      <div class="topbar">
        <div>
          <h3>My Profile</h3>
          <div class="text-muted">View and update your personal information</div>
        </div>
        <div class="topbar-actions">
          <button class="btn btn-secondary btn-sm" type="button" id="editBtn">Edit Profile</button>
          <button class="btn btn-primary btn-sm" type="button" style="display:none" id="saveBtn">Save Changes</button>
        </div>
      </div>

      <div class="card">
        <h3>Personal Information</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" value="Juan" readonly id="firstName">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" value="Dela Cruz" readonly id="lastName">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" value="juan.delacruz@email.com" readonly id="email">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="tel" value="0917 555 0123" readonly id="phone">
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" value="1990-03-15" readonly id="dob">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select readonly id="gender">
              <option value="M" selected>Male</option>
              <option value="F">Female</option>
            </select>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Residence Information</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Street Address</label>
            <input type="text" value="123 Sampaguita Street" readonly id="street">
          </div>
          <div class="form-group">
            <label>Zone / Purok</label>
            <input type="text" value="Zone 2" readonly id="zone">
          </div>
          <div class="form-group">
            <label>House Number</label>
            <input type="text" value="Lot 45" readonly id="house">
          </div>
          <div class="form-group">
            <label>Years of Residency</label>
            <input type="text" value="12 years" readonly>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Employment Information</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Occupation</label>
            <input type="text" value="Public School Teacher" readonly id="occupation">
          </div>
          <div class="form-group">
            <label>Workplace</label>
            <input type="text" value="San Isidro Elementary School" readonly id="workplace">
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Household Information</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Household Head</label>
            <input type="text" value="Juan Dela Cruz" readonly>
          </div>
          <div class="form-group">
            <label>Number of Family Members</label>
            <input type="text" value="4" readonly>
          </div>
        </div>
        <div style="margin-top:16px">
          <h4>Family Members</h4>
          <div class="table-container">
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
                  <td>Juan Dela Cruz</td>
                  <td>Self</td>
                  <td>35</td>
                  <td><span class="badge badge-success">Verified</span></td>
                </tr>
                <tr>
                  <td>Maria M. Dela Cruz</td>
                  <td>Spouse</td>
                  <td>33</td>
                  <td><span class="badge badge-success">Verified</span></td>
                </tr>
                <tr>
                  <td>Miguel J. Dela Cruz</td>
                  <td>Son</td>
                  <td>10</td>
                  <td><span class="badge badge-success">Verified</span></td>
                </tr>
                <tr>
                  <td>Sofia M. Dela Cruz</td>
                  <td>Daughter</td>
                  <td>7</td>
                  <td><span class="badge badge-info">Pending</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Account Security</h3>
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
            <label>Confirm New Password</label>
            <input type="password" placeholder="Confirm new password">
          </div>
        </div>
        <button class="btn btn-secondary btn-sm" type="button" data-toast="Password updated">Change Password</button>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const editBtn = document.getElementById('editBtn');
    const saveBtn = document.getElementById('saveBtn');
    const inputs = document.querySelectorAll('.card input, .card select, .card textarea');

    editBtn.addEventListener('click', function() {
      inputs.forEach(input => {
        if (input.id !== 'email' && input.id !== 'firstName' && input.id !== 'lastName') {
          input.removeAttribute('readonly');
        }
      });
      editBtn.style.display = 'none';
      saveBtn.style.display = 'inline-block';
    });

    saveBtn.addEventListener('click', function() {
      inputs.forEach(input => input.setAttribute('readonly', 'readonly'));
      editBtn.style.display = 'inline-block';
      saveBtn.style.display = 'none';
      alert('Profile updated successfully!');
    });

    // Highlight current page
    const currentPage = location.pathname.split('/').pop();
    document.querySelectorAll('.sidebar .menu a').forEach(link => {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });
  });
  </script>
</body>
</html>
