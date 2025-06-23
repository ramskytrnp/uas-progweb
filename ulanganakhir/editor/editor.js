async function loadStokFromFile() {
  try {
    const response = await fetch('stok_data.json');
    if (!response.ok) throw new Error('Gagal memuat stok');
    return await response.json();
  } catch (err) {
    console.error(err);
    return [];
  }
}

function renderStok(list) {
  const container = document.getElementById('stok-list');
  container.innerHTML = '';

  list.forEach((item, index) => {
    const div = document.createElement('div');
    div.className = 'stok-card';
    div.innerHTML = `
      <div>
        <strong>${item.nama}</strong><br>
        Jumlah: ${item.jumlah}
      </div>
      <button class="delete-btn" onclick="deleteItem(${index})">Hapus</button>
    `;
    container.appendChild(div);
  });
}

document.getElementById('stok-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const nama = document.getElementById('item-name').value.trim();
  const jumlah = parseInt(document.getElementById('item-jumlah').value);

  if (!nama || jumlah <= 0) return;

  const itemBaru = { nama, jumlah };
  const data = JSON.parse(localStorage.getItem('local_stok')) || [];
  data.push(itemBaru);
  localStorage.setItem('local_stok', JSON.stringify(data));
  e.target.reset();
  updateDisplay();
});

function deleteItem(index) {
  let data = JSON.parse(localStorage.getItem('local_stok')) || [];
  data.splice(index, 1);
  localStorage.setItem('local_stok', JSON.stringify(data));
  updateDisplay();
}

function updateDisplay() {
  const local = JSON.parse(localStorage.getItem('local_stok')) || [];
  loadStokFromFile().then(file => {
    const all = [...file, ...local];
    renderStok(all);
    document.getElementById('storage-data').textContent =
      JSON.stringify(local, null, 2);
  });
}

document.addEventListener('DOMContentLoaded', updateDisplay);
