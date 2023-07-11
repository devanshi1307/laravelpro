<?php

namespace App\Http\Controllers\Admin;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;
class CategoryController extends Controller
{


    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }




    public function create()
    {
        return view('admin.category.create');
    }




    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();
        $category = new Category;
        $category->name = $data['name'];
        $category->description = $data['description'];
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/', $filename);
            $category->image=$filename;
        }
        $category->meta_title = $data['description'];
        $category->meta_description = $data['meta_description'];
      
        $category->created_by = Auth::user()->id;
        $category->save();
        return redirect('admin/category')->with('message','category added successfully');
    }




    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }





    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $category = Category::find($category_id);
        $category->name = $data['name'];
        $category->description = $data['description'];
        if($request->hasfile('image')){
            $destination = 'uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination );
            }
        }
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/', $filename);
            $category->image=$filename;
        }
         $category->meta_title = $data['description'];
        $category->meta_description = $data['meta_description'];
        $category->created_by = Auth::user()->id;
        $category->update();
        return redirect('admin/category')->with('message','category update successfully');
    
    }




   public function destroy($category_id)
   {
    $category = Category::find($category_id);
    if($category)
    {
        $destination = 'uploads/category/'.$category->image;
        if(File::exists($destination)){
            File::delete($destination );}
        $category->delete();
        return redirect('admin/category')->with('message','Category deleted sucessfully');   
    }
    else
    {
        return redirect('admin/category')->with('message','No Category id found');  
    }
   }
}


