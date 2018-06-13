<!-- jquery -->
<script src="{{asset('assets/user/js/jquery.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/user/js/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/user/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/user/js/jquery.magnific-popup.js')}}"></script>
<!-- way poin js-->
<script src="{{asset('assets/user/js/waypoints.min.js')}}"></script>
<!-- wow js-->
<script src="{{asset('assets/user/js/wow.min.js')}}"></script>
<!-- bootstrap datetimepicker -->
<script src="{{asset('assets/user/js/bootstrap-datepicker.min.js')}}"></script>
<!-- counterup js-->
<script src="{{asset('assets/user/js/jquery.counterup.min.js')}}"></script>


<!-- main -->
<script src="{{asset('assets/user/js/main.js')}}"></script>
@if (session('success'))
<script type="text/javascript">
        $(document).ready(function(){
            swal("Success!", "{{ session('success') }}", "success");
        });
</script>
@endif

@if (session('alert'))
<script type="text/javascript">
        $(document).ready(function(){
            swal("Sorry!", "{{ session('alert') }}", "error");
        });
</script>
@endif

@stack('scripts')
