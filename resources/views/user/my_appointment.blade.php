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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
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

<div class="container" style="padding:70px;">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nama Dokter</th>
                <th>Date</th>
                <th>Pesan</th>
                <th>Status</th>
                <th>Batalkan Perjanjian</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appoint as $appoints)
            <tr>
                <td>{{$appoints->dokter}}</td>
                <td>{{$appoints->date}}</td>
                <td>{{$appoints->pesan}}</td>
                <td>{{$appoints->status}}</td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan Janji?')" href="{{url('batalkan_janji',$appoints->id)}}">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
</body>
</html>