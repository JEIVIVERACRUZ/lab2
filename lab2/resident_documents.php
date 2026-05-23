<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — My Documents</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- RESIDENT DOCUMENTS PAGE - Allows residents to request and track documents -->
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
      <!-- SIDEBAR MENU - Navigation links -->
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
      <!-- PAGE TITLE - Documents management header -->
      <div class="topbar">
        <div>
          <h3>My Documents</h3>
          <div class="text-muted">Request, track, and download barangay documents</div>
        </div>
        <!-- REQUEST DOCUMENT BUTTON - Opens document request form -->
        <div class="topbar-actions">
          <button class="btn btn-primary btn-sm" type="button" id="requestDocBtn">Request Document</button>
        </div>
      </div>

      <!-- DOCUMENT STATISTICS - Summary of document requests -->
      <div class="stats">
        <!-- STAT 1 - Documents ready for pickup -->
        <div class="stat">
          <h4>Ready for Pickup</h4>
          <p data-target="1">0</p>
          <div class="stat-icon">✅</div>
          <div class="stat-change positive">1 waiting</div>
        </div>
        <!-- STAT 2 - Documents being processed -->
        <div class="stat">
          <h4>Processing</h4>
          <p data-target="1">0</p>
          <div class="stat-icon">⏳</div>
          <div class="stat-change warning">In progress</div>
        </div>
        <!-- STAT 3 - Total document requests lifetime -->
        <div class="stat">
          <h4>Total Requests</h4>
          <p data-target="8">0</p>
          <div class="stat-icon">📑</div>
          <div class="stat-change positive">Lifetime</div>
        </div>
      </div>

      <!-- AVAILABLE DOCUMENTS SECTION - Shows document types residents can request -->
      <div class="card">
        <h3>Available Documents</h3>
        <p class="text-muted">Select a document type to request or view information</p>
        <!-- GRID OF DOCUMENT OPTIONS -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:16px">
          <!-- BARANGAY CLEARANCE CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">🧾</div>
            <h4 style="margin:0">Barangay Clearance</h4>
            <small class="text-muted">1-3 working days</small>
            <!-- REQUEST BUTTON - Submits request for this document -->
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="Clearance request submitted">Request</button>
          </div>
          <!-- CERTIFICATE OF RESIDENCY CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">📜</div>
            <h4 style="margin:0">Certificate of Residency</h4>
            <small class="text-muted">Same day</small>
            <!-- REQUEST BUTTON - Submits request for this document -->
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="Residency request submitted">Request</button>
          </div>
          <!-- BARANGAY ID CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">🆔</div>
            <h4 style="margin:0">Barangay ID</h4>
            <small class="text-muted">1-2 days</small>
            <!-- REQUEST BUTTON - Submits request for this document -->
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="ID request submitted">Request</button>
          </div>
          <!-- CERTIFICATE OF INDIGENCY CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">🏛️</div>
            <h4 style="margin:0">Certificate of Indigency</h4>
            <small class="text-muted">1-3 working days</small>
            <!-- REQUEST BUTTON - Submits request for this document -->
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="Indigency request submitted">Request</button>
          </div>
          <!-- BUSINESS PERMIT CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">🏪</div>
            <h4 style="margin:0">Business Permit</h4>
            <small class="text-muted">2-5 working days</small>
            <!-- REQUEST BUTTON - Submits request for this document -->
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="Business permit request submitted">Request</button>
          </div>
          <!-- PROOF OF RESIDENCY CARD -->
          <div class="card" style="text-align:center;cursor:pointer;padding:20px;border:2px solid transparent;transition:all 0.3s" onmouseover="this.style.borderColor='var(--primary)';this.style.background='var(--primary-light)'" onmouseout="this.style.borderColor='transparent';this.style.background='white'">
            <div style="font-size:32px;margin-bottom:8px">🗺️</div>
            <h4 style="margin:0">Proof of Residency</h4>
            <small class="text-muted">1 working day</small>
            <button class="btn btn-primary btn-sm" type="button" style="margin-top:12px;width:100%" data-toast="Proof request submitted">Request</button>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>My Requests</h3>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Request ID</th>
                <th>Document</th>
                <th>Requested Date</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>REQ-2026-1848</td>
                <td>Certificate of Residency</td>
                <td>May 20, 2026</td>
                <td>May 20, 2026</td>
                <td><span class="badge badge-success">Ready for Pickup</span></td>
                <td><button class="btn btn-primary btn-sm" type="button" data-toast="Pickup arranged">Pickup</button></td>
              </tr>
              <tr>
                <td>REQ-2026-1847</td>
                <td>Barangay Clearance</td>
                <td>May 18, 2026</td>
                <td>May 21, 2026</td>
                <td><span class="badge badge-info">Processing</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button" data-toast="Tracking details opened">Track</button></td>
              </tr>
              <tr>
                <td>REQ-2026-1846</td>
                <td>Barangay ID</td>
                <td>May 15, 2026</td>
                <td>May 17, 2026</td>
                <td><span class="badge badge-success">Completed</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button" data-toast="Download started">Download</button></td>
              </tr>
              <tr>
                <td>REQ-2026-1844</td>
                <td>Certificate of Indigency</td>
                <td>May 10, 2026</td>
                <td>May 13, 2026</td>
                <td><span class="badge badge-success">Completed</span></td>
                <td><button class="btn btn-secondary btn-sm" type="button" data-toast="Download started">Download</button></td>
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

    document.getElementById('requestDocBtn').addEventListener('click', function() {
      alert('Document request form would open here');
    });
  });
  </script>
</body>
</html>
