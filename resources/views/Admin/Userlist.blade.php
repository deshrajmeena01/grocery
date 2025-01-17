@extends('Admin.leyout.Adminmain')

@section('Adminmain')
    
   
    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <div class="container-fluid">        
        <div class="page-title">
            <div class="row">
            <div class="col-12 col-sm-6">
                <h3>User List</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">User List</li>
                </ol>
            </div>
            </div>
        </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">                   
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Start date</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($userdata as $user )
                          <tr>
                              <td>{{$user -> id}}</td>
                              <td>{{$user -> name}}</td>
                              <td>{{$user -> email}}</td>
                              <td>{{$user -> mobile}}</td>
                              <td>{{$user -> created_at}}</td>

                            
                          <td>
                            {{-- <a href="{{ url('editproduct')}}/{{$users->id }}" class="btn btn-primary btn-sm">Edit</a> --}}
                            {{-- <a href="{{ url('DeleteUser')}}/{{$users->id }}" class="btn btn-danger btn-sm">Delete</a> --}}
                        </td>
                        </tr>
                          @endforeach
                           
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
    </div>

@endsection
