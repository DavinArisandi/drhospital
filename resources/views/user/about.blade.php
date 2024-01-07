<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>DR - Hospital</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="../assets/img/logo2.png" alt="logo" style="max-width: 150px; max-height: 75px;" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
                        </li>

                        @if(Route::has('login'))

                        @auth

                        <li class="nav-item">
                            <a class="nav-link" style="background-color:#87CEEB; color:white;" href="{{url('myappointment')}}">My Appointment</a>
                        </li>

                        <x-app-layout>
                        </x-app-layout>

                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>

                        @endauth

                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/lobby.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">About Us</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Chat</span> dengan dokter</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>DR</span>-Health Protection</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 wow zoomIn">
                    <div class="card-service">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>DR</span>-Health Pharmacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
                    <div class="text-lg">
                        <p>Selamat datang di DR - Hospital, sebuah pusat kesehatan yang didedikasikan untuk memberikan layanan kesehatan berkualitas tinggi dan peduli terhadap masyarakat. Sejak didirikan, kami telah menjadi mitra utama dalam perawatan kesehatan, mendedikasikan diri untuk menyediakan pelayanan terbaik dengan standar tertinggi.</p>
                        <p>Visi kami adalah menciptakan masyarakat yang sehat dan bahagia melalui layanan medis terdepan, teknologi canggih, dan perawatan yang bersifat holistik. Kami menghadirkan tim profesional medis dan paramedis terbaik yang berkomitmen untuk memberikan pelayanan perawatan yang personal dan memenuhi kebutuhan unik setiap pasien.</p>
                        <p>DR - Hospital memiliki fasilitas modern dan dilengkapi dengan peralatan medis terkini. Tim medis kami terdiri dari dokter-dokter berpengalaman, perawat-perawat berdedikasi, dan staf pendukung lainnya yang bekerja bersama untuk memberikan pengalaman perawatan yang terbaik bagi setiap pasien.</p>
                        <p>Selain fokus pada pelayanan medis, kami juga berkomitmen untuk berperan aktif dalam meningkatkan pemahaman masyarakat tentang kesehatan dan pencegahan penyakit. Program edukasi kesehatan kami bertujuan untuk memberdayakan masyarakat dengan pengetahuan yang diperlukan untuk hidup sehat dan berdaya tahan.</p>
                        <p>Kami percaya bahwa kesehatan adalah aset berharga, dan kami berdedikasi untuk menjadi mitra tepercaya dalam perjalanan kesehatan Anda. DR - Hospital, mengutamakan keamanan, kepedulian, dan inovasi dalam memberikan pelayanan kesehatan yang berkelas dunia.</p>
                        <p>Terima kasih atas kepercayaan Anda kepada kami. Bersama-sama, kita membangun masyarakat yang lebih sehat dan berkualitas. Selamat datang di DR - Hospital, tempat di mana perawatan kesehatan bertemu dengan kepedulian.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.dokter')

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>DR - Hospital</h5>
                    <p class="text-grey mb-4">Pusat kesehatan terdepan dengan layanan berkualitas tinggi. Tim medis profesional, fasilitas modern, dan teknologi terkini. Komitmen kami untuk keamanan pasien dan kenyamanan. Aktif dalam edukasi kesehatan masyarakat. Kesehatan dan kepedulian bertemu di DR - Hospital.</p>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{url('doctors')}}">Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Jl. Phh. Mustofa No.23, Neglasari, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124</p>
                    <a href="#" class="footer-link">+62 xxx-xxxx-xxxx</a>
                    <a href="#" class="footer-link">drhospital@gmail.com</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="https://id-id.facebook.com/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="https://www.instagram.com/" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="https://www.linkedin.com/" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2023 <a href="https://macodeid.com/" target="_blank">152022223 Rakha & 152022246 Muhammad Davin</a>. All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>
</html>