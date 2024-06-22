<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryID ',
        'categoryName',
        'categoryDescription',
        'categoryStatus',
    ];

    protected $table = "category";
    public $timestamps = false;
    protected $primaryKey = "categoryID";

    public function books()
    {
        return $this->hasMany(BookModel::class, 'categoryID', 'categoryID');
    }
}
