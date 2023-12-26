<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genshin extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Element',
        'Region',
        'Image',
        'CategoryId'
    ];

    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
