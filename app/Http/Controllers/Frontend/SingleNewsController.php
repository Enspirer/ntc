<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;


/**
 * Class SingleNewsController.
 */
class SingleNewsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index($id)
    {
        $single_news = News::where('id',$id)->first();

        $latest_news = News::orderBy('order','DESC')->where('id','!=',$single_news->id)->where('status','=','Enabled')->take(5)->get();
        // dd($latest_news);

        return view('frontend.single_news',[
            'single_news' => $single_news,
            'latest_news' => $latest_news
        ]);
    }
}
