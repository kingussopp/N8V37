<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table NAme
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}
