<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your other head elements here -->
    <style>
        .sidebar {
            border-right: 2px solid white;
            overflow-y: auto; /* Add this line to enable vertical scrolling */
        }

        /* Add a new class to style the border at the bottom */
        .sidebar-border-bottom {
            border-bottom: 2px solid white;
            margin-bottom: 0; /* Remove the default margin-bottom to avoid extra spacing */
        }
    </style>
</head>
<body>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/drlogo.png" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/drlogo-mini.png" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="admin/assets/images/faces/default.jpg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal" style="color:white;">Admin</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('view_tambah_dokter')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Tambah Dokter</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('show_janji')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Appointment</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('show_dokter')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">List Dokter</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Add your other body content here -->

</body>
</html>