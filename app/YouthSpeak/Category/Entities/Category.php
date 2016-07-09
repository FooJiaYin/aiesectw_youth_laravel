<?php

namespace App\YouthSpeak\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'count'];

    protected $primaryKey = 'id';

}
