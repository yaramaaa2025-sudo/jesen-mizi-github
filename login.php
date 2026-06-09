<?php
session_start();

$pass = "JESENHALU";

if(isset($_POST['login'])){

    if($_POST['password'] == $pass){

        $_SESSION['login'] = true;
        $_SESSION['nama'] = $_POST['nama'];

        header("Location: jesmi.php");
        exit;
    }

    
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Love Portal</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#ffd6e7,#ffc0cb,#ffe8f1);
overflow:hidden;
}

body::before{
content:"";
position:absolute;
width:650px;
height:650px;
background:rgba(255,255,255,.25);
border-radius:50%;
top:-300px;
right:-150px;
}

body::after{
content:"";
position:absolute;
width:500px;
height:500px;
background:rgba(255,255,255,.15);
border-radius:50%;
bottom:-250px;
left:-150px;
}

.login-box{
position:relative;
z-index:10;
width:430px;
padding:40px;
background:rgba(255,255,255,.85);
backdrop-filter:blur(15px);
border-radius:35px;
box-shadow:0 15px 40px rgba(255,105,180,.25);
text-align:center;
}

.logo{
font-size:70px;
}

h1{
color:#ff4f9b;
margin-top:10px;
}

.sub{
color:#777;
margin-top:8px;
margin-bottom:30px;
}

.input-box{
margin-bottom:18px;
}

.input-box input{
width:100%;
padding:15px;
border:none;
outline:none;
border-radius:15px;
background:white;
box-shadow:0 5px 15px rgba(0,0,0,.08);
font-size:15px;
}

button{
width:100%;
padding:15px;
border:none;
border-radius:15px;
background:#ff4f9b;
color:white;
font-size:16px;
font-weight:600;
cursor:pointer;
transition:.3s;
}

button:hover{
transform:translateY(-3px);
background:#ff2d88;
}

.error{
background:#ffe0ea;
padding:12px;
border-radius:12px;
margin-bottom:15px;
color:#d60055;
}

.quote{
margin-top:20px;
font-size:13px;
color:#888;
}

.floating{
position:absolute;
font-size:25px;
animation:love 10s linear infinite;
}

@keyframes love{
0%{
transform:translateY(100vh);
opacity:0;
}
30%{
opacity:1;
}
100%{
transform:translateY(-100px);
opacity:0;
}
}

.f1{left:10%;animation-delay:0s;}
.f2{left:30%;animation-delay:3s;}
.f3{left:50%;animation-delay:6s;}
.f4{left:70%;animation-delay:2s;}
.f5{left:90%;animation-delay:5s;}
</style>
</head>

<body>

<div class="floating f1">💖</div>
<div class="floating f2">🎀</div>
<div class="floating f3">💗</div>
<div class="floating f4">🌸</div>
<div class="floating f5">💞</div>

<div class="login-box">

<div class="logo">💝</div>

<h1>Jesen & Mizi</h1>
<p class="sub">Masukin Password Yang Bener Goblok</p>

<?php if(isset($error)){ ?>
<div class="error"><?= $error ?></div>

<?php } ?>

<form method="POST">

<div class="input-box">
<input type="text" name="nama" placeholder="Nama lu siapa" required>
</div>

<div class="input-box">
<input type="password" name="password" placeholder="Hanya jesen yg tau" required>
</div>

<button type="submit" name="login">
Masuk ke haluan jesen
</button>

</form>

<div class="quote">
"Access denied untuk manusia yg kerah."
</div>

</div>

</body>
</html>