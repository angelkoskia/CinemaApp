<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price','quantity','date', 'description',"movie_id"];
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
