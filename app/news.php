<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\dashboard\category_controller;

class news extends Model {
    protected $fillable = ["title","content","category_id","image"];
    public function category(){
        return $this->belongsTo('App\categories');
    }
}
