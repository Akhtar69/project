<?php

namespace App\Models;
use App\Http\Controllers\BookController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AuthorController;


class Book extends Model
{
    use HasFactory;
    public function Author()
    {
        return $this->belongsTo(Author::class,'author_id','id');
    }
    public function Publisher()
    {
        return $this->belongsTo(Publisher::class,'publisher_id','id');
    }
}
