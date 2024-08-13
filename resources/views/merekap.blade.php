<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merekap Data Bibit</title>
    <link rel="stylesheet" href="{{ asset('css/merekap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <!-- Include Bootstrap CSS for modal -->
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
            <h1 class="">Rekap Data Bibit</h1>
            <button type="button" class="btn generate" id="openModal">
                Generate PDF
            </button>
            
            <div class="modal" id="pdfModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Generate PDF</h5>
                            <button type="button" class="close" id="closeModal">&times;</button>
                        </div>
                        <hr>
                        <div class="modal-body">
                            <form id="pdfForm">
                                <div class="form-group">
                                    <label for="startDate">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                                </div>
                                <div class="form-group">
                                    <label for="endDate">Tanggal Akhir</label>
                                    <input type="date" class="form-control" id="endDate" name="endDate" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn tutup" id="closeModalFooter">Close</button>
                            <button type="button" class="btn btn-primary" id="downloadPdf">Download PDF</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Bibit</th>
                        <th>Tanggal Semai</th>
                        <th>Jumlah Tray</th>
                        <th>Jumlah Bibit Keluar</th>
                        <th>Tanggal Selesai</th>
                        <th>Dokumentasi Perkembangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tomat</td>
                        <td>01-01-2024</td>
                        <td>10</td>
                        <td>500</td>
                        <td>01-04-2024</td>
                        <td><a href="{{ route('dokumentasirekap.index') }}" >Lihat Dokumentasi</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Selada</td>
                        <td>10-01-2024</td>
                        <td>8</td>
                        <td>300</td>
                        <td>10-04-2024</td>
                        <td><a href="{{ route('dokumentasirekap.index') }}" >Lihat Dokumentasi</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <script>
    document.getElementById('openModal').onclick = function() {
        document.getElementById('pdfModal').style.display = 'block';
    }

    document.getElementById('closeModal').onclick = function() {
        document.getElementById('pdfModal').style.display = 'none';
    }

    document.getElementById('closeModalFooter').onclick = function() {
        document.getElementById('pdfModal').style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('pdfModal')) {
            document.getElementById('pdfModal').style.display = 'none';
        }
    }
</script>
</body>
</html>
