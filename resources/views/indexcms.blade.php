<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index1.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <title>tes</title>
</head>
<body>
    <div class="top" id="top">
        <div class="img-container">
            <img class="img-header" src="{{ asset('img/a.png') }}" alt="">
            <div class="text-top">
                <div class="text1">IPB UNIVERSITY</div>
                <div class="text2">AGRIBUSINESS AND TECHNOLOGY PARK (ATP) IPB</div>
                <div class="text3">Kawasan inovasi IPB dan pengembangan agribisnis terpadu</div>
            </div>
        </div>
        <header class="header">
            <img src="{{ asset('img/Logo-IPB-University-Horizontal-600x157.png') }}" alt="">
            <div class="header-item">
                <a href="" class="item active">Home</a>
                <a href="{{ route('controlcms.index') }}" class="item">Kontrol</a>
                <a href="{{ route('tanamancms.index') }}" class="item">Data Tanaman</a>
            </div>
            <a class="login" href="{{ route('login') }}">Sign In</a>
        </header>
    </div>
    <div class="mid-container">
        <div class="seperator">
            <div class="over">
                <div class="top">
                    <img src="{{ asset('img/mark.png') }}" alt="">Kontrol GreenHouse
                </div>
                <div class="bottom">
                    <div class="items">
                        <h1>Nama Alat</h1>
                        <div class="sub">
                            <p>Alat 1</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="items">
                        <h1>Tanggal</h1>
                        <div class="sub">
                            <p>10-08-2024</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="items">
                        <h1>Waktu</h1>
                        <div class="sub">
                            <p>08:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------middle content------------------------------------------ -->
    <div class="descrition-container">
        <div class="top-text">
            <p class="text1">Agribusiness and Technology Park (ATP) IPB</p>
            <p class="text2">Agribusiness and Technology Park (ATP) Institut Pertanian Bogor (IPB) University bisa menjadi alternatif wisata di kawasan Bogor, Jawa Barat. ATP merupakan salah satu unit bisnis IPB University yang bergerak di bidang pertanian dari hulu sampai hilir dengan melibatkan petani di sekitar Kabupaten Bogor, Kota Bogor, dan Kabupaten Cianjur sebagai mitra.</p>
        </div>
        <div class="flow">
            <div class="item">
                <div class="box">
                    <img src="{{ asset('img/location.png') }}" alt="">
                </div>
                <div class="text">
                    <p class="text1">Lokasi</p>
                    <p class="text2">Jl. Carang Pulang No.1, Cikarawang, Kec. Dramaga, Kabupaten Bogor, Jawa Barat 16680</p>
                </div>
            </div>
            <img class="line" src="{{ asset('img/line.png') }}" alt="">
            <div class="item">
                <div class="box">
                    <img src="{{ asset('img/kunjungan.png') }}" alt="">
                </div>
                <div class="text">
                    <p class="text1">Kunjungan</p>
                    <p class="text2">Senin - Jumat 07.00-16.00</p>
                    <p class="text2">Sabtu 07.00-12.00</p>
                    <p class="text2">Minggu Tutup</p>
                </div>
            </div>
            <img class="line" src="{{ asset('img/line.png') }}" alt="">
            <div class="item">
                <div class="box">
                    <img class="phone" src="{{ asset('img/phone.png') }}" alt="">
                </div>
                <div class="text">
                    <p class="text1">Customer Service</p>
                    <p class="text2">(0251) 842567</p><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------bottom content------------------------------------------ -->
    <div class="bottom-description">
        <div class="top-text">
            <h1>SMART GREEN HOUSE NURSERY ROOM</h1>
            <p>Greenhouse yang dapat mengendalikan iklim memungkinkan tanaman untuk tumbuh lebih cepat, lebih efisien, secara berkelanjutan di hampir setiap kondisi.
            </p>
        </div>
        <div class="options">
            <div class="box">
                <div class="item active">
                    <a class="text active" href="">Sayuran</a>
                </div>
                <div class="item">
                    <a class="text" href="">Buah</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="item">
                <p>Cabai</p>
                <img class="card-image" src="{{ asset('img/1.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Tomat</p>
                <img class="card-image" src="{{ asset('img/2.webp') }}" alt="">
            </div>
            <div class="item">
                <p>Terong</p>
                <img class="card-image" src="{{ asset('img/3.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Pakcoy</p>
                <img class="card-image" src="{{ asset('img/4.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Kailan</p>
                <img class="card-image" src="{{ asset('img/5.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Kokrom Merah</p>
                <img class="card-image" src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Kaktus</p>
                <img class="card-image" src="{{ asset('img/7.jpg') }}" alt="">
            </div>
            <div class="item">
                <p>Cabai</p>
                <img class="card-image" src="{{ asset('img/8.jpeg') }}" alt="">
            </div>
        </div>
        <div class="showmore">
            <a href="{{ route('tanamancms.index') }}">Lihat Lebih Lengkap</a>
        </div>
    </div>
     <!-- --------------------------------------foooter--------------------------------------------------- -->
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
<!-- <script>
  let lastScrollTop = 0;
  const topElement = document.querySelector(".header");
  
  window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
          // Scroll down
          topElement.style.top = '-100px'; // Sesuaikan nilai dengan tinggi elemen top jika berbeda
      } else {
          // Scroll up
          topElement.style.top = '0';
      }
      lastScrollTop = scrollTop;
  });
</script> -->
</html>