<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        // $categories = Category::get(); 

        return view('backend.category.index');
    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Category::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.category.sub_cat',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-success btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-list"></i> Sub Category </a>';
                        $button1 = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</button>';
                        $button2 = '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button.$button1.$button2;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  

        $data = Category::where('name',$request->name)->first(); 
        // dd($data);
        if( $data == null ){

            if($request->file('image'))
            {            
                $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
                $fullURLsPreviewFile = $request->image->move(public_path('files/category'), $preview_fileName);
                $image_url = $preview_fileName;
            }else{
                $image_url = null;
            } 

            if($request->file('icon'))
            {            
                $preview_fileName2= time().'_'.rand(1000,10000).'.'.$request->icon->getClientOriginalExtension();
                $fullURLsPreviewFile2 = $request->icon->move(public_path('files/category'), $preview_fileName2);
                $image_url2 = $preview_fileName2;
            }else{
                $image_url2 = null;
            } 

            $add = new Category;

            $add->image = $image_url;
            $add->icon = $image_url2;
            $add->user_id = auth()->user()->id;
            $add->name = $request->name;        
            $add->description = $request->description;
            $add->order = $request->order;
            $add->status = $request->status;

            $add->save();

            return back()->withFlashSuccess('Added Successfully'); 
        }else{
            return back()->withErrors('You Already Added This Category');
        }   
                      

    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete(); 
    }


    
}
