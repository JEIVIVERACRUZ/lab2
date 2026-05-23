<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Barangay Announcements</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="app">
    <!-- SIDEBAR NAVIGATION - Contains menu links for admin dashboard -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <div class="logo-box">
          <img src="assets/images/logo.jpg" alt="Logo">
        </div>
        <div>
          <h3>Barangay Admin</h3>
          <p class="text-muted">San Isidro</p>
        </div>
      </div>
      <!-- SIDEBAR MENU - Navigation links for admin dashboard sections -->
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
      <!-- TOPBAR - Title and action buttons for the page -->
      <div class="topbar">
        <div>
          <h3>Barangay Announcements</h3>
          <div class="text-muted">Create, manage, and publish barangay announcements for residents</div>
        </div>
        <div class="topbar-actions">
          <!-- Button to open the new announcement form -->
          <button class="btn btn-primary btn-sm" type="button" id="newAnnouncementBtn">+ New Announcement</button>
        </div>
      </div>

      <!-- FORM FOR CREATING NEW ANNOUNCEMENTS - Initially hidden, shows when user clicks "New Announcement" button -->
      <div class="card" id="newAnnouncementForm" style="display:none;margin-bottom:24px">
        <h3>Create New Announcement</h3>
        <!-- INPUT FIELDS for announcement details -->
        <div class="form-grid">
          <!-- Title input -->
          <div class="form-group" style="grid-column:1 / -1">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Announcement title" id="announcementTitle">
          </div>
          <!-- Description/details input -->
          <div class="form-group" style="grid-column:1 / -1">
            <label>Description</label>
            <textarea class="form-control" placeholder="Announcement details" style="min-height:100px" id="announcementDesc"></textarea>
          </div>
          <!-- Category dropdown (Event, Service, Advisory, etc.) -->
          <div class="form-group">
            <label>Category</label>
            <select class="form-control" id="announcementCategory">
              <option value="Event">Event</option>
              <option value="Service">Service Update</option>
              <option value="Advisory">Advisory</option>
              <option value="Important">Important Notice</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <!-- Color selector to match announcement style -->
          <div class="form-group">
            <label>Color</label>
            <select class="form-control" id="announcementColor">
              <option value="primary">Blue (Primary)</option>
              <option value="success">Green (Success)</option>
              <option value="warning">Yellow (Warning)</option>
              <option value="danger">Red (Danger)</option>
              <option value="info">Light Blue (Info)</option>
            </select>
          </div>
          <!-- Date picker for publication date -->
          <div class="form-group">
            <label>Publish Date</label>
            <input type="date" class="form-control" id="announcementDate">
          </div>
        </div>
        <!-- ACTION BUTTONS - Publish or Cancel -->
        <div style="display:flex;gap:10px;margin-top:20px">
          <button class="btn btn-primary btn-sm" type="button" id="saveAnnouncementBtn" data-toast="Announcement published successfully">Publish Announcement</button>
          <button class="btn btn-secondary btn-sm" type="button" id="cancelAnnouncementBtn">Cancel</button>
        </div>
      </div>

      <!-- ANNOUNCEMENTS DISPLAY SECTION - Shows all active announcements with delete options -->
      <div class="card">
        <h3>Active Announcements</h3>
        <!-- CONTAINER FOR ALL ANNOUNCEMENTS - New announcements are added here when published -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:16px;margin-top:16px" id="announcementsContainer">
          <!-- SAMPLE ANNOUNCEMENT 1 - Fiesta Celebration -->
          <div style="background:var(--primary-light);border-left:4px solid var(--primary);padding:16px;border-radius:8px">
            <div style="display:flex;justify-content:space-between;align-items:flex-start">
              <div>
                <h4 style="margin:0 0 8px;color:var(--primary)">Fiesta Celebration</h4>
                <p style="margin:0;font-size:13px;color:var(--text-light)">Join us for the Feast of St. Isidore on May 25, 2026 at the barangay plaza.</p>
                <small style="color:var(--text-light)">Published: May 22, 2026</small>
              </div>
              <!-- DELETE BUTTON - Removes announcement from active list -->
              <div style="display:flex;gap:8px">
                <button class="btn btn-secondary btn-sm" type="button" data-toast="Announcement deleted">Delete</button>
              </div>
            </div>
          </div>
          <!-- SAMPLE ANNOUNCEMENT 2 - Health Clinic Schedule -->
          <div style="background:#dbeafe;border-left:4px solid #3b82f6;padding:16px;border-radius:8px">
            <div style="display:flex;justify-content:space-between;align-items:flex-start">
              <div>
                <h4 style="margin:0 0 8px;color:#1e40af">Health Clinic Schedule</h4>
                <p style="margin:0;font-size:13px;color:var(--text-light)">Free health check-up every Saturday 8AM to 12PM at Health Center.</p>
                <small style="color:var(--text-light)">Published: May 19, 2026</small>
              </div>
              <!-- DELETE BUTTON - Removes announcement from active list -->
              <div style="display:flex;gap:8px">
                <button class="btn btn-secondary btn-sm" type="button" data-toast="Announcement deleted">Delete</button>
              </div>
            </div>
          </div>
          <!-- SAMPLE ANNOUNCEMENT 3 - Curfew Advisory -->
          <div style="background:#fef3c7;border-left:4px solid #f59e0b;padding:16px;border-radius:8px">
            <div style="display:flex;justify-content:space-between;align-items:flex-start">
              <div>
                <h4 style="margin:0 0 8px;color:#92400e">Curfew Advisory</h4>
                <p style="margin:0;font-size:13px;color:var(--text-light)">Residents are advised to stay at home during flood alerts.</p>
                <small style="color:var(--text-light)">Published: May 21, 2026</small>
              </div>
              <!-- DELETE BUTTON - Removes announcement from active list -->
              <div style="display:flex;gap:8px">
                <button class="btn btn-secondary btn-sm" type="button" data-toast="Announcement deleted">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- HOW IT WORKS SECTION - Explains the announcement system to admins -->
      <div class="card">
        <h3>How This Works</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:20px;margin-top:16px">
          <div>
            <h4>📝 Create Announcements</h4>
            <p style="font-size:13px;color:var(--text-light)">Use the form above to create and publish announcements. Choose a category and color to make them stand out.</p>
          </div>
          <div>
            <h4>👀 Residents See Them</h4>
            <p style="font-size:13px;color:var(--text-light)">All active announcements automatically appear on the resident portal home page for all residents to see.</p>
          </div>
          <div>
            <h4>🗑️ Delete When Done</h4>
            <p style="font-size:13px;color:var(--text-light)">Remove announcements once they're no longer relevant. Click Delete to remove from the portal.</p>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="assets/js/app.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // HIGHLIGHT ACTIVE PAGE - Marks current page in sidebar navigation
    const currentPage = location.pathname.split('/').pop() || 'dashboard.php';
    document.querySelectorAll('.sidebar .menu a').forEach(link => {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });

    // GET DOM ELEMENTS - Store references to form elements and buttons for easier access
    const newAnnouncementBtn = document.getElementById('newAnnouncementBtn');
    const newAnnouncementForm = document.getElementById('newAnnouncementForm');
    const cancelAnnouncementBtn = document.getElementById('cancelAnnouncementBtn');
    const saveAnnouncementBtn = document.getElementById('saveAnnouncementBtn');
    const announcementTitle = document.getElementById('announcementTitle');
    const announcementDesc = document.getElementById('announcementDesc');
    const announcementDate = document.getElementById('announcementDate');
    const announcementColor = document.getElementById('announcementColor');

    // SET DEFAULT DATE - Automatically set today's date as default publish date
    const today = new Date().toISOString().split('T')[0];
    announcementDate.value = today;

    // OPEN FORM - Show the announcement form when user clicks "New Announcement"
    newAnnouncementBtn.addEventListener('click', function() {
      newAnnouncementForm.style.display = 'block';
      announcementTitle.focus();
    });

    // CLOSE FORM - Hide form and clear all fields when user clicks "Cancel"
    cancelAnnouncementBtn.addEventListener('click', function() {
      newAnnouncementForm.style.display = 'none';
      announcementTitle.value = '';
      announcementDesc.value = '';
      announcementDate.value = today;
    });

    // PUBLISH ANNOUNCEMENT - Save new announcement and add it to the display
    saveAnnouncementBtn.addEventListener('click', function() {
      // Check if required fields are filled
      if (announcementTitle.value.trim() && announcementDesc.value.trim()) {
        // COLOR MAPPINGS - Define colors for different announcement types
        const colorMap = {
          'primary': 'var(--primary-light)',
          'success': '#dcfce7',
          'warning': '#fef3c7',
          'danger': '#fee2e2',
          'info': '#dbeafe'
        };
        const colorBorderMap = {
          'primary': 'var(--primary)',
          'success': '#22c55e',
          'warning': '#f59e0b',
          'danger': '#ef4444',
          'info': '#3b82f6'
        };
        const colorTextMap = {
          'primary': 'var(--primary)',
          'success': '#166534',
          'warning': '#92400e',
          'danger': '#991b1b',
          'info': '#1e40af'
        };

        // Get selected color from dropdown
        const selectedColor = announcementColor.value;
        
        // FORMAT DATE - Convert date to readable format (e.g., "May 23, 2026")
        const formattedDate = new Date(announcementDate.value).toLocaleDateString('en-US', {
          year: 'numeric',
          month: 'long',
          day: 'numeric'
        });

        // CREATE ANNOUNCEMENT HTML - Build the HTML for the new announcement card
        const announcementHTML = `
          <div style="background:${colorMap[selectedColor]};border-left:4px solid ${colorBorderMap[selectedColor]};padding:16px;border-radius:8px">
            <div style="display:flex;justify-content:space-between;align-items:flex-start">
              <div>
                <h4 style="margin:0 0 8px;color:${colorTextMap[selectedColor]}">${announcementTitle.value}</h4>
                <p style="margin:0;font-size:13px;color:var(--text-light)">${announcementDesc.value}</p>
                <small style="color:var(--text-light)">Published: ${formattedDate}</small>
              </div>
              <div style="display:flex;gap:8px">
                <button class="btn btn-secondary btn-sm" type="button" data-toast="Announcement deleted" onclick="this.parentElement.parentElement.parentElement.remove()">Delete</button>
              </div>
            </div>
          </div>
        `;

        // ADD TO CONTAINER - Insert new announcement at the top of the list
        document.getElementById('announcementsContainer').insertAdjacentHTML('afterbegin', announcementHTML);
        
        // RESET FORM - Clear form fields and hide it
        newAnnouncementForm.style.display = 'none';
        announcementTitle.value = '';
        announcementDesc.value = '';
        announcementDate.value = today;
      } else {
        // Show error if required fields are empty
        alert('Please fill in all required fields');
      }
    });

    // DELETE ANNOUNCEMENTS - Handle delete button clicks
    document.querySelectorAll('[data-toast]').forEach(button => {
      button.addEventListener('click', function(e) {
        if (e.target.textContent.includes('Delete')) {
          // Remove the announcement card from display
          e.target.closest('div[style*="border-left"]').remove();
        }
      });
    });
  });
  </script>
</body>
</html>
