<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | FloodSense</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>

body{
font-family:'Poppins', sans-serif;
background:linear-gradient(135deg,#1e90ff,#00c6ff);
height:100vh;
margin:0;
}

.login-bg{
display:flex;
align-items:center;
justify-content:center;
}

/* Kartu Login */
.login-card{
background:white;
padding:40px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
transition:0.3s;
}

.login-card:hover{
transform:translateY(-5px);
box-shadow:0 15px 35px rgba(0,0,0,0.3);
}

h1{
font-weight:700;
color:#1e90ff;
}

h3{
font-weight:600;
color:#555;
}

/* Input */
.form-control{
border-radius:8px;
padding:10px;
}

.form-control:focus{
border-color:#1e90ff;
box-shadow:0 0 5px rgba(30,144,255,0.5);
}

/* Tombol login */
.btn-primary{
background:#1e90ff;
border:none;
border-radius:8px;
padding:10px;
font-weight:600;
transition:0.3s;
}

.btn-primary:hover{
background:#0b6edc;
transform:scale(1.02);
}

/* Tombol show password */
.btn-outline-secondary{
border-radius:0 8px 8px 0;
}

</style>

</head>

<body class="login-bg">

<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="login-card w-100" style="max-width:420px;" data-aos="zoom-in">

<h1 class="text-center mb-2">CLIENT PORTAL</h1>
<h3 class="text-center mb-4">SMART WASTE</h3>

<form onsubmit="login(event)">

<div class="mb-3">
<label class="form-label">Username atau Email</label>
<input type="email"
id="email"
class="form-control"
placeholder="contoh@email.com"
required>
</div>

<div class="mb-4">
<label class="form-label">Kata Sandi</label>
<div class="input-group">
<input type="password"
id="password"
class="form-control"
placeholder="Masukkan kata sandi"
required>

<button type="button"
class="btn btn-outline-secondary"
onclick="togglePassword()">👁️</button>
</div>
</div>

<button type="submit" class="btn btn-primary w-100">
Masuk
</button>

</form>

</div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init();

function togglePassword(){
const password=document.getElementById("password");
password.type=password.type==="password"?"text":"password";
}

function login(event){
event.preventDefault();
window.location.href="tugas2 beranda.php";
}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>