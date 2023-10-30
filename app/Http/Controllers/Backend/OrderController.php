<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id = 0){
        $orders = Order::where('status',1)->with(['user','ticket'=>function ($q){
            $q->with(['movie']);
        }])->get();
        return view('backend.src.orders', compact('orders'));
    }

}
