<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bibit</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-create.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <style>

    </style>
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
            <h1>Tambah Bibit</h1>
            <!-- create.blade.php -->
                    <form action="{{ route('seedlings.store') }}" method="POST">
                        @csrf
                        <label for="seed_name">Nama Bibit:</label>
                        <input type="text" id="seed_name" name="seed_name" required>
            
                        <label for="planting_date">Tanggal Semai:</label>
                        <input type="date" id="planting_date" name="planting_date" class="semai" required>
            
                        <label for="tray_count">Jumlah Tray:</label>
                        <input type="number" id="tray_count" name="tray_count" required>
            
                        <button type="submit">Simpan</button>
                    </form>
            
                    <br>
                    <a href="{{ route('seedlings.index') }}">Kembali</a>
        </div>

    </div>

    <script>
        // Set default planting date to today
        document.getElementById('planting_date').value = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>
