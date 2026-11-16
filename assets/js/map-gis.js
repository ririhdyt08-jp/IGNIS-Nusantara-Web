/**
 * IGNIS NUSANTARA 2026 - GIS Hotspot Map Controller
 * Leaflet.js Interactive Web GIS for Forest & Peatland Fires in Indonesia (2026 Dataset)
 */

let gisMap = null;
let markersLayer = null;
let circlesLayer = null;
let hotspotsData = [];

// Initialize Map
function initGisMap(containerId = 'gis-map', isPreview = false) {
  const container = document.getElementById(containerId);
  if (!container) return;

  // Center coordinate of Indonesia (focusing on Sumatra & Kalimantan)
  const defaultCenter = isPreview ? [-0.5, 107.5] : [-1.2, 108.5];
  const defaultZoom = isPreview ? 5 : 6;

  gisMap = L.map(containerId, {
    center: defaultCenter,
    zoom: defaultZoom,
    scrollWheelZoom: !isPreview,
    zoomControl: true
  });

  // Dark Map Tile Layer (CartoDB Dark Matter - Free & Open Source)
  const darkTile = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/attributions">CARTO</a>',
    subdomains: 'abcd',
    maxZoom: 19
  });

  // Satellite Tile Layer (ESRI World Imagery - Free Open GIS)
  const satTile = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
    maxZoom: 18
  });

  // OpenStreetMap Standard
  const osmTile = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
    maxZoom: 19
  });

  darkTile.addTo(gisMap);

  if (!isPreview) {
    const baseMaps = {
      "Mode Gelap (Kontras Titik Api)": darkTile,
      "Citra Satelit": satTile,
      "Peta Standar": osmTile
    };
    L.control.layers(baseMaps).addTo(gisMap);
  }

  markersLayer = L.layerGroup().addTo(gisMap);
  circlesLayer = L.layerGroup().addTo(gisMap);

  // Fetch 2026 Hotspot Data
  loadHotspotData(isPreview);
}

// Fetch Hotspot JSON
function loadHotspotData(isPreview = false) {
  fetch('data/hotspots_2026.json')
    .then(response => {
      if (!response.ok) {
        throw new Error('Gagal memuat data hotspot 2026');
      }
      return response.json();
    })
    .then(data => {
      hotspotsData = data;
      renderMarkers(hotspotsData, isPreview);
      if (!isPreview) {
        updateStatsSummary(hotspotsData);
        populateTable(hotspotsData);
        setupFilterListeners();
      }
    })
    .catch(err => {
      console.error('Error fetching hotspot data:', err);
    });
}

