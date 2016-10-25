<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment',
        'nome',
        'email',
    ];
    
    public function post()
    {
        return $this->belongsTo('App\Post'); //Retorna o Post do Comentário
    }
}