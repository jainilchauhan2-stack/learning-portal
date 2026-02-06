<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coming Soon</title>
<style>
    /* Background gradient and centering */
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        overflow: hidden;
        color: white;
    }

    /* Floating shapes for decoration */
    .shape {
        position: absolute;
        border-radius: 50%;
        opacity: 0.3;
        animation: float 10s infinite ease-in-out;
    }

    .shape1 { width: 100px; height: 100px; background: #ff6a00; top: 10%; left: 5%; animation-delay: 0s; }
    .shape2 { width: 150px; height: 150px; background: #00c6ff; top: 70%; left: 80%; animation-delay: 2s; }
    .shape3 { width: 80px; height: 80px; background: #f50057; top: 50%; left: 40%; animation-delay: 4s; }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-30px); }
    }

    /* Card container */
    .course-container {
        background: rgba(0,0,0,0.6);
        padding: 40px 60px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        z-index: 1;
    }

    .course-title {
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .coming-soon {
        font-size: 1.5rem;
        color: #ffeb3b;
        margin-bottom: 20px;
        text-shadow: 0 0 10px #ffeb3b;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    /* Countdown timer */
    .timer {
        font-size: 1.2rem;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    /* Button styling */
    button {
        padding: 12px 25px;
        font-size: 1rem;
        background: linear-gradient(45deg, #ff5722, #ff9800);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: not-allowed;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        transition: transform 0.3s, opacity 0.3s;
    }

    button:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }
</style>
</head>
<body>

<!-- Decorative shapes -->
<div class="shape shape1"></div>
<div class="shape shape2"></div>
<div class="shape shape3"></div>

<div class="course-container">
    <div class="course-title">New Course</div>
    <div class="coming-soon">Coming Soon</div>
    <div class="timer" id="timer">Loading...</div>
    <button disabled>Enroll Now</button>
</div>

<script>
    // Countdown Timer (change target date)
    const targetDate = new Date("2026-03-01T00:00:00").getTime();
    const timerEl = document.getElementById("timer");

    function updateTimer() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if(distance < 0) {
            timerEl.innerHTML = "Course is now open!";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000*60*60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000*60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        timerEl.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }

    setInterval(updateTimer, 1000);
    updateTimer();
</script>

</body>
</html>
