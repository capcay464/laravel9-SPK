<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts/_partials/head')

    @yield('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        @include('layouts/_partials/sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                @include('layouts/_partials/topbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
                        
                    </div>

                    <!-- Content Row -->
            
                    @yield('content')

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts/_partials/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika anda ingin keluar sekarang</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @yield('js')
    
</body>

</html>