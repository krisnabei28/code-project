<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Kontrasepsi Pasca Melahirkan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2C3E50, #3498DB);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            padding-top: 20px;
        }

        .container {
            max-width: 1200px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }

        /* Sidebar Menu */
        .sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .sidebar h3 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
            color: #2C3E50;
        }

        .sidebar .nav-link {
            font-size: 16px;
            background-color: #3498DB;
            color: white;
            text-align: center;
            border-radius: 8px;
            padding: 12px;
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        .sidebar .nav-link.active {
            background-color: #2C3E50;
        }

        .sidebar .nav-link:hover {
            background-color: #2980b9;
        }

        /* Main Content */
        .content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        /* Form Section */
        .form-section {
            margin-bottom: 20px;
        }

        .form-section label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: bold;
        }

        .form-select {
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .form-select:focus {
            border-color: #3498DB;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .btn-submit {
            background-color: #3498DB;
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        /* Table Section */
        .table-section {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: left;
        }

        table th, table td {
            padding: 15px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #3498DB;
            color: white;
        }

        /* Header & Logo */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo img {
            max-width: 150px;
        }

        .header .welcome-text {
            font-weight: bold;
            color: #2C3E50;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .content {
                padding: 20px;
            }

            .sidebar {
                margin-bottom: 20px;
            }

            .btn-submit {
                font-size: 16px;
            }

            .form-section {
                margin-bottom: 15px;
            }

            .table-section {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="container mb-4">
        <div class="header">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <div class="welcome-text">
                Selamat Datang xxxx
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Sidebar Menu on the Left -->
            <div class="col-md-3">
                <div class="sidebar">
                    <h3>Menu</h3>
                    <a href="#" class="nav-link active" id="link-main">Halaman Utama</a>
                    <a href="#" class="nav-link" id="link-contraception">Alat Kontrasepsi</a>
                    <a href="/" class="nav-link">Logout</a>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="col-md-9">
                <div class="content" id="main-content">
                    <!-- Default Main Page Content -->
                    <div id="page-main">
                        <h4>Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi Pasca Melahirkan</h4>
                        <p>Isilah Pertanyaan di bawah ini sesuai dengan kondisi Anda!</p>
                        <form>
                            <div class="form-section">
                                <label for="usia">1. Usia</label>
                                <select class="form-select" id="usia" required>
                                    <option value="< 20 Tahun">&lt; 20 Tahun</option>
                                    <option value="20 - 30 Tahun">20 - 30 Tahun</option>
                                    <option value="> 30 Tahun">&gt; 30 Tahun</option>
                                </select>
                            </div>

                            <div class="form-section">
                                <label for="jumlahAnak">2. Jumlah Anak</label>
                                <select class="form-select" id="jumlahAnak" required>
                                    <option value="1-3 Orang">1-3 Orang</option>
                                    <option value="> 3 Orang">&gt; 3 Orang</option>
                                </select>
                            </div>

                            <div class="form-section">
                                <label for="usiaAnak">3. Usia Anak Terakhir</label>
                                <select class="form-select" id="usiaAnak" required>
                                    <option value="< 6 Bulan">&lt; 6 Bulan</option>
                                    <option value="6 Bulan - 1 Tahun">6 Bulan - 1 Tahun</option>
                                    <option value="> 1 Tahun">&gt; 1 Tahun</option>
                                </select>
                            </div>

                            <div class="form-section">
                                <label for="tekananDarah">4. Tekanan Darah</label>
                                <select class="form-select" id="tekananDarah" required>
                                    <option value="Tinggi">Tinggi</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Rendah">Rendah</option>
                                </select>
                            </div>

                            <div class="form-section">
                                <label for="beratBadan">5. Berat Badan</label>
                                <select class="form-select" id="beratBadan" required>
                                    <option value="45 - 70 Kg">45 - 70 Kg</option>
                                    <option value="> 70 Kg">&gt; 70 Kg</option>
                                </select>
                            </div>

                            <button type="submit" class="btn-submit">Kirim</button>
                        </form>
                    </div>

                    <!-- Alat Kontrasepsi Page Content -->
                    <div id="page-contraception" style="display: none;">
                        <h4>Informasi Alat Kontrasepsi</h4>
                        <div class="table-section">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Alat Kontrasepsi</th>
                                        <th>Deskripsi</th>
                                        <th>Kelebihan</th>
                                        <th>Kekurangan</th>
                                        <th>Jangka Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pil KB</td>
                                        <td>Deskripsi alat</td>
                                        <td>Kelebihan alat</td>
                                        <td>Kekurangan alat</td>
                                        <td>1 Tahun</td>
                                    </tr>
                                    <!-- Additional rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Switch between pages
        document.getElementById('link-main').addEventListener('click', function () {
            document.getElementById('page-main').style.display = 'block';
            document.getElementById('page-contraception').style.display = 'none';
            this.classList.add('active');
            document.getElementById('link-contraception').classList.remove('active');
        });

        document.getElementById('link-contraception').addEventListener('click', function () {
            document.getElementById('page-main').style.display = 'none';
            document.getElementById('page-contraception').style.display = 'block';
            this.classList.add('active');
            document.getElementById('link-main').classList.remove('active');
        });
    </script>

</body>
</html>
