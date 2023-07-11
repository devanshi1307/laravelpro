<?php

namespace App\Models;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Stmt\Return_;

class post extends Model
{
    use HasFactory;
    protected $table ="posts";
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'yt_iframe',
        'meta_title',
        'meta_description',
    ];

        public function category()
        {
            return $this->belongsTo(Category::class,'category_id', 'id');       }








}

