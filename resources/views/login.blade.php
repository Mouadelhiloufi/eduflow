<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Connexion</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/src/parsley.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-BtcIuXqSgqAm34j7v5QVd6XxNHPGz8+7u3vJJW2k5kxTTVXmG1kf7/VzN6VlUJLx0HlcmqxKqVJWvY7anx/1kg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  background: linear-gradient(135deg, #e0f7fa 0%, #a7f3d0 52%, #6ee7b7 100%);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.login-container {
  width: 100%;
  max-width: 420px;
}

.login-card {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
  padding: 48px 40px;
  animation: slideUp 0.6s ease-out;
}

.page-wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  padding: 40px;
}

.login-side {
  flex: 0 0 420px;
}

.login-form-card {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 20px;
  border: 1px solid rgba(6, 182, 202, 0.25);
  padding: 34px 30px;
  box-shadow: 0 24px 50px rgba(6, 182, 202, 0.2);
}

.brand-area {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 26px;
}

.brand-icon {
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  border-radius: 14px;
  display: grid;
  place-items: center;
  color: white;
  font-size: 24px;
  box-shadow: 0 4px 12px rgba(6, 182, 212, 0.3);
  overflow: hidden;
}

.brand-icon img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-side {
  flex: 1;
  background: linear-gradient(135deg, rgba(5, 150, 105, 0.35), rgba(13, 148, 136, 0.35));
  border-radius: 24px;
  border: 1px solid rgba(255, 255, 255, 0.35);
  backdrop-filter: blur(10px);
  padding: 48px;
  color: white;
  min-height: 520px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-content h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.hero-content p {
  color: #e2e8f0;
  line-height: 1.6;
}

.illustration {
  margin-top: 26px;
  font-size: 64px;
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

.logo-section {
  text-align: center;
  margin-bottom: 32px;
}

.logo-icon {
  width: 56px;
  height: 56px;
  margin: 0 auto 16px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 28px;
  font-weight: 600;
}

.logo-text h1 {
  font-size: 28px;
  color: #1a202c;
  margin-bottom: 8px;
  font-weight: 600;
}

.logo-text p {
  font-size: 14px;
  color: #718096;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 13px;
  font-weight: 500;
  color: #2d3748;
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.input-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.input-icon {
  position: absolute;
  left: 12px;
  color: #6b7280;
  font-size: 14px;
}

input {
  width: 100%;
  padding: 12px 14px 12px 38px;
  border: 2px solid #e2e8f0;
  border-radius: 10px;
  font-size: 14px;
  font-family: 'Inter', sans-serif;
  transition: all 0.3s ease;
  color: #2d3748;
  background: #f7fafc;
}

input:focus {
  outline: none;
  border-color: #667eea;
  background: white;
  box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

input::placeholder {
  color: #cbd5e0;
}

.button-group {
  display: flex;
  gap: 12px;
  margin-top: 28px;
}

button {
  flex: 1;
  padding: 12px 20px;
  border: none;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 600;
  font-family: 'Inter', sans-serif;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.btn-login {
  background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
  color: white;
  box-shadow: 0 8px 24px rgba(20, 184, 166, 0.35);
}

.btn-login:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(20, 184, 166, 0.45);
}

.btn-login:active {
  transform: translateY(0);
}

.btn-logout {
  background: #fee2e2;
  color: #dc2626;
}

.btn-logout:hover {
  background: #fecaca;
  transform: translateY(-2px);
}

.btn-logout:active {
  transform: translateY(0);
}

.result-message {
  margin-top: 20px;
  padding: 12px 14px;
  border-radius: 10px;
  font-size: 13px;
  font-weight: 500;
  text-align: center;
  display: none;
  animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.result-message.success {
  display: block;
  background: #dcfce7;
  color: #166534;
  border: 1px solid #86efac;
}

.result-message.error {
  display: block;
  background: #fee2e2;
  color: #991b1b;
  border: 1px solid #fca5a5;
}

.loading {
  display: none;
  text-align: center;
  color: #667eea;
  font-weight: 600;
}

.spinner {
  display: inline-block;
  width: 16px;
  height: 16px;
  border: 2px solid #e2e8f0;
  border-top: 2px solid #667eea;
  border-radius: 50%;
  animation: spin 0.6s linear infinite;
  margin-right: 8px;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

.error {
  color: #dc2626;
  font-size: 12px;
  margin-top: 6px;
  font-weight: 500;
  padding: 6px 10px;
  background: #fef2f2;
  border: 1px solid #fecaca;
  border-radius: 6px;
  display: none;
  animation: fadeIn 0.3s ease;
}

.error.show {
  display: block;
}

/* Parsley errors */
.parsley-errors-list {
  list-style: none;
  padding: 0;
  margin: 6px 0 0 0;
}

.parsley-errors-list li {
  color: #dc2626;
  font-size: 12px;
  font-weight: 500;
  padding: 6px 10px;
  background: #fef2f2;
  border: 1px solid #fecaca;
  border-radius: 6px;
  margin-top: 4px;
}

.link-row {
  margin-top: 18px;
  text-align: right;
}

.link-row a {
  color: #2563eb;
  text-decoration: none;
  font-size: 13px;
}

@media (max-width: 1024px) {
  .page-wrapper {
    flex-direction: column;
    gap: 24px;
    padding: 24px;
  }

  .hero-side {
    display: none;
  }

  .login-form-card {
    box-shadow: 0 14px 30px rgba(25, 58, 116, 0.16);
  }
}

@media (max-width: 640px) {
  .login-form-card {
    padding: 20px;
  }

  .button-group {
    flex-direction: column;
  }

  button {
    width: 100%;
  }
}
</style>

</head>

<body>

<div class="page-wrapper">
  <div class="login-side">
    <div class="brand-area">
      <div class="brand-icon">
        <img src="https://cdn-icons-png.flaticon.com/512/3976/3976625.png" alt="EduFlow Logo">
      </div>
      <div>
        <h1 style="font-size: 24px; font-weight: 700; color: #0f172a; margin-bottom: 4px;">EduFlow</h1>
        <p style="font-size: 13px; color: #64748b;">Plateforme d'apprentissage moderne</p>
      </div>
    </div>
    <div class="login-form-card">
      <h2 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Connexion</h2>
      <p style="font-size: 14px; color: #64748b; margin-bottom: 24px;">Entrez vos identifiants pour accéder à votre espace.</p>

      <form id="loginForm">
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-envelope input-icon"></i>
            <input id="email" type="email" placeholder="votre@email.com" data-parsley-type="email"  required>
          </div>
          <div class="error" id="emailError"></div>
        </div>

        <div class="form-group">
          <label for="password">Mot de passe</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-lock input-icon"></i>
            <input id="password" type="password" placeholder="••••••••" data-parsley-minlength="6" required>
          </div>
          <div class="error" id="passwordError"></div>
        </div>

        <div class="loading" id="loading">
          <span class="spinner"></span> Connexion en cours...
        </div>

        <div class="result-message" id="result"></div>

        <div class="button-group">
          <button type="submit" class="btn-login">Se connecter</button>
        </div>
      </form>

      
      <div class="link-row">
        <a href="http://eduflow-api.test/register">Register</a>
      </div>
    </div>
  </div>

  <div class="hero-side">
    <div class="hero-content">
      <h2>Une plateforme claire et efficace</h2>
      <p>Boostez votre apprentissage avec un tableau de bord personnalisé et des recommandations intelligentes.</p>
      <div class="illustration">
        <i class="fa-solid fa-book-open-reader"></i>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/parsleyjs"></script>

<script>

    // Configuration Parsley pour afficher les erreurs en dessous
    window.Parsley.options.errorsContainer = function(field) {
        return field.$element.closest('.form-group');
    };

    $('#loginForm').parsley();
    let token=localStorage.getItem('token');

   async function login(e) {

   e.preventDefault();

   let form=$('#loginForm');
    // Cacher les erreurs précédentes
    document.getElementById("emailError").classList.remove("show");
    document.getElementById("passwordError").classList.remove("show");
    document.getElementById("emailError").textContent = "";
    document.getElementById("passwordError").textContent = "";


    

    if(!form.parsley().isValid()){
        return;
    }

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;

    try {
        let res = await fetch("http://eduflow-api.test/api/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({ email, password })
        });

        let data = await res.json();

        if(res.ok){ 
            token = data.token;

            localStorage.setItem("token",token)
            console.log("login reussi");

            // Redirection selon le rôle
            if (data.user && data.user.role === 'student') {
                window.location.href = '/catalog';
            } else if (data.user && data.user.role === 'teacher') {
                window.location.href = '/teacher/courses';
            } else {
                window.location.href = '/welcome';
            }
        }else{

        if (res.status === 401) {
            const passwordErrorDiv = document.getElementById("passwordError");
            passwordErrorDiv.textContent = "Email ou mot de passe incorrect";
            passwordErrorDiv.classList.add("show");
        }

            if (data.message) {
                console.log("Erreur :", data.message);
            }
        }

        if(data.errors){
            if(data.errors.email){
                const emailErrorDiv = document.getElementById("emailError");
                emailErrorDiv.textContent= data.errors.email.join(", ");
                emailErrorDiv.classList.add("show");
            }
            if (data.errors.password) {
                const passwordErrorDiv = document.getElementById("passwordError");
                passwordErrorDiv.textContent = data.errors.password.join(", ");
                passwordErrorDiv.classList.add("show");
            }
        }
        
    } catch (error) {
        console.error("Login failed:", error);
    }
}

document.getElementById("loginForm").addEventListener("submit",login);



</script>

</body>

</html>
