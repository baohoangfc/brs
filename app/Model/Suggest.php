<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = 'suggests';

    protected $fillable = [
        'id',
        'content',
        'author',
        'book_title',
        'user_id',
    ];

    public function user()
    {

        return $this->belongTo(App::User);
    }
}
