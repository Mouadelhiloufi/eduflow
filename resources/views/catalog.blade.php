<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Catalogue</title>
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

.filters-section {
  background: white;
  padding: 24px;
  border-radius: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
  margin-bottom: 32px;
}

.search-bar {
  position: relative;
  margin-bottom: 20px;
}

.search-bar input {
  width: 100%;
  padding: 12px 16px 12px 44px;
  border: 2px solid #e2e8f0;
  border-radius: 10px;
  font-size: 14px;
  font-family: 'Inter', sans-serif;
  transition: all 0.3s;
}

.search-bar input:focus {
  outline: none;
  border-color: #06b6d4;
  box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
}

.search-icon {
  position: absolute;
  left: 16px;
  top: 50%;
  transform: translateY(-50%);
  color: #94a3b8;
  font-size: 16px;
}

.filter-group {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.filter-btn {
  padding: 8px 16px;
  background: #f1f5f9;
  color: #475569;
  border: 2px solid transparent;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s;
}

.filter-btn:hover {
  background: #e2e8f0;
}

.filter-btn.active {
  background: #06b6d4;
  color: white;
  border-color: #0891b2;
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
  cursor: pointer;
  position: relative;
}

.wishlist-btn {
  position: absolute;
  top: 12px;
  right: 12px;
  width: 40px;
  height: 40px;
  background: white;
  border: none;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  transition: all 0.3s;
  z-index: 10;
}

.wishlist-btn:hover {
  transform: scale(1.1);
}

.wishlist-btn i {
  font-size: 18px;
  color: #94a3b8;
  transition: all 0.3s;
}

.wishlist-btn.active i {
  color: #ef4444;
}

.course-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
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
}

.course-price {
  font-size: 20px;
  font-weight: 700;
  color: #10b981;
}

.course-teacher {
  font-size: 13px;
  color: #64748b;
}

.empty-state {
  text-align: center;
  padding: 64px 24px;
  color: #94a3b8;
}

.empty-state i {
  font-size: 64px;
  margin-bottom: 16px;
  opacity: 0.5;
}

.loading {
  text-align: center;
  padding: 48px;
  color: #06b6d4;
  font-size: 16px;
  font-weight: 600;
}

