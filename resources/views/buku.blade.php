<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Montserrat&display=swap">
    <style>
        body{
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #000428, #004e92);
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        .konten{
            display: flex;
            gap: 40px;
            max-width: 1200px;
            padding: 40px;
        }

        .left {
            flex: 2;
        }

        .right{
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1{
            font-family: 'Comic Neue', cursive;
            font-size: 50px;
            margin: 0;
        }

        h2{
            font-family: 'Comic Neue', cursive;
            font-size: 24px;
            margin: 0 0 20px 5px;
            color: #cfcfcf;
        }

        h3{
            border-bottom: 2px solid white;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8;
            font-size: 16px;
            text-align: justify;
        }

        img{
            width: 280px;
            border-radius: 10px;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="konten">
        <div class="left">
            <h1>{{$judul}}</h1>
            <h2>sebelum Mati</h2>
            <h3>Review Singkat</h3>
            <p>
                {{$reviewparagraf1}}
            </p>
            <p>
                {{ $reviewparagraf2 }}
            </p>
        </div>
        <div class="right">
            <img src="/images/SEPORSI MIE AYAM (1).png" alt="Seporsi">
        </div>
    </div>
</body>
</html>