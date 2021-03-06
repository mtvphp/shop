<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'parent_id'];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
