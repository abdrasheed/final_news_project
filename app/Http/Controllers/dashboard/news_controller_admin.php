<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use App\categories;

class news_controller_admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $newses = news::paginate(10);
        $categories = categories::all();
        return view("dashboard.posts.index",compact("newses","categories"));
    }


    public function create() {
        $categories = categories::all();
        return view("dashboard.posts.create",compact("categories"));
    }


    public function store(Request $request)
    {
        //dd($request->body);
        $request->validate([
            'title'=>'required|max:50',
            'body'=>'required',
            'category_id'=>'required|integer',
            'image_news'=>'required|mimes:jpeg,png,jpg'
        ]);

        $news_image = $request->file("image_news");
        $file_name = time().".".$news_image->extension();
        $news_image->move("img",$file_name);

        $news = new news();
        $news->title = $request->title;
        $news->category_id = $request->category_id;
        $news->content = $request->body;
        $news->featured = random_int(0,1);
        $news->image = $file_name;
        $news->popular = random_int(0,1);
        $news->most_read = random_int(0,1);
        $news->most_recent = random_int(0,1);
        $news->latest = random_int(0,1);
        $news->views = random_int(100,1000);
        $news->save();

        return redirect()->route("dashboard.news.index")->with("success","news created successfully");
    }

    public function show(news $news) {

    }


    public function edit(news $news) {
        $categories = categories::all();
        return view("dashboard.posts.edit",compact('news','categories'));
    }

    public function update(Request $request, news $news) {
        $news->title = $request->title;
        $news->content = $request->body;
        $news->category_id = $request->category_id;
        $news->save();

        return redirect()->route("dashboard.news.index");
        //dd($news->toArray());

    }

        public function destroy(news $news)
    {
        $news->delete();
        return redirect()->route("dashboard.news.index");
    }
}
