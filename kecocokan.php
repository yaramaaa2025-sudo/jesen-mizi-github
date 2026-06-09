<?php

$nama1 = "Jesen";
$nama2 = "Mizi";

$persen = 10;

$jokes = [


"10%. Untung bukan nilai ujian.",

"10%. Hubungan ini terlalu unik untuk dijelaskan sains."

];

$hasil = $jokes[array_rand($jokes)];

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Jesen × Mizi Compatibility Test</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;

background:
linear-gradient(
135deg,
#ffd6eb,
#ffc5e0,
#ffb4d7,
#ffdff0);

background-size:400% 400%;

animation:bgMove 10s ease infinite;
}

@keyframes bgMove{

0%{
background-position:0% 50%;
}

50%{
background-position:100% 50%;
}

100%{
background-position:0% 50%;
}

}

.card{

width:90%;
max-width:800px;

padding:40px;

text-align:center;

background:
rgba(255,255,255,.9);

backdrop-filter:blur(15px);

border-radius:35px;

box-shadow:
0 20px 60px rgba(255,105,180,.25);

border:3px solid rgba(255,255,255,.6);
}

.heart{

font-size:90px;

animation:beat 1s infinite;
}

@keyframes beat{

50%{
transform:scale(1.15);
}

}

h1{

font-size:45px;

color:#ff4f9a;

margin-top:10px;
}

.couple-photo{

width:260px;
height:260px;

margin:25px auto;

padding:8px;

border-radius:50%;

background:
linear-gradient(
135deg,
#ff9fcf,
#ffd6eb,
#ffffff);

box-shadow:
0 0 40px rgba(255,105,180,.4);

animation:floatPhoto 3s ease-in-out infinite;
}

.couple-photo img{

width:100%;
height:100%;

object-fit:cover;

border-radius:50%;

border:6px solid white;
}

@keyframes floatPhoto{

0%{
transform:translateY(0);
}

50%{
transform:translateY(-10px);
}

100%{
transform:translateY(0);
}

}

.nama{

font-size:30px;

font-weight:bold;

color:#ff5fa0;

margin-bottom:25px;
}

.meter{

height:40px;

background:#ffe4ef;

border-radius:50px;

overflow:hidden;
}

.fill{

height:100%;

width:10%;

background:
linear-gradient(
90deg,
#ff85bc,
#ff4f9a);

animation:load 2s;
}

@keyframes load{

from{
width:0;
}

to{
width:10%;
}

}

.persen{

font-size:80px;

font-weight:700;

color:#ff4f9a;

margin:20px 0;
}

.badge{

display:inline-block;

padding:15px 25px;

background:#fff2f8;

border:2px dashed #ff6ab2;

border-radius:20px;

font-weight:bold;

color:#ff4f9a;

margin-bottom:25px;
}

.result{

background:#fff5fa;

padding:25px;

border-radius:25px;

line-height:1.8;

color:#666;
}

.result h3{

color:#ff4f9a;

margin-bottom:10px;
}

.small{

margin-top:20px;

color:#999;

font-size:14px;
}

.btn{

display:inline-block;

margin-top:25px;

padding:15px 35px;

background:#ff4f9a;

color:white;

text-decoration:none;

border-radius:40px;

font-weight:bold;

transition:.3s;
}

.btn:hover{

transform:translateY(-5px);
}

.floating{

position:fixed;

font-size:25px;

animation:float 8s linear infinite;

color:#ff78b8;
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
.f3{left:45%;animation-delay:4s;}
.f4{left:70%;animation-delay:1s;}
.f5{left:90%;animation-delay:3s;}

@media(max-width:768px){

.couple-photo{
width:200px;
height:200px;
}

h1{
font-size:32px;
}

.persen{
font-size:60px;
}

.nama{
font-size:24px;
}

}

</style>
</head>

<body>

<div class="floating f1">💖</div>
<div class="floating f2">🌸</div>
<div class="floating f3">🎀</div>
<div class="floating f4">💞</div>
<div class="floating f5">🌷</div>

<div class="card">

<div class="heart">💔</div>

<h1>Tes Kecocokan</h1>

<div class="couple-photo">
<img src="mboh.png">
</div>

<div class="nama">
<?= $nama1 ?> × <?= $nama2 ?>
</div>

<div class="meter">
<div class="fill"></div>
</div>

<div class="persen">
<?= $persen ?>%
</div>

<div class="badge">
blm beruntung lu jes, mizi maunya sama sua
</div>

<div class="result">

<h3>💔 Hasil Analisis Super Canggih</h3>

<p>
<?= $hasil ?>
</p>

<br>

<p>
90% nya mah gua sama dia (forest)
</p>

<br>

<p>
Kesimpulan akhir:
<b><?= $nama1 ?></b> dan
<b><?= $nama2 ?></b>
memiliki kecocokan sebesar
<b><?= $persen ?>%</b>.
</p>

<br>

<p>
10% jesen x mizi
<br>90% manip x forest
</p>

</div>

<div class="small">

</div>

<a href="jesmi.php" class="btn">
🏡 Kembali
</a>

</div>

</body>
</html>