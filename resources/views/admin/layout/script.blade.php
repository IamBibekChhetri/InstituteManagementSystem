

<script src="{{asset('public/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('public/assets/javascript/pages/toastr.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/select2/js/select2.min.js')}}"></script>
<script src="{{asset('public/assets/javascript/theme.min.js')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-116692175-1');

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showCloseButton: false,
        showConfirmButton: false,
        timer: 3000
    });

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
            });
</script>

<script src="{{asset('public/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/javascript/pages/dataTables.bootstrap.js')}}"></script>

<script>
    $(function() {
        var dataTable = $('#dataTables').DataTable({
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'pdf'
                },
                {
                    extend: 'print'
                },
                {
                    extend: 'excel'
                },
                {
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                }, {
                    extend: 'colvis'
                }
            ],
            autoWidth: false
        });
    });
</script>
        <script>
        $(function() {
            $('#stacked-menu .menu .menu-item#dashboard').addClass('has-active')
            $('#stacked-menu .menu .menu-item#manageVehicles .menu .menu-item#vehicleTypes').addClass(
                'has-active');
        });
    </script>