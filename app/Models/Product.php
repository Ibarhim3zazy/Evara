<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'desc', 'price', 'image'];
    protected $guarded = ['id', 'created_at', 'updated-at'];



    // one to one
    public function category()
    {
        // return $this->belongsTo('App\Modles\Category');
        return $this->belongsTo(Category::class, 'category_id');
    }


    // many to many products + tags => product_tags (pivot table)
    
    // morph relations
    // procuts  id 1
    // users 
    //.....
    // imageable ( id 1 - producs


    


    
}
