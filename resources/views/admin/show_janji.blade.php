<!DOCTYPE html>
<html lang="en">
<head>
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

        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="mt-5">
                <table class="table table-striped table-bordered text-white" style="margin-left: -70px;">
                    <thead class="thead-dark">
                        <tr style="background-color: #333;">
                            <th style="padding: 20px; color: white;">Nama Pasien</th>
                            <th style="padding: 20px; color: white;">Email</th>
                            <th style="padding: 20px; color: white;">Nomor Telepon</th>
                            <th style="padding: 20px; color: white;">Nama Dokter</th>
                            <th style="padding: 20px; color: white;">Date</th>
                            <th style="padding: 20px; color: white;">Pesan</th>
                            <th style="padding: 20px; color: white;">Status</th>
                            <th style="padding: 20px; color: white;">Approved</th>
                            <th style="padding: 20px; color: white;">Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $appoint)
                        <tr style="color: black">
                            <td>{{$appoint->name}}</td>
                            <td>{{$appoint->email}}</td>
                            <td>{{$appoint->no_hp}}</td>
                            <td>{{$appoint->dokter}}</td>
                            <td>{{$appoint->date}}</td>
                            <td>{{$appoint->pesan}}</td>
                            <td>{{$appoint->status}}</td>
                            <td>
                                <a class="btn btn-success" href="#" onclick="confirmAction('{{url('approved',$appoint->id)}}', 'Setuju')">Setuju</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="#" onclick="confirmAction('{{url('canceled',$appoint->id)}}', 'Batal')">Batal</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:white;" id="confirmationModalLabel">Konfirmasi</h5>
                </div>
                <div class="modal-body" id="confirmationMessage"></div>
                <div class="modal-footer">
                    <button style="color:white;" type="button" class="btn btn-secondary" onclick="cancelAction()">Batal</button>
                    <a href="#" id="confirmActionLink" class="btn btn-primary" onclick="performAction()">Ya</a>
                </div>
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

    @include('admin.script')
</body>
</html>