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
        <th>Date</th>
        <th>Message</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
      @foreach ($appointment as $d)
      <tr>
        <td>{{$d->name}}</td>
        <td>{{$d->phone}}</td>
        <td>{{$d->date}}</td>
        <td>{{$d->message}}</td>
        <td>{{$d->status}}</td>
        <td><a class="btn btn-success" href="{{url('approve',$d->id)}}">Approve</a>
            <a class="btn btn-danger" href="{{url('cancel',$d->id)}}">Cancel</a></td>
      </tr>
      @endforeach
    </table>



  <!-- main-panel ends -->
@include('admin.footer');
