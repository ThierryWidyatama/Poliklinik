<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Poliklinik</title>
    <!-- Menggunakan Bootstrap CDN dan Font Awesome untuk icon -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        /* Gambar Latar Belakang dengan Efek Parallax */
        .hero-section {
            background: url('<?= base_url('assets/dist/img/medic.jpg'); ?>') center center no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background-attachment: fixed;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-section h1, .hero-section p {
            color: white;
            z-index: 1;
            position: relative;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-hero {
            font-size: 1.2rem;
            padding: 10px 30px;
            margin-top: 20px;
            border-radius: 30px;
            z-index: 1;
            position: relative;
        }

        .section {
            padding: 60px 0;
        }

        .features-section {
            background-color: #f8f9fa;
        }

        .features-section .feature {
            text-align: center;
            padding: 20px;
        }

        .features-section .feature i {
            font-size: 3rem;
            color: #007bff;
        }

        .features-section .feature h4 {
            margin-top: 20px;
            font-weight: bold;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Animasi fade-in untuk konten */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Poliklinik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item">
                        <a href="<?= site_url('login') ?>" class="btn btn-primary btn-custom">Login</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="<?= site_url('pasien/register') ?>" class="btn btn-outline-primary btn-custom">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section fade-in">
        <div class="container">
            <h1>Selamat Datang di Poliklinik Kami</h1>
            <p>Solusi Kesehatan Terpercaya di Tangan Anda</p>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features" class="features-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 feature">
                    <i class="fas fa-user-md"></i>
                    <h4>Dokter Berpengalaman</h4>
                    <p>Kami memiliki tim dokter berpengalaman di bidangnya.</p>
                </div>
                <div class="col-md-4 feature">
                    <i class="fas fa-hospital"></i>
                    <h4>Fasilitas Lengkap</h4>
                    <p>Dilengkapi dengan fasilitas modern untuk kenyamanan Anda.</p>
                </div>
                <div class="col-md-4 feature">
                    <i class="fas fa-clock"></i>
                    <h4>Pelayanan Cepat</h4>
                    <p>Proses yang cepat untuk kebutuhan kesehatan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Poliklinik. All Rights Reserved.</p>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
