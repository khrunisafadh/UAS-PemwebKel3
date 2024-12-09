<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Cakra News</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style contact.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <div class="container2">
            <h2><b>Hubungi Kami</b></h2>
            <p>Kami ingin mendengar pendapat Anda! Silakan isi formulir di bawah ini.</p>
        </div>
    </section>

    <div class="contact-section">
        <div class="contact-form-container">
            @if (session('success'))
                <div class="notification"
                    style="background-color: #28a745; color: #fff; padding: 10px; margin-top: 10px; border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif

            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" required placeholder="Masukan nama anda">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Masukan email anda">
                </div>

                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" required placeholder="Masukan pesan anda"></textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
            <div id="notification" class="notification"></div>
        </div>

        <div class="map-container">
            <h3>Lokasi Kami</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.603939132758!2d106.79346119999998!3d-6.315644100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee3e065d4f6b%3A0xe176f81a31564166!2sUniversitas%20Pembangunan%20Nasional%20Veteran%20Jakarta!5e0!3m2!1sen!2sid!4v1733595764498!5m2!1sen!2sid"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <x-footer />
    <script src="js/animasi.js"></script>
</body>

</html>
