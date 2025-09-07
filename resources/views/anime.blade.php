<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ANIME</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #111;
        }
        .konten {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            gap: 40px;
        }
        .left {
            flex: 1;
        }
        .left h1 {
            font-size: 52px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .line {
            width: 80px;
            height: 4px;
            background: black;
            margin-bottom: 30px;
        }
        .left p {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }
        .right {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .right img {
            max-width: 350px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <div class="konten">
        <div class="left">
            <h1>{{$judulanime}}</h1>
            <div class="line"></div>
            <p>
                {{ $review }}
            </p>
        </div>
        <div class="right">
            <img src="/images/Jujutsu Kaisen 0 Movie Poster.jpeg" alt="Jujutsu Kaisen">
        </div>
    </div>
</body>
</html>
