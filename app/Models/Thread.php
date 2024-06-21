<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'channel', 'replies_count', 'views', 'avatar', 'author_name'];
}
