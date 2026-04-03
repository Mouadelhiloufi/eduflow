<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Mes Cours (Enseignant)</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background: #f8fafc;
  min-height: 100vh;
}

.navbar {
  background: white;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  padding: 16px 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-links {
  display: flex;
  gap: 16px;
  align-items: center;
}

.nav-link {
  padding: 8px 16px;
  color: #64748b;
  text-decoration: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s;
}

.nav-link:hover {
  background: #f1f5f9;
  color: #0f172a;
}

.nav-link.active {
  background: #06b6d4;
  color: white;
}

.brand {
  display: flex;
  align-items: center;
  gap: 12px;
}

.brand-icon {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  border-radius: 10px;
  display: grid;
  place-items: center;
  overflow: hidden;
}

.brand-icon img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.brand h1 {
  font-size: 20px;
  color: #0f172a;
  font-weight: 700;
}

.user-info {
  display: flex;
  align-items: center;
  gap: 16px;
}

.btn-logout {
  padding: 8px 16px;
  background: #fee2e2;
  color: #dc2626;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
}

.btn-logout:hover {
  background: #fecaca;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 32px 24px;
}

.header-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 32px;
  flex-wrap: wrap;
  gap: 16px;
}

.header-section h2 {
  font-size: 28px;
  color: #0f172a;
}

.btn {
  padding: 12px 24px;
  border: none;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-primary {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
  box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(16, 185, 129, 0.4);
}

.courses-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

.course-card {
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  transition: all 0.3s;
}

.course-card:hover {
  box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.course-image {
  width: 100%;
  height: 180px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 48px;
  position: relative;
  overflow: hidden;
}

.course-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.course-image i {
  position: relative;
  z-index: 1;
}

.course-content {
  padding: 20px;
}

.course-title {
  font-size: 18px;
  font-weight: 600;
  color: #0f172a;
  margin-bottom: 8px;
}

.course-description {
  font-size: 14px;
  color: #64748b;
  margin-bottom: 16px;
  line-height: 1.5;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.course-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 16px;
  border-top: 1px solid #e2e8f0;
  margin-bottom: 16px;
}

.course-price {
  font-size: 20px;
  font-weight: 700;
  color: #10b981;
}

.course-actions {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 8px;
}

.course-actions button:first-child {
  grid-column: 1 / -1;
}

.btn-edit {
  flex: 1;
  padding: 10px;
  background: #06b6d4;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
}

.btn-edit:hover {
  background: #0891b2;
}

.btn-delete {
  flex: 1;
  padding: 10px;
  background: #fee2e2;
  color: #dc2626;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
}

.btn-delete:hover {
  background: #fecaca;
}

.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  z-index: 1000;
  align-items: center;
  justify-content: center;
  overflow-y: auto;
  padding: 24px;
}

.modal.active {
  display: flex;
}

.modal-content {
  background: white;
  border-radius: 16px;
  padding: 32px;
  max-width: 600px;
  width: 100%;
  max-height: 90vh;
  overflow-y: auto;
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 24px;
}

.modal-header h3 {
  font-size: 24px;
  color: #0f172a;
}

.btn-close {
  background: none;
  border: none;
  font-size: 24px;
  color: #94a3b8;
  cursor: pointer;
  padding: 0;
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 8px;
  transition: all 0.3s;
}

.btn-close:hover {
  background: #f1f5f9;
  color: #475569;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #0f172a;
  margin-bottom: 8px;
}

.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: 12px;
  border: 2px solid #e2e8f0;
  border-radius: 8px;
  font-size: 14px;
  font-family: 'Inter', sans-serif;
  transition: all 0.3s;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
  outline: none;
  border-color: #06b6d4;
  box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
}

.form-group textarea {
  resize: vertical;
  min-height: 100px;
}

.error-message {
  color: #dc2626;
  font-size: 12px;
  margin-top: 4px;
  display: none;
}

.error-message.show {
  display: block;
}

.form-actions {
  display: flex;
  gap: 12px;
  margin-top: 24px;
}

.btn-secondary {
  background: #f1f5f9;
  color: #475569;
}

.btn-secondary:hover {
  background: #e2e8f0;
}

.loading {
  text-align: center;
  padding: 48px;
  color: #06b6d4;
  font-size: 16px;
  font-weight: 600;
}

.empty-state {
  text-align: center;
  padding: 64px 24px;
  background: white;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}

.empty-state i {
  font-size: 64px;
  color: #cbd5e0;
  margin-bottom: 16px;
}

.empty-state h3 {
  font-size: 20px;
  color: #0f172a;
  margin-bottom: 8px;
}

.empty-state p {
  color: #64748b;
  margin-bottom: 24px;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    gap: 16px;
  }

  .header-section {
    flex-direction: column;
    align-items: flex-start;
  }

  .courses-grid {
    grid-template-columns: 1fr;
  }

  .modal-content {
    padding: 24px;
  }
}
</style>
</head>

<body>

