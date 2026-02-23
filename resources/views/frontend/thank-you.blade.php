<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You - Gkon Technologies</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Success Check Animation */
        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: #22c55e;
            stroke-miterlimit: 10;
            margin: 0 auto 20px auto;
            box-shadow: inset 0px 0px 0px #22c55e;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: #22c55e;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark__check {
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.6s forwards;
        }

        @keyframes stroke {
            100% { stroke-dashoffset: 0; }
        }
        @keyframes scale {
            0%, 100% { transform: none; }
            50% { transform: scale3d(1.1, 1.1, 1); }
        }

        @keyframes fill {
            100% { box-shadow: inset 0px 0px 0px 80px #22c55e; }
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white shadow-xl rounded-2xl p-10 max-w-lg w-full text-center animate-fadeIn">

        <!-- Animated Checkmark -->
        <svg class="checkmark" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25"/>
            <path class="checkmark__check" fill="none" d="M14 27l7 7 16-16"/>
        </svg>

        <h1 class="text-4xl font-extrabold text-sky-700 mt-4">Thank You!</h1>
        <p class="mt-4 text-gray-600 text-lg">
            Your inquiry has been received successfully. <br>
            Our team at <strong>Gkon Technologies</strong> will contact you shortly.
        </p>

        <!-- Back Button -->
        <a href="index.html"
            class="mt-8 inline-block bg-sky-600 hover:bg-sky-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:shadow-xl transition transform hover:scale-105">
            Back to Home
        </a>

        <!-- Auto Redirect -->
        <p class="text-sm text-gray-500 mt-5">
            You will be redirected automatically in <span id="timer" class="font-bold">5</span> seconds...
        </p>
    </div>

    <script>
        // Auto redirect timer
        let counter = 5;
        setInterval(() => {
            counter--;
            document.getElementById("timer").innerText = counter;
            if (counter === 0) {
                window.location.href = "index.html";
            }
        }, 1000);
    </script>

</body>
</html>
