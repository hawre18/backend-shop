<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baner extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Baner::class,'status');
    }


    public function childrenRecursive()
    {
         return $this->children()->with('childrenRecursive');
    }
}
