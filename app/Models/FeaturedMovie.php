<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedMovie extends Model
{
    use HasFactory;

    protected $fillable = ['title','producer','img', 'genre', 'description'];
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
