<!DOCTYPE html>
<html>
<head>
    <title>Foto Bibit "{{ $seedling->seed_name }}"</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative; /* For positioning the back button */
        }
        .photo-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .photo-item {
            flex: 1 0 21%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .photo-item img {
            max-width: 100%;
            border-radius: 8px;
        }
        .photo-item p {
            margin-top: 10px;
            color: #555;
        }
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('seedlings.rekap') }}" class="back-button">Kembali</a>
        <h1>Foto Bibit "{{ $seedling->seed_name }}"</h1>
        <div class="photo-gallery">
            @foreach ($photos as $photo)
                <div class="photo-item">
                    <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Foto">
                    <p>Tanggal Upload: {{ \Carbon\Carbon::parse($photo->created_at)->format('Y-m-d') }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
