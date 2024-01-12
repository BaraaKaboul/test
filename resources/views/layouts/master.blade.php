<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.head')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

@include('layouts.main-header')


@include('layouts.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if(Auth::check())
                            @if(auth()->user()->role == 0)
                                <h1 class="m-0">Home Of Admin</h1>
                            @else
                                <h1 class="m-0">Home Of User</h1>
                            @endif
                        @else
                            <h1 class="m-0">Home Of Visitor</h1>
                        @endif
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="
                            @guest()
                                {{$page = '/'}}
                                @else

                            @endguest
                            ">Home</a></li>
                            @if(Auth::check())
                                @if(auth()->user()->role == 0)
                                    <li class="breadcrumb-item active">Admin Page</li>
                                @else
                                    <li class="breadcrumb-item active">User Page</li>
                                @endif
                            @else
                                <li class="breadcrumb-item active">Visitor Page</li>
                            @endif
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->



                @yield('content')




                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">
                        <!-- MAP & BOX PANE -->



                        <!-- /.card -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- DIRECT CHAT -->



                                <!--/.direct-chat -->
                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <!-- USERS LIST -->



                                <!--/.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->



                        <!-- /.card -->
                    </div>
                    <!-- /.col -->




                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

@include('layouts.footer')
</div>
<!-- ./wrapper -->

@include('layouts.footer-scripts')
</body>
</html>
