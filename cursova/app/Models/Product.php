<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;
    protected $fillable = [
        'title', 'price', 'category_id', 'description', 'image'];

    public function query_products()
    {
        return DB::table('product', 'p')
            ->select('p.id', 'p.title', 'p.price',
                'p.rate', 'p.description', 'p.count', 'p.image',
                'subcategories.title as sub_title')
            ->join('subcategories', 'p.category_id', '=', 'subcategories.id');

    }

    public function products()
    {
        return $this->query_products()
            ->get();
    }

    public function product_by_id($id)
    {
        return $this->query_products()
            ->where('p.id', $id)
            ->get();
    }

    public function product_by_title($title)
    {
        return $this->query_products()
            ->where('p.title', 'like', '%' . $title . '%')
            ->get();
    }

    public function product_by_category($id)
    {
        return $this->query_products()
            ->where('p.category_id', $id)
            ->get();
    }


    public function hit_products()
    {
        return $this->query_products()
            ->where('p.rate', '>=', 4)
            ->orderBy('p.rate' ,'desc')
            ->get();
    }
}
