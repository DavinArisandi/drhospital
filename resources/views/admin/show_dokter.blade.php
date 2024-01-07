<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body style="background-color: white;">
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

        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Main Content -->
        <div class="container-fluid page-body-wrapper">
            <div class="mt-5">
                <table class="table table-striped table-bordered text-white" style="margin-top: 20px;">
                    <thead class="thead-dark">
                    <tr style="background-color: #333;">
                        <th style="padding: 20px; color: white;">Nama Dokter</th>
                        <th style="padding: 20px; color: white;">Nomor Telepon</th>
                        <th style="padding: 20px; color: white;">Spesialisasi</th>
                        <th style="padding: 20px; color: white;">Ruangan</th>
                        <th style="padding: 20px; color: white;">Foto</th>
                        <th style="padding: 20px; color: white;">Delete</th>
                        <th style="padding: 20px; color: white;">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dokter)
                        <tr>
                            <td style="color: black; padding: 20px;">{{$dokter->name}}</td>
                            <td style="color: black; padding: 20px;">{{$dokter->no_hp}}</td>
                            <td style="color: black; padding: 20px;">{{$dokter->spesialisasi}}</td>
                            <td style="color: black; padding: 20px;">{{$dokter->ruangan}}</td>
                            <td style="padding: 30px;"><img class="img-fluid" style="width: 100px; height: 100px; border-radius: 0;" src="fotodokter/{{$dokter->foto}}" alt="{{$dokter->name}}"></td>
                            <td style="padding: 20px;">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmationModal{{$dokter->id}}">Delete</button>
                            </td>
                            <td style="padding: 20px;">
                                <a class="btn btn-primary" href="{{url('update_dokter',$dokter->id)}}">Update</a>
                            </td>
                        </tr>
                        
                        <!-- Modal for Delete Confirmation -->
                        <div class="modal fade" id="deleteConfirmationModal{{$dokter->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel{{$dokter->id}}" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color:white" id="deleteConfirmationModalLabel{{$dokter->id}}">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data dokter ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button style="color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{url('delete_dokter',$dokter->id)}}" class="btn btn-danger"  onclick="performAction()">Ya, Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successNotification" tabindex="-1" role="dialog" aria-labelledby="successNotificationLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" id="successMessage" style="color: white;">
                    &#10004; Tindakan berhasil dilakukan!
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>