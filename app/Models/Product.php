<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\BillDetail;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'id_type',
        'description',
        'unit_price',
        'promotion_price',
        'image',
        'unit',
        'new',
    ];

    public function product_type() {
        return $this->belongsTo(ProductType::class, 'id_type', 'id');
    }

    public function bill_detail() {
        return $this->hasMany(BillDetail::class, 'id_product', 'id');
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
