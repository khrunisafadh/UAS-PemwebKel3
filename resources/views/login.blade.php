<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk</title>
  <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <!-- Tombol Back -->
  <a href="/" class="back-button">
    <span class="arrow">←</span> Kembali ke Cakra News
  </a>
  <!-- Login -->
  <div class="main-content">
    <h2>Login</h2>
    <form id="loginForm" action="/login" method="POST">
    @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div id="login-feedback"></div>
        <button type="submit">Login</button>
    </form>
    <p>Belum memiliki akun? <a href="/views/register">Daftar di sini</a></p>
    <p><a href="/forgot_password">Lupa password?</a></p>
  </div>
<script>
</script>
</body>
</html>
