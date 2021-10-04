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
        // $news_latest = News::where('status','=','Enabled')->latest('id')->first();
    
        // if($news_latest == null){

        //     return view('frontend.news',[
        //         'news_latest' => $news_latest
        //     ]);

        // }else{
        //     $news = News::where('id','!=',$news_latest->id)->orderBy('order','DESC')->where('status','=','Enabled')->paginate(6);

        //     return view('frontend.news',[
        //         'news_latest' => $news_latest,
        //         'news' => $news
        //     ]);
        // }

        $featured_news = News::where('featured_news','1')->where('status','Enabled')->first();
        // dd(count(array($featured_news)));

        $news = News::where('status','Enabled')->where('featured_news','0')->orderBy('order','DESC')->paginate(6);
        // dd($news);

        return view('frontend.news',[
            'featured_news' => $featured_news,
            'news' => $news
        ]);
        
    }
}
