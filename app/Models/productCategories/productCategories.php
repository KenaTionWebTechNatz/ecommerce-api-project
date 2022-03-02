<?php

namespace App\Models\productCategories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productCategories extends Model
{
    use HasFactory;

    protected $fillable = ['product_category_name'];
}
