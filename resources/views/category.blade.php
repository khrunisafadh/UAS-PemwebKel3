<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global News - Category</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style category.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <h2>Category</h2>
        <p>Latest updates on technological advancements and innovations.</p>
        <a href="/technology" class="btn">Explore The Category News</a>
    </section>

    <section class="main-content container2">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="card">
                    <img src="images/sport3.png" alt="Sports News Image">
                    <h3>Sports</h3>
                    <a href="/sport" class="btn">Read More</a>
                </div>
                <div class="card">
                    <img src="images/politics.png" alt="Politics News Image">
                    <h3>Politics</h3>
                    <a href='' class="btn">Read More</a>
                </div>
                <div class="card">
                    <img src="images/lifestyles.png" alt="Lifestyles News Image">
                    <h3>Lifestyles</h3>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="card">
                    <img src="images/technology.png" alt="Technology News Image">
                    <h3>Technology</h3>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="card">
                    <img src="images/arts.png" alt="Arts">
                    <h3>Arts</h3>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="card">
                    <img src="images/entertainment.png" alt="Arts">
                    <h3>Entertainment</h3>
                    <a href="#" class="btn">Read More</a>
                </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />

    <script src="js/slider.js"></script>
    <script src="js/animasi.js"></script>
</body>
</html>
