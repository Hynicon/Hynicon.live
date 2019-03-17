<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scuffed.me - Coming Soon</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            background: #000;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-content: center;
            text-align: center;
            flex-direction: column;
            color: #fff;
        }
        h1 {
            font-weight: 900;
            font-size: 4rem;
            margin: 0;
            margin-bottom: 2rem;
            letter-spacing: -0.01562em;
        }
        p {
            font-size: 1.5rem;
            font-weight: 900;
            margin: 0;
        }
        #video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
        }
        .content {
            position: relative;
            z-index: 999;
        }
        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <video autoplay muted loop playsinline id="video">
        <source src="onlygropemyass.mp4" type="video/mp4">
    </video>

    <iframe src="start.mp3" allow="autoplay" style="display:none"></iframe>

    <audio autoplay loop>
        <source src="scuffedwalk.mp3" type="audio/mpeg">
        <embed src="scuffedwalk.mp3" loop="true" autostart="true" hidden="true" />
    </audio>

    <div class="content">
        <h1>SCUFFED.me</h1>
        <p>Coming Soon.</p>
    </div>
</body>
</html>
