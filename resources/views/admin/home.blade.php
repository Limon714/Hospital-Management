{{-- <x-app-layout>
 <h1> Admin Dashboard</h1>
</x-app-layout> --}}


    @include('admin.header');
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar');
        <!-- partial -->
            @include('admin.body');
        <!-- main-panel ends -->
     @include('admin.footer');
