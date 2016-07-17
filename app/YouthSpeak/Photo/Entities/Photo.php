<?php

namespace App\YouthSpeak\Photo\Entities;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'title', 'path'];

    protected $primaryKey = 'id';
    

}
