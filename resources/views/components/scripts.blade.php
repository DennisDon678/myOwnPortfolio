<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/aos.js"></script>
<script src="./assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(Session::has('message'))
<script>
    Swal.fire(
        'Good job!', 
        '{{Session::get('message')}}', 
        'success'
    )
</script>
@endif