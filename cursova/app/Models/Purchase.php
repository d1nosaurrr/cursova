<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchase-list';
    public function index()
    {
        return DB::table('purchase-list')
            ->select('*')
            ->get();
    }
}
