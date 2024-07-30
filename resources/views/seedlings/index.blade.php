<!DOCTYPE html>
<html>
<head>
    <title>Data Bibit</title>
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
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
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
        }
        button {
            padding: 5px 10px;
            background-color: #dc3545;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c82333;
        }
        a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Bibit</h1>
        <a href="{{ route('seedlings.create') }}">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>Tanggal Semai</th>
                    <th>Nama Bibit</th>
                    <th>Jumlah Tray</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seedlings as $seedling)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($seedling->planting_date)->format('Y-m-d') }}</td>
                        <td>{{ $seedling->seed_name }}</td>
                        <td>{{ $seedling->tray_count }}</td>
                        <td>
                            <form action="{{ route('seedlings.destroy', $seedling->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
