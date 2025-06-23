// 1. Load dari file JSON
async function loadPinjamFromFile() {
  try {
    const res = await fetch('pinjam_data.json');
    if (!res.ok) throw new Error('Gagal memuat data');
    return await res.json();
  } catch (err) {
    console.error(err);
    return [];
  }
}

// 2. Tampilkan ke HTML
function renderPinjam(list) {
  const container = document.getElementById('pinjam-list');
  container.innerHTML = '';

  list.forEach((item, index) => {
    const div = document.createElement('div');
    div.className = 'pinjam-card';
    div.innerHTML = `
      <div>
        <strong>${item.nama}</strong><br>
        Status: ${item.status}
      </div>
      <button class="delete-btn" onclick="hapusPinjam(${index})">Hapus</button>
    `;
    container.appendChild(div);
  });
}

// 3. Tambah ke localStorage
document.getElementById('pinjam-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const nama = document.getElementById('barang-nama').value.trim();
  const status = document.getElementById('barang-status').value;

  if (!nama) return;

  const baru = { nama, status };
  const data = JSON.parse(localStorage.getItem('local_pinjam')) || [];
  data.push(baru);
  localStorage.setItem('local_pinjam', JSON.stringify(data));
  e.target.reset();
  updateDisplay();
});

// 4. Hapus item
function hapusPinjam(index) {
  let data = JSON.parse(localStorage.getItem('local_pinjam')) || [];
  data.splice(index, 1);
  localStorage.setItem('local_pinjam', JSON.stringify(data));
  updateDisplay();
}

// 5. Gabungkan dan tampilkan
function updateDisplay() {
  const local = JSON.parse(localStorage.getItem('local_pinjam')) || [];
  loadPinjamFromFile().then(file => {
    const all = [...file, ...local];
    renderPinjam(all);
    document.getElementById('storage-data').textContent =
      JSON.stringify(local, null, 2);
  });
}

document.addEventListener('DOMContentLoaded', updateDisplay);
