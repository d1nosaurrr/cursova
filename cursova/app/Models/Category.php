<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['id', 'title'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return DB::table('categories')
            ->select('id', 'title')
            ->get();
    }

    public function subcategories()
    {
        return DB::table('subcategories')
            ->select('id', 'parent', 'title')
            ->get();
    }
}
