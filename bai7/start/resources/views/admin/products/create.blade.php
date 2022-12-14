@extends('admin.layouts.main')

@section('content')
@if (Session::has('error'))
    <p class="text-danger">
        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('error') }}
    </p>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="text" class="form-control" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label  class="form-label">Category</label>
        <select class="form-select" name="category_id">
            @foreach( $categories as $category )
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
       
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection