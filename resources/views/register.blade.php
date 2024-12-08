<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
     <!-- Tombol Back -->
  <a href="/" class="back-button">
    <span class="arrow">←</span> Kembali ke Cakra News
  </a>
     <!-- Register -->
    <div class="main-content">
        <h2>Register</h2>
        <form id="registerForm" action="register_process.php" method="POST">
            <div class="form-group">
                <label for="fullname">Nama Panjang:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Ketik Ulang Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="terms" required>
                    Anda menyetujui segala aturan yang berlaku
                </label>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
