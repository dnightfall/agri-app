<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tanaman</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formtanaman.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="top-page">
                <h1>Tambah Bibit</h1>
                <a href="{{ route('tanamanadmin.index') }}">Kembali</a>
            </div>
            <!-- create.blade.php -->
                    <form action="{{ route('seedlings.store') }}" method="POST">
                        @csrf
                        <p>Jenis</p>
                        <div class="radio">
                            <input type="radio" id="contactChoice1" name="contact" value="email" />
                            <label for="contactChoice1">Buah</label>

                            <input type="radio" id="contactChoice2" name="contact" value="phone" />
                            <label for="contactChoice2">Sayur</label>
                        </div>

                        <label for="seed_name">Nama Bibit:</label>
                        <input type="text" id="seed_name" name="seed_name" required>

                        <label for="seed_name">Lama Semai:</label>
                        <input type="text" id="seed_name" name="seed_name" required>
            
                        <label for="tray_count">Harga:</label>
                        <input type="text" id="dengan-rupiah" name="tray_count" required>
            
                        <button type="submit">Simpan</button>
                    </form>
                    <br>
        </div>

    </div>

    <script>
        // Set default planting date to today
        document.getElementById('planting_date').value = new Date().toISOString().split('T')[0];
    </script>
</body>
<script>
       /* Dengan Rupiah */
       var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
</html>
