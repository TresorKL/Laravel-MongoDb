<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    protected $collection = 'posts_collection';
    protected $primaryKey = 'id';
    // MongoDB will also create _id, but the 'id' property will be used for primary key actions like find().
    //Post::create(['id' => 1, 'title' => 'The Fault in Our Stars']);
    protected $connection = 'mongodb';
}
