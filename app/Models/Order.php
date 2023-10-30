<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','movie_id','ticket_id','quantity','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
