<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\categories;
use Illuminate\Support\Facades\DB;
use http\Client\Curl\User;

class frontsite_controller extends Controller {

    public function show_home(){
        $count_all_news = DB::table('news')->count();
        $newses = DB::table('news')->limit(10)->orderBy("id","desc")->get();
        $read_more = DB::table('news')->limit(15)->whereBetween("id" ,[$count_all_news-25, $count_all_news-15])->get();
        $home_news = DB::table('news')->limit(9)->whereBetween("id" ,[$count_all_news-35, $count_all_news-25])->get();

        $featured = DB::table('news')->limit(3)->where('featured' , 1)->orderBy("id","desc")->get();
        $popular = DB::table('news')->limit(3)->where('popular' , 1)->orderBy("id","desc")->get();
        $most_read = DB::table('news')->limit(3)->where('most_read' , 1)->orderBy("id","desc")->get();
        $most_recent = DB::table('news')->limit(3)->where('most_recent' , 1)->orderBy("id","desc")->get();
        $latest = DB::table('news')->limit(3)->where('latest' , 1)->orderBy("id","desc")->get();
        $views = DB::table('news')->limit(3)->whereBetween("views",[400,500])->orderBy("id","desc")->get();



        $sport = DB::table('news')->limit(3)->where('category_id' , 1)->orderBy("id","desc")->get();
        $internet = DB::table('news')->limit(3)->where('category_id' , 2)->orderBy("id","desc")->get();
        $business= DB::table('news')->limit(3)->where('category_id' , 3)->orderBy("id","desc")->get();
        $tech = DB::table('news')->limit(3)->where('category_id' , 4)->orderBy("id","desc")->get();
        $categories = categories::all();

        return view("frontsite.home",compact(
            "newses"
            ,"categories"
            ,"read_more"
            ,"home_news"
            ,"featured"
            ,"popular"
            ,"most_read"
            ,"most_recent"
            ,"views"
            ,"sport"
            ,"internet"
            ,"business"
            ,"tech"
            ,"latest"));

    }

    public function show_contact(){
        return view('frontsite.contact');
    }

    public function show_single_news($id){
        $id_news = $id;
        $news = news::find($id_news);

        $most_read = DB::table('news')->limit(4)->where('most_read' , 1)->orderBy("id","desc")->get();
        $in_this_category = DB::table('news')->limit(5)->where("category_id",$news->category_id)->get();
        $latest = DB::table('news')->limit(5)->where('latest' , 1)->orderBy("id","desc")->get();
        $featured = DB::table('news')->limit(5)->where('featured' , 1)->orderBy("id","desc")->get();
        $popular = DB::table('news')->limit(5)->where('popular' , 1)->orderBy("id","desc")->get();
        return view('frontsite.single_news',compact("news",
            "most_read",
            "in_this_category",
            "latest",
            "featured",
            "popular"
        ));
    }
}
