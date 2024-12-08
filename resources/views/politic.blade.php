<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Politik</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style politics.css') }}">
</head>

<body>
    
    <x-nav-bar />

    <section class="hero">
        <h2>Berita Politik</h2>
        <p>Berita terbaru mengenai peristiwa, keputusan, dan sorotan politik dari seluruh dunia.</p>
    </section>

    <section class="main-content container2">
        <div class="grid-3">
            <div class="card animate">
                <img src="images/politic1.jpeg" alt="National Politics 1">
                <h3>Komisi III DPR Akan Panggil Kapolres Semarang soal Penembakan Siswa</h3>
                <div class="meta-info">
                    <p>Muhammad Rafi Zaydan | 3 Desember 2024</p>
                </div>
                <p>Ketua Komisi III DPR Habiburokhman menyebut isu dugaan keterlibatan 'partai coklat' atau parcok
                    selama pelaksanaan Pilkada serentak 2024 yang diidentikkan dengan aparat adalah hal yang hoaks.</p>
                <a href="/politic1" class="btn">Read More</a>
            </div>
            <div class="card animate">
                <img src="images/politic2.jpeg" alt="National Politics 2">
                <h3>Prabowo soal Pilkada: Menang Jangan Euforia, Kalah Dukung yang Menang</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Presiden Prabowo Subianto meminta seluruh kontestan Pilkada serentak 2024 
                    agar tidak terlalu berlebihan dalam merayakan kemenangan dan tidak terlalu larut dalam kesedihan jika kalah.</p>
                <a href="/politic2" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/politic3.jpeg" alt="National Politics 3">
                <h3>Sambut Putusan MK, KPK Ungkap Sulit Usut Korupsi Libatkan Anggota TNI</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Komisi Pemberantasan Korupsi (KPK) mengapresiasi putusan Mahkamah Konstitusi (MK) yang menegaskan 
                    wewenang lembaga antirasuah mengusut kasus korupsi yang melibatkan militer atau TNI.</p>
                <a href="/politic3" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/politic4.jpeg" alt="International Politics 4">
                <h3>Petinggi Militer China Diskors dari Jabatan Buntut Skandal Serius</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>China dikabarkan menskors seorang pejabat militer berpangkat tinggi 
                    karena diduga melakukan "pelanggaran disiplin serius".</p>
                <a href="/politic4" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/politic5.jpeg" alt="International Politics 5">
                <h3>Iran Tambah 6.000 Sentrifus Baru di Pabrik Pengayaan Uranium Nuklir</h3>
                <div class="meta-info">
                    <p>Salman Rafi | 2 Desember 2024</p>
                </div>
                <p>Badan Nuklir PBB mengonfirmasi bahwa Iran berencana memasang sekitar 6.000 sentrifus baru untuk memperkaya uranium.</p>
                <a href="/politic5" class="btn">Selengkapnya</a>
            </div>
        </div>
    </section>

    <x-footer/>

    <script src="js/animasi.js"></script>
</body>
</html>
