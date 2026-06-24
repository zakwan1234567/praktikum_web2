<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title',
        'author',
        'writer',
        'relasee_data'

    ];

    public function category(){
        return $this -> belongsTo(Category);
    }

    public function borrow(){
        return $this -> hasMany(borrows::class);
    }
}
