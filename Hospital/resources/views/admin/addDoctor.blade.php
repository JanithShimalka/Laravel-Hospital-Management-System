
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        label{
            display:inline-block;
            width: 200px;
        }
        
    </style>
  </head>
  <body>
    <div class="container-scroller">
        

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            

            <div class="container" style="margin-top: 40px">

                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    
                    {{session()->get('message')}}

                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                </div>

            @endif

                <form action="{{url('uploadDoctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="doctorname" class="form-label">Doctor Name </label>
                      <input type="text" style="color:black" name="name" placeholder="Enter Doctor's Name" required>
                      
                    </div>
                    <div class="mb-3">
                        <label for="doctorphone" class="form-label">Phone Number </label>
                        <input type="number" style="color:black" name="phone" placeholder="Enter Phone Number" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="doctorname" class="form-label">Speciality</label>
                        <select style="color:black" name= "speciality" required>
                            <option value="">-- Select Speciality --</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="doctorname" class="form-label">Room Number </label>
                        <input type="number" style="color:black" name="room" placeholder="Enter Room Number" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="doctorname" class="form-label">Profile Picture </label>
                        <input type="file" style="color:white" name="file" required >
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    <!-- container-scroller -->
   @include('admin.js');
  </body>
</html>