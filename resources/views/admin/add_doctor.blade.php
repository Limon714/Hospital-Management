@include('admin.header');
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
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="label" style="padding: 15px">
                <label>Doctor Name</label>
                <input style="color: black" type="text" name="name" id="" placeholder="New Doctor Name" required>
            </div>

            <div class="label" style="padding: 15px">
                <label>Phone Number</label>
                <input style="color: black" type="text" name="phone" id="" placeholder="New Doctor Name"required>
            </div>

            <div class="label" style="padding: 15px">
                <label>Speciality</label>
               <select name="speciality" id="" style="color: black;width:200px;" required>
                <option value="skin">Skin</option>
                <option value="heart">Heart</option>
                <option value="eye">Eye</option>
                <option value="nose">Nose</option>
               </select>
            </div>

            <div class="label" style="padding: 15px">
                <label>Room Number</label>
                <input style="color: black" type="text" name="room" id="" placeholder="Enter Room Number" required>
            </div>

            <div class="label" style="padding: 15px">

                <input style="color: black" type="file" name="file" required>
            </div>

            <div class="label" style="padding: 15px">

                <input type="submit" name="" class="btn btn-success" required>
            </div>


        </form>
    </div>
  </div>

  <!-- main-panel ends -->
@include('admin.footer');
