<?php

namespace App\Models;
use App\Http\Controllers\BookingController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        "book_id",
        "customer_id",
        "entry_date" ,
        "from_date" ,
        "to_date" ,
        "rent" ,
        "no_of_days" ,
        "totalrent",
    ];
     use HasFactory;
    public function Book()
    {
        return $this->belongsTo(Book::class,'book_id','id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
