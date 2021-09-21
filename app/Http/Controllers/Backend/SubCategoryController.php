<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::get(); 

        return view('backend.sub_category.index');
    }

    public function store(Request $request)
    {    
        // dd($request);
        $add = new SubCategory;

        $add->name=$request->name;
        $add->description=$request->description;
   
        $add->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = SubCategory::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){                        
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = SubCategory::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }


    public function update(Request $request)
    {    
        // dd($request);
        $update = new SubCategory;

        $update->name=$request->name;
        $update->description=$request->description;
   
        SubCategory::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.sub_category.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function destroy($id)
    {        

        // $projects = SubCategory::where('category',$id)->update(array('category' => null));

        $data = SubCategory::findOrFail($id);
        $data->delete();   
    }


}
