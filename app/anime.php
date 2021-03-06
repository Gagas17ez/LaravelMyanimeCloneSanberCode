<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anime extends Model
{
    protected $table = 'id';
    protected $fillable = ['judul', 'sinposis', 'type' , 'aired_date', 'studio', 'producer' , 'status','episode_count' ,'video_link', 'rating', 'poster', 'genre_id', 'poster_wide'];

    public function tag(){
        return $this->belongsTo['App\tag'];
    }
    
    public function komentar(){
        return $this->hasMany('App\komentar');
    }
}
