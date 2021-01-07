<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    const CREATED_AT = 'post_time';
    const UPDATED_AT = 'edited_time';

    protected $hidden = ['image'];
    protected $fillable = ['user_id', 'title', 'content', 'image', 'editor'];
}
