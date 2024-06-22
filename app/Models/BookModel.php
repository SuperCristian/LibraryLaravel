<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookID',
        'categoryID',
        'bookTitle',
        'edition',
        'ISBN',
        'datePublished',
        'bookStatus',
        'bookPrice',
    ];

    protected $table = 'book';
    public $timestamps = false;
    protected $primaryKey = "bookID";
    protected $foreignKey = "categoryID";

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'categoryID', 'categoryID');
    }

}
