<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Inquire;
use DB;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryAttachement;
use App\Models\Products;

/**
 * Class ProductController.
 */
class ProductController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function riceMilling($id)
    {
        $categories = Category::where('status','=','Enabled')->get();

        $products = Products::where('id',$id)->first();

        return view('frontend.rice_milling',[
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function inquire(Request $request)
    {        
        // dd($request);     
   
        $add = new Inquire;

        $add->first_name=$request->first_name;
        $add->last_name=$request->last_name;
        $add->user_id=auth()->user()->id;
        $add->product_name=$request->product_name;
        $add->product_id=$request->product_id;
        $add->contact_number=$request->contact_number;
        $add->email=$request->email;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();
       
        session()->flash('message','Thanks!');

        return back();    
    }

}
