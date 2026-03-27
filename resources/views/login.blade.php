<!-- <!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Login API</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:25px;
border-radius:8px;
width:280px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input{
width:100%;
padding:10px;
margin:8px 0;
}

button{
width:100%;
padding:10px;
margin-top:10px;
background:#3490dc;
border:none;
color:white;
cursor:pointer;
}

.logout{
background:#e3342f;
}

</style>

</head>

<body>

<div class="box">

<h3 id='mytitle'>Login</h3>

<input id="email" type="email" placeholder="email">

<input id="password" type="password" placeholder="password">

<button onclick="login()">Login</button>

<button class="logout" onclick="logout()">Logout</button>

<p id="result"></p>

</div>


<script>

let token="";

function login(){
document.getElementById('mytitle').innerHTML="Loading...";
fetch("http://eduflow-api.test/api/login",{

method:"POST",

headers:{
"Content-Type":"application/json",
"Accept":"application/json"
},
body:JSON.stringify({

email:document.getElementById("email").value,

password:document.getElementById("password").value

})

})

.then(res=>res.json())

.then(data=>{

console.log(data);

if(data.token){

token=data.token;

document.getElementById("result").innerHTML=
"Login success";

}else{

document.getElementById("result").innerHTML=
"Erreur login";

}

});

}



function logout(){

fetch("http://eduflow-api.test/api/logout",{

method:"POST",

headers:{

"Accept":"application/json",

"Authorization":"Bearer "+token

}

})

.then(res=>res.json())

.then(data=>{

document.getElementById("result").innerHTML=
"Logout success";

token="";

});

}

</script>

</body>

</html> -->
