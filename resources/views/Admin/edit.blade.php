@extends('Admin.leyout.Adminmain')

@section('Adminmain')
<div class="page-body">
    <div class="container-fluid">
<div class="container mt-5">
    <h2 class="text-center pt-5">Edit Products</h2>
 

    @foreach($products as $product)
    <form action="{{ route('Admin.Update') }}" method="POST" enctype="multipart/form-data" style="margin: 0 200px" class="mt-4 border p-4 rounded">
        @csrf
        {{-- @method('PUT') <!-- For PUT request --> --}}

        <input type="hidden" name="id" value="{{ $product->id }}">

        <!-- Product Name -->
        <div class="mb-3">
            <label for="name_{{ $product->id }}" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name_{{ $product->id }}" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <!-- Category -->
        <div class="mb-3">
            <label for="category_{{ $product->id }}" class="form-label">Category</label>
            <select class="form-select" id="category_{{ $product->id }}" name="category" required>
                <option value="Fruits" {{ $product->category == 'Fruits' ? 'selected' : '' }}>Fruits</option>
                <option value="Vegetables" {{ $product->category == 'Vegetables' ? 'selected' : '' }}>Vegetables</option>
            </select>
        </div>

        <!-- Product Image -->
        <div class="mb-3">
            <label for="image_{{ $product->id }}" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="image_{{ $product->id }}" value="{{url($product->image)}}" name="image">
            <small class="text-muted">Leave blank if you don't want to update the image.</small>
            
        </div>
        <div class="mb-3">
            <label for="selling{{ $product->id }}" class="form-label">Product selling</label>
            <input type="text" class="form-control" id="selling_{{ $product->id }}" name="selling" value="{{ old('selling', $product->selling) }}" required>
        </div>
        <div class="mb-3">
            <label for="discount{{ $product->id }}" class="form-label">Product discount</label>
            <input type="text" class="form-control" id="discount_{{ $product->id }}" name="discount" value="{{ old('discount', $product->discount) }}" required>
        </div>
        <div class="mb-3">
            <label for="rating{{ $product->id }}" class="form-label">Product rating</label>
            <input type="text" class="form-control" id="rating_{{ $product->id }}" name="rating" value="{{ old('discount', $product->rating) }}" required>
        </div>
        <div class="mb-3">
            <label for="description{{ $product->id }}" class="form-label">Product description</label>
            <input type="text" class="form-control" id="description_{{ $product->id }}" name="description" value="{{ old('description', $product->rating) }}" required>
        </div>
        

        <!-- Status -->
        <div class="mb-3">
            <label for="status_{{ $product->id }}" class="form-label">Status</label>
            <select class="form-select" id="status_{{ $product->id }}" name="status" required>
                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
    @endforeach
</div>
</div>
</div>
@endsection

