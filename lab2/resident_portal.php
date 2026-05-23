<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Resident Portal</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- RESIDENT PORTAL - Main dashboard for residents to access services -->
  <div class="app">
    <!-- SIDEBAR - Navigation menu for resident sections -->
    <aside class="sidebar">
      <!-- SIDEBAR HEADER - Branding -->
      <div class="sidebar-header">
        <div class="logo-box">
          <img src="assets/images/logo.jpg" alt="Logo">
        </div>
        <div>
          <h3>Barangay Portal</h3>
          <p class="text-muted">San Isidro</p>
        </div>
      </div>
      <!-- SIDEBAR MENU - Links to resident portal sections: home, announcements, profile, documents, appointments, payments -->
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

    <!-- MAIN CONTENT AREA -->
    <main class="main">
      <!-- PAGE GREETING - Personalized welcome message for resident -->
      <div class="topbar">
        <div>
          <h3>Welcome, Juan Dela Cruz</h3>
          <div class="text-muted">Your resident dashboard and barangay services</div>
        </div>
        <!-- TOP ACTION BUTTONS -->
        <div class="topbar-actions">
          <button class="btn btn-secondary btn-sm" type="button">Help Center</button>
          <button class="btn btn-primary btn-sm" type="button">Request Service</button>
        </div>
      </div>

      <!-- KEY STATISTICS - Important resident information at a glance -->
      <div class="stats">
        <!-- STAT 1 - Resident identification number -->
        <div class="stat">
          <h4>Resident ID</h4>
          <p style="font-size:18px;letter-spacing:1px;font-family:monospace">BRGY-2026-0847</p>
          <div class="stat-icon">🆔</div>
          <div class="stat-change positive">Verified</div>
        </div>
        <!-- STAT 2 - Count of active requests -->
        <div class="stat">
          <h4>Active Requests</h4>
          <p data-target="2">0</p>
          <div class="stat-icon">📋</div>
          <div class="stat-change positive">All on track</div>
        </div>
        <!-- STAT 3 - Ready documents for pickup -->
        <div class="stat">
          <h4>Documents Ready</h4>
          <p data-target="1">0</p>
          <div class="stat-icon">✅</div>
          <div class="stat-change positive">1 for pickup</div>
        </div>
      </div>

      <!-- HERO SECTION - Banner with quick service description -->
      <div class="hero">
        <div class="overlay">
          <h1>Quick Access to Services</h1>
          <p>Manage your residency, request documents, and stay updated with barangay announcements.</p>
        </div>
      </div>

      <!-- QUICK ACTION CARDS - Shortcuts to common resident tasks -->
      <div class="content-cards">
        <!-- REQUEST DOCUMENT CARD -->
        <div class="card quick-action-card" data-action="Request Document">
          <h4>Request Document</h4>
          <small class="text-muted">Barangay clearance, certificates, IDs</small>
        </div>
        <!-- BOOK APPOINTMENT CARD -->
        <div class="card quick-action-card" data-action="Book Appointment">
          <h4>Book Appointment</h4>
          <small class="text-muted">Schedule office visits</small>
        </div>
        <div class="card quick-action-card" data-action="Pay Fees">
          <h4>Pay Fees</h4>
          <small class="text-muted">Barangay dues and permits</small>
        </div>
        <div class="card quick-action-card" data-action="View Announcements">
          <h4>Announcements</h4>
          <small class="text-muted">Latest barangay news</small>
        </div>
      </div>

      <div class="card">
        <h3>My Active Requests</h3>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Request ID</th>
                <th>Type</th>
                <th>Date Requested</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>REQ-2026-1847</td>
                <td>Barangay Clearance</td>
                <td>May 18, 2026</td>
                <td><span class="badge badge-info">Processing</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button">Track</button></td>
              </tr>
              <tr>
                <td>REQ-2026-1848</td>
                <td>Certificate of Residency</td>
                <td>May 20, 2026</td>
                <td><span class="badge badge-success">Ready for Pickup</span></td>
                <td><button class="btn btn-primary btn-sm" type="button" data-toast="Pickup confirmed">Pick Up</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <h3>Barangay Announcements</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;margin-top:16px">
          <div style="background:var(--primary-light);border-left:4px solid var(--primary);padding:16px;border-radius:8px">
            <h4 style="margin:0 0 8px;color:var(--primary)">Fiesta Celebration</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Join us for the Feast of St. Isidore on May 25, 2026 at the barangay plaza.</p>
            <small style="color:var(--text-light)">May 22, 2026</small>
          </div>
          <div style="background:#dbeafe;border-left:4px solid #3b82f6;padding:16px;border-radius:8px">
            <h4 style="margin:0 0 8px;color:#1e40af">Health Clinic Schedule</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Free health check-up every Saturday 8AM to 12PM at Health Center.</p>
            <small style="color:var(--text-light)">May 19, 2026</small>
          </div>
          <div style="background:#fef3c7;border-left:4px solid #f59e0b;padding:16px;border-radius:8px">
            <h4 style="margin:0 0 8px;color:#92400e">Curfew Advisory</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Residents are advised to stay at home during flood alerts.</p>
            <small style="color:var(--text-light)">May 21, 2026</small>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Highlight current page in sidebar
    const currentPage = location.pathname.split('/').pop() || 'resident_portal.php';
    document.querySelectorAll('.sidebar .menu a').forEach(link => {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });
  });
  </script>
</body>
</html>
