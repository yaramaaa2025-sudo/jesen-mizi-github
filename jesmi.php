<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$nama1 = "Jesen";
$nama2 = "Mizi";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $nama1 ?> ❤ <?= $nama2 ?></title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Quicksand',sans-serif;
}

body{
    min-height:100vh;
    background:
    linear-gradient(
    rgba(255,192,203,0.4),
    rgba(255,182,193,0.4)),
    url('bg.jpg');
    background-size:cover;
    background-position:center;
    overflow-x:hidden;
}

.container{
    width:100%;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.card{
    width:100%;
    max-width:1000px;
    background:rgba(255,255,255,0.85);
    backdrop-filter:blur(10px);
    border-radius:35px;
    padding:40px;
    box-shadow:0 15px 40px rgba(255,105,180,.25);
    border:4px solid #ffd4e6;
}

.title{
    text-align:center;
    color:#ff5fa2;
    font-size:3rem;
    font-weight:700;
}

.subtitle{
    text-align:center;
    color:#777;
    margin-top:10px;
}

.love{
    text-align:center;
    font-size:2rem;
    margin:15px 0;
    animation:beat 1s infinite;
}

@keyframes beat{
    50%{
        transform:scale(1.2);
    }
}

.photo-area{
    display:flex;
    justify-content:center;
    gap:50px;
    flex-wrap:wrap;
    margin-top:40px;
}

.photo-box{
    text-align:center;
}

.photo{
    width:250px;
    height:320px;
    border-radius:30px;
    object-fit:cover;
    border:8px solid white;
    box-shadow:0 10px 25px rgba(255,105,180,.3);
    transition:.4s;
}

.photo:hover{
    transform:translateY(-10px) rotate(2deg);
}

.name{
    margin-top:15px;
    font-size:1.4rem;
    color:#ff4d94;
    font-weight:bold;
}

.story{
    margin-top:40px;
    background:#fff4f8;
    padding:25px;
    border-radius:25px;
    line-height:1.8;
    color:#555;
}

.story h2{
    color:#ff5fa2;
    margin-bottom:10px;
}

.counter{
    margin-top:30px;
    text-align:center;
}

.counter-box{
    display:inline-block;
    padding:20px 35px;
    background:#ff5fa2;
    color:white;
    border-radius:20px;
    font-size:1.3rem;
    font-weight:bold;
}

.footer{
    margin-top:40px;
    text-align:center;
    color:#ff5fa2;
    font-weight:bold;
}

.floating{
    position:fixed;
    color:#ff6fae;
    animation:float 8s linear infinite;
    font-size:25px;
}

@keyframes float{
    0%{
        transform:translateY(100vh);
        opacity:0;
    }
    20%{
        opacity:1;
    }
    100%{
        transform:translateY(-100px);
        opacity:0;
    }
}

.f1{left:10%;animation-delay:0s;}
.f2{left:25%;animation-delay:2s;}
.f3{left:50%;animation-delay:4s;}
.f4{left:75%;animation-delay:1s;}
.f5{left:90%;animation-delay:3s;}

@media(max-width:768px){
    .title{
        font-size:2rem;
    }

    .photo{
        width:220px;
        height:280px;
    }
}
</style>
</head>

<body>

<div class="floating f1">❤</div>
<div class="floating f2">🌸</div>
<div class="floating f3">❤</div>
<div class="floating f4">🎀</div>
<div class="floating f5">❤</div>

<div class="container">
    <div class="card">

        <h1 class="title">
            <?= $nama1 ?> ❤ <?= $nama2 ?>
        </h1>

        <p class="subtitle">
            Apa aja yang penting jesen seneng
        </p>

        <div class="love">💖</div>

        <div class="photo-area">

            <div class="photo-box">
                <img src="jesentai.jpg" class="photo">
                <div class="name"><?= $nama1 ?></div>
            </div>

            <div class="photo-box">
                <img src="mizi.jpg" class="photo">
                <div class="name"><?= $nama2 ?></div>
            </div>

        </div>

        <div class="story">
            <h2>🌷 About Us</h2>
            <p>
                ini tentang seorang pria paruh baya (canda paruh baya awokwk) yg tergila-gila dengan enim gepeng, mizi. 
                ihik critss
            </p>

            
        </div>

        <div class="counter">
            <div class="counter-box">
                <a href="kecocokan.php" class="btn-love">
                tes kecocokan
            </div>
        </div>


    </div>
</div>

</body>
</html>