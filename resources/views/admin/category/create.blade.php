@extends('layouts.master')



@section('content')
<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4 class="">Add Category</h4>
    </div>
    <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
        <div>{{$errors}}</div>
        @endforeach
    </div>
    @endif



        <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Category Name</label>
                <input type="text" name="name" class="form-control">
            </div>
          
            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <h6>SEO Tags</h6>
            <div class="mb-3">
                <label >Meta Title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="mb-3">
                <label >Meta Description</label>
                <textarea name="meta_description" rows="3"class="form-control"></textarea>
            </div>
            <div class="row">
            
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary" >Save Category</button>
            </div>



        </form>
    </div>

</div>





</div>

@endsection