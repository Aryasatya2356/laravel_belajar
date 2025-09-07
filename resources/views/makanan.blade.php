<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tongkol Balado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .konten {
            display: flex;
            width: 100%;
            height: 100vh;
        }
        .left {
            flex: 1;
            background-color: #b1001a;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        .left img {
            width: 350px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }
        .right {
            flex: 1.2;
            background-color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right h1 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .line {
            width: 100px;
            height: 3px;
            background-color: black;
            margin-bottom: 20px;
        }
        .right p {
            font-size: 18px;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="konten">
        <div class="left">
           
            <img src="/images/tongkol balado.png" alt="Tongkol Balado">
        </div>
        <div class="right">
            <h1>{{$namaMakanan}}</h1>
            <div class="line"></div>
            <p>
                {{ $deksripsi }}
            </p>
        </div>
    </div>
</body>
</html>
