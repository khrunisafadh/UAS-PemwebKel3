<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News- Tentang Kami</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style about.css') }}">
</head>

<body>

    <x-nav-bar />
    
    <div class="about-container">
    <!-- About Section -->
    <div class="about-section">
        <h1><b>Tentang Kami</b></h1>
        <br>
        <p>
            Cakra News adalah platform berita digital yang bertujuan untuk memberikan informasi terkini dan terpercaya kepada pembaca di seluruh dunia. 
            Sejak berdiri pada pertengahan 2021, kami berkomitmen untuk menyediakan konten yang tidak hanya up-to-date tetapi juga mendalam dan berkualitas. 
            Tim kami terdiri dari para jurnalis berpengalaman, penulis kreatif, dan profesional di berbagai bidang yang bekerja keras untuk memberikan informasi yang relevan dan bermanfaat bagi pembaca.
            Kami percaya bahwa berita yang baik adalah berita yang transparan, berimbang, dan berbasis pada fakta yang dapat dipertanggungjawabkan. 
            Melalui artikel, analisis mendalam, dan liputan investigasi, Cakra News bertujuan untuk memberikan perspektif yang lebih luas tentang isu-isu penting, baik nasional maupun internasional.
            Kami percaya bahwa setiap berita yang kami sajikan memiliki dampak yang besar.
        </p>
        <br>
        <p>
            Dengan kepercayaan yang tinggi pada integritas dan objektivitas, Cakra News berusaha menjadi sumber utama yang dapat Anda andalkan untuk mendapatkan informasi yang akurat dan berharga.
        </p>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <h2><b>Tim Kami</b></h2>
        <div class="team-members">
            <div class="team-member">
                <img src="images/salman.png" alt="Salman Rafi" />
                <h3>Salman Rafi</h3>
                <p>Pemimpin Redaksi<p>
            </div>
            <div class="team-member">
                <img src="images/icha.png" alt="Khoirunnisa Fadilah" />
                <h3>Khoirunnisa Fadilah</h3>
                <p>Pengelola Redaksi</p>
            </div>
            <div class="team-member">
                <img src="images/rindah.jpeg" alt="Rindah Agustina" />
                <h3>Rindah Agustina</h3>
                <p>Penulis Konten</p>
            </div>
            <div class="team-member">
                <img src="images/rafi.jpg" alt="Muhammad Rafi Zaydan" />
                <h3>Muhammad Rafi Zaydan</h3>
                <p>Jurnalis</p>
            </div>
            <div class="team-member">
                <img src="images/rahel.jpg" alt="Rahel Veralda Hutahaean" />
                <h3>Rahel Veralda Hutahaean</h3>
                <p>Pengembang & Desainer Web</p>
            </div>
        </div>
    </div>
</div>


    <x-footer />

</body>
</html>