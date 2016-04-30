<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable  = ['title', 'url', 'description', 'category_id'];

    public function video()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeVideosByUserId($query, $id)
    {
        return $query 
        ->where('categories.user_id', '=', $id)
        ->join('categories.id', '=', 'videos.category_id');
    }

    public function scopeAllTrashedVideos($query, $id)
    {
        return $query
        ->where('categories.user_id', '=', $id)
        ->join('categories.id', '=', 'videos.category_id')
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
