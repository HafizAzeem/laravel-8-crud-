@extends('category.layout')
@section('content')
<div class="row pt-5">
    <form action="{{ isset($category) ? route('category.update',$category->id) : route('category.store')}}"
        method="POST" class="forms-sample needs-validation" enctype="multipart/form-data">
        @csrf
        @if(isset($category))
         @method('PUT')
        @endif
        <h3> CRUD in laravel use the same form for create and edit - devcaptain.com</h3>
        <div class="form-group">
        <label for="nameExampleinput">Name</label>
        <input type="text" name="name" value="{{ isset($category->name ) ? $category->name:''}}" class="form-control" id="nameExampleinput" placeholder="Enter Category Name" required>
        </div>
        <div class="form-group">
            <label for="imageExampleinput">Image</label>
            <input type="file" name="image" class="form-control" id="imageExampleinput" >
        </div>
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>
</div>
@endsection
