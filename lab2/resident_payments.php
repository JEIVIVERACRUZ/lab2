<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Payments</title>
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
          <h3>Payments & Fees</h3>
          <div class="text-muted">View bills, payments, and pay fees online</div>
        </div>
      </div>

      <div class="stats">
        <div class="stat">
          <h4>Balance Due</h4>
          <p style="font-size:24px;color:#ef4444">₱ 500</p>
          <div class="stat-icon">💰</div>
          <div class="stat-change negative">Due by June 30</div>
        </div>
        <div class="stat">
          <h4>Last Payment</h4>
          <p style="font-size:18px">₱ 1,500</p>
          <div class="stat-icon">✅</div>
          <div class="stat-change positive">May 1, 2026</div>
        </div>
        <div class="stat">
          <h4>Total Paid</h4>
          <p style="font-size:20px">₱ 4,500</p>
          <div class="stat-icon">📊</div>
          <div class="stat-change positive">This year</div>
        </div>
      </div>

      <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-bottom:18px">
          <div>
            <h3>Outstanding Bills</h3>
            <p class="text-muted">Fees and dues that need to be paid</p>
          </div>
          <button class="btn btn-primary btn-sm btn-export" data-type="pdf">Download Statement</button>
        </div>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barangay Development Fund - 2026</td>
                <td>₱ 500</td>
                <td>June 30, 2026</td>
                <td><span class="badge badge-warning">Overdue</span></td>
                <td><button class="btn btn-primary btn-sm" type="button" data-toast="Payment processing">Pay Now</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card">
        <h3>Payment History</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;margin:18px 0">
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">BDF 2026 - Q1 Payment</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 1,500</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid May 1, 2026</small>
          </div>
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">Barangay Clearance Fee</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 100</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid April 15, 2026</small>
          </div>
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">BDF 2025 - Q4 Payment</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 1,500</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid March 20, 2026</small>
          </div>
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">Certificate Fee</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 150</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid January 10, 2026</small>
          </div>
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">BDF 2025 - Q3 Payment</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 1,500</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid December 5, 2025</small>
          </div>
          <div style="background:var(--muted);padding:16px;border-radius:12px;border-left:4px solid var(--success)">
            <div style="display:flex;justify-content:space-between;align-items:center">
              <div>
                <h4 style="margin:0;font-size:14px;color:var(--text-light)">Barangay ID Fee</h4>
                <p style="margin:8px 0 0;font-size:18px;font-weight:700">₱ 250</p>
              </div>
              <div style="font-size:24px">✅</div>
            </div>
            <small style="color:var(--text-light)">Paid November 15, 2025</small>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Payment Methods</h3>
        <p class="text-muted">Accepted payment channels available for your convenience</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:18px">
          <div style="background:var(--primary-light);border-radius:12px;padding:20px;text-align:center">
            <div style="font-size:32px;margin-bottom:8px">🏦</div>
            <h4>Bank Transfer</h4>
            <small class="text-muted">Direct bank deposit</small>
          </div>
          <div style="background:#dbeafe;border-radius:12px;padding:20px;text-align:center">
            <div style="font-size:32px;margin-bottom:8px">💳</div>
            <h4>Debit/Credit Card</h4>
            <small class="text-muted">Secure payment</small>
          </div>
          <div style="background:#d1fae5;border-radius:12px;padding:20px;text-align:center">
            <div style="font-size:32px;margin-bottom:8px">📱</div>
            <h4>Digital Wallet</h4>
            <small class="text-muted">GCash, PayMaya</small>
          </div>
          <div style="background:#fef3c7;border-radius:12px;padding:20px;text-align:center">
            <div style="font-size:32px;margin-bottom:8px">🏢</div>
            <h4>In Person</h4>
            <small class="text-muted">Barangay office</small>
          </div>
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
  });
  </script>
</body>
</html>
