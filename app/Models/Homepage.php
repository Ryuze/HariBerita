<?php
namespace app;

use illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $table = 'contents';
    protected $fillable = ['title','content','image'];
}
