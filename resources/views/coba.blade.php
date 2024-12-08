<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .footer {
      background-color: #2c3e50;
      color: #fff;
      padding: 40px 40px;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      flex-direction: column;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      width: 100%;
    }

    .footer-section {
      flex: 1;
      padding: 0 15px;
    }

    .footer-section h4 {
      margin-bottom: 15px;
    }

    .footer-links {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(3, auto);
      gap: 0px;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links li {
      margin-bottom: 8px;
      margin:2px;
    }

    .footer-links a {
      color: #fff;
      text-decoration: none;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .social-icons .icon-container {
      position: relative;
      display: inline-block;
    }

    .social-icons img {
      width: 48px;
      height: 48px;
      position: absolute;
      transition: opacity 0.3s ease;
    }

    .social-icons img.color {
      display: none;
    }

    .social-icons a:hover img.bw {
      display: none;
    }

    .social-icons a:hover img.color {
      display: inline-block;
    }

    .footer-menu a:hover, .footer-categories a:hover {
    color: #e74c3c; /* Warna efek hover */
    }

    .copyright {
      text-align: center;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      width: 100%;
    }
  </style>
  <title>Footer Example</title>
</head>
<body>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-section">
          <h4>TELUSURI</h4>
          <ul class="footer-links footer-menu">
            <li><a href="/">Beranda</a></li>
            <li><a href="/about">Tentang Kami</a></li>
            <li><a href="/contact">Hubungi Kami</a></li>
            <li><a href="/international">Internasional</a></li>
            <li><a href="/national">Nasional</a></li>          
          </ul>
        </div>
        
        <div class="footer-section">
          <h4>KATEGORI</h4>
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
          <h4>IKUTI KAMI</h4>
          <div class="social-icons">
            <a href="https://www.instagram.com/sisforbrilliance_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
              <img class="bw" src="{{ asset('/images/icon_ig_b&w.png') }}" alt="Instagram" />
              <img class="color" src="{{ asset('/images/icon_ig.png') }}" alt="Instagram" />
            </a>
          </div>
        </div>
      </div>
      
      <div class="copyright">
      <b>© 2024 Cakara News. Hak cipta dilindungi undang-undang.</b>
      </div>
    </div>
  </footer>
</body>
</html>
