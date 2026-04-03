<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Groupes du cours</title>
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

.btn-back {
  padding: 8px 16px;
  background: #f1f5f9;
  color: #475569;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-back:hover {
  background: #e2e8f0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 32px 24px;
}

.course-header {
  background: white;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  margin-bottom: 24px;
}

.course-title {
  font-size: 24px;
  color: #0f172a;
  margin-bottom: 8px;
}

.course-meta {
  color: #64748b;
  font-size: 14px;
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

.groups-container {
  display: grid;
  gap: 24px;
}

.group-card {
  background: white;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}

.group-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 16px;
  border-bottom: 2px solid #e2e8f0;
}

.group-title {
  font-size: 20px;
  font-weight: 600;
  color: #0f172a;
  display: flex;
  align-items: center;
  gap: 12px;
}

.group-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 12px;
  background: #f0f9ff;
  border: 2px solid #bae6fd;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 600;
  color: #0369a1;
}

.students-list {
  display: grid;
  gap: 12px;
}

.student-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px;
  background: #f8fafc;
  border-radius: 10px;
  transition: all 0.3s;
}

.student-item:hover {
  background: #f1f5f9;
}

.student-avatar {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 600;
  font-size: 16px;
}

.student-info {
  flex: 1;
}

.student-name {
  font-weight: 600;
  color: #0f172a;
  font-size: 14px;
}

.student-email {
  color: #64748b;
  font-size: 13px;
}

.student-status {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 12px;
  font-weight: 600;
}

.status-paid {
  background: #dcfce7;
  color: #166534;
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
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    gap: 16px;
  }

  .group-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }

  .student-item {
    flex-direction: column;
    text-align: center;
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
  <a href="/teacher/courses" class="btn-back">
    <i class="fa-solid fa-arrow-left"></i> Retour aux cours
  </a>
</nav>

<div class="container">
  <div class="course-header">
    <h1 class="course-title" id="courseTitle"></h1>
    <p class="course-meta" id="courseMeta"></p>
  </div>

  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-value" id="totalStudents">0</div>
      <div class="stat-label">Étudiants inscrits</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="totalGroups">0</div>
      <div class="stat-label">Groupes créés</div>
    </div>
    <div class="stat-card">
      <div class="stat-value" id="avgGroupSize">0</div>
      <div class="stat-label">Moyenne par groupe</div>
    </div>
  </div>

  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement...
  </div>

  <div class="groups-container" id="groupsContainer"></div>

  <div class="empty-state" id="emptyState" style="display: none;">
    <i class="fa-solid fa-users"></i>
    <h3>Aucun étudiant inscrit</h3>
    <p>Les groupes seront créés automatiquement lors des inscriptions</p>
  </div>
</div>

<script>
let token = localStorage.getItem('token');
let courseId = new URLSearchParams(window.location.search).get('id');

if (!token) {
  window.location.href = '/login';
}

if (!courseId) {
  window.location.href = '/teacher/courses';
}

// Charger les données
async function loadData() {
  try {
    // Charger le cours
    const courseRes = await fetch(`http://eduflow-api.test/api/courses/${courseId}`, {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    if (!courseRes.ok) {
      throw new Error('Cours introuvable');
    }

    const course = await courseRes.json();
    
    // Afficher les infos du cours
    document.getElementById('courseTitle').textContent = course.title;
    document.getElementById('courseMeta').textContent = `Prix: ${course.price} € • ${course.description || 'Aucune description'}`;

    // Charger les groupes avec les étudiants
    await loadGroups();

    document.getElementById('loading').style.display = 'none';

  } catch (error) {
    console.error('Erreur:', error);
    document.getElementById('loading').innerHTML = '<p style="color: #dc2626;">Erreur de chargement</p>';
  }
}

// Charger les groupes
async function loadGroups() {
  try {
    // Charger les inscriptions du cours
    const enrollmentsRes = await fetch(`http://eduflow-api.test/api/courses/${courseId}/enrollments`, {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });

    if (!enrollmentsRes.ok) {
      throw new Error('Erreur de chargement des inscriptions');
    }
    
    const courseEnrollments = await enrollmentsRes.json();

    if (courseEnrollments.length === 0) {
      document.getElementById('emptyState').style.display = 'block';
      return;
    }

    // Grouper par groupe
    const groupsMap = {};
    courseEnrollments.forEach(enrollment => {
      const groupId = enrollment.course_group_id || 'no-group';
      if (!groupsMap[groupId]) {
        groupsMap[groupId] = {
          group: enrollment.group,
          students: []
        };
      }
      groupsMap[groupId].students.push({
        name: enrollment.student?.name || 'Étudiant',
        email: enrollment.student?.email || 'N/A',
        status: enrollment.payment_status
      });
    });

    // Mettre à jour les stats
    const totalStudents = courseEnrollments.length;
    const totalGroups = Object.keys(groupsMap).length;
    const avgGroupSize = totalGroups > 0 ? Math.round(totalStudents / totalGroups) : 0;

    document.getElementById('totalStudents').textContent = totalStudents;
    document.getElementById('totalGroups').textContent = totalGroups;
    document.getElementById('avgGroupSize').textContent = avgGroupSize;

    // Afficher les groupes
    renderGroups(groupsMap);

  } catch (error) {
    console.error('Erreur:', error);
  }
}

// Afficher les groupes
function renderGroups(groupsMap) {
  const container = document.getElementById('groupsContainer');
  container.innerHTML = '';

  Object.keys(groupsMap).forEach(groupId => {
    const data = groupsMap[groupId];
    const group = data.group;
    const students = data.students;

    let groupHTML = `
      <div class="group-card">
        <div class="group-header">
          <h3 class="group-title">
            <i class="fa-solid fa-users"></i>
            ${group ? group.name : 'Sans groupe'}
          </h3>
          <span class="group-badge">
            ${students.length} / ${group?.max_size || 25} étudiants
          </span>
        </div>
        <div class="students-list">
    `;

    students.forEach(student => {
      const initials = student.name.split(' ').map(n => n[0]).join('').toUpperCase().substring(0, 2);
      
      groupHTML += `
        <div class="student-item">
          <div class="student-avatar">${initials}</div>
          <div class="student-info">
            <div class="student-name">${student.name}</div>
            <div class="student-email">${student.email}</div>
          </div>
          <span class="student-status status-${student.status}">
            <i class="fa-solid fa-${student.status === 'paid' ? 'check-circle' : 'clock'}"></i>
            ${student.status === 'paid' ? 'Payé' : 'En attente'}
          </span>
        </div>
      `;
    });

    groupHTML += `
        </div>
      </div>
    `;

    container.innerHTML += groupHTML;
  });
}

// Charger au démarrage
loadData();
</script>

</body>
</html>
