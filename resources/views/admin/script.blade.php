<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your other scripts -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>

<!-- Other custom scripts -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<script src="admin/assets/js/dashboard.js"></script>

<!-- Bootstrap JavaScript and jQuery CDN links -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
        function confirmAction(url, action) {
            $('#confirmationMessage').text('Apakah Anda yakin akan ' + action + ' tindakan ini?');
            $('#confirmActionLink').attr('href', url);
            $('#confirmationModal').modal('show');
        }

        function cancelAction() {
            $('#confirmationModal').modal('hide');
        }

        function performAction() {
        $('#confirmationModal').modal('hide');
        $('#successNotification').modal('show');
        }

        function showSuccessNotification() {
        $('#successNotification').modal('show');
        }

        function confirmUpdate() {
            $('#confirmationModal').modal('show');
        }

        function submitUpdateForm() {
            $('#confirmationModal').modal('show');
            $('#successNotificationModal').modal('show');
            $('#updateForm').submit();
        }
</script>