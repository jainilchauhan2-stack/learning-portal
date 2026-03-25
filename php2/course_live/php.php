<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coming Soon</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
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
    background: radial-gradient(circle at top,#1e3a8a,#020617);
    overflow:hidden;
    color:#fff;
}

/* Animated Background Glow */
body::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background: radial-gradient(circle,#3b82f6,transparent);
    top:-150px;
    left:-150px;
    opacity:0.4;
    filter:blur(100px);
}

body::after{
    content:"";
    position:absolute;
    width:400px;
    height:400px;
    background: radial-gradient(circle,#9333ea,transparent);
    bottom:-150px;
    right:-150px;
    opacity:0.4;
    filter:blur(100px);
}

.container{
    position:relative;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(20px);
    padding:50px 60px;
    border-radius:25px;
    text-align:center;
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 25px 60px rgba(0,0,0,0.6);
    animation:fadeUp 1s ease;
}

@keyframes fadeUp{
    from{opacity:0;transform:translateY(40px);} 
    to{opacity:1;transform:translateY(0);} 
}

h1{
    font-size:32px;
    margin-bottom:10px;
}

.subtitle{
    font-size:16px;
    opacity:0.8;
    margin-bottom:25px;
}

.coming{
    font-size:22px;
    color:#facc15;
    margin-bottom:20px;
    animation:pulse 2s infinite;
}

@keyframes pulse{
    0%,100%{transform:scale(1);} 
    50%{transform:scale(1.1);} 
}

.timer{
    font-size:20px;
    margin-bottom:30px;
    letter-spacing:2px;
}

button{
    padding:14px 30px;
    border:none;
    border-radius:50px;
    font-size:15px;
    font-weight:600;
    background: linear-gradient(135deg,#6366f1,#4f46e5);
    color:#fff;
    cursor:not-allowed;
    transition:0.3s;
}

button:hover{
    transform:scale(1.08);
}

/* Floating dots */
.dot{
    position:absolute;
    width:10px;
    height:10px;
    background:#fff;
    border-radius:50%;
    opacity:0.3;
    animation:float 6s infinite ease-in-out;
}

.dot:nth-child(1){top:10%;left:20%;}
.dot:nth-child(2){top:80%;left:70%;animation-delay:2s;}
.dot:nth-child(3){top:50%;left:10%;animation-delay:4s;}

@keyframes float{
    0%,100%{transform:translateY(0);} 
    50%{transform:translateY(-20px);} 
}

@media(max-width:500px){
    .container{padding:40px 20px;}
    h1{font-size:26px;}
}
</style>
</head>

<body>

<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>

<div class="container">
    <h1>🚀 New Course Launch</h1>
    <div class="subtitle">Master skills with our upcoming premium course</div>
    <div class="coming">🔥 Launching in 30 Days</div>
    <div class="timer" id="timer">Loading...</div>
    <button disabled id="btn">Coming Soon</button>
</div>

<script>
const timerEl = document.getElementById("timer");
const btn = document.getElementById("btn");

const targetDate = new Date();
targetDate.setDate(targetDate.getDate() + 30);

function updateTimer(){
    const now = new Date().getTime();
    const distance = targetDate - now;

    if(distance <= 0){
        timerEl.innerHTML = "🚀 Course is LIVE!";
        btn.disabled = false;
        btn.innerHTML = "Enroll Now";
        btn.style.cursor = "pointer";
        btn.style.background = "linear-gradient(135deg,#22c55e,#16a34a)";
        return;
    }

    const d = Math.floor(distance/(1000*60*60*24));
    const h = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    const m = Math.floor((distance%(1000*60*60))/(1000*60));
    const s = Math.floor((distance%(1000*60))/1000);

    timerEl.innerHTML = `⏳ ${d}d ${h}h ${m}m ${s}s`;
}

setInterval(updateTimer,1000);
updateTimer();
</script>

</body>
</html>