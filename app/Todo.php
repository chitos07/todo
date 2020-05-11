<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    /**
     * 
     * Determine Table Colum Name
     * @param string $fillable
     */

    protected $fillable = ['title','description','completed'];

    /**
     * Determine DataBase Table Name
     * 
     * @param string $table
     * 
     */
    protected $table = 'todo';

}
