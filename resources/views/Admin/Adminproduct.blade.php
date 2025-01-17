@extends('Admin.leyout.Adminmain')

@section('Adminmain')
    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Product List</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-2"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#exampleModal"> Add Product </button><br><br>
        <form action="" method="get" >
            
            <button type="submit" name="status" value="" class="btn btn-primary">ALL</button>
            <button type="submit" name="status" value="0" class="btn btn-warning">Pending</button>
            <button type="submit" name="status" value="1" class="btn btn-success">Active</button>
            <button type="submit" name="status" value="2" class="btn btn-danger">Inactive</button>
        </form>


        <!-- Button trigger modal -->

        <!-- Button trigger modal -->

        
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
             <div class="card">
               <div class="card-body">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                              <thead>                                 
                                    <th>ID</th>
                                    <th>ProductName</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Selling</th>
                                    <th>Discount</th>
                                    <th>Rating</th>
                                    <th>description</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                  </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($products as $product)
                                      <tr>
                                          <td>{{ $product->id }}</td>
                                          <td>{{ $product->name }}</td>                                         
                                          <td>{{ $product->category }}</td>
                                        <td><img src="{{url($product->image) }}" alt="{{ $product->name }}" width="50" height="50"> </td>
                                          <td>{{ $product->selling }}</td> 
                                          <td>{{ $product->discount }}</td> 
                                          <td>{{ $product->rating }}</td> 
                                          <td>{{ $product->description }}</td> 
                                          <td>@if($product->status==0)
                                            pending
                                            @elseif ($product->status==1)
                                            Active
                                            @elseif ($product->status==2)
                                            Inactive
                                            @endif
                                          </td>
                                          <td>{{ $product->created_at }}</td>
                                          <td>
                                            {{-- <a href="">Edit</a> --}}
                                            @if($product->status==0)
                                    
                                            <button class="btn btn-success" onclick="active({{$product->id}})">Active</button>

                                        <a href="{{url('InActive')}}/{{$product->id}}">
                                            <button class="btn btn-danger">InActive</button>
                                        </a>
                                            @elseif($product->status==1)
                                            <a href="{{url('InActive')}}/{{$product->id}}">
                                                <button class="btn btn-danger">InActive</button>
                                            </a>
                                            @elseif($product->status==2)
                                                <button class="btn btn-success" onclick="active({{$product->id}})">Active</button>
                                            @endif
                                          {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal" onclick="edit({{ $product->id}})">Edit Product</button> --}}
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal"    onclick="edit({{ $product->id }})">Edit</button>
                                          <a href="{{ url('delete')}}/{{ $product->id }}"class="btn btn-danger btn-sm">Delete</a>
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
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form method="POST" action="javascript:void(0)" enctype="multipart/form-data" class="mt-3" id="Addproduct"> --}}
                        <form method="POST" id="Addproduccccccct" action="javascript:void(0)" enctype="multipart/form-data" class="mt-3" >
                        {{-- @csrf --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name"placeholder="Enter name" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="status" name="category" required>
                                <option value="Fruits">Fruits</option>
                                <option value="Vegetale">Vegetale</option>
                                <option value="Dairy Farms">Dairy Farms</option>
                                <option value="Seafoods">Seafoods</option>
                                <option value="Diet foods">Diet foods</option>
                                <option value="Fast foods">Fast foods</option>
                                <option value="Drink">Drink</option>
                                <option value="Meats">Meats</option>
                                <option value="Fishes">Fishes</option>
                                <option value="DryFoods">DryFoods</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image"name="image"placeholder="Enter img" required accept="product/jpeg, product/png, product/jpg, product/gif">
                        </div>
                        <div class="mb-3">
                            <label for="selling" class="form-label">Product selling</label>
                            <input type="text" class="form-control" id="selling"name="selling"placeholder="Enter selling">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Product discount</label>
                            <input type="text" class="form-control" id="discount"name="discount"placeholder="Enter discount" >
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Product rating</label>
                            <input type="text" class="form-control" id="rating"name="rating"placeholder="Enter rating">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Product description</label>
                            <input type="text" class="form-control" id="description"name="description"placeholder="Enter description" required >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" value="submit"  class="btn btn-primary">Save Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- edit modal --}}
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT Modal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form method="POST" action="javascript:void(0)" enctype="multipart/form-data" class="mt-3" id="Addproduct"> --}}
                        <form method="POST" id="productUpdate" action="{{url('Update')}}" enctype="multipart/form-data" class="mt-3" >
                        @csrf

                        <input type="hidden" class="form-control" id="idfield" name="idfield"placeholder="Enter name" required>
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="updatename" name="updatename"placeholder="Enter name" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="">Select</option>
                                <option value="Fruits">Fruits</option>
                                <option value="Vegetale">Vegetale</option>
                                <option value="Dairy Farms">Dairy Farms</option>
                                <option value="Seafoods">Seafoods</option>
                                <option value="Diet foods">Diet foods</option>
                                <option value="Fast foods">Fast foods</option>
                                <option value="Drink">Drink</option>
                                <option value="Meats">Meats</option>
                                <option value="Fishes">Fishes</option>
                                <option value="DryFoods">DryFoods</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image"name="image" accept="product/jpeg, product/png, product/jpg, product/gif">
                        </div>
                        <div class="mb-3">
                            <label for="selling" class="form-label">Product selling</label>
                            <input type="text" class="form-control" id="selling"name="selling"placeholder="Enter selling">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Product discount</label>
                            <input type="text" class="form-control" id="discount"name="discount"placeholder="Enter discount" >
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Product rating</label>
                            <input type="text" class="form-control" id="rating"name="rating"placeholder="Enter rating">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Product description</label>
                            <input type="text" class="form-control" id="description"name="description"placeholder="Enter description" required >
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" value="submit"  class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
<!-- Toastify CSS -->

