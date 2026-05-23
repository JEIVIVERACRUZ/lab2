# Barangay San Isidro - LGUSS Admin & Resident Portal

A modern, responsive web-based system for managing barangay services, resident profiles, and administrative operations.

## 🚀 Features

### Resident Portal
- **User Registration & Authentication** - Easy signup and login for residents
- **Profile Management** - View and update personal and household information
- **Document Requests** - Request barangay clearances, certificates, IDs, and permits
- **Request Tracking** - Monitor the status of document requests in real-time
- **Appointment Booking** - Schedule office visits with the barangay
- **Payment Management** - View bills, payment history, and pay fees online
- **Announcements** - Stay updated with barangay news and events
- **Application Status** - Track all applications and their progress

### Admin Dashboard
- **Comprehensive Analytics** - Dashboard with resident statistics and system metrics
- **Resident Management** - View, edit, and manage resident profiles
- **Document Issuance** - Process and issue various barangay documents
- **Geographic Mapping** - Visualize resident locations and zone boundaries (Leaflet.js)
- **Reports Management** - Generate and export reports (PDF/Excel)
- **User Management** - Manage admin and staff accounts with role-based access
- **Settings** - Configure barangay information, branding, and system preferences
- **Real-time Charts** - Population demographics, document request trends (Chart.js)
- **Recent Activity Log** - Monitor all system activities and transactions

## 📁 File Structure

```
lab2/
├── index.php                    # Resident login page
├── signup.php                   # Resident registration
├── admin_login.php              # Admin login page
├── welcome.php                  # Welcome/landing page
│
├── RESIDENT PORTAL
├── resident_portal.php          # Resident dashboard/home
├── resident_profile.php         # Resident profile management
├── resident_documents.php       # Document requests
├── resident_appointments.php    # Appointment booking
├── resident_payments.php        # Payment management
│
├── ADMIN DASHBOARD
├── dashboard.php                # Admin main dashboard
├── my_profile.php               # Resident profiles (admin view)
├── issuance.php                 # Document issuance management
├── mapping.php                  # Geographic mapping
├── reports.php                  # Reports management
├── users.php                    # User/staff management
├── settings.php                 # System settings
│
├── assets/
│   ├── css/
│   │   └── style.css           # All styling (modern design, responsive)
│   ├── js/
│   │   └── app.js              # All JavaScript functionality
│   └── images/
│       └── logo.jpg            # Barangay logo
```

## 🎨 Design Features

### Modern UI/UX
- **Color Scheme**: Primary blue (#0066cc), accent green, with soft UI design
- **Responsive Layout**: Works on desktop, tablet, and mobile devices
- **Smooth Animations**: Counter animations, transitions, toast notifications
- **Dark/Light Shadows**: Professional depth and visual hierarchy
- **Glassmorphism Effects**: Frosted glass backgrounds on modals and cards

### Components
- **Sidebar Navigation** - Collapsible on mobile, active page highlighting
- **Stat Cards** - Animated counters with icons and trend indicators
- **Data Tables** - Sortable, filterable tables with badges for status
- **Charts** - Bar, line, pie, and doughnut charts using Chart.js
- **Interactive Map** - Resident locations and zone boundaries using Leaflet.js
- **Toast Notifications** - Non-intrusive alerts for user actions
- **Forms** - Validated input fields with focus states
- **Badges** - Color-coded status indicators (success, warning, danger, info)

## 🔐 Authentication

### Resident Login
- **URL**: `index.php`
- **Sign Up**: `signup.php`
- **Demo Credentials**: 
  - Can create new account or use test account
  - Links to resident portal

### Admin Login
- **URL**: `admin_login.php`
- **Access**: Staff and administrators only
- **Links to**: Full admin dashboard

## 📱 Pages & Routes

### Public Pages
- `/welcome.php` - Welcome/landing page with login options
- `/index.php` - Resident login & registration entry
- `/signup.php` - Resident registration form
- `/admin_login.php` - Admin login page

### Resident Portal (After Login)
- `/resident_portal.php` - Dashboard with quick actions
- `/resident_profile.php` - Profile viewing and editing
- `/resident_documents.php` - Document request management
- `/resident_appointments.php` - Appointment booking
- `/resident_payments.php` - Payment tracking and online payments

### Admin Dashboard (After Login)
- `/dashboard.php` - Main admin dashboard with analytics
- `/my_profile.php` - Resident profile viewing (admin perspective)
- `/issuance.php` - Document issuance/processing
- `/mapping.php` - Geographic mapping with Leaflet.js
- `/reports.php` - Generate and export reports
- `/users.php` - User/staff account management
- `/settings.php` - System configuration and branding

## 🛠️ Technologies Used

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with CSS Grid, Flexbox, animations
- **JavaScript (Vanilla)** - No dependencies, lightweight
- **Chart.js** - Data visualization (CDN)
- **Leaflet.js** - Interactive mapping (CDN)

### Backend Ready
- **PHP** - Server-side scripting (structure ready)
- **Supports**: MySQL, Firebase, Laravel API, Node.js backends
- **RESTful** - API-ready component structure

## 📊 Data & Mock Content

All pages include realistic sample data:
- **Resident Profiles** - Juan Dela Cruz and family members
- **Document Requests** - Barangay clearances, certificates, IDs
- **Transactions** - Payment history, request tracking
- **Analytics** - Population by age, gender distribution, zone allocation
- **Announcements** - Barangay events and updates

## 🚀 Getting Started

1. **Place files in web root**:
   ```
   Copy all files to: C:\xampp\htdocs\lab2\
   ```

2. **Access via browser**:
   ```
   Resident Portal: http://localhost/lab2/
   or http://localhost/lab2/welcome.php
   
   Admin Dashboard: http://localhost/lab2/admin_login.php
   ```

3. **Navigation**:
   - Click sidebar items to navigate between pages
   - Active page is highlighted
   - All navigation is fully functional (client-side)

## 🔧 Customization

### Change Barangay Name
1. Edit `index.php` - line with "Barangay San Isidro"
2. Edit `sidebar-header` in resident/admin pages
3. Update `settings.php` form defaults

### Change Colors
1. Edit `:root` variables in `assets/css/style.css`
   ```css
   --primary: #0066cc;      /* Main brand color */
   --accent: #00b894;       /* Accent/green */
   --success: #10b981;      /* Success color */
   ```

### Add/Remove Menu Items
- Edit `.menu` list in sidebar sections
- Add new page links and route names
- Update navigation in each page

### Customize Charts
- Edit `initDashboardCharts()` in `assets/js/app.js`
- Change labels, data, colors, chart types

## 📞 Contact & Support

- **Barangay Office**: 123 Sampaguita Street, San Isidro
- **Phone**: (02) 555-1234
- **Email**: office@barangaysanisidro.gov.ph
- **Hours**: Monday-Friday, 8AM-5PM

## 📝 License

This system is built for Barangay San Isidro and is provided as-is for local government use.

---

**Last Updated**: May 22, 2026
**Version**: 1.0 - Complete Portal & Dashboard
