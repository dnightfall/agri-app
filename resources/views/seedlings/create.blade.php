<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bibit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Bibit</h1>
        <form action="{{ route('seedlings.store') }}" method="POST">
            @csrf
            <input type="hidden" id="planting_date" name="planting_date" value="">
            
            <label for="seed_name">Nama Bibit:</label>
            <input type="text" id="seed_name" name="seed_name" required>
            
            <label for="tray_count">Jumlah Tray:</label>
            <input type="number" id="tray_count" name="tray_count" required min="1">
            
            <button type="submit">Tambah Data</button>
        </form>
        <br>
        <a href="{{ route('seedlings.index') }}">Kembali</a>
    </div>

    <script>
        // Set default planting date to today
        document.getElementById('planting_date').value = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>
