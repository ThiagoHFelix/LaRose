@extends('Layouts/master')

@section('header')
<!--<link href="{{ asset('/css/modules/application/login.css') }}" rel="stylesheet"> -->
@endsection

@section('title','Home')

@section('conteiner')


<!-- Page Wrapper -->
<div id="wrapper">

    @include('Layouts/sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class=" bg-lightgray d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

           @include('Layouts/topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid ">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; LaRose 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


@endsection