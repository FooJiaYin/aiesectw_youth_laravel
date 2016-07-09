<?php

namespace App\YouthSpeak\Press\Entities;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    //
    protected $table = 'presses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'photo_id', 'private', 'title', 'excerpt', 'publish_at', 'publish_time'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $dates = ['created_at', 'updated_at', 'publish_at', 'publish_time'];


}
