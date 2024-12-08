<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div class="main-content">
        <h2>Lupa Password</h2>
        <form action="forgot_password_process.php" method="POST">
            <div class="form-group">
                <label for="email">Masukkan Alamat Email Anda:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
