<?php
namespace App\Controller;

use App\Models\Order as Order;
use Illuminate\Database\Capsule\Manager as Capsule;

class PagesController
{
    public function index()
    {
        return view('index');

    }

    public function about()
    {
        return view('about');
    }

    public function order()
    {
//        This is for creating a table
//        Capsule::schema()->create('orders', function($table){
//            $table->increments('id');
//            $table->string('title', 100);
//        });
        $firstOrder = Order::all();
        die($firstOrder);
    }
}