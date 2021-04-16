<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use SoftDeletes, Translatable;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'category_id', 'description', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product($id)
    {
        return DB::table('product')
            ->select('*')
            ->where('product.id', $id)
            ->get();
    }

    public function products()
    {
        return DB::table('product')
            ->select('*')
            ->get();
    }
}
