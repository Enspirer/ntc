<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;


/**
 * Class NewsController.
 */
class NewsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news_latest = News::where('status','=','Enabled')->latest('id')->first();
        // dd($news_latest);
        if($news_latest == null){

            return view('frontend.news',[
                'news_latest' => $news_latest
            ]);

        }else{
            $news = News::where('id','!=',$news_latest->id)->orderBy('order','DESC')->where('status','=','Enabled')->paginate(6);

            return view('frontend.news',[
                'news_latest' => $news_latest,
                'news' => $news
            ]);
        }
        // $news = News::where('id','!=',$news_latest->id)->orderBy('order','DESC')->paginate(6);
        // dd($news_latest);

        
    }
}
