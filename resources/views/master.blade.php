<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->

    @include('templates.header')

    <div class="wrapper">
        <div class="main">
            @yield('content')
        </div>
        @include('templates.footer')
    </div>
    <!-- ./wrapper -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                Swal.fire({
                    icon: 'error',
                    title: "Ooops",
                    text: "{{ $error }}",
                })
            @endforeach
        @endif
        </script>
        @stack('js')
    <!-- jQuery -->
    <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets') }}/dist/js/demo.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="sweetalert2.min.js"></script> --}}
    <script>
        // Swal.bindClickHandler()

        // Swal.mixin({
        // toast: true,
        // }).bindClickHandler('data-swal-toast-template')

        function logout() {
            Swal.fire({
                template: '#logout',
            }).then((result)=>{
                if (result.isConfirmed) {
                    window.location = "{{ route('logout') }}"
                    // $.ajax({
                    //     type: 'get',
                    //     url: "",
                    // })
                }
            })
        }

    </script>
</body>

</html>
