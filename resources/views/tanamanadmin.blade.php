<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tanaman.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <title>Tanaman</title>
</head>
<body>
    <div class="sidebar">
        <div class="img-header">
            <img src="{{ asset('img/Logo-IPB-University-Horizontal-600x157.png') }}" alt="">
        </div>
        <div class="item-header">
            <a href="{{ route('allcontrol.index') }}">Kontrol</a>
            <a class="active" href="{{ route('tanamanadmin.index') }}">Data Tanaman</a>
            <a href="{{ route('seedlings.index') }}">Data </a>
            <a href="#about">Penelitian</a>
        </div>
    </div>
    <!-- --------------------------------------------------------middle------------------------------------------------------ -->
    <div class="container">
        <div class="top">
            <div class="middle">
                <h1>Data tanaman</h1>
                <div class="select-kontrol">
                    <a class="active" href="">SEMUA</a>

                </div>
                <div class="border"></div>
                <div class="fill">
                    <div class="filter">
                        <img src="{{ asset('img/filter.png') }}" alt="">
                        <p>Filter</p>
                    </div>
                    <a style="text-decoration: none;" class="tambah hover" href="{{ route('formtanaman.index') }}">TAMBAH TANAMAN</a>
                </div>
                <table>
                    <tr>
                      <th>GAMBAR</th>
                      <th>NAMA</th>
                      <th>LAMA SEMAI</th>
                      <th>HARGA</th>
                    </tr>
                    <tr>
                      <td class="image"><div class="table-img"><img src="{{ asset('img/Tomat.png') }}" alt=""></div></td>
                      <td>TOMAT</td>
                      <td>2 MINGGU</td>
                      <td>30.000/TRAI</td>
                    </tr>
                    <tr>
                    <tr>
                        <td class="image"><div class="table-img"><img src="{{ asset('img/cabe.png') }}" alt=""></div></td>
                        <td>CABAI</td>
                        <td>1 BULAN</td>
                        <td>30.000/TRAI</td>
                    </tr>
                    <tr>
                        <td class="image"><div class="table-img"><img src="{{ asset('img/terong.png') }}" alt=""></div></td>
                        <td>TERONG</td>
                        <td>1 BULAN</td>
                        <td>30.000/TRAI</td>
                    </tr>
                    <tr>
                        <td class="image"><div class="table-img"><img src="{{ asset('img/cabage.png') }}" alt=""></div></td>
                        <td>SELADA</td>
                        <td>2 MINGGU</td>
                        <td>30.000/TRAI</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>