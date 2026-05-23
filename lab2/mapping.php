<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LGUSS — Geographic Mapping</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css"/>
  <style>
    #map {
      height: 600px;
      border-radius: 10px;
      margin-top: 16px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .leaflet-draw-toolbar a { border-radius: 6px; }
    .puroks-list { max-height: 320px; overflow-y: auto; }
    .purok-item {
      display: flex; justify-content: space-between; align-items: center;
      padding: 12px; margin: 8px 0; background: #f9fafb; border-radius: 8px;
      border: 1px solid #e5e7eb; transition: all 0.3s;
    }
    .purok-item:hover { background: #f3f4f6; border-color: #d1d5db; }
    .purok-name { font-weight: 600; color: #1f2937; }
    .purok-color { width: 24px; height: 24px; border-radius: 4px; border: 2px solid #e5e7eb; }
    .purok-actions button { padding: 4px 8px; font-size: 12px; margin-left: 6px; }
  </style>
</head>
<body>
  <div class="app">
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
          <h3>Geographic Mapping</h3>
          <div class="text-muted">Visualize resident locations, zones, and community points.</div>
        </div>
      </div>

      <div class="card">
        <h3>Interactive Map & Purok Management</h3>
        <p class="text-muted">Draw on the map to define puroks, or manage existing zones and resident locations.</p>
        <div class="form-grid" style="margin-top:18px;">
          <div class="form-group">
            <label>Search Resident</label>
            <input type="text" placeholder="Search by name or address" id="residentSearch">
          </div>
          <div class="form-group">
            <label>Purok/Zone Filter</label>
            <select id="zoneFilter">
              <option>All Puroks</option>
              <option>Purok 1</option>
              <option>Purok 2</option>
              <option>Purok 3</option>
              <option>Purok 4</option>
            </select>
          </div>
        </div>
        <div id="map"></div>
      </div>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:20px;">
        <div class="card">
          <h3>Drawing Tools</h3>
          <p class="text-muted">Use the map toolbar to draw new puroks. Click and drag on the map to create polygon zones.</p>
          <div style="margin-top:16px;">
            <button class="btn btn-primary" onclick="toggleDrawMode()">🖌️ Enable Drawing Mode</button>
            <button class="btn" onclick="clearAllDrawings()" style="margin-left:8px;">🗑️ Clear All</button>
          </div>
          <div style="margin-top:12px;padding:12px;background:#f9fafb;border-radius:8px;border:1px solid #e5e7eb;font-size:13px;color:#666;">
            <strong>How to use:</strong>
            <ul style="margin:8px 0;padding-left:20px;">
              <li>Click map toolbar to select drawing tool</li>
              <li>Polygon: Draw multi-point zones (click to add points, double-click to finish)</li>
              <li>Rectangle: Draw rectangular purok boundaries</li>
              <li>Marker: Mark important locations</li>
              <li>Save zones manually from the list below</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <h3>Existing Puroks</h3>
          <p class="text-muted">Manage puroks drawn on the map.</p>
          <div class="puroks-list" id="puroksList" style="margin-top:16px;">
            <div class="purok-item">
              <div>
                <div class="purok-name">Purok 1</div>
                <small class="text-muted">High population cluster • 320 residents</small>
              </div>
              <div class="purok-color" style="background:#34d399;"></div>
              <div class="purok-actions">
                <button class="btn" onclick="editPurok(1)" style="padding:4px 8px;font-size:12px;">Edit</button>
                <button class="btn" onclick="deletePurok(1)" style="padding:4px 8px;font-size:12px;">Delete</button>
              </div>
            </div>
            <div class="purok-item">
              <div>
                <div class="purok-name">Purok 2</div>
                <small class="text-muted">Community services area • 210 residents</small>
              </div>
              <div class="purok-color" style="background:#60a5fa;"></div>
              <div class="purok-actions">
                <button class="btn" onclick="editPurok(2)" style="padding:4px 8px;font-size:12px;">Edit</button>
                <button class="btn" onclick="deletePurok(2)" style="padding:4px 8px;font-size:12px;">Delete</button>
              </div>
            </div>
            <div class="purok-item">
              <div>
                <div class="purok-name">Purok 3</div>
                <small class="text-muted">Residential zone • 180 residents</small>
              </div>
              <div class="purok-color" style="background:#f97316;"></div>
              <div class="purok-actions">
                <button class="btn" onclick="editPurok(3)" style="padding:4px 8px;font-size:12px;">Edit</button>
                <button class="btn" onclick="deletePurok(3)" style="padding:4px 8px;font-size:12px;">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <h3>Map Legend</h3>
        <div class="content-cards" style="grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;">
          <div class="card" style="background:rgba(56,189,248,0.12);border-color:rgba(56,189,248,0.32);">
            <h4>Zone 1</h4>
            <small class="text-muted">High population cluster</small>
          </div>
          <div class="card" style="background:rgba(96,165,250,0.12);border-color:rgba(96,165,250,0.32);">
            <h4>Zone 2</h4>
            <small class="text-muted">Community services area</small>
          </div>
          <div class="card" style="background:rgba(251,191,36,0.12);border-color:rgba(251,191,36,0.32);">
            <h4>Resident Pin</h4>
            <small class="text-muted">Recent registration</small>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
    let mapInstance = null;
    let purokCount = 3;
    const purokColors = ['#34d399', '#60a5fa', '#f97316', '#facc15', '#a855f7', '#f43f5e'];

    function createMap() {
      console.log('Creating map...');
      const mapEl = document.getElementById('map');
      
      if (!mapEl) {
        console.error('Map element #map not found');
        return;
      }
      
      if (typeof L === 'undefined') {
        console.error('Leaflet library not loaded');
        setTimeout(createMap, 500);
        return;
      }

      try {
        mapInstance = L.map('map').setView([14.6408, 121.0744], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '© OpenStreetMap',
          maxZoom: 19
        }).addTo(mapInstance);

        // Zones
        const zones = [
          {
            name: 'Purok 1',
            coords: [[14.6493, 121.0710], [14.6437, 121.0756], [14.6374, 121.0690], [14.6401, 121.0645]],
            color: '#34d399'
          },
          {
            name: 'Purok 2',
            coords: [[14.6437, 121.0756], [14.6377, 121.0800], [14.6325, 121.0760], [14.6374, 121.0690]],
            color: '#60a5fa'
          },
          {
            name: 'Purok 3',
            coords: [[14.6325, 121.0760], [14.6280, 121.0810], [14.6210, 121.0740], [14.6250, 121.0680]],
            color: '#f97316'
          }
        ];

        zones.forEach(zone => {
          L.polygon(zone.coords, {
            color: zone.color,
            fillColor: zone.color,
            fillOpacity: 0.2,
            weight: 2
          }).bindPopup(`<b>${zone.name}</b><br>Population: 320`).addTo(mapInstance);
        });

        // Markers
        const markers = [
          {name: 'Maria Santos', coords: [14.6456, 121.0723]},
          {name: 'Jose Dela Cruz', coords: [14.6398, 121.0688]},
          {name: 'Anna Reyes', coords: [14.6378, 121.0758]}
        ];

        markers.forEach(m => {
          L.marker(m.coords).bindPopup(`<b>${m.name}</b><br>Resident`).addTo(mapInstance);
        });

        // Add draw control
        if (typeof L.Control.Draw !== 'undefined') {
          const drawnItems = new L.FeatureGroup();
          mapInstance.addLayer(drawnItems);
          
          const drawControl = new L.Control.Draw({
            edit: {featureGroup: drawnItems},
            draw: {polygon: true, rectangle: true, polyline: false, circle: false, marker: false}
          });
          mapInstance.addControl(drawControl);

          mapInstance.on('draw:created', function(e) {
            drawnItems.addLayer(e.layer);
            const name = 'Purok ' + (++purokCount);
            addPurokToList(name, purokColors[purokCount % purokColors.length]);
            if (typeof showToast !== 'undefined') {
              showToast(name + ' created!', 'success');
            }
          });
        }

        console.log('Map created successfully');
      } catch (err) {
        console.error('Error creating map:', err);
      }
    }

    function addPurokToList(name, color) {
      const list = document.getElementById('puroksList');
      if (!list) return;
      
      const html = `<div class="purok-item">
        <div><div class="purok-name">${name}</div><small class="text-muted">Newly drawn • 0 residents</small></div>
        <div class="purok-color" style="background:${color};"></div>
        <div class="purok-actions">
          <button class="btn" style="padding:4px 8px;font-size:12px;">Edit</button>
          <button class="btn" style="padding:4px 8px;font-size:12px;">Delete</button>
        </div>
      </div>`;
      
      list.insertAdjacentHTML('beforeend', html);
    }

    function toggleDrawMode() {
      if (!mapInstance) return;
      showToast('Drawing mode enabled', 'info');
    }

    function clearAllDrawings() {
      if (confirm('Clear all drawings?')) {
        purokCount = 3;
        showToast('Drawings cleared', 'info');
      }
    }

    // Start map creation
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', createMap);
    } else {
      createMap();
    }
  </script>
</body>
</html>