@media (max-width: 768px) {
  .navbar {
    padding: 12px 16px;
  }

  .courses-grid {
    grid-template-columns: 1fr;
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
    <a href="/my-courses" class="nav-link">Mes Cours</a>
    <span id="userName" style="color: #475569; font-weight: 500;"></span>
    <button class="btn-logout" onclick="logout()">
      <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
    </button>
  </div>
</nav>

<div class="container">
  <div class="header-section">
    <h2>Catalogue de cours</h2>
    <p>Découvrez nos cours et commencez votre apprentissage</p>
  </div>

  <!-- Section Recommandations -->
  <div id="recommendationsSection" style="display: none;">
    <div class="recommendations-header" style="margin-bottom: 24px;">
      <h3 style="font-size: 22px; color: #0f172a; margin-bottom: 8px;">
        <i class="fa-solid fa-sparkles" style="color: #f59e0b;"></i> Suggestions pour vous
      </h3>
      <p style="color: #64748b; font-size: 14px;">Basées sur vos intérêts</p>
    </div>
    <div class="courses-grid" id="recommendationsGrid"></div>
    <hr style="margin: 48px 0; border: none; border-top: 2px solid #e2e8f0;">
  </div>

  <div class="filters-section">
    <div class="search-bar">
      <i class="fa-solid fa-magnifying-glass search-icon"></i>
      <input type="text" id="searchInput" placeholder="Rechercher un cours...">
    </div>

    <div class="filter-group" id="filterButtons">
      <button class="filter-btn active" data-interest="all">Tous</button>
    </div>
  </div>

  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement des cours...
  </div>

  <div class="courses-grid" id="coursesGrid"></div>

  <div class="empty-state" id="emptyState" style="display: none;">
    <i class="fa-solid fa-book-open"></i>
    <p>Aucun cours trouvé</p>
  </div>
</div>

<script>
let allCourses = [];
let allInterests = [];
let currentFilter = 'all';
let token = localStorage.getItem('token');
let wishlist = [];

// Vérifier si connecté
if (!token) {
  window.location.href = '/login';
}

// Charger les données
async function loadData() {
  try {
    // Charger les intérêts
    const interestsRes = await fetch('http://eduflow-api.test/api/interests', {
      headers: { 'Accept': 'application/json' }
    });
    allInterests = await interestsRes.json();
    renderFilters();

    // Charger les cours
    const coursesRes = await fetch('http://eduflow-api.test/api/courses', {
      headers: { 'Accept': 'application/json' }
    });
    allCourses = await coursesRes.json();
    
    // Charger la wishlist
    await loadWishlist();

    // Charger les recommandations
    await loadRecommendations();
    
    document.getElementById('loading').style.display = 'none';
    renderCourses();

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

// Charger la wishlist
async function loadWishlist() {
  try {
    const res = await fetch('http://eduflow-api.test/api/wishlist', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    if(res.ok) {
      wishlist = await res.json();
    }
  } catch(error) {
    console.error('Erreur wishlist:', error);
  }
}

// Charger les recommandations
async function loadRecommendations() {
  try {
    const res = await fetch('http://eduflow-api.test/api/recommendations', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    if(res.ok) {
      const recommendations = await res.json();
      if(recommendations.length > 0) {
        document.getElementById('recommendationsSection').style.display = 'block';
        renderRecommendations(recommendations);
      }
    }
  } catch(error) {
    console.error('Erreur recommandations:', error);
  }
}

// Afficher les recommandations
function renderRecommendations(courses) {
  const grid = document.getElementById('recommendationsGrid');
  grid.innerHTML = '';
  
  const limitedCourses = courses.slice(0, 4);
  limitedCourses.forEach(course => {
    grid.innerHTML += createCourseCard(course);
  });
}

// Vérifier si cours dans wishlist
function isInWishlist(courseId) {
  return wishlist.some(item => item.course_id === courseId);
}

// Toggle wishlist
async function toggleWishlist(courseId, event) {
  event.stopPropagation();
  
  const inWishlist = isInWishlist(courseId);
  
  try {
    if(inWishlist) {
      // Supprimer
      const res = await fetch(`http://eduflow-api.test/api/wishlist/${courseId}`, {
        method: 'DELETE',
        headers: {
          'Accept': 'application/json',
          'Authorization': 'Bearer ' + token
        }
      });
      if(res.ok) {
        wishlist = wishlist.filter(item => item.course_id !== courseId);
        renderCourses();
        renderRecommendations(allCourses.filter(c => isInWishlist(c.id)));
      }
    } else {
      // Ajouter
      const res = await fetch('http://eduflow-api.test/api/wishlist', {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + token
        },
        body: JSON.stringify({ course_id: courseId })
      });
      if(res.ok) {
        const data = await res.json();
        wishlist.push(data.wishlist);
        renderCourses();
        renderRecommendations(allCourses.filter(c => isInWishlist(c.id)));
      }
    }
  } catch(error) {
    console.error('Erreur toggle wishlist:', error);
  }
}

// Créer une carte de cours
function createCourseCard(course) {
  const inWishlist = isInWishlist(course.id);
  const imageHTML = course.image 
    ? `<img src="${course.image}" alt="${course.title}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
       <i class="fa-solid fa-book" style="display: none;"></i>`
    : `<i class="fa-solid fa-book"></i>`;

  return `
    <div class="course-card" onclick="viewCourse(${course.id})">
      <button class="wishlist-btn ${inWishlist ? 'active' : ''}" onclick="toggleWishlist(${course.id}, event)">
        <i class="fa-${inWishlist ? 'solid' : 'regular'} fa-heart"></i>
      </button>
      <div class="course-image">
        ${imageHTML}
      </div>
      <div class="course-content">
        <h3 class="course-title">${course.title}</h3>
        <p class="course-description">${course.description || 'Aucune description'}</p>
        <div class="course-footer">
          <span class="course-price">${course.price} €</span>
          <span class="course-teacher">
            <i class="fa-solid fa-user"></i> ${course.teacher?.name || 'Enseignant'}
          </span>
        </div>
      </div>
    </div>
  `;
}

// Afficher les filtres
function renderFilters() {
  const container = document.getElementById('filterButtons');
  const allBtn = container.querySelector('[data-interest="all"]');
  
  // Ajouter event listener au bouton "Tous"
  allBtn.onclick = () => filterByInterest('all');
  
  allInterests.forEach(interest => {
    const btn = document.createElement('button');
    btn.className = 'filter-btn';
    btn.dataset.interest = interest.id;
    btn.textContent = interest.name;
    btn.onclick = () => filterByInterest(interest.id);
    container.appendChild(btn);
  });
}

// Filtrer par intérêt
function filterByInterest(interestId) {
  currentFilter = interestId;
  
  // Mettre à jour les boutons actifs
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.classList.remove('active');
    if (btn.dataset.interest == interestId || (interestId === 'all' && btn.dataset.interest === 'all')) {
      btn.classList.add('active');
    }
  });

  renderCourses();
}

// Afficher les cours
function renderCourses() {
  const searchTerm = document.getElementById('searchInput').value.toLowerCase();
  const grid = document.getElementById('coursesGrid');
  const emptyState = document.getElementById('emptyState');
  
  let filtered = allCourses;

  // Filtrer par intérêt
  if (currentFilter !== 'all') {
    filtered = filtered.filter(course => 
      course.interests && course.interests.some(i => i.id == currentFilter)
    );
  }

  // Filtrer par recherche
  if (searchTerm) {
    filtered = filtered.filter(course =>
      course.title.toLowerCase().includes(searchTerm) ||
      (course.description && course.description.toLowerCase().includes(searchTerm))
    );
  }

  // Afficher résultats
  if (filtered.length === 0) {
    grid.innerHTML = '';
    emptyState.style.display = 'block';
    return;
  }

  emptyState.style.display = 'none';
  grid.innerHTML = '';
  filtered.forEach(course => {
    grid.innerHTML += createCourseCard(course);
  });
}

// Recherche en temps réel
document.getElementById('searchInput').addEventListener('input', renderCourses);

// Voir détails cours
function viewCourse(id) {
  window.location.href = '/course?id=' + id;
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
