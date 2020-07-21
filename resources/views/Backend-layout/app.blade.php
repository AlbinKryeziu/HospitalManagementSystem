@include('Backend-layout.inc-parts.header')

<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Page Wrapper -->
  <div class="wrapper">

    @include('Backend-layout.inc-parts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-header">
      <div class="container-fluid">

       @include('Backend-layout.inc-parts.navbar')
  

        <!-- Begin Page Content -->
      
      <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">@yield('page-title')</h1>
         @yield('content')
        </div>
        <!-- /.container-fluid -->

      
          </div>
          <!-- ./col -->
        </div>
</div>
  
      <!-- End of Main Content -->

      
      @include('backend-layout.inc-parts.footer')