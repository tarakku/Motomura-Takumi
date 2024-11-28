<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
    use HasFactory;

    public $timestamps = false; // タイムスタンプを無効化
    protected $fillable = ['name', 'title', 'body', 'date', 'pass']; 
}
