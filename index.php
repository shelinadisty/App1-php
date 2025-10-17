<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Selamat Datang di WEB 2</title>
    <style>
        /* === LATAR BELAKANG GRADIENT BERGERAK === */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, #0f2027, #203a43, #2c5364, #1e3c72);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            color: #fff;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* === KONTENER UTAMA === */
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            box-shadow: 0 0 30px rgba(0,0,0,0.4);
            border-radius: 25px;
            text-align: center;
            padding: 50px 70px;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(30px);}
            to {opacity: 1; transform: translateY(0);}
        }

        /* === TEKS UTAMA === */
        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        h2 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 25px;
            color: #d4d4d4;
        }

        p {
            font-size: 17px;
            line-height: 1.7;
        }

        .highlight {
            color: #ffe259;
            font-weight: bold;
        }

        /* === TOMBOL INTERAKTIF === */
        .btn {
            margin-top: 30px;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            color: #222;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255,255,255,0.6);
        }

        /* === PENUTUP === */
        .footer {
            margin-top: 35px;
            font-style: italic;
            color: #ccc;
            font-size: 15px;
            opacity: 0.8;
        }

        /* === EFEK CAHAYA LEMBUT DI BELAKANG KARTU === */
        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.2), transparent 70%);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); opacity: 0.8; }
            50% { transform: translateY(-30px); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="glow" style="top:20%; left:15%;"></div>
    <div class="glow" style="bottom:15%; right:20%; animation-delay: 3s;"></div>

    <div class="card">
        <h1>Hello, Selamat Datang di WEB 2</h1>
        <h2>✨ App 2 berhasil dijalankan di port 3000 ✨</h2>

        <p>
            Perkenalkan saya <span class="highlight">Shelina Disty Fibriani</span><br>
            dengan NIM <span class="highlight">H1101231005</span>.
        </p>

        <button class="btn" onclick="alert('Terima kasih sudah berkunjung ke WEB 2 💖')">Klik Saya</button>

        <div class="footer">Thankyou 🌸</div>
    </div>
</body>
</html>
