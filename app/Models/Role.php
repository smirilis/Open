<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'level'
    ];

}