<nav class="navbar">
  <div class="brand">
    <div class="brand-icon">
      <img src="https://cdn-icons-png.flaticon.com/512/3976/3976625.png" alt="EduFlow">
    </div>
    <h1>EduFlow</h1>
  </div>
  <div class="nav-links">
    <a href="/teacher/dashboard" class="nav-link">Tableau de bord</a>
    <a href="/teacher/courses" class="nav-link active">Mes Cours</a>
    <span id="userName" style="color: #475569; font-weight: 500;"></span>
    <button class="btn-logout" onclick="logout()">
      <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
    </button>
  </div>
</nav>

<div class="container">
  <div class="header-section">
    <h2>Mes Cours</h2>
    <button class="btn btn-primary" onclick="openCreateModal()">
      <i class="fa-solid fa-plus"></i> Créer un cours
    </button>
  </div>

  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement...
  </div>

  <div class="courses-grid" id="coursesGrid"></div>

  <div class="empty-state" id="emptyState" style="display: none;">
    <i class="fa-solid fa-book"></i>
    <h3>Aucun cours créé</h3>
    <p>Commencez par créer votre premier cours</p>
    <button class="btn btn-primary" onclick="openCreateModal()">
      <i class="fa-solid fa-plus"></i> Créer un cours
    </button>
  </div>
</div>

<!-- Modal Créer/Éditer -->
<div class="modal" id="courseModal">
  <div class="modal-content">
    <div class="modal-header">
      <h3 id="modalTitle">Créer un cours</h3>
      <button class="btn-close" onclick="closeModal()">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>

    <form id="courseForm">
      <div class="form-group">
        <label for="title">Titre du cours *</label>
        <input type="text" id="title" required>
        <div class="error-message" id="titleError"></div>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description"></textarea>
        <div class="error-message" id="descriptionError"></div>
      </div>

      <div class="form-group">
        <label for="price">Prix (€) *</label>
        <input type="number" id="price" step="0.01" min="0" required>
        <div class="error-message" id="priceError"></div>
      </div>

      <div class="form-group">
        <label for="image">URL de l'image (optionnel)</label>
        <input type="url" id="image" placeholder="https://exemple.com/image.jpg">
        <div class="error-message" id="imageError"></div>
        <div style="margin-top: 8px; font-size: 12px; color: #64748b;">
          Vous pouvez utiliser une URL d'image depuis Unsplash, Pexels, etc.
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary" id="submitBtn">
          <i class="fa-solid fa-check"></i> Enregistrer
        </button>
        <button type="button" class="btn btn-secondary" onclick="closeModal()">
          Annuler
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Modal Supprimer -->
<div class="modal" id="deleteModal">
  <div class="modal-content" style="max-width: 400px; text-align: center;">
    <h3 style="margin-bottom: 16px;">Confirmer la suppression</h3>
    <p style="color: #64748b; margin-bottom: 24px;">Êtes-vous sûr de vouloir supprimer ce cours ? Cette action est irréversible.</p>
    <div class="form-actions" style="justify-content: center;">
      <button class="btn btn-delete" onclick="confirmDelete()">
        <i class="fa-solid fa-trash"></i> Supprimer
      </button>
      <button class="btn btn-secondary" onclick="closeDeleteModal()">
        Annuler
      </button>
    </div>
  </div>
</div>

<script>
let token = localStorage.getItem('token');
let courses = [];
let currentCourseId = null;
let isEditMode = false;

if (!token) {
  window.location.href = '/login';
}

