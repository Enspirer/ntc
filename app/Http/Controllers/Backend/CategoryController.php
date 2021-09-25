<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryAttachement;


class CategoryController extends Controller
{
    
    public function index()
    {
        return view('backend.category.index');
    }

    public function getdetails(Request $request)
    {
       
            $data = Category::get();
            return DataTables::of($data)
                ->editColumn('status', function($data){
                    if($data->status == 'Enabled'){
                        $status = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $status = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $status;
                })
                ->addColumn('action', function($data){
                    $button = '<a href="'.route('admin.category.sub_category',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-list"></i> Sub Category </a>';
                    $button1 = '<a href="'.route('admin.category.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button2 = '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button.$button1.$button2;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  

        $data = Category::where('name',$request->name)->first(); 
        // dd($data);
        if( $data == null ){

            if($request->image == null){
                return back()->withErrors('Please Select an Image');
            }else{
    
                if($request->icon == null){
                    return back()->withErrors('Please Select an Icon');
                }else{            

                    $add = new Category;

                    $add->image = $request->image;
                    $add->icon = $request->icon;
                    $add->user_id = auth()->user()->id;
                    $add->name = $request->name;        
                    $add->description = $request->description;
                    $add->order = $request->order;
                    $add->status = $request->status;

                    $add->save();

                    return back()->withFlashSuccess('Added Successfully'); 
                }
            }

        }else{
            return back()->withErrors('You Already Added This Category');
        }              

    }

    public function edit($id)
    {
        $categories = Category::where('id',$id)->first(); 

        return view('backend.category.edit',[
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);  
        if($request->image == null){
            return back()->withErrors('Please Select an Image');
        }else{

            if($request->icon == null){
                return back()->withErrors('Please Select an Icon');
            }else{   

        
                $update = new Category;

                $update->image = $request->image;
                $update->icon = $request->icon;
                $update->user_id = auth()->user()->id;
                $update->name = $request->name;        
                $update->description = $request->description;
                $update->order = $request->order;
                $update->status = $request->status;

                Category::whereId($request->hidden_id)->update($update->toArray());

                return redirect()->route('admin.category.index')->withFlashSuccess('Updated Successfully'); 
            }
        }                  

    }

    public function destroy($id)
    {
        SubCategoryAttachement::where('category_id', $id)->delete();
        Category::where('id', $id)->delete(); 
    }

    // ****************************** Sub Category *************************************************

    public function sub_catagory($id)
    {
        $category = Category::where('id',$id)->first();  
        $sub_categories = SubCategory::get(); 

        return view('backend.category.sub_category_index',[
            'category' => $category,
            'sub_categories' => $sub_categories
        ]);
    }

    public function subcatgetdetails(Request $request, $id)
    {
        if($request->ajax())
        {
            $data = SubCategoryAttachement::where('category_id',$id)->get();

            return DataTables::of($data)
                    ->addColumn('name', function($data){
                        if(SubCategory::where('id',$data->sub_category_id)->first() == null){
                            $subcategory_data = '<span class="badge badge-danger">Sub Category Deleted</span>';
                            return $subcategory_data;
                        }else{
                            $subcategory_data = SubCategory::where('id',$data->sub_category_id)->first();
                            return $subcategory_data->name;
                        }
                    })
                    ->addColumn('action', function($data){                       
                        $button = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action','name'])
                    ->make(true);
        }
        return back();
    }


    public function sub_catagory_store(Request $request)
    {        
        // dd($request);         
        $data = SubCategoryAttachement::where('sub_category_id',$request->selected_sub_category)->where('category_id',$request->hidden_id)->first(); 
        // dd($data);
        if( $data==null ){

            $add = new SubCategoryAttachement;

            $add->category_id=$request->hidden_id;
            $add->sub_category_id=$request->selected_sub_category;        
    
            $add->save();
            return back()->withFlashSuccess('Added'); 
        }else{
            return back()->withErrors('You Already Added This Sub Category');
        }       
       
    }

    public function sub_catagory_destroy($id)
    {
        $data = SubCategoryAttachement::findOrFail($id);
        $data->delete();
       
    }

    
}
