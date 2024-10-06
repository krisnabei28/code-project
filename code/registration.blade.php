<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2C3E50, #3498DB); /* Blue gradient background */
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
            margin: 60px auto; /* Center the login card */
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
            transform: translateY(-2px); /* Slight lift on hover */
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

        /* Spacing for larger screens */
        @media (min-width: 768px) {
            .mt-custom {
                margin-top: 100px; /* Larger margin for bigger screens */
            }
        }

        /* Increased spacing for smaller screens */
        @media (max-width: 768px) {
            .mt-custom {
                margin-top: 100px; /* Added margin for mobile view */
                padding: 20px; /* Ensure enough padding inside login card */
            }

            .login-card {
                padding: 20px; /* Smaller padding on mobile */
            }
        }

        /* Modal Styling */
        .stylish-modal {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Slightly stronger shadow for emphasis */
            padding: 20px;
            transition: all 0.3s ease;
        }

        .modal-header {
            background: red;
            border-bottom: none;
            color: white;
        }

        .modal-body {
            font-size: 16px;
            color: #333;
        }

        .modal-footer {
            border-top: none;
        }

        /* Action Button Styles */
        .btn-danger-custom {
            background-color: red;
            border-radius: 30px;
            transition: all 0.3s ease;
            padding: 10px 20px;
            color: white;
        }

        .btn-danger-custom:hover {
            background-color: #c0392b;  
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    @include('partials.navbar') <!-- Included navbar -->

    <!-- Signup Card -->
    <div class="login-card mt-custom">
        <div class="text-center mb-4">
            <img src="img/logo.png" alt="Logo">
            <h2>Buat Akun Baru di SPK Kontrasepsi</h2>
        </div>

        <!-- Email, Username, Password, Confirm Password Fields -->
        <form id="signupForm">
            <input type="email" class="form-control" placeholder="Email" required id="emailInput">
            <input type="text" class="form-control" placeholder="Username" required>
            <input type="password" class="form-control" placeholder="Password" required id="passwordInput">
            <input type="password" class="form-control" placeholder="Konfirmasi Password" required id="confirmPasswordInput">
            <div class="form-check d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                <label class="form-check-label ms-1" for="showPassword">Tampilkan Password</label>
            </div>
            <button type="button" class="login-btn" onclick="checkForm()">Daftar</button>
        </form>

        <!-- Login Link -->
        <div class="footer-link">
            <p>Sudah punya akun? <a href="/login">Masuk di sini</a></p>
        </div>
    </div>

    <!-- Modal for Password Mismatch Warning -->
    <div class="modal fade" id="passwordMismatchModal" tabindex="-1" aria-labelledby="passwordMismatchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content stylish-modal">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="passwordMismatchLabel">
                        <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.5rem;"></i> 
                        Password Tidak Cocok
                    </h5>
                    <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Password dan Konfirmasi Password tidak cocok. Silakan coba lagi.
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger-custom" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Email Format Error -->
    <div class="modal fade" id="emailErrorModal" tabindex="-1" aria-labelledby="emailErrorLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content stylish-modal">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="emailErrorLabel">
                        <i class="bi bi-exclamation-triangle-fill me-2" style="font-size: 1.5rem;"></i> 
                        Format Email Salah
                    </h5>
                    <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Format email yang Anda masukkan tidak valid. Silakan periksa kembali.
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger-custom" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        function togglePassword() {
            var password = document.getElementById("passwordInput");
            var confirmPassword = document.getElementById("confirmPasswordInput");
            if (password.type === "password" || confirmPassword.type === "password") {
                password.type = "text";
                confirmPassword.type = "text";
            } else {
                password.type = "password";
                confirmPassword.type = "password";
            }
        }

        // Check if email is in correct format and if passwords match
        function checkForm() {
            var email = document.getElementById("emailInput").value;
            var password = document.getElementById("passwordInput").value;
            var confirmPassword = document.getElementById("confirmPasswordInput").value;

            // Regex to check email format
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                var emailErrorModal = new bootstrap.Modal(document.getElementById('emailErrorModal'));
                emailErrorModal.show();
                return;
            }

            if (password !== confirmPassword) {
                var passwordMismatchModal = new bootstrap.Modal(document.getElementById('passwordMismatchModal'));
                passwordMismatchModal.show();
            } else {
                document.getElementById("signupForm").submit();
            }
        }
    </script>
</body>
</html>