// Charger les cours
async function loadCourses() {
  try {
    const res = await fetch('http://eduflow-api.test/api/courses', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    const allCourses = await res.json();
    
    // Charger l'utilisateur pour filtrer ses cours
    const userRes = await fetch('http://eduflow-api.test/api/user', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    const user = await userRes.json();
    document.getElementById('userName').textContent = user.name;

    // Filtrer les cours de l'enseignant
    courses = allCourses.filter(c => c.teacher_id === user.id);

    document.getElementById('loading').style.display = 'none';

    if (courses.length === 0) {
      document.getElementById('emptyState').style.display = 'block';
    } else {
      renderCourses();
    }

  } catch (error) {
    console.error('Erreur:', error);
    document.getElementById('loading').innerHTML = '<p style="color: #dc2626;">Erreur de chargement</p>';
  }
}

// Afficher les cours
function renderCourses() {
  const grid = document.getElementById('coursesGrid');
  grid.innerHTML = '';

  courses.forEach(course => {
    const imageHTML = course.image 
      ? `<img src="${course.image}" alt="${course.title}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
         <i class="fa-solid fa-book" style="display: none;"></i>`
      : `<i class="fa-solid fa-book"></i>`;

    grid.innerHTML += `
      <div class="course-card">
        <div class="course-image">
          ${imageHTML}
        </div>
        <div class="course-content">
          <h3 class="course-title">${course.title}</h3>
          <p class="course-description">${course.description || 'Aucune description'}</p>
          <div class="course-footer">
            <span class="course-price">${course.price} €</span>
          </div>
          <div class="course-actions">
            <button class="btn-edit" onclick="viewGroups(${course.id})">
              <i class="fa-solid fa-users"></i> Groupes
            </button>
            <button class="btn-edit" onclick="openEditModal(${course.id})">
              <i class="fa-solid fa-pen"></i> Modifier
            </button>
            <button class="btn-delete" onclick="openDeleteModal(${course.id})">
              <i class="fa-solid fa-trash"></i> Supprimer
            </button>
          </div>
        </div>
      </div>
    `;
  });
}

// Ouvrir modal création
function openCreateModal() {
  isEditMode = false;
  currentCourseId = null;
  document.getElementById('modalTitle').textContent = 'Créer un cours';
  document.getElementById('courseForm').reset();
  clearErrors();
  document.getElementById('courseModal').classList.add('active');
}

// Ouvrir modal édition
function openEditModal(courseId) {
  isEditMode = true;
  currentCourseId = courseId;
  const course = courses.find(c => c.id === courseId);
  
  if (!course) return;

  document.getElementById('modalTitle').textContent = 'Modifier le cours';
  document.getElementById('title').value = course.title;
  document.getElementById('description').value = course.description || '';
  document.getElementById('price').value = course.price;
  document.getElementById('image').value = course.image || '';
  clearErrors();
  document.getElementById('courseModal').classList.add('active');
}

// Fermer modal
function closeModal() {
  document.getElementById('courseModal').classList.remove('active');
  document.getElementById('courseForm').reset();
  clearErrors();
}

// Validation client
function validateForm() {
  let isValid = true;
  clearErrors();

  const title = document.getElementById('title').value.trim();
  const price = document.getElementById('price').value;

  if (!title || title.length < 3) {
    showError('titleError', 'Le titre doit contenir au moins 3 caractères');
    isValid = false;
  }

  if (!price || parseFloat(price) < 0) {
    showError('priceError', 'Le prix doit être supérieur ou égal à 0');
    isValid = false;
  }

  return isValid;
}

function showError(elementId, message) {
  const errorElement = document.getElementById(elementId);
  errorElement.textContent = message;
  errorElement.classList.add('show');
}

function clearErrors() {
  document.querySelectorAll('.error-message').forEach(el => {
    el.classList.remove('show');
    el.textContent = '';
  });
}

// Soumettre formulaire
document.getElementById('courseForm').addEventListener('submit', async (e) => {
  e.preventDefault();

  if (!validateForm()) return;

  const submitBtn = document.getElementById('submitBtn');
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Enregistrement...';

  const data = {
    title: document.getElementById('title').value.trim(),
    description: document.getElementById('description').value.trim(),
    price: parseFloat(document.getElementById('price').value),
    image: document.getElementById('image').value.trim() || null
  };

  try {
    const url = isEditMode 
      ? `http://eduflow-api.test/api/courses/${currentCourseId}`
      : 'http://eduflow-api.test/api/courses';
    
    const method = isEditMode ? 'PUT' : 'POST';

    const res = await fetch(url, {
      method: method,
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + token
      },
      body: JSON.stringify(data)
    });

    const result = await res.json();

    if (res.ok) {
      closeModal();
      // Recharger les cours
      document.getElementById('loading').style.display = 'block';
      document.getElementById('coursesGrid').innerHTML = '';
      document.getElementById('emptyState').style.display = 'none';
      await loadCourses();
    } else {
      alert(result.message || 'Erreur lors de l\'enregistrement');
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<i class="fa-solid fa-check"></i> Enregistrer';
    }
  } catch (error) {
    console.error('Erreur:', error);
    alert('Erreur lors de l\'enregistrement');
    submitBtn.disabled = false;
    submitBtn.innerHTML = '<i class="fa-solid fa-check"></i> Enregistrer';
  }
});

// Ouvrir modal suppression
function openDeleteModal(courseId) {
  currentCourseId = courseId;
  document.getElementById('deleteModal').classList.add('active');
}

// Fermer modal suppression
function closeDeleteModal() {
  document.getElementById('deleteModal').classList.remove('active');
  currentCourseId = null;
}

// Confirmer suppression
async function confirmDelete() {
  if (!currentCourseId) return;

  try {
    const res = await fetch(`http://eduflow-api.test/api/courses/${currentCourseId}`, {
      method: 'DELETE',
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    if (res.ok) {
      closeDeleteModal();
      courses = courses.filter(c => c.id !== currentCourseId);
      
      if (courses.length === 0) {
        document.getElementById('coursesGrid').innerHTML = '';
        document.getElementById('emptyState').style.display = 'block';
      } else {
        renderCourses();
      }
    } else {
      const data = await res.json();
      alert(data.message || 'Erreur lors de la suppression');
    }
  } catch (error) {
    console.error('Erreur:', error);
    alert('Erreur lors de la suppression');
  }
}

// Déconnexion
function logout() {
  localStorage.removeItem('token');
  window.location.href = '/login';
}

// Voir les groupes
function viewGroups(courseId) {
  window.location.href = '/teacher/course-groups?id=' + courseId;
}

// Charger au démarrage
loadCourses();
</script>

</body>
</html>
