<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use App\Models\News;
use App\Models\BestSelling;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $best_selling = BestSelling::first();
            // dd($best_selling);

        if($best_selling != null){

            $category = Category::where('status','Enabled')->first();
            // dd($category);

            $categories = Category::where('status','Enabled')->get();
            // dd($categories);

            $news = News::where('status','=','Enabled')->orderBy('order','ASC')->take(8)->get(); 
            // dd($news);            

            $product1 = Products::where('id',$best_selling->prod_1)->first();
            $product2 = Products::where('id',$best_selling->prod_2)->first();
            $product3 = Products::where('id',$best_selling->prod_3)->first();
            $product4 = Products::where('id',$best_selling->prod_4)->first();
            $product5 = Products::where('id',$best_selling->prod_5)->first();            

            return view('frontend.index',[
                'category' => $category,
                'categories' => $categories,
                'news' => $news,
                'best_selling' => $best_selling,
                'product1' => $product1,
                'product2' => $product2,
                'product3' => $product3,
                'product4' => $product4,
                'product5' => $product5
            ]);

        }
        else{

            $category = Category::where('status','Enabled')->first();
            // dd($category);

            $categories = Category::where('status','Enabled')->get();
            // dd($categories);

            $news = News::where('status','=','Enabled')->orderBy('id','DESC')->latest()->take(8)->get(); 
            // dd($news);

            return view('frontend.index',[
                'category' => $category,
                'categories' => $categories,
                'news' => $news,
                'best_selling' => $best_selling
            ]);

        }


    }
}
