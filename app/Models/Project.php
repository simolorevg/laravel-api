<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectDetail()
    {
        return $this->hasOne(Type::class);
    }
    protected $fillable = [
        'title',
        'post',
        'author',
        'slug '
    ];
    use HasFactory;
}
