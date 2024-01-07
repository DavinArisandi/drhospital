<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
        select,
        .btn {
            background-color: black;
            color: white;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
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
              <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{url('upload_dokter')}}" method="POST" enctype="multipart/form-data" onsubmit="showSuccessNotification()">
                  @csrf
                  <div style="padding: 15px;">
                  <label>Nama Dokter</label>
                  <input type="text" style="color:white;" name="name" placeholder="Tuliskan Nama Dokter" required="">
                  </div>
                  <div style="padding: 15px;">
                  <label>Nomor Telepon</label>
                  <input type="number" style="color:white;" name="no_hp" placeholder="Tuliskan Nomor Telepon" required="">
                  </div>
                  <div style="padding: 15px;">
                    <label>Spesialisasi</label>
                    <select name="spesialisasi" style="color: white; background-color:black; width: 200px;" required="">
                        <option value="">--Pilih--</option>
                        <option value="Dokter Umum">Dokter Umum</option>
                        <option value="Dokter Gigi">Dokter Gigi</option>
                        <option value="Dokter Penyakit Dalam">Dokter Penyakit Dalam</option>
                        <option value="Dokter Mata">Dokter Mata</option>
                    </select>
                  </div>
                  <div style="padding: 15px;">
                    <label>Nomor Ruangan</label>
                    <input type="number" style="color:white;" name="ruangan" placeholder="Tuliskan Nomor Ruangan" required="">
                  </div>
                  <div style="padding: 15px;">
                    <label>Foto</label>
                    <input type="file" name="foto" required="">
                  </div>
                  <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success" style="background-color:#4CAF50;">
                  </div>
                  <!-- Add this after the closing tag of the form -->
                  <div class="modal fade" id="successNotification" tabindex="-1" role="dialog" aria-labelledby="successNotificationLabel" aria-hidden="true" data-backdrop="static">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-body" id="successMessage" style="color: white;">
                                  &#10004; Berhasil Menambahkan Dokter
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>