// Render Hotspot Markers
function renderMarkers(data, isPreview = false) {
  if (!markersLayer || !circlesLayer) return;

  markersLayer.clearLayers();
  circlesLayer.clearLayers();

  data.forEach(item => {
    // Marker Class based on confidence & status
    let markerClass = 'marker-medium';
    let iconHtml = '<i class="bi bi-fire"></i>';

    if (item.confidence >= 85 || item.status.includes('Kritis')) {
      markerClass = 'marker-high';
    } else if (item.status.includes('Terkendali') || item.status.includes('Padam')) {
      markerClass = 'marker-controlled';
      iconHtml = '<i class="bi bi-check-lg"></i>';
    }

    const customIcon = L.divIcon({
      className: `custom-fire-marker ${markerClass}`,
      html: iconHtml,
      iconSize: [28, 28],
      iconAnchor: [14, 14],
      popupAnchor: [0, -14]
    });

    const marker = L.marker([item.latitude, item.longitude], { icon: customIcon });

    // Popup Content
    const popupContent = `
      <div style="min-width: 250px; font-size: 0.9rem; line-height: 1.5;">
        <div class="d-flex justify-content-between align-items-center mb-1 pb-1 border-bottom border-secondary">
          <strong class="text-warning">${item.id}</strong>
          <span class="badge ${item.confidence >= 80 ? 'bg-danger' : 'bg-warning text-dark'}">${item.confidence}% Conf.</span>
        </div>
        <h6 class="mb-1 text-white fw-bold">${item.district}, ${item.province}</h6>
        <div class="text-secondary small mb-2"><i class="bi bi-geo-alt-fill text-danger me-1"></i>Kec. ${item.subdistrict}</div>
        
        <table class="table table-sm table-borderless text-light mb-2 small">
          <tr>
            <td class="text-muted p-0">Waktu Deteksi:</td>
            <td class="text-end fw-semibold p-0">${item.date}</td>
          </tr>
          <tr>
            <td class="text-muted p-0">Sensor Satelit:</td>
            <td class="text-end p-0">${item.satellite}</td>
          </tr>
          <tr>
            <td class="text-muted p-0">Tipe Ekosistem:</td>
            <td class="text-end p-0">${item.peatland ? '<span class="text-warning">Lahan Gambut</span>' : 'Lahan Mineral'}</td>
          </tr>
          <tr>
            <td class="text-muted p-0">Kualitas Udara:</td>
            <td class="text-end p-0"><span class="badge ${item.ispu > 150 ? 'bg-danger' : 'bg-primary'}">${item.ispu} (${item.ispu_status})</span></td>
          </tr>
          <tr>
            <td class="text-muted p-0">Status:</td>
            <td class="text-end p-0 text-info fw-bold">${item.status}</td>
          </tr>
        </table>
        
        <p class="small text-secondary mb-2 fst-italic border-top border-secondary pt-1">${item.description}</p>
        
        <div class="d-grid gap-1 mt-2">
          <a href="https://maps.google.com/?q=${item.latitude},${item.longitude}" target="_blank" class="btn btn-sm btn-outline-warning py-0" style="font-size:0.78rem;">
            <i class="bi bi-box-arrow-up-right me-1"></i> Buka Google Maps
          </a>
        </div>
      </div>
    `;

    marker.bindPopup(popupContent);
    markersLayer.addLayer(marker);

    // Hazard Smoke Dispersion Circle (Only for high risk or active fires)
    if (!isPreview && item.radius_km > 0 && item.confidence >= 80) {
      const circle = L.circle([item.latitude, item.longitude], {
        color: '#ff3300',
        fillColor: '#ff6600',
        fillOpacity: 0.12,
        weight: 1,
        dashArray: '4, 6',
        radius: item.radius_km * 1000
      });
      circle.bindTooltip(`Estimasi Sebaran Asap: ${item.radius_km} km`, { sticky: true });
      circlesLayer.addLayer(circle);
    }
  });
}

// Setup Filters
function setupFilterListeners() {
  const provFilter = document.getElementById('filter-province');
  const confFilter = document.getElementById('filter-confidence');
  const satFilter = document.getElementById('filter-satellite');
  const searchInput = document.getElementById('search-location');
  const toggleSmokeBtn = document.getElementById('toggle-smoke-radius');

  function applyFilters() {
    const selectedProv = provFilter ? provFilter.value : 'all';
    const selectedConf = confFilter ? confFilter.value : 'all';
    const selectedSat = satFilter ? satFilter.value : 'all';
    const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';

    const filtered = hotspotsData.filter(item => {
      // Province Filter
      if (selectedProv !== 'all' && item.province !== selectedProv) return false;

      // Confidence Filter
      if (selectedConf === 'high' && item.confidence < 80) return false;
      if (selectedConf === 'medium' && (item.confidence < 50 || item.confidence >= 80)) return false;
      if (selectedConf === 'low' && item.confidence >= 50) return false;

      // Satellite Filter
      if (selectedSat !== 'all' && !item.satellite.includes(selectedSat)) return false;

      // Search Filter
      if (searchTerm) {
        const matchLocation = item.province.toLowerCase().includes(searchTerm) ||
                              item.district.toLowerCase().includes(searchTerm) ||
                              item.subdistrict.toLowerCase().includes(searchTerm) ||
                              item.id.toLowerCase().includes(searchTerm);
        if (!matchLocation) return false;
      }

      return true;
    });

    renderMarkers(filtered, false);
    populateTable(filtered);
    updateStatsSummary(filtered);
  }

  if (provFilter) provFilter.addEventListener('change', applyFilters);
  if (confFilter) confFilter.addEventListener('change', applyFilters);
  if (satFilter) satFilter.addEventListener('change', applyFilters);
  if (searchInput) searchInput.addEventListener('input', applyFilters);

  if (toggleSmokeBtn) {
    let smokeVisible = true;
    toggleSmokeBtn.addEventListener('click', () => {
      smokeVisible = !smokeVisible;
      if (smokeVisible) {
        gisMap.addLayer(circlesLayer);
        toggleSmokeBtn.classList.remove('btn-outline-secondary');
        toggleSmokeBtn.classList.add('btn-orange');
        toggleSmokeBtn.innerHTML = '<i class="bi bi-eye-slash-fill me-1"></i> Sembunyikan Radius Asap';
      } else {
        gisMap.removeLayer(circlesLayer);
        toggleSmokeBtn.classList.remove('btn-orange');
        toggleSmokeBtn.classList.add('btn-outline-secondary');
        toggleSmokeBtn.innerHTML = '<i class="bi bi-eye-fill me-1"></i> Tampilkan Radius Asap';
      }
    });
  }
}

