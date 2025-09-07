<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman home</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Playfair+Display:wght@700&display=swap">

    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: url('/images/air.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Montserrat', sans-serif;
            color: white;
        }

        .konten{
            margin-left: 80px;
        }

        h1{
            font-family: 'Montserrat';
            font-size: 50px;
            margin: 0;
        }

        h2 {
            font-family: 'Playfair Display';
            font-size: 60px;
            margin: 10px 0 0 0;
        }

        .quote {
            margin-top: 10px;
            font-size: 20px; 
        }

        .quote span{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="konten">
        <h1>WELCOME TO</h1>
        <H2>HOME</H2>
        <h2>{{$nama}} {{$kelas}}</h2>
        <div class="quote">
            <span>"Jika kehabisan peluru maka JADILAH PELURU"</span>
        </div>
    </div>
</body>
</html>