<!-- Toastify JS -->
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- addproduct --}}
<script>
    $(document).ready(function() {
        $('#Addproduccccccct').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
    
            var url = "{{ url('Addproduct') }}";
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(result) {
                    if (result.status_code === 1) {
                        $('#exampleModal').modal('hide');
                        $('#Addproduccccccct').trigger("reset");
                        // $('#').DataTable().ajax.reload(null, false);     
                       
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success",
                        }).showToast();
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);  // 3000 milliseconds = 3 seconds

                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-warning",
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger",
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                }
            });
        });
    });
</script>


{{-- edit  --}} 
<script>
    function edit(id)
    {
        $.ajax({
            type:'post',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('Editproduct')}}",
            data:{id:id},
            dataType:'json',
            success:function(result){

                var record = result.data;
                $('#idfield').val(record.id)
                $('#updatename').val(record.name)
                $('#category').val(record.category)
            },
        });
    }

</script>

{{-- update --}}
<script>
    $(document).ready(function() {
        $('#productUpdate').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
    
            var url = "{{ url('ProductUpdate') }}";
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(result) {
                    if (result.status_code === 1) {
                        $('#updateModal').modal('hide');
                        $('#productUpdate').trigger("reset");
                        // $('#').DataTable().ajax.reload(null, false);     
                       
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success",
                        }).showToast();
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);  // 3000 milliseconds = 3 seconds

                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-warning",
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger",
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                }
            });
        });
    });
</script>


{{-- Active --}}
<script>
    function active(id)
    {
        $.ajax({
            type:'post',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('Active')}}",
            data:{id:id},
            dataType:'json',
            success: function(result) {
                    if (result.status_code === 1) {
                        
                        // $('#producttable').DataTable().ajax.reload(null, false);     
                       
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success",
                        }).showToast();
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);  // 3000 milliseconds = 3 seconds

                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-warning",
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger",
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                }
        });
    }

</script>

@endsection
