<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduFlow - Inscription</title>
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
  border-color: #06b6d4;
  background: white;
  box-shadow: 0 0 0 3px rgba(6, 182, 202, 0.15);
}
input::placeholder {
  color: #94a3b8;
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
.btn-register {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
  box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
}
.btn-register:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(16, 185, 129, 0.4);
}
.btn-register:active {
  transform: translateY(0);
}
.link-row {
  margin-top: 18px;
  text-align: right;
}
.link-row a {
  color: #0ea5e9;
  text-decoration: none;
  font-size: 13px;
}

.interests-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}

.interest-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 12px;
  background: #f8fafc;
  border: 2px solid #e2e8f0;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s;
}

.interest-item:hover {
  background: #f1f5f9;
  border-color: #cbd5e0;
}

.interest-item input[type="checkbox"] {
  width: 18px;
  height: 18px;
  cursor: pointer;
  margin: 0;
  padding: 0;
  flex-shrink: 0;
  vertical-align: middle;
}

.interest-item label {
  margin: 0;
  padding: 0;
  cursor: pointer;
  font-size: 14px;
  color: #475569;
  text-transform: none;
  letter-spacing: normal;
  font-weight: 500;
  flex: 1;
  line-height: 18px;
  display: flex;
  align-items: center;
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
    box-shadow: 0 14px 30px rgba(6, 182, 202, 0.2);
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
        <p style="font-size: 13px; color: #64748b;">Nouvel utilisateur ?</p>
      </div>
    </div>
    <div class="login-form-card">
      <h2 style="font-size: 22px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Inscription</h2>
      <p style="font-size: 14px; color: #64748b; margin-bottom: 24px;">Créez un compte pour démarrer votre apprentissage.</p>

      <form id="registerForm" autocomplete="off">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-user input-icon"></i>
            <input id="name" type="text" placeholder="Votre nom"  data-parsley-minlength="3" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-envelope input-icon"></i>
            <input id="email" type="email" placeholder="votre@email.com" data-parsley-type="email" required>
          </div>
        </div>


        <div class="form-group">
          <label for="role">Rôle</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-user-tag input-icon"></i>
            <select id="role" name="role" required style="width:100%; padding: 12px 14px 12px 38px; border: 2px solid #e2e8f0; border-radius:10px; font-size:14px;">
              <option value="" disabled selected>Choisir un rôle</option>
              <option value="student">Étudiant</option>
              <option value="teacher">Enseignant</option>
            </select>
          </div>
        </div>



        <div class="form-group">
           <label>Choisissez vos intérêts (optionnel)</label>
            <div id="interestsContainer" class="interests-grid"></div>
        </div>

        <div class="form-group">
          <label for="password">Mot de passe</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-lock input-icon"></i>
            <input id="password" type="password" placeholder="••••••••" data-parsley-minlength="6" required>
          </div>
        </div>

        

        <div class="form-group">
          <label for="password_confirmation">Confirmez le mot de passe</label>
          <div class="input-wrapper">
            <i class="fa-solid fa-lock input-icon"></i>
            <input id="password_confirmation" type="password" placeholder="••••••••" data-parsley-equalto="#password" required>
          </div>
        </div>

        <div class="button-group">
          <button type="submit" class="btn-register">S'inscrire</button>
        </div>

        <div class="link-row">
          <a href="/login">Déjà inscrit ? Se connecter</a>
        </div>
      </form>
    </div>
  </div>

  <div class="hero-side">
    <div class="hero-content">
      <h2>Rejoignez la communauté EduFlow</h2>
      <p>Accédez à des cours, suivez vos progrès et obtenez des recommandations personnalisées.</p>
      <div class="illustration">
        <i class="fa-solid fa-users-between-lines"></i>
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

    $('#registerForm').parsley();
    
    let token= localStorage.getItem("token");

    // Charger les intérêts au démarrage
    loadInterests();

    async function loadInterests(){
      try{
       let res = await fetch("http://eduflow-api.test/api/interests",{
          headers: {
            "Accept":"application/json"
        }
        })

        let data = await res.json();
        
        let container = document.getElementById("interestsContainer");
        container.innerHTML = "";
        data.forEach(interest => {
          container.innerHTML += `
            <div class="interest-item">
              <input type="checkbox" name="interest_ids" value="${interest.id}" id="interest_${interest.id}">
              <label for="interest_${interest.id}">${interest.name}</label>
            </div>
          `;
        });

      } catch(error){
        console.error("Erreur chargement intérêts:", error);
      }
    }
/*  */
    async function register(e){
        e.preventDefault();

        let form = $('#registerForm');

        
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password=document.getElementById("password").value;
    let role=document.getElementById("role").value;
    let password_confirmation = document.getElementById("password_confirmation").value;
    
    // Récupérer les intérêts sélectionnés
    let selectedInterests = [];
    document.querySelectorAll('input[name="interest_ids"]:checked').forEach(checkbox => {
        selectedInterests.push(parseInt(checkbox.value));
    });
        


    // vérifier validation parsley
    if(!form.parsley().isValid()){
        console.log("parsley invalide");
        return;
    }

    

        if(password!=password_confirmation){
            console.log("password pas comme confirmation");
            return;
        }

        try{
           let res= await fetch("http://eduflow-api.test/api/register",{
            method:"POST",
            headers: {
            "Accept":"application/json",
            "Content-Type":"application/json"
            },
            body:JSON.stringify({
                name,
                email,
                password,
                password_confirmation,
                role
            })
           })

           let data = await res.json();
           if(res.ok){
        
             token=data.token;
             localStorage.setItem("token",token);
             
             // Sauvegarder les intérêts si étudiant et intérêts sélectionnés
             if(role === 'student' && selectedInterests.length > 0) {
                 await saveMyInterests(selectedInterests, token);
             }

             // Redirection selon le rôle
             if (role === 'student') {
                window.location.href = '/catalog';
            } else if (role === 'teacher') {
                window.location.href = '/teacher/courses';
            } else {
                window.location.href = '/welcome';
            }
           }
        }catch(error){
            console.error("register failed",error)
        }
     }

     // Fonction pour sauvegarder les intérêts
     async function saveMyInterests(interestIds, authToken) {
         try {
             let res = await fetch("http://eduflow-api.test/api/my-interests", {
                 method: "POST",
                 headers: {
                     "Accept": "application/json",
                     "Content-Type": "application/json",
                     "Authorization": "Bearer " + authToken
                 },
                 body: JSON.stringify({
                     interest_ids: interestIds
                 })
             });

             if(res.ok) {
                 console.log("Intérêts sauvegardés");
             }
         } catch(error) {
             console.error("Erreur saveMyInterests:", error);
         }
     }



     document.getElementById("registerForm").addEventListener("submit", register);
</script>


</body>
</html>