<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
    // Table Name
    protected $table = 'todos';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;


    // One to many relationship for the To Do items
    public function user() {
        return $this->belongsTo('App\User');
    }
}
