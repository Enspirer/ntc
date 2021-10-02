<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\BestSelling;
use App\Models\Products;

class HomePageController extends Controller
{
   
    public function index()
    {
        return view('backend.best_selling.index');
    }

    public function create()
    {
        $products = Products::where('status','Enabled')->get();

        return view('backend.best_selling.create',[
            'products' => $products
        ]);
    }

    public function getdetails(Request $request)
    {
       
            $data = BestSelling::get();
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
                    $button = '<a href="'.route('admin.category.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);                   

        $add = new BestSelling;

        $add->prod_1 = $request->prod_1;   
        $add->prod_2 = $request->prod_2;   
        $add->prod_3 = $request->prod_3;   
        $add->prod_4 = $request->prod_4;   
        $add->prod_5 = $request->prod_5;   

        $add->save();

        return redirect()->route('admin.best_selling.edit',$add->id)->withFlashSuccess('Added Successfully');    
          
    }

    public function edit($id)
    {
        $best_selling = BestSelling::where('id',$id)->first(); 
        $products = Products::where('status','Enabled')->get();

        return view('backend.best_selling.edit',[
            'best_selling' => $best_selling,
            'products' => $products
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);  
        $update = new BestSelling;

        $update->prod_1 = $request->prod_1;   
        $update->prod_2 = $request->prod_2;   
        $update->prod_3 = $request->prod_3;   
        $update->prod_4 = $request->prod_4;   
        $update->prod_5 = $request->prod_5;  

        BestSelling::whereId($request->hidden_id)->update($update->toArray());

        return back()->withFlashSuccess('Updated Successfully');
    }

    public function destroy($id)
    {
        BestSelling::where('id', $id)->delete(); 
    }


}
