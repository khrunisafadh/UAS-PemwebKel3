<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('/css/style footer.css') }}"> 

</head>
<body>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-section">
          <h4><b>TELUSURI</b></h4>
          <ul class="footer-links footer-menu">
            <li><a href="/">Beranda</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li><a href="/contact">Hubungi Kami</a></li>
            <li><a href="/international">Internasional</a></li>
            <li><a href="/national">Nasional</a></li>          
          </ul>
        </div>
        
        <div class="footer-section">
          <h4><b>KATEGORI</b></h4>
          <ul class="footer-links footer-categories">
            <li><a href="/art">Seni</a></li>
            <li><a href="/politics">Politik</a></li>
            <li><a href="/technology">Teknologi</a></li>
            <li><a href="/sport">Olahraga</a></li>
            <li><a href="/entertainment">Hiburan</a></li>
            <li><a href="/lifestyle">Gaya Hidup</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4><b>IKUTI KAMI</b></h4>
            <div class="social-icons flex">
              <a href="https://www.instagram.com/sisforbrilliance_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <img class="bw" src="{{ asset('/images/icon_ig_b&w.png') }}" alt="Instagram" />
                <img class="color" src="{{ asset('/images/icon_ig.png') }}" alt="Instagram" />
              </a>
            </div>
            <a href="https://www.instagram.com/n3b.web" class="w-10 h-10 rounded-full">
              <img src="{{ asset('images/logon3b.png') }}" alt="">
            </a>
        </div>
      </div>
      
      <div class="copyright">
      <p>© 2024 Cakara News. Hak cipta dilindungi undang-undang.</>
      </div>
    </div>
  </footer>
</body>
</html>
