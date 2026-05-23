<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Announcements</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="app">
    <!-- SIDEBAR NAVIGATION - Contains menu links for resident portal -->
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
      <!-- SIDEBAR MENU - Navigation links for resident portal sections -->
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
      <!-- PAGE TITLE AND DESCRIPTION -->
      <div class="topbar">
        <div>
          <h3>Barangay Announcements</h3>
          <div class="text-muted">Stay updated with the latest news from Barangay San Isidro</div>
        </div>
      </div>

      <!-- ALL ANNOUNCEMENTS DISPLAY SECTION - Shows all active announcements from admin -->
      <div class="card">
        <h3>All Announcements</h3>
        <!-- GRID OF ANNOUNCEMENTS - Each announcement is a card with color-coded styling -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:16px;margin-top:16px">
          <!-- ANNOUNCEMENT CARD 1 - Fiesta Celebration (primary color) -->
          <div style="background:var(--primary-light);border-left:4px solid var(--primary);padding:16px;border-radius:8px;cursor:pointer;transition:all 0.3s" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <h4 style="margin:0 0 8px;color:var(--primary)">Fiesta Celebration</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Join us for the Feast of St. Isidore on May 25, 2026 at the barangay plaza. There will be food, games, entertainment, and community activities for the whole family.</p>
            <!-- ANNOUNCEMENT METADATA - Shows category and publication date -->
            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px;padding-top:12px;border-top:1px solid rgba(0,0,0,0.1)">
              <small style="color:var(--text-light)"><strong>Category:</strong> Event</small>
              <small style="color:var(--text-light)"><strong>Date:</strong> May 22, 2026</small>
            </div>
          </div>
          <!-- ANNOUNCEMENT CARD 2 - Health Clinic Schedule (info/blue color) -->
          <div style="background:#dbeafe;border-left:4px solid #3b82f6;padding:16px;border-radius:8px;cursor:pointer;transition:all 0.3s" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <h4 style="margin:0 0 8px;color:#1e40af">Health Clinic Schedule</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Free health check-up every Saturday 8AM to 12PM at Health Center. Services include blood pressure screening, vital signs check, and health consultations.</p>
            <!-- ANNOUNCEMENT METADATA - Shows category and publication date -->
            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px;padding-top:12px;border-top:1px solid rgba(0,0,0,0.1)">
              <small style="color:var(--text-light)"><strong>Category:</strong> Service Update</small>
              <small style="color:var(--text-light)"><strong>Date:</strong> May 19, 2026</small>
            </div>
          </div>
          <!-- ANNOUNCEMENT CARD 3 - Curfew Advisory (warning/yellow color) -->
          <div style="background:#fef3c7;border-left:4px solid #f59e0b;padding:16px;border-radius:8px;cursor:pointer;transition:all 0.3s" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <h4 style="margin:0 0 8px;color:#92400e">Curfew Advisory</h4>
            <p style="margin:0;font-size:13px;color:var(--text-light)">Residents are advised to stay at home during flood alerts. Keep emergency contact numbers handy and monitor weather updates regularly.</p>
            <!-- ANNOUNCEMENT METADATA - Shows category and publication date -->
            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px;padding-top:12px;border-top:1px solid rgba(0,0,0,0.1)">
              <small style="color:var(--text-light)"><strong>Category:</strong> Advisory</small>
              <small style="color:var(--text-light)"><strong>Date:</strong> May 21, 2026</small>
            </div>
          </div>
        </div>
      </div>

      <!-- NOTIFICATION PREFERENCES SECTION - Lets residents choose how they receive announcements -->
      <div class="card">
        <h3>Subscribe to Updates</h3>
        <p class="text-muted">Get notifications about important announcements</p>
        <!-- NOTIFICATION CHECKBOXES - Residents can choose their preferred notification methods -->
        <div class="form-grid">
          <div class="form-group" style="grid-column:1 / -1">
            <label><input type="checkbox" checked> Email notifications for important announcements</label>
          </div>
          <div class="form-group" style="grid-column:1 / -1">
            <label><input type="checkbox" checked> SMS alerts for urgent advisories</label>
          </div>
          <div class="form-group" style="grid-column:1 / -1">
            <label><input type="checkbox"> Monthly event calendar</label>
          </div>
        </div>
        <!-- SAVE PREFERENCES BUTTON -->
        <button class="btn btn-primary btn-sm" type="button" data-toast="Notification preferences saved">Save Preferences</button>
      </div>

      <!-- RECENT ACTIVITY FEED - Shows a timeline of recent announcements and updates -->
      <div class="card">
        <h3>Recent Activity Feed</h3>
        <!-- ACTIVITY ITEMS - Each shows an icon, title, and description -->
        <div style="display:flex;flex-direction:column;gap:12px">
          <!-- ACTIVITY 1 - New announcement icon -->
          <div style="display:flex;gap:16px;padding:12px;background:var(--muted);border-radius:8px">
            <!-- ICON - Visual indicator for the type of activity -->
            <div style="font-size:24px;min-width:32px">📣</div>
            <!-- CONTENT - Title and description of the activity -->
            <div style="flex:1">
              <h4 style="margin:0 0 4px;font-size:14px">New announcement posted</h4>
              <p style="margin:0;font-size:12px;color:var(--text-light)">Fiesta Celebration event details announced - May 22, 2026</p>
            </div>
          </div>
          <!-- ACTIVITY 2 - Service update icon -->
          <div style="display:flex;gap:16px;padding:12px;background:var(--muted);border-radius:8px">
            <!-- ICON - Visual indicator for the type of activity -->
            <div style="font-size:24px;min-width:32px">📢</div>
            <!-- CONTENT - Title and description of the activity -->
            <div style="flex:1">
              <h4 style="margin:0 0 4px;font-size:14px">Service update</h4>
              <p style="margin:0;font-size:12px;color:var(--text-light)">Health clinic now offering extended hours - May 19, 2026</p>
            </div>
          </div>
          <!-- ACTIVITY 3 - Warning/advisory icon -->
          <div style="display:flex;gap:16px;padding:12px;background:var(--muted);border-radius:8px">
            <!-- ICON - Visual indicator for the type of activity -->
            <div style="font-size:24px;min-width:32px">⚠️</div>
            <!-- CONTENT - Title and description of the activity -->
            <div style="flex:1">
              <h4 style="margin:0 0 4px;font-size:14px">Important notice</h4>
              <p style="margin:0;font-size:12px;color:var(--text-light)">Weather advisory issued for the area - May 21, 2026</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- JAVASCRIPT SECTION - Handles page functionality and interactions -->
  <script src="assets/js/app.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // HIGHLIGHT ACTIVE PAGE - Marks current page in sidebar navigation for visual feedback
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
