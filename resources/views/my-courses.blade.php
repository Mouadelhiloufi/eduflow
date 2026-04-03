<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Mes Cours</title>
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
  margin-bottom: 32px;
}

.header-section h2 {
  font-size: 28px;
  color: #0f172a;
  margin-bottom: 8px;
}

.header-section p {
  color: #64748b;
  font-size: 15px;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 16px;
  margin-bottom: 32px;
}

.stat-card {
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}

.stat-value {
  font-size: 32px;
  font-weight: 700;
  color: #06b6d4;
  margin-bottom: 4px;
}

.stat-label {
  font-size: 14px;
  color: #64748b;
}

.courses-list {
  display: grid;
  gap: 20px;
}

.course-item {
  background: white;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: 20px;
  align-items: center;
  transition: all 0.3s;
}

.course-item:hover {
  box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.course-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 32px;
}

.course-info {
  flex: 1;
}

.course-title {
  font-size: 20px;
  font-weight: 600;
  color: #0f172a;
  margin-bottom: 8px;
}

.course-meta {
  display: flex;
  gap: 20px;
  margin-bottom: 12px;
  flex-wrap: wrap;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 6px;
  color: #64748b;
  font-size: 14px;
}

.meta-item i {
  color: #06b6d4;
}

.status-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 13px;
  font-weight: 600;
}

.status-paid {
  background: #dcfce7;
  color: #166534;
}

.status-pending {
  background: #fef3c7;
  color: #92400e;
}

.group-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 16px;
  background: #f0f9ff;
  border: 2px solid #bae6fd;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 600;
  color: #0369a1;
}

.course-actions {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  white-space: nowrap;
}

.btn-view {
  background: #06b6d4;
  color: white;
}

.btn-view:hover {
  background: #0891b2;
}

.btn-unenroll {
  background: #fee2e2;
  color: #dc2626;
  border: 2px solid #fecaca;
}

