<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
<head>
    <title>Rekap Data Bibit</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #6c757d;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('seedlings.index') }}" class="back-button">Back</a>
        <h1>Rekap Data Bibit</h1>

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div style="color: green; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Bibit</th>
                    <th>Tanggal Semai</th>
                    <th>Jumlah Tray</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seedlings as $seedling)
                    <tr>
                        <td>{{ $seedling->id }}</td>
                        <td>{{ $seedling->seed_name }}</td>
                        <td>{{ $seedling->planting_date }}</td>
                        <td>{{ $seedling->tray_count }}</td>
                        <td>
                            <a href="{{ route('photos.list', $seedling->id) }}" class="btn">Dokum</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
