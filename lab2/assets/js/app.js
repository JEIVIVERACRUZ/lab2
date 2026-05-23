const page = location.pathname.split('/').pop() || 'dashboard.php';

function highlightActiveNav() {
  document.querySelectorAll('.sidebar .menu a').forEach((link) => {
    if (!link || !link.getAttribute('href')) return;
    if (link.getAttribute('href') === page) {
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');
    }
  });
}

function animateCounters() {
  document.querySelectorAll('[data-target]').forEach((counter) => {
    const finalValue = Number(counter.getAttribute('data-target')) || 0;
    const duration = 1400;
    const startTime = performance.now();

    function update(now) {
      const progress = Math.min((now - startTime) / duration, 1);
      counter.textContent = Math.floor(progress * finalValue).toLocaleString();
      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        counter.textContent = finalValue.toLocaleString();
      }
    }

    requestAnimationFrame(update);
  });
}

function initDashboardCharts() {
  const ageCtx = document.getElementById('ageChart')?.getContext('2d');
  const requestsCtx = document.getElementById('requestsChart')?.getContext('2d');
  const genderCtx = document.getElementById('genderChart')?.getContext('2d');
  const zoneCtx = document.getElementById('zoneChart')?.getContext('2d');

  if (ageCtx) {
    new Chart(ageCtx, {
      type: 'bar',
      data: {
        labels: ['0-12', '13-25', '26-40', '41-60', '60+'],
        datasets: [{
          label: 'Residents',
          data: [220, 330, 260, 180, 95],
          backgroundColor: ['#3b82f6', '#60a5fa', '#7dd3fc', '#38bdf8', '#0ea5e9'],
          borderRadius: 14,
          maxBarThickness: 32,
        }],
      },
      options: {
        responsive: true,
        plugins: {legend: {display: false}},
        scales: {
          y: {beginAtZero: true, grid: {color: '#eff6ff'}},
          x: {grid: {display: false}},
        },
      },
    });
  }

  if (requestsCtx) {
    new Chart(requestsCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
        datasets: [{
          label: 'Document Requests',
          data: [65, 82, 90, 120, 140, 130, 155, 170],
          borderColor: '#10b981',
          backgroundColor: 'rgba(16,185,129,0.14)',
          tension: 0.35,
          fill: true,
          pointRadius: 4,
          pointBackgroundColor: '#059669',
        }],
      },
      options: {
        responsive: true,
        plugins: {legend: {display: false}},
        scales: {
          y: {beginAtZero: true, grid: {color: '#eff6ff'}},
          x: {grid: {display: false}},
        },
      },
    });
  }

  if (genderCtx) {
    new Chart(genderCtx, {
      type: 'pie',
      data: {
        labels: ['Male', 'Female'],
        datasets: [{
          data: [870, 940],
          backgroundColor: ['#3b82f6', '#a855f7'],
        }],
      },
      options: {
        responsive: true,
        plugins: {legend: {position: 'bottom'}},
      },
    });
  }

  if (zoneCtx) {
    new Chart(zoneCtx, {
      type: 'doughnut',
      data: {
        labels: ['Zone 1', 'Zone 2', 'Zone 3', 'Zone 4'],
        datasets: [{
          data: [320, 210, 180, 200],
          backgroundColor: ['#f97316', '#facc15', '#34d399', '#60a5fa'],
          hoverOffset: 10,
        }],
      },
      options: {
        responsive: true,
        plugins: {legend: {position: 'bottom'}},
      },
    });
  }
}

function initMap() {
  const mapElement = document.getElementById('map');
  if (!mapElement || typeof L === 'undefined') return;

  const map = L.map('map', {scrollWheelZoom: false}).setView([14.6408, 121.0744], 14);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
    maxZoom: 19,
  }).addTo(map);

  const zones = [
    {
      name: 'Zone 1',
      color: '#34d399',
      coords: [[14.6493, 121.0710], [14.6437, 121.0756], [14.6374, 121.0690], [14.6401, 121.0645]],
    },
    {
      name: 'Zone 2',
      color: '#60a5fa',
      coords: [[14.6437, 121.0756], [14.6377, 121.0800], [14.6325, 121.0760], [14.6374, 121.0690]],
    },
  ];

  const markers = [
    {name: 'Maria Santos', type: 'Resident', coords: [14.6456, 121.0723]},
    {name: 'Jose Dela Cruz', type: 'Resident', coords: [14.6398, 121.0688]},
    {name: 'Anna Reyes', type: 'Resident', coords: [14.6378, 121.0758]},
  ];

  const group = L.featureGroup();

  zones.forEach((zone) => {
    const polygon = L.polygon(zone.coords, {color: zone.color, fillColor: zone.color, fillOpacity: 0.16, weight: 2});
    polygon.bindPopup(`<strong>${zone.name}</strong><br/>Population: ${Math.floor(Math.random() * 120 + 120)}`);
    polygon.addTo(map);
    group.addLayer(polygon);
  });

  markers.forEach((marker) => {
    const pin = L.marker(marker.coords).bindPopup(`<strong>${marker.name}</strong><br>${marker.type}`);
    pin.addTo(map);
    group.addLayer(pin);
  });

  map.fitBounds(group.getBounds().pad(0.24));
}

function initUserSearch() {
  const searchInput = document.getElementById('userSearch');
  const rows = document.querySelectorAll('#usersTable tbody tr');
  if (!searchInput || !rows.length) return;

  searchInput.addEventListener('input', (event) => {
    const query = event.target.value.toLowerCase();
    rows.forEach((row) => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(query) ? '' : 'none';
    });
  });
}

function initReportFilters() {
  const filter = document.getElementById('reportFilter');
  if (!filter) return;
  filter.addEventListener('change', () => {
    showToast(`Report filter set to ${filter.value}`, 'info');
  });
}

function initExportButtons() {
  document.querySelectorAll('.btn-export').forEach((button) => {
    button.addEventListener('click', () => {
      const type = button.dataset.type || 'file';
      showToast(`${button.textContent.trim()} ready to download`, 'success');
    });
  });
}

function initDataToast() {
  document.querySelectorAll('[data-toast]').forEach((element) => {
    element.addEventListener('click', () => {
      const message = element.dataset.toast || 'Action started';
      showToast(message, 'info');
    });
  });
}

function initQuickActions() {
  document.querySelectorAll('.quick-action-card').forEach((card) => {
    card.addEventListener('click', () => {
      const action = card.dataset.action || 'Action';
      showToast(`${action} opened`, 'info');
    });
  });
}

function showToast(message, type = 'info') {
  let container = document.getElementById('toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.id = 'toastContainer';
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.textContent = message;
  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateX(12px)';
    setTimeout(() => toast.remove(), 300);
  }, 2600);
}

function initAll() {
  highlightActiveNav();
  initExportButtons();
  initDataToast();
  initQuickActions();
  initReportFilters();
  initUserSearch();

  if (page === 'dashboard.php') {
    animateCounters();
    initDashboardCharts();
  }

  // Skip initMap for mapping.php - it uses initMapWithDrawing() instead
}

window.addEventListener('DOMContentLoaded', initAll);