// Populate Table with Click-to-Fly Feature
function populateTable(data) {
  const tbody = document.getElementById('hotspots-table-body');
  if (!tbody) return;

  if (data.length === 0) {
    tbody.innerHTML = `<tr><td colspan="7" class="text-center py-4 text-muted">Tidak ada titik api yang cocok dengan filter yang dipilih.</td></tr>`;
    return;
  }

  tbody.innerHTML = data.map((item, idx) => `
    <tr>
      <td class="fw-bold text-warning">${item.id}</td>
      <td>
        <div class="fw-semibold text-white">${item.district}</div>
        <small class="text-muted">Kec. ${item.subdistrict}, ${item.province}</small>
      </td>
      <td>
        <span class="badge ${item.confidence >= 80 ? 'bg-danger' : 'bg-warning text-dark'}">
          ${item.confidence}%
        </span>
      </td>
      <td><small class="text-light">${item.satellite}</small></td>
      <td>
        ${item.peatland ? '<span class="badge bg-danger-subtle text-danger border border-danger">Gambut</span>' : '<span class="badge bg-secondary">Mineral</span>'}
      </td>
      <td><small class="text-white">${item.date}</small></td>
      <td class="text-end">
        <button class="btn btn-sm btn-outline-orange py-1 px-2" onclick="focusHotspot(${item.latitude}, ${item.longitude})" title="Fokuskan di Peta">
          <i class="bi bi-crosshair me-1"></i> Lihat
        </button>
      </td>
    </tr>
  `).join('');
}

// Fly to Hotspot on Map
window.focusHotspot = function(lat, lng) {
  if (!gisMap) return;
  gisMap.flyTo([lat, lng], 11, { duration: 1.5 });

  // Scroll to map smoothly
  const mapElement = document.getElementById('gis-map');
  if (mapElement) {
    mapElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }

  // Open corresponding popup
  markersLayer.eachLayer(layer => {
    if (layer.getLatLng && Math.abs(layer.getLatLng().lat - lat) < 0.0001 && Math.abs(layer.getLatLng().lng - lng) < 0.0001) {
      setTimeout(() => layer.openPopup(), 1600);
    }
  });
};

// Update Stats Summary on GIS Page
function updateStatsSummary(data) {
  const totalEl = document.getElementById('stat-total-hotspots');
  const highRiskEl = document.getElementById('stat-high-risk');
  const peatlandEl = document.getElementById('stat-peatland');

  if (totalEl) totalEl.textContent = data.length;
  if (highRiskEl) {
    const high = data.filter(d => d.confidence >= 80).length;
    highRiskEl.textContent = high;
  }
  if (peatlandEl) {
    const peat = data.filter(d => d.peatland).length;
    peatlandEl.textContent = peat;
  }
}
