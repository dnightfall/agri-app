<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tanamancms.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <title>Tanaman</title>
</head>
<body>
    <!-- --------------------------------------------------------header------------------------------------------------------ -->
    <div class="top">
        <header class="header">
            <img src="{{ asset('img/Logo-IPB-University-Horizontal-600x157.png') }}" alt="">
            <div class="header-item">
                <a href="{{ route('indexcms.index') }}" class="item">Home</a>
                <a href="{{ route('controlcms.index') }}" class="item">Kontrol</a>
                <a href="{{ route('tanamancms.index') }}" class="item active">Data Tanaman</a>
            </div>
            <a class="login" href="{{ route('login') }}">Sign In</a>
        </header>
    </div>
    <!-- --------------------------------------------------------middle------------------------------------------------------ -->
    <div class="middle">
        <h1>Data tanaman</h1>
        <div class="select-kontrol">
            <a class="active" href="">SEMUA</a>
            <a href="{{ route('buahcms.index') }}">BUAH</a>
            <a href="{{ route('sayurcms.index') }}">SAYUR</a>
        </div>
        <div class="border"></div>
        <div class="fill">
            <div class="filter">
                <img src="{{ asset('img/filter.png') }}" alt="">
                <p>Filter</p>
            </div>
        </div>
        <table>
            <tr>
              <th>GAMBAR</th>
              <th>NAMA</th>
              <th>LAMA SEMAI</th>
              <th>HARGA</th>
            </tr>
            <tr>
              <td><div class="table-img"><img src="{{ asset('img/Tomat.png') }}" alt=""></div></td>
              <td>TOMAT</td>
              <td>2 MINGGU</td>
              <td>30.000/TRAI</td>
            </tr>
            <tr>
            <tr>
                <td><div class="table-img"><img src="{{ asset('img/cabe.png') }}" alt=""></div></td>
                <td>CABAI</td>
                <td>1 BULAN</td>
                <td>30.000/TRAI</td>
            </tr>
            <tr>
                <td><div class="table-img"><img src="{{ asset('img/terong.png') }}" alt=""></div></td>
                <td>TERONG</td>
                <td>1 BULAN</td>
                <td>30.000/TRAI</td>
            </tr>
            <tr>
                <td><div class="table-img"><img src="{{ asset('img/cabage.png') }}" alt=""></div></td>
                <td>SELADA</td>
                <td>2 MINGGU</td>
                <td>30.000/TRAI</td>
            </tr>
        </table>
    </div>
    <!-- --------------------------------------------------------footer------------------------------------------------------ -->
    <div class="footer">
        <div class="footer-item">
            <div class="left">
                <img src="{{ asset('img/cropped-DPMA-logo.png') }}" alt="">
                <p>Unit bisnis IPB University yang bergerak di bidang pertanian dari hulu sampai hilir </p>
                <div class="icon">
                    <div class="facebook">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </div>
                    <div class="twitter">
                        <img src="{{ asset('img/twitter.png') }}" alt="">
                    </div>
                    <div class="instagram">
                        <img src="{{ asset('img/instagram.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="right-item">
                    <h1>About</h1>
                    <a href="">How it works</a>
                    <a href="">Featured</a>
                    <a href="">Partnership</a>
                    <a href="">Business Relation</a>
                </div>
                <div class="right-item">
                    <h1>Community</h1>
                    <a href="">Event</a>
                    <a href="">Blog</a>
                    <a href="">Podcast</a>
                    <a href="">Invite a friend</a>
                </div>
                <div class="right-item">
                    <h1>Socials</h1>
                    <a href="">Discord</a>
                    <a href="">Instagram</a>
                    <a href="">Facebook</a>
                    <a href="">Twitter</a>
                </div>
            </div>
        </div>
  </div>
  <div class="bottom-page">
    <div class="seperator"></div>
    <div class="bottom-text">
        <p>©HOLYDAY</p>
        <div class="text-right">
            <a href="">Privacy & Policy</a>
            <a href="">Terms & Condition</a>
        </div>
    </div>
  </div>
</body>
</html>