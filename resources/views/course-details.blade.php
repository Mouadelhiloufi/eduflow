<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Détails du cours</title>
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
  max-width: 1000px;
  margin: 0 auto;
  padding: 32px 24px;
}

.course-header {
  background: white;
  border-radius: 16px;
  padding: 32px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  margin-bottom: 24px;
}

.course-image-large {
  width: 100%;
  height: 300px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 80px;
  margin-bottom: 24px;
  position: relative;
  overflow: hidden;
}

.course-image-large img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.course-image-large i {
  position: relative;
  z-index: 1;
}

.course-title {
  font-size: 32px;
  color: #0f172a;
  margin-bottom: 12px;
}

.course-meta {
  display: flex;
  gap: 24px;
  margin-bottom: 16px;
  flex-wrap: wrap;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #64748b;
  font-size: 14px;
}

.meta-item i {
  color: #06b6d4;
}

.course-price-large {
  font-size: 36px;
  font-weight: 700;
  color: #10b981;
  margin-bottom: 24px;
}

.action-buttons {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.btn {
  padding: 14px 28px;
  border: none;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.btn-primary {
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  color: white;
  box-shadow: 0 8px 24px rgba(6, 182, 212, 0.3);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(6, 182, 212, 0.4);
}

.btn-secondary {
  background: white;
  color: #475569;
  border: 2px solid #e2e8f0;
}

.btn-secondary:hover {
  background: #f8fafc;
  border-color: #cbd5e0;
}

.btn-wishlist {
  background: white;
  color: #ef4444;
  border: 2px solid #fecaca;
}

.btn-wishlist:hover {
  background: #fef2f2;
}

.btn-wishlist.active {
  background: #ef4444;
  color: white;
  border-color: #ef4444;
}

.course-description {
  background: white;
  border-radius: 16px;
  padding: 32px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}

.course-description h2 {
  font-size: 24px;
  color: #0f172a;
  margin-bottom: 16px;
}

.course-description p {
  color: #64748b;
  line-height: 1.8;
  font-size: 15px;
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

  .course-header {
    padding: 24px;
  }

  .course-title {
    font-size: 24px;
  }

  .action-buttons {
    flex-direction: column;
  }

  .btn {
    width: 100%;
    justify-content: center;
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
  <a href="/catalog" class="btn-back">
    <i class="fa-solid fa-arrow-left"></i> Retour au catalogue
  </a>
</nav>

<div class="container">
  <div class="loading" id="loading">
    <i class="fa-solid fa-spinner fa-spin"></i> Chargement...
  </div>

  <div id="courseContent" style="display: none;">
    <div class="course-header">
      <div class="course-image-large">
        <i class="fa-solid fa-book"></i>
      </div>
      
      <h1 class="course-title" id="courseTitle"></h1>
      
      <div class="course-meta">
        <div class="meta-item">
          <i class="fa-solid fa-user"></i>
          <span id="courseTeacher"></span>
        </div>
        <div class="meta-item">
          <i class="fa-solid fa-tags"></i>
          <span id="courseInterests"></span>
        </div>
      </div>

      <div class="course-price-large" id="coursePrice"></div>

      <div class="action-buttons">
        <button class="btn btn-primary" id="enrollBtn">
          <i class="fa-solid fa-credit-card"></i> Payer et s'inscrire
        </button>
        <button class="btn btn-wishlist" id="wishlistBtn">
          <i class="fa-regular fa-heart"></i> <span id="wishlistText">Ajouter aux favoris</span>
        </button>
      </div>
    </div>

    <div class="course-description">
      <h2>Description du cours</h2>
      <p id="courseDescription"></p>
    </div>
  </div>
</div>

<script>
let token = localStorage.getItem('token');
let courseId = new URLSearchParams(window.location.search).get('id');
let course = null;
let inWishlist = false;

if (!token) {
  window.location.href = '/login';
}

if (!courseId) {
  window.location.href = '/catalog';
}

// Charger le cours
async function loadCourse() {
  try {
    const res = await fetch(`http://eduflow-api.test/api/courses/${courseId}`, {
      headers: { 'Accept': 'application/json' }
    });
    
    if(!res.ok) {
      throw new Error('Cours introuvable');
    }

    course = await res.json();
    
    // Vérifier wishlist
    await checkWishlist();
    
    // Afficher le cours
    renderCourse();
    
    document.getElementById('loading').style.display = 'none';
    document.getElementById('courseContent').style.display = 'block';

  } catch(error) {
    console.error('Erreur:', error);
    document.getElementById('loading').innerHTML = '<p style="color: #dc2626;">Erreur de chargement</p>';
  }
}

// Vérifier si dans wishlist
async function checkWishlist() {
  try {
    const res = await fetch('http://eduflow-api.test/api/wishlist', {
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    if(res.ok) {
      const wishlist = await res.json();
      inWishlist = wishlist.some(item => item.course_id == courseId);
      updateWishlistButton();
    }
  } catch(error) {
    console.error('Erreur wishlist:', error);
  }
}

// Afficher le cours
function renderCourse() {
  document.getElementById('courseTitle').textContent = course.title;
  document.getElementById('courseTeacher').textContent = course.teacher?.name || 'Enseignant';
  document.getElementById('coursePrice').textContent = course.price + ' DH';
  document.getElementById('courseDescription').textContent = course.description || 'Aucune description disponible.';
  
  const interests = course.interests?.map(i => i.name).join(', ') || 'Aucun';
  document.getElementById('courseInterests').textContent = interests;

  // Afficher l'image si disponible
  const imageContainer = document.querySelector('.course-image-large');
  if (course.image) {
    imageContainer.innerHTML = `
      <img src="${course.image}" alt="${course.title}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
      <i class="fa-solid fa-book" style="display: none;"></i>
    `;
  }
}

// Mettre à jour bouton wishlist
function updateWishlistButton() {
  const btn = document.getElementById('wishlistBtn');
  const icon = btn.querySelector('i');
  const text = document.getElementById('wishlistText');
  
  if(inWishlist) {
    btn.classList.add('active');
    icon.className = 'fa-solid fa-heart';
    text.textContent = 'Retirer des favoris';
  } else {
    btn.classList.remove('active');
    icon.className = 'fa-regular fa-heart';
    text.textContent = 'Ajouter aux favoris';
  }
}

// Toggle wishlist
async function toggleWishlist() {
  try {
    if(inWishlist) {
      const res = await fetch(`http://eduflow-api.test/api/wishlist/${courseId}`, {
        method: 'DELETE',
        headers: {
          'Accept': 'application/json',
          'Authorization': 'Bearer ' + token
        }
      });
      if(res.ok) {
        inWishlist = false;
        updateWishlistButton();
      }
    } else {
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
        inWishlist = true;
        updateWishlistButton();
      }
    }
  } catch(error) {
    console.error('Erreur toggle wishlist:', error);
  }
}

// S'inscrire au cours avec paiement Stripe
async function enrollCourse() {
  const btn = document.getElementById('enrollBtn');
  btn.disabled = true;
  btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Redirection vers le paiement...';
  
  try {
    const res = await fetch(`http://eduflow-api.test/api/courses/${courseId}/checkout`, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
      }
    });
    
    const data = await res.json();
    
    if(res.ok && data.checkout_url) {
      // Rediriger vers Stripe
      window.location.href = data.checkout_url;
    } else {
      alert(data.message || 'Erreur lors de la création de la session de paiement');
      btn.disabled = false;
      btn.innerHTML = '<i class="fa-solid fa-credit-card"></i> Payer et s\'inscrire';
    }
  } catch(error) {
    console.error('Erreur paiement:', error);
    alert('Erreur lors de la création de la session de paiement');
    btn.disabled = false;
    btn.innerHTML = '<i class="fa-solid fa-credit-card"></i> Payer et s\'inscrire';
  }
}

// Event listeners
document.getElementById('wishlistBtn').addEventListener('click', toggleWishlist);
document.getElementById('enrollBtn').addEventListener('click', enrollCourse);

// Charger au démarrage
loadCourse();
</script>

</body>
</html>
