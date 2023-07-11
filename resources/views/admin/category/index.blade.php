@extends('layouts.master')



@section('content')
<div class="container-fluid px-4">
<div class="card mt-4">
    <div class="card-header">
        <h4>View Category
             <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
        </h4>
    </div>
    <div class="card-body">
       @if(session('message'))
       <div class="alert alert-success">{{session('message')}}</div>
       @endif
       <table id="myDataTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <!-- <th>Status</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $items)
                <tr>
                    <td>{{$items->id}}</td>
                    <td>{{$items->name}}</td>
                    <td>
                        <img src="{{asset('uploads/category/'.$items->image)}}" width="50px" height="50px" alt="img">
                    </td>
                    <!-- <td>{{$items->status}}</td> -->
                    <td>
                        <a href="{{url('admin/edit-category/'.$items->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('admin/delete-category/'.$items->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
       </table>
    </div>
</div>
</div>








@endsection