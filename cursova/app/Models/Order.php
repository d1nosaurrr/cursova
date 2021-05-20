<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getOrder(){
        return DB::table('orders')
            ->select('*')
            ->get();
    }
}
