<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iK4fsJqXciIZ6LJ3/JN9U2I/+CY5vz" crossorigin="anonymous">
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
        label
        {
            display:inline-block;
            width: 200px;
        }
        body, .container-scroller {
            background-color: white;
            color: black;
        }
        input[type="text"],
        input[type="number"],
        .btn {
            background-color: black;
            color: white;
        }
    </style>
    @include('admin.css')
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5V0NQq1sM5V5dHJGxRlaLw7iYtD3Bf8OZ1b5dbdS9/DPjA8tQ5aFkwMRT5cZl3/A" crossorigin="anonymous"></script>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding: 20px;">
                <h2 style="font-size: 32px; margin-bottom:30px;">UPDATE DETAIL</h2>
                <form id="updateForm" action="{{ url('edit_dokter', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="display: flex; align-items: center;">
                                <label style="width: 150px; margin-right: 20px;">Nama Dokter</label>
                                <input type="text" style="color:white;" class="form-control" name="name" value="{{ $data->name }}">
                            </div>
                            <div class="form-group" style="display: flex; align-items: center;">
                                <label style="width: 150px; margin-right: 20px;">Nomor Telepon</label>
                                <input type="text" style="color:white;" class="form-control" name="no_hp" value="{{ $data->no_hp }}">
                            </div>
                            <div class="form-group" style="display: flex; align-items: center;">
                                <label style="width: 150px; margin-right: 20px;">Spesialisasi</label>
                                <input type="text" style="color:white;" class="form-control" name="spesialisasi" value="{{ $data->spesialisasi }}">
                            </div>
                            <div class="form-group" style="display: flex; align-items: center;">
                                <label style="width: 150px; margin-right: 20px;">Ruangan</label>
                                <input type="text" style="color:white;" class="form-control" name="ruangan" value="{{ $data->ruangan }}">
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="form-group">
                                <label>Foto Lama</label>
                                <img height="150" width="150" src="fotodokter/{{ $data->foto }}">
                            </div>
                            <div class="form-group text-center">
                                <label>Ganti Foto</label>
                                <input style="color:black;" type="file" class="form-control" name="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-success" style="background-color:#4CAF50;" onclick="confirmUpdate()" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Confirmation -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel" style="color:white;">Konfirmasi Update</h5>
                </div>
                <div class="modal-body" style="color:white">
                    Apakah Anda yakin ingin update data ini?
                </div>
                <div class="modal-footer">
                    <button style="color:white;" type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cancelAction()">Batal</button>
                    <button type="button" class="btn btn-success" style="background-color:#4CAF50;" onclick="submitUpdateForm()">Ya, Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Success Notification -->
    <div class="modal fade" id="successNotificationModal" tabindex="-1" role="dialog" aria-labelledby="successNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="color:white;">
                    &#10004; Data berhasil diupdate!
                </div>
            </div>
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>