.btn-unenroll:hover {
  background: #fecaca;
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

.btn-primary {
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  color: white;
  padding: 12px 24px;
  box-shadow: 0 4px 12px rgba(6, 182, 212, 0.3);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(6, 182, 212, 0.4);
}

.loading {
  text-align: center;
  padding: 48px;
  color: #06b6d4;
  font-size: 16px;
  font-weight: 600;
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
}

.modal.active {
  display: flex;
}

.modal-content {
  background: white;
  border-radius: 16px;
  padding: 32px;
  max-width: 400px;
  width: 90%;
  text-align: center;
}

.modal-content h3 {
  font-size: 20px;
  color: #0f172a;
  margin-bottom: 12px;
}

.modal-content p {
  color: #64748b;
  margin-bottom: 24px;
}

.modal-actions {
  display: flex;
  gap: 12px;
  justify-content: center;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    gap: 16px;
  }

  .course-item {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .course-icon {
    margin: 0 auto;
  }

  .course-actions {
    width: 100%;
  }

  .btn {
    width: 100%;
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
    <a href="/catalog" class="nav-link">Catalogue</a>
    <a href="/my-courses" class="nav-link active">Mes Cours</a>
    <span id="userName" style="color: #475569; font-weight: 500;"></span>
    <button class="btn-logout" onclick="logout()">
      <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
    </button>
  </div>
</nav>

<div class="container">
  <div class="header-section">
    <h2>Mes Cours</h2>
    <p>Gérez vos inscriptions et suivez votre progression</p>
  </div>

  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-value" id="totalCourses">0</div>
      <div class="stat-label">Cours inscrits</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="totalGroups">0</div>
      <div class="stat-label">Groupes</div>
    </div>
  </div>

  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement...
  </div>

  <div class="courses-list" id="coursesList"></div>

  <div class="empty-state" id="emptyState" style="display: none;">
    <i class="fa-solid fa-book-open"></i>
    <h3>Aucun cours inscrit</h3>
    <p>Commencez votre apprentissage en vous inscrivant à un cours</p>
    <a href="/catalog" class="btn btn-primary">
      <i class="fa-solid fa-magnifying-glass"></i> Explorer le catalogue
    </a>
  </div>
</div>

<!-- Modal de confirmation -->
<div class="modal" id="unenrollModal">
  <div class="modal-content">
    <h3>Confirmer la désinscription</h3>
    <p>Êtes-vous sûr de vouloir vous désinscrire de ce cours ?</p>
    <div class="modal-actions">
      <button class="btn btn-unenroll" onclick="confirmUnenroll()">
        Oui, me désinscrire
      </button>
      <button class="btn" style="background: #f1f5f9; color: #475569;" onclick="closeModal()">
        Annuler
      </button>
    </div>
  </div>
</div>

<script>
let token = localStorage.getItem('token');
let enrollments = [];
let currentCourseId = null;

if (!token) {
  window.location.href = '/login';
}

// Charger les données
async function loadData() {
  try {
    // Charger les inscriptions
    const res = await fetch('http://eduflow-api.test/api/enrollments', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    if(!res.ok) {
      throw new Error('Erreur de chargement');
    }

    enrollments = await res.json();
    
    document.getElementById('loading').style.display = 'none';
    
    if(enrollments.length === 0) {
      document.getElementById('emptyState').style.display = 'block';
    } else {
      renderEnrollments();
    }

    // Charger info utilisateur
    const userRes = await fetch('http://eduflow-api.test/api/user', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    const user = await userRes.json();
    document.getElementById('userName').textContent = user.name;

  } catch (error) {
    console.error('Erreur:', error);
    document.getElementById('loading').innerHTML = '<p style="color: #dc2626;">Erreur de chargement</p>';
  }
}

// Afficher les inscriptions
function renderEnrollments() {
  const list = document.getElementById('coursesList');
  
  // Mettre à jour les stats
  document.getElementById('totalCourses').textContent = enrollments.length;
  const uniqueGroups = new Set();
  enrollments.forEach(e => {
    if(e.course_group_id) {
      uniqueGroups.add(e.course_group_id);
    }
  });
  document.getElementById('totalGroups').textContent = uniqueGroups.size;

  list.innerHTML = '';
  enrollments.forEach(enrollment => {
    const course = enrollment.course;
    const group = enrollment.group;
    const status = enrollment.payment_status;
    
    list.innerHTML += `
      <div class="course-item">
        <div class="course-icon">
          <i class="fa-solid fa-book"></i>
        </div>
        
        <div class="course-info">
          <h3 class="course-title">${course.title}</h3>
          
          <div class="course-meta">
            <div class="meta-item">
              <i class="fa-solid fa-user"></i>
              <span>${course.teacher?.name || 'Enseignant'}</span>
            </div>
            <div class="meta-item">
              <i class="fa-solid fa-calendar"></i>
              <span>Inscrit le ${new Date(enrollment.enrolled_at).toLocaleDateString('fr-FR')}</span>
            </div>
          </div>

          <div style="display: flex; gap: 12px; flex-wrap: wrap; align-items: center;">
            <span class="status-badge status-${status}">
              <i class="fa-solid fa-${status === 'paid' ? 'check-circle' : 'clock'}"></i>
              ${status === 'paid' ? 'Confirmé' : 'En attente'}
            </span>
            ${group ? `
              <span class="group-badge">
                <i class="fa-solid fa-users"></i>
                ${group.name}
              </span>
            ` : ''}
          </div>
        </div>

        <div class="course-actions">
          <a href="/course?id=${course.id}" class="btn btn-view">
            <i class="fa-solid fa-eye"></i> Voir
          </a>
          <button class="btn btn-unenroll" onclick="openUnenrollModal(${course.id})">
            <i class="fa-solid fa-right-from-bracket"></i> Se désinscrire
          </button>
        </div>
      </div>
    `;
  });
}

// Ouvrir modal de désinscription
function openUnenrollModal(courseId) {
  currentCourseId = courseId;
  document.getElementById('unenrollModal').classList.add('active');
}

// Fermer modal
function closeModal() {
  document.getElementById('unenrollModal').classList.remove('active');
  currentCourseId = null;
}

// Confirmer désinscription
async function confirmUnenroll() {
  if(!currentCourseId) return;

  try {
    const res = await fetch(`http://eduflow-api.test/api/enrollments/${currentCourseId}`, {
      method: 'DELETE',
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    if(res.ok) {
      closeModal();
      // Recharger les données
      enrollments = enrollments.filter(e => e.course_id !== currentCourseId);
      
      if(enrollments.length === 0) {
        document.getElementById('coursesList').innerHTML = '';
        document.getElementById('emptyState').style.display = 'block';
      } else {
        renderEnrollments();
      }
    } else {
      const data = await res.json();
      alert(data.message || 'Erreur lors de la désinscription');
    }
  } catch(error) {
    console.error('Erreur:', error);
    alert('Erreur lors de la désinscription');
  }
}

// Déconnexion
function logout() {
  localStorage.removeItem('token');
  window.location.href = '/login';
}

// Charger au démarrage
loadData();
</script>

</body>
</html>
