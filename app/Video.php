<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable  = ['title', 'url', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeGetVideosByUserId($query, $id)
    {
        return $query 
        ->where('categories.user_id', '=', $id)
        ->join('categories', 'videos.category_id', '=', 'categories.id');
    }

    public function scopeAllTrashedVideos($query, $id)
    {
        return $query
        ->where('categories.user_id', '=', $id)
        ->join('categories', 'videos.category_id', '=', 'categories.id')
        ->onlyTrashed();
    }

    public function scopeGetVideoById($query, $id)
    {
        return $query->where('id', '=', $id);
    }

    public function scopeSetVideoStatus($query, $id)
    {
        return $query->find($id);
    }
}
