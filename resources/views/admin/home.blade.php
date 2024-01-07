<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
  </div>
  <div class="d-flex align-items-center justify-content-between">
    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
    <button id="bannerClose" class="btn border-0 p-0">
      <i class="mdi mdi-close text-white me-0"></i>
    </button>
  </div>
      <!-- partial:partials/_sidebar.html -->
      
       @include('admin.sidebar')

      <!-- partial -->
      
       @include('admin.navbar')

        <!-- partial -->
        
        @include('admin.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>