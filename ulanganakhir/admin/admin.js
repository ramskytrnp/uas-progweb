async function loadUsersFromFile() {
  try {
    const response = await fetch('admin_data.json');
    if (!response.ok) throw new Error('Gagal memuat data JSON');
    return await response.json();
  } catch (err) {
    console.error('Error:', err);
    return [];
  }
}

function renderUsers(users) {
  const container = document.getElementById('user-list');
  container.innerHTML = '';

  users.forEach(user => {
    const div = document.createElement('div');
    div.className = 'user-card';
    div.innerHTML = `
      <div>
        <strong>${user.username}</strong> <br>
        <span class="user-role">${user.role}</span>
      </div>
      <button class="delete-btn" onclick="deleteUser(${user.id})">Hapus</button>
    `;
    container.appendChild(div);
  });
}

document.getElementById('user-form').addEventListener('submit', (e) => {
  e.preventDefault();

  const username = document.getElementById('username').value.trim();
  const role = document.getElementById('role').value;

  if (!username) return;

  const newUser = {
    id: Date.now(),
    username,
    role
  };

  saveToLocalStorage(newUser);
  e.target.reset();
});

function saveToLocalStorage(user) {
  const users = JSON.parse(localStorage.getItem('local_users')) || [];
  users.push(user);
  localStorage.setItem('local_users', JSON.stringify(users));
  updateDisplay();
}

function deleteUser(userId) {
  const users = JSON.parse(localStorage.getItem('local_users')) || [];
  const updated = users.filter(u => u.id !== userId);
  localStorage.setItem('local_users', JSON.stringify(updated));
  updateDisplay();
}

function updateDisplay() {
  const localUsers = JSON.parse(localStorage.getItem('local_users')) || [];

  loadUsersFromFile().then(fileUsers => {
    const allUsers = [...fileUsers, ...localUsers];
    renderUsers(allUsers);
    document.getElementById('storage-data').textContent =
      JSON.stringify(localUsers, null, 2);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  updateDisplay();
});
