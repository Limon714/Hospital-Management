<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <style>
    label{
        display: inline-block;
        width: 200px;
    }
  </style>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
        </div>
      </div>

<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar');
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_navbar.html -->
      @include('admin.navbar');
  <!-- partial -->

  <div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top: 100px">
        @if (session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> {{session()->get('message')}}</strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"> &nbsp;&nbsp;
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        @endif
        <form action="{{url('update_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="label" style="padding: 15px">
                <label>Doctor Name</label>
                <input style="color: black" type="text" name="name" value="{{$data->name}}">
            </div>

            <div class="label" style="padding: 15px">
                <label>Phone Number</label>
                <input style="color: black" type="number" name="phone" value="{{$data->phone}}">
            </div>

            <div class="label" style="padding: 15px">
                <label>Speciality</label>
                <input style="color: black" type="text" name="speciality" value="{{$data->speciality}}">
            </div>

            <div class="label" style="padding: 15px">
                <label>Room Number</label>
                <input style="color: black" type="text" name="room" value="{{$data->room}}">
            </div>

            <div class="label" style="padding: 15px">


                <img height="150" width="150" src="doctorImage/{{$data->image}}" >

                 <input style="color: black" type="file" name="file">
            </div>

            <div class="label" style="padding: 15px">

                <input type="submit" name="" value="Save" class="btn btn-primary" required>
            </div>


        </form>
    </div>
  </div>



  <!-- main-panel ends -->
@include('admin.footer');
