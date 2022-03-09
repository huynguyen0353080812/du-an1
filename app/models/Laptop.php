<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Laptop extends Model{
    protected $table = 'laptops';

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
?>