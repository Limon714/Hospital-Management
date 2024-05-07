@include('admin.header');
<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar');
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_navbar.html -->
      @include('admin.navbar');
  <!-- partial -->
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
      margin-top: 100px;
      margin-bottom: 100px;

    }

    td, th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 3px;
      height: 10px !important;
    }

    tr:nth-child(even) {
      background-color: #61694d;
    }
    </style>
    </head>
    <body>



    <table align="center">
      <tr>
        <th>Doctor Name</th>
        <th>Phone</th>
        <th>Speciality</th>
        <th>Room</th>
        <th>image</th>
        <th>Action</th>

      </tr>
      @foreach ($data as $d)
      <tr>
        <td>{{$d->name}}</td>
        <td>{{$d->phone}}</td>
        <td>{{$d->speciality}}</td>
        <td>{{$d->room}}</td>
        <td><img height="100" width="100" src="doctorImage/{{$d->image}}" alt=""> </td>

        <td><a class="btn btn-primary" href="{{url('update',$d->id)}}">Update</a>
            <a class="btn btn-danger" href="{{url('delete',$d->id)}}">Delete</a></td>
      </tr>
      @endforeach
    </table>



  <!-- main-panel ends -->
@include('admin.footer');
