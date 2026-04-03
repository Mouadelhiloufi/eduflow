<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Paiement annulé</title>
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
  background: linear-gradient(135deg, #fee2e2 0%, #fecaca 52%, #fca5a5 100%);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
}

.cancel-card {
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

.cancel-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
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

.cancel-icon i {
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

@media (max-width: 640px) {
  .cancel-card {
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

<div class="cancel-card">
  <div class="cancel-icon">
    <i class="fa-solid fa-xmark"></i>
  </div>
  
  <h1>Paiement annulé</h1>
  <p class="message">Votre paiement a été annulé. Aucun montant n'a été débité. Vous pouvez réessayer quand vous le souhaitez.</p>

  <div>
    <a href="/catalog" class="btn btn-primary">
      Retour au catalogue
    </a>
  </div>
</div>

</body>
</html>
