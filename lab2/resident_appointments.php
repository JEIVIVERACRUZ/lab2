<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Appointments</title>
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
          <h3>Book Appointment</h3>
          <div class="text-muted">Schedule your visit to the barangay office</div>
        </div>
        <div class="topbar-actions">
          <button class="btn btn-primary btn-sm" type="button">New Appointment</button>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <h4>Upcoming Appointments</h4>
          <p data-target="2">0</p>
          <div class="stat-icon">📅</div>
          <div class="stat-change positive">All confirmed</div>
        </div>
        <div class="stat">
          <h4>Office Hours</h4>
          <p style="font-size:16px">Mon-Fri<br>8AM-5PM</p>
          <div class="stat-icon">🕐</div>
          <div class="stat-change positive">Open today</div>
        </div>
        <div class="stat">
          <h4>Past Visits</h4>
          <p data-target="5">0</p>
          <div class="stat-icon">✅</div>
          <div class="stat-change positive">History</div>
        </div>
      </div>

      <div class="card">
        <h3>Book New Appointment</h3>
        <div class="form-grid">
          <div class="form-group">
            <label>Purpose of Visit</label>
            <select>
              <option value="">Select...</option>
              <option>Request Document</option>
              <option>Update Records</option>
              <option>Certificate of Residency</option>
              <option>Permit Application</option>
              <option>General Inquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label>Preferred Date</label>
            <input type="date" min="">
          </div>
          <div class="form-group">
            <label>Preferred Time</label>
            <select>
              <option>8:00 AM - 9:00 AM</option>
              <option>9:00 AM - 10:00 AM</option>
              <option>10:00 AM - 11:00 AM</option>
              <option>11:00 AM - 12:00 PM</option>
              <option>1:00 PM - 2:00 PM</option>
              <option>2:00 PM - 3:00 PM</option>
              <option>3:00 PM - 4:00 PM</option>
            </select>
          </div>
          <div class="form-group">
            <label>Additional Notes</label>
            <textarea placeholder="Any special requests or additional info" style="grid-column:1 / -1"></textarea>
          </div>
        </div>
        <button class="btn btn-primary btn-sm" type="button" data-toast="Appointment booked successfully">Book Appointment</button>
      </div>

      <div class="card">
        <h3>Upcoming Appointments</h3>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Purpose</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>May 25, 2026</td>
                <td>10:00 AM - 11:00 AM</td>
                <td>Barangay Clearance - Pickup</td>
                <td><span class="badge badge-success">Confirmed</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button" data-toast="Appointment canceled">Cancel</button></td>
              </tr>
              <tr>
                <td>May 28, 2026</td>
                <td>2:00 PM - 3:00 PM</td>
                <td>Update Household Records</td>
                <td><span class="badge badge-success">Confirmed</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button" data-toast="Appointment rescheduled">Reschedule</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <h3>Office Information</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px">
          <div>
            <h4>Address</h4>
            <p>Barangay San Isidro Hall<br>123 Sampaguita Street<br>San Isidro, Province</p>
          </div>
          <div>
            <h4>Contact</h4>
            <p>Phone: (02) 555-1234<br>Email: office@barangaysanisidro.gov.ph<br>Hours: Mon-Fri 8AM-5PM</p>
          </div>
          <div>
            <h4>Services</h4>
            <p>• Document Issuance<br>• Barangay Clearance<br>• Permits & Licenses<br>• Mediation Services</p>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Past Appointments</h3>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Purpose</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>May 10, 2026</td>
                <td>3:00 PM - 4:00 PM</td>
                <td>Certificate of Residency Request</td>
                <td><span class="badge badge-success">Completed</span></td>
              </tr>
              <tr>
                <td>April 28, 2026</td>
                <td>9:00 AM - 10:00 AM</td>
                <td>Household Update</td>
                <td><span class="badge badge-success">Completed</span></td>
              </tr>
              <tr>
                <td>April 15, 2026</td>
                <td>2:00 PM - 3:00 PM</td>
                <td>Barangay ID Application</td>
                <td><span class="badge badge-success">Completed</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const currentPage = location.pathname.split('/').pop();
    document.querySelectorAll('.sidebar .menu a').forEach(link => {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    document.querySelector('input[type="date"]').min = today;
  });
  </script>
</body>
</html>
