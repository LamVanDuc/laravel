<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'category_name',
    ];

    public function product(){
        return $this->hasMany(product::class,'id_category','id');
    }
}
