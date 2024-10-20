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

        @media (min-width: 768px) {
            .mt-custom {
                margin-top: 100px
            }
        }

        @media (max-width: 768px) {
            .mt-custom {
                margin-top: 100px;
                padding: 20px;
            }

            .login-card {
                padding: 20px;
            }
        }

        .stylish-modal {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); 
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
    @include('partials.navbar')

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        @if(session('success'))
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                    <div class="modal-content border-0 shadow-lg rounded">
                        <div class="modal-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="modal-title fw-bold" id="successModalLabel">Registrasi Berhasil!</h5>
                            <div class="mb-3"></div>
                            <p>{{ session('success') }}</p>
                            <a href="/login" class="btn btn-success w-100 mt-3">Oke</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                });
            </script>
        @endif
    

        <div class="login-card mt-custom">
            <div class="text-center mb-4">
                <img src="img/logo.png" alt="Logo">
                <h2>Buat Akun Baru di SPK Kontrasepsi</h2>
            </div>

            <form id="signupForm" action="/registration" method="POST" onsubmit="return checkForm()">
                @csrf
                <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" required id="fullnameInput">
                <input type="text" name="username" class="form-control" placeholder="Username" required id="usernameInput">
                <input type="text" name="phone_number" class="form-control" placeholder="Masukkan Nomor HP (+62)" id="hpInput">
                <input type="password" name="password" class="form-control" placeholder="Password" required id="passwordInput">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required id="confirmPasswordInput">
                
                <div class="form-check d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                    <label class="form-check-label ms-1" for="showPassword">Tampilkan Password</label>
                </div>
                <button type="submit" class="login-btn">Daftar</button>
            </form>        

            <div class="footer-link">
                <p>Sudah punya akun? <a href="/login">Masuk di sini</a></p>
            </div>
        </div>

        <div class="modal fade" id="usernameErrorModal" tabindex="-1" aria-labelledby="usernameErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                <div class="modal-content border-0 shadow-lg rounded">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="modal-title fw-bold" id="usernameErrorLabel">WARNING!</h5>
                        <p>Username harus terdiri dari kombinasi huruf dan angka.</p>
                        <p>Contoh : Agus06</p>
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="hpErrorModal" tabindex="-1" aria-labelledby="hpErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                <div class="modal-content border-0 shadow-lg rounded">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="modal-title fw-bold" id="hpErrorLabel">Warning!</h5>
                        <p>Format nomor HP yang Anda masukkan tidak valid. Silakan periksa kembali.</p>
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="passwordMismatchModal" tabindex="-1" aria-labelledby="passwordMismatchLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                <div class="modal-content border-0 shadow-lg rounded">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="modal-title fw-bold" id="passwordMismatchLabel">WARNING!</h5>
                        <p>Password dan Konfirmasi Password tidak cocok. Silakan coba lagi.</p>
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="passwordPatternErrorModal" tabindex="-1" aria-labelledby="passwordPatternErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                <div class="modal-content border-0 shadow-lg rounded">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="modal-title fw-bold" id="passwordPatternErrorLabel">WARNING!</h5>
                        <p>Password harus terdiri dari huruf, angka dan simbol.</p>
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="passwordLengthErrorModal" tabindex="-1" aria-labelledby="passwordLengthErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="transform: translateX(-1.6%);">
                <div class="modal-content border-0 shadow-lg rounded">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="modal-title fw-bold" id="passwordLengthErrorLabel">Warning!</h5>
                        <p>Panjang password harus minimal 5 karakter. Silakan coba lagi.</p>
                        <button type="button" class="btn btn-danger w-100 mt-3" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordFields = ['passwordInput', 'confirmPasswordInput'].map(id => document.getElementById(id));
    
            passwordFields.forEach(field => {
                field.type = field.type === "password" ? "text" : "password";
            });
        }

        function checkForm() {
            const hpInput = document.getElementById("hpInput");
            const passwordInput = document.getElementById("passwordInput");
            const confirmPasswordInput = document.getElementById("confirmPasswordInput");
            const usernameInput = document.getElementById("usernameInput");

            const formattedPhone = formatPhoneNumber(hpInput.value.trim());
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const username = usernameInput.value;

            if (!isValidUsername(username)) {
                return displayModal('usernameErrorModal');
            }

            if (!isValidPhoneNumber(formattedPhone)) {
                return displayModal('hpErrorModal');
            }

            if (!isValidPassword(password, confirmPassword)) {
                return false;
            }

            hpInput.value = formattedPhone;

            return true;
        }
    
        function formatPhoneNumber(hp) {
            if (hp.startsWith("0")) {
                return "+62" + hp.slice(1);
            } else if (hp.startsWith("62") && !hp.startsWith("+62")) {
                return "+" + hp;
            }
            return hp;
        }
    
        function isValidPhoneNumber(hp) {
            const phonePattern = /^\+628\d{8,11}$/;
            return phonePattern.test(hp);
        }
    
        function isValidPassword(password, confirmPassword) {
            if (password.length < 5) {
                return displayModal('passwordLengthErrorModal');
            }
            if (password !== confirmPassword) {
                return displayModal('passwordMismatchModal');
            }
    
            const passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*\(\)\-_])[a-zA-Z0-9!@#\$%\^&\*\(\)\-_]+$/;
            if (!passwordPattern.test(password)) {
                return displayModal('passwordPatternErrorModal');
            }
    
            return true;
        }
    
        function isValidUsername(username) {
            const usernamePattern = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/;
            return usernamePattern.test(username);
        }

        function displayModal(modalId) {
            const modalElement = document.getElementById(modalId);
            if (modalElement) {
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            }
            return false;
        }
    </script>    
    
</body>
</html>
