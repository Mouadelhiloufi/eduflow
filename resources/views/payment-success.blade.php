<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Paiement réussi</title>
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
  background: linear-gradient(135deg, #e0f7fa 0%, #a7f3d0 52%, #6ee7b7 100%);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
}

.success-card {
  background: white;
  border-radius: 20px;
  padding: 48px 40px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0 24px 50px rgba(0,0,0,0.15);
  text-align: center;
  animation: slideUp 0.6s ease-out;
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.success-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 24px;
  animation: scaleIn 0.5s ease-out 0.3s both;
}

@keyframes scaleIn {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}

.success-icon i {
  font-size: 40px;
  color: white;
}

h1 {
  font-size: 28px;
  color: #0f172a;
  margin-bottom: 12px;
}

.message {
  color: #64748b;
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 32px;
}

.enrollment-details {
  background: #f8fafc;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 32px;
  text-align: left;
}

.detail-row {
  display: flex;
  justify-content: space-between;
  padding: 12px 0;
  border-bottom: 1px solid #e2e8f0;
}

.detail-row:last-child {
  border-bottom: none;
}

.detail-label {
  color: #64748b;
  font-size: 14px;
}

.detail-value {
  color: #0f172a;
  font-weight: 600;
  font-size: 14px;
}

.btn {
  padding: 14px 28px;
  border: none;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  text-decoration: none;
  display: inline-block;
  margin: 0 8px;
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
  background: #f1f5f9;
  color: #475569;
}

.btn-secondary:hover {
  background: #e2e8f0;
}

.loading {
  text-align: center;
  color: #06b6d4;
  font-size: 16px;
  font-weight: 600;
}

.spinner {
  display: inline-block;
  width: 40px;
  height: 40px;
  border: 4px solid #e2e8f0;
  border-top: 4px solid #06b6d4;
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
  margin-bottom: 16px;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

.error-card {
  background: #fef2f2;
  border: 2px solid #fecaca;
  border-radius: 12px;
  padding: 20px;
  margin-bottom: 24px;
}

.error-card p {
  color: #dc2626;
  font-weight: 500;
}

@media (max-width: 640px) {
  .success-card {
    padding: 32px 24px;
  }

  h1 {
    font-size: 24px;
  }

  .btn {
    display: block;
    width: 100%;
    margin: 8px 0;
  }
}
</style>
</head>

<body>

<div class="success-card">
  <div class="loading" id="loading">
    <div class="spinner"></div>
    <p>Vérification du paiement...</p>
  </div>

  <div id="successContent" style="display: none;">
    <div class="success-icon">
      <i class="fa-solid fa-check"></i>
    </div>
    
    <h1>Paiement réussi !</h1>
    <p class="message">Votre inscription au cours a été confirmée. Vous pouvez maintenant accéder au contenu.</p>

    <div class="enrollment-details" id="enrollmentDetails"></div>

    <div>
      <a href="/catalog" class="btn btn-primary">
        <i class="fa-solid fa-book"></i> Voir mes cours
      </a>
      <a href="/catalog" class="btn btn-secondary">
        Retour au catalogue
      </a>
    </div>
  </div>

  <div id="errorContent" style="display: none;">
    <div class="error-card">
      <p id="errorMessage"></p>
    </div>
    <a href="/catalog" class="btn btn-secondary">Retour au catalogue</a>
  </div>
</div>

<script>
const urlParams = new URLSearchParams(window.location.search);
const sessionId = urlParams.get('session_id');

if (!sessionId) {
  showError('Session de paiement introuvable');
} else {
  confirmPayment();
}

async function confirmPayment() {
  try {
    const res = await fetch(`http://eduflow-api.test/api/payment/success?session_id=${sessionId}`, {
      headers: {
        'Accept': 'application/json'
      }
    });

    const data = await res.json();

    if (res.ok) {
      document.getElementById('loading').style.display = 'none';
      document.getElementById('successContent').style.display = 'block';
      
      // Afficher les détails
      const details = document.getElementById('enrollmentDetails');
      details.innerHTML = `
        <div class="detail-row">
          <span class="detail-label">Cours</span>
          <span class="detail-value">${data.enrollment?.course?.title || 'N/A'}</span>
        </div>
        <div class="detail-row">
          <span class="detail-label">Statut</span>
          <span class="detail-value" style="color: #10b981;">Confirmé</span>
        </div>
        <div class="detail-row">
          <span class="detail-label">Groupe</span>
          <span class="detail-value">${data.enrollment?.group?.name || 'N/A'}</span>
        </div>
      `;
    } else {
      showError(data.message || 'Erreur lors de la confirmation du paiement');
    }
  } catch (error) {
    console.error('Erreur:', error);
    showError('Erreur de connexion au serveur');
  }
}

function showError(message) {
  document.getElementById('loading').style.display = 'none';
  document.getElementById('errorContent').style.display = 'block';
  document.getElementById('errorMessage').textContent = message;
}
</script>

</body>
</html>
