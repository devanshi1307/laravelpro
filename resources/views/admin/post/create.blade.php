@extends('layouts.master')



@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Post
                <a href="{{url('admin/posts')}}" class="btn btn-danger float-end">back</a>
            </h4>
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                <div>{{$errors}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ url('admin/add-post') }}" method="POST">
            @csrf
            <div class="mb-3"> 
                    <label for="">Category</label>
                  
                    <input name="category_id" type="text" class="form-control"/>
                   
                </div>
                <div class="mb-3">
                    <label for="">Add Post</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea type="description" id="mysummernote"   name="description" rows="4" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" class="form-control"/>
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit"  class="btn btn-primary float-end">Save Post</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection