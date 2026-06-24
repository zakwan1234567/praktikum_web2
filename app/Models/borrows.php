<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class borrows extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'date_start',
        'date_end',

    ];

    public function casts(){
        return [
            'data_start' => 'data',
            'data_end' => 'data'
        ];
    }

    public function user(){
        return $this -> belongsTo (User::class);
    }

    public function books(){
        return $this -> belongsTo (books::class);

    }


}
