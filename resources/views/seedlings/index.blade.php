<!DOCTYPE html>
<html>
<head>
    <title>Data Bibit</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
</head>
<body>
    <div class="sidebar">
        <div class="img-header">
            <img src="{{ asset('img/Logo-IPB-University-Horizontal-600x157.png') }}" alt="">
        </div>
        <div class="item-header">
            <a href="{{ route('allcontrol.index') }}">Kontrol</a>
            <a href="{{ route('tanamanadmin.index') }}">Data Tanaman</a>
            <a class="active" href="{{ route('seedlings.index') }}">Data </a>
            <a href="#about">Penelitian</a>
        </div>
    </div>
    <div class="container">
        <div class="top">
            <h1>Data Bibit</h1>
            <div class="header-buttons">
                <a href="{{ route('seedlings.create') }}" class="btn left">Tambah Data</a>
                <a href="{{ route('merekap.index') }}" class="btn right">Rekap</a>
            </div>
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
                                <form action="{{ route('seedlings.destroy', $seedling->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn delete" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a href="{{ route('photos.upload', $seedling->id) }}" class="btn progress">Progres</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
