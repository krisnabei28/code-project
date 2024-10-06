<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2C3E50, #3498DB); 
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .login-card {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 60px auto; 
        }

        .login-card img {
            max-width: 150px;
        }

        .login-card h2 {
            font-weight: 600;
            margin-bottom: 20px;
        }

        .login-btn {
            background-color: #3498DB;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 10px;
            margin-top: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 5px;
        }

        .footer-link {
            text-align: center;
            margin-top: 10px;
        }

        .footer-link a {
            text-decoration: none;
            color: #3498DB;
            font-weight: 500;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }

        /* larger screens */
        @media (min-width: 768px) {
            .mt-custom {
                margin-top: 100px;
            }
        }

        /* smaller screens */
        @media (max-width: 768px) {
            .mt-custom {
                margin-top: 100px;
                padding: 20px;
            }

            .login-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <!-- Login Card -->
    <div class="login-card mt-custom">
        <div class="text-center mb-4">
            <img src="img/logo.png" alt="Logo">
            <h2>Selamat Datang di SPK Kontrasepsi</h2>
        </div>

        <!-- Email and Password Fields -->
        <form>
            <input type="email" class="form-control" placeholder="Email" required>
            <input type="password" class="form-control" placeholder="Password" required id="passwordInput">
            <div class="form-check d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                <label class="form-check-label ms-1" for="showPassword">Tampilkan Password</label>
                {{-- <a href="#" class="ms-auto">Lupa Password?</a> --}}
            </div>
            <button type="submit" class="login-btn" onclick="window.location.href='/beranda'">Masuk</button>
        </form>

        <div class="footer-link">
            <p>Sudah punya akun? <a href="/registration">Buat Akun</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            var x = document.getElementById("passwordInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
