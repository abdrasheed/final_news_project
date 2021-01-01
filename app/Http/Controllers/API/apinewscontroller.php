<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apinewscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $news = DB::table("news")->select("id","title","views","image","content")->get();
        $count = DB::table("news")->count("id");
        return response([
            "status"=>"success",
            "count"=>$count,
            "data"=>$news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = news::create([
            "title"=>$request->title,
            "content"=>$request->body,
            "image"=>$request->image,
            "category_id"=>$request->category_id,
        ]);

        return response([
            "status"=>"news created successfully",
            "news"=>$news
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
}
