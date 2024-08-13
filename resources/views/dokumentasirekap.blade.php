<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <title>Dokumentasi Rekap Bibit Tomat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            position: relative;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .back-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .rekap-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .rekap-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            box-sizing: border-box;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .rekap-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .rekap-item h2 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
        }
        .rekap-item .date {
            color: #666;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url()->previous() }}" class="back-btn">Back</a>
        <h1>Perkembangan Bibit Tomat</h1>

        <div class="rekap-items">
            <div class="rekap-item">
                <h2>Hari ke-1</h2>
                <img src="{{ asset('photos/tomato_day1.jpg') }}" alt="Gambar Hari ke-1">
                <p class="date">Tanggal: 2024-08-08</p>
            </div>

            <div class="rekap-item">
                <h2>Hari ke-2</h2>
                <img src="{{ asset('photos/tomato_day2.jpg') }}" alt="Gambar Hari ke-2">
                <p class="date">Tanggal: 2024-08-09</p>
            </div>

            <div class="rekap-item">
                <h2>Hari ke-3</h2>
                <img src="{{ asset('photos/tomato_day1.jpg') }}" alt="Gambar Hari ke-3">
                <p class="date">Tanggal: 2024-08-10</p>
            </div>

        </div>
    </div>
</body>
</html>
