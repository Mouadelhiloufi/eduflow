<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Tableau de bord</title>
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
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 20px;
  margin-bottom: 32px;
}

.stat-card {
  background: white;
  padding: 24px;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  transition: all 0.3s;
}

.stat-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
}

.stat-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
}

.stat-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
}

.stat-icon.blue {
  background: #dbeafe;
  color: #1e40af;
}

.stat-icon.green {
  background: #dcfce7;
  color: #166534;
}

.stat-icon.purple {
  background: #f3e8ff;
  color: #7e22ce;
}

.stat-icon.orange {
  background: #fed7aa;
  color: #c2410c;
}

.stat-value {
  font-size: 36px;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 4px;
}

.stat-label {
  font-size: 14px;
  color: #64748b;
  font-weight: 500;
}

.courses-performance {
  background: white;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  margin-bottom: 24px;
}

.section-title {
  font-size: 20px;
  font-weight: 600;
  color: #0f172a;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.performance-list {
  display: grid;
  gap: 16px;
}

.performance-item {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 16px;
  background: #f8fafc;
  border-radius: 12px;
  transition: all 0.3s;
}

.performance-item:hover {
  background: #f1f5f9;
}

.course-icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 24px;
  flex-shrink: 0;
}

.course-info {
  flex: 1;
}

.course-name {
  font-weight: 600;
  color: #0f172a;
  font-size: 16px;
  margin-bottom: 4px;
}

.course-stats {
  display: flex;
  gap: 16px;
  font-size: 13px;
  color: #64748b;
}

.course-stats span {
  display: flex;
  align-items: center;
  gap: 4px;
}

