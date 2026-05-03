<?php
include 'include/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
       
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Login</h1>
        
        <div class="login-type">
            <label>
                <input type="radio" name="userType" value="user" checked> User Biasa
            </label>
            <label>
                <input type="radio" name="userType" value="admin"> Admin
            </label>
        </div>

        <div class="form-divider" id="typeIndicator">Mode: User Biasa</div>

        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <div class="form-group" id="adminCodeField" style="display: none;">
                <label for="adminCode">Kode Admin</label>
                <input type="password" id="adminCode" name="adminCode" placeholder="Masukkan kode admin">
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember"> Ingat saya
                </label>
                <a href="#">Lupa password?</a>
            </div>

            <button type="submit" class="login-btn">Masuk</button>
        </form>

        <div class="signup-link">
            Belum punya akun? <a href="#">Daftar di sini</a>
        </div>
    </div>

    <script>
        // Handle user type selection
        const userTypeRadios = document.querySelectorAll('input[name="userType"]');
        const adminCodeField = document.getElementById('adminCodeField');
        const typeIndicator = document.getElementById('typeIndicator');

        userTypeRadios.forEach(radio => {
            radio.addEventListener('change', function(e) {
                if (this.value === 'admin') {
                    adminCodeField.style.display = 'block';
                    typeIndicator.textContent = 'Mode: Login Admin';
                } else {
                    adminCodeField.style.display = 'none';
                    typeIndicator.textContent = 'Mode: User Biasa';
                }
            });
        });

        // Handle form submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const userType = document.querySelector('input[name="userType"]:checked').value;
            const adminCode = document.getElementById('adminCode').value;

            // Validasi berdasarkan tipe login
            if (userType === 'admin') {
                if (!email || !password || !adminCode) {
                    alert('Silakan isi semua field');
                    return;
                }
                
                // Contoh validasi kode admin
                const validAdminCode = '12345'; // Ganti dengan kode admin sebenarnya
                if (adminCode !== validAdminCode) {
                    alert('Kode admin tidak valid!');
                    return;
                }
                
                alert('Login Admin berhasil! \nEmail: ' + email);
                // Redirect ke halaman admin
                // window.location.href = 'admin-dashboard.html';
            } else {
                if (!email || !password) {
                    alert('Silakan isi semua field');
                    return;
                }
                
                alert('Login User berhasil! \nEmail: ' + email);
                // Redirect ke halaman user
                // window.location.href = 'user-dashboard.html';
            }
        });
    </script>
</body>

</html>