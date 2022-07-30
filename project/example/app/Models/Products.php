<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $fillable = [
        'product_name',
        'product_desc',
        'product_qty',
        'id_category'
    ];

    public function categories(){
        return $this->belongsTo(Categories::class,'id','id_category');
    }
}