.course-revenue {
  font-size: 20px;
  font-weight: 700;
  color: #10b981;
  flex-shrink: 0;
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

.btn-primary {
  padding: 12px 24px;
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
  border: none;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    gap: 16px;
  }

  .stats-grid {
    grid-template-columns: 1fr;
  }

  .performance-item {
    flex-direction: column;
    text-align: center;
  }

  .course-stats {
    flex-direction: column;
    gap: 8px;
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
    <a href="/teacher/dashboard" class="nav-link active">Tableau de bord</a>
    <a href="/teacher/courses" class="nav-link">Mes Cours</a>
    <span id="userName" style="color: #475569; font-weight: 500;"></span>
    <button class="btn-logout" onclick="logout()">
      <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
    </button>
  </div>
</nav>

<div class="container">
  <div class="header-section">
    <h2>Tableau de bord</h2>
    <p>Vue d'ensemble de vos cours et performances</p>
  </div>

  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement...
  </div>

  <div id="dashboardContent" style="display: none;">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-header">
          <div class="stat-icon blue">
            <i class="fa-solid fa-book"></i>
          </div>
        </div>
        <div class="stat-value" id="totalCourses">0</div>
        <div class="stat-label">Cours créés</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <div class="stat-icon green">
            <i class="fa-solid fa-users"></i>
          </div>
        </div>
        <div class="stat-value" id="totalStudents">0</div>
        <div class="stat-label">Étudiants inscrits</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <div class="stat-icon purple">
            <i class="fa-solid fa-layer-group"></i>
          </div>
        </div>
        <div class="stat-value" id="totalGroups">0</div>
        <div class="stat-label">Groupes actifs</div>
      </div>

      <div class="stat-card">
        <div class="stat-header">
          <div class="stat-icon orange">
            <i class="fa-solid fa-euro-sign"></i>
          </div>
        </div>
        <div class="stat-value" id="totalRevenue">0 €</div>
        <div class="stat-label">Revenus totaux</div>
      </div>
    </div>

    <div class="courses-performance">
      <h3 class="section-title">
        <i class="fa-solid fa-chart-line"></i>
        Performance des cours
      </h3>
      <div class="performance-list" id="performanceList"></div>
    </div>
  </div>

  <div class="empty-state" id="emptyState" style="display: none;">
    <i class="fa-solid fa-chart-simple"></i>
    <h3>Aucune donnée disponible</h3>
    <p>Créez votre premier cours pour voir vos statistiques</p>
    <a href="/teacher/courses" class="btn-primary">
      <i class="fa-solid fa-plus"></i> Créer un cours
    </a>
  </div>
</div>

<script>
let token = localStorage.getItem('token');

if (!token) {
  window.location.href = '/login';
}

// Charger les données
async function loadDashboard() {
  try {
    // Charger l'utilisateur
    const userRes = await fetch('http://eduflow-api.test/api/user', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    const user = await userRes.json();
    document.getElementById('userName').textContent = user.name;

    // Charger tous les cours
    const coursesRes = await fetch('http://eduflow-api.test/api/courses', {
      headers: {
        'Accept': 'application/json'
      }
    });
    const allCourses = await coursesRes.json();

    // Filtrer les cours de l'enseignant
    const myCourses = allCourses.filter(c => c.teacher_id === user.id);

    if (myCourses.length === 0) {
      document.getElementById('loading').style.display = 'none';
      document.getElementById('emptyState').style.display = 'block';
      return;
    }

    // Calculer les statistiques
    let totalStudents = 0;
    let totalGroups = 0;
    let totalRevenue = 0;
    const coursePerformance = [];

    myCourses.forEach(course => {
      console.log('Course:', course.title, 'Enrollments:', course.enrollments);
      
      const enrollments = course.enrollments || [];
      const paidEnrollments = enrollments.filter(e => e.payment_status === 'paid');
      const revenue = paidEnrollments.length * parseFloat(course.price);
      
      totalStudents += paidEnrollments.length;
      totalRevenue += revenue;

      // Compter les groupes uniques
      const uniqueGroups = new Set();
      enrollments.forEach(e => {
        if (e.course_group_id) {
          uniqueGroups.add(e.course_group_id);
        }
      });
      totalGroups += uniqueGroups.size;

      coursePerformance.push({
        id: course.id,
        title: course.title,
        students: paidEnrollments.length,
        groups: uniqueGroups.size,
        revenue: revenue
      });
    });

    // Trier par revenus
    coursePerformance.sort((a, b) => b.revenue - a.revenue);

    // Afficher les stats
    document.getElementById('totalCourses').textContent = myCourses.length;
    document.getElementById('totalStudents').textContent = totalStudents;
    document.getElementById('totalGroups').textContent = totalGroups;
    document.getElementById('totalRevenue').textContent = totalRevenue.toFixed(2) + ' €';

    // Afficher la performance
    renderPerformance(coursePerformance);

    document.getElementById('loading').style.display = 'none';
    document.getElementById('dashboardContent').style.display = 'block';

  } catch (error) {
    console.error('Erreur:', error);
    document.getElementById('loading').innerHTML = '<p style="color: #dc2626;">Erreur de chargement</p>';
  }
}

// Afficher la performance
function renderPerformance(courses) {
  const list = document.getElementById('performanceList');
  list.innerHTML = '';

  courses.forEach(course => {
    list.innerHTML += `
      <div class="performance-item">
        <div class="course-icon">
          <i class="fa-solid fa-book"></i>
        </div>
        <div class="course-info">
          <div class="course-name">${course.title}</div>
          <div class="course-stats">
            <span>
              <i class="fa-solid fa-users"></i>
              ${course.students} étudiant${course.students > 1 ? 's' : ''}
            </span>
            <span>
              <i class="fa-solid fa-layer-group"></i>
              ${course.groups} groupe${course.groups > 1 ? 's' : ''}
            </span>
          </div>
        </div>
        <div class="course-revenue">${course.revenue.toFixed(2)} €</div>
      </div>
    `;
  });
}

// Déconnexion
function logout() {
  localStorage.removeItem('token');
  window.location.href = '/login';
}

// Charger au démarrage
loadDashboard();
</script>

</body>
